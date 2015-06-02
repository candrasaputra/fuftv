<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Film extends MY_Controller {
  function __construct()
  {
    parent::__construct();
    date_default_timezone_set("Asia/Jakarta");

    $this->load->model('admin/account');
    $this->load->model('admin/film_m');
    $this->load->library('timeago');
    $this->load->library('resize');
}

public function index(){
   $this->data['showlistfilm'] = $this->film_m->get_allfilm();
   $this->data['title'] = 'Daftar Film';
   $this->data['page'] = 'admin/film/listfilm_v';
   $this->load->view('dashboard_v', $this->data);
}

public function addfilm(){
    $this->data['title'] = 'Buat film series baru';
    $this->data['tag'] = 'Setting informasi dasar film mulai dari kategori, tag, jenis film dll.';
    $this->data['page'] = 'admin/film/addfilm_v';
    $this->data['kat'] = $this->film_m->get_kategori();
    $this->data['ambiltag'] = $this->film_m->get_tag();
    $this->load->view('dashboard_v', $this->data);
}

public function prosesaddfilm() {
    date_default_timezone_set("Asia/Jakarta");
    $post = $this->input->post();

    $data = array(
        'jdlfilm'       => $post['jdlpost'],
        'alias'	      => strtolower(url_title($post['jdlpost'])),
        'idkategori'    => $post['kategori'],
        'typefilm'      => $post['typefilm'],
        'statusfilm'    => $post['statusfilm'],
        'productionfilm'=> $post['productionfilm'],
        'airedfilm'     => $post['airedfilm'],
        'totalepsfilm'  => $post['totalepsfilm'],
        'durasifilm'    => $post['durasifilm'],
        'btsusiafilm'   => $post['ratingfilm'],
        'deskripsifilm' => $post['deskripsifilm'],
        'iduser'        => $this->session->userdata('c_id'),
        );

        $namafolder="asset/img/poster/"; //folder tempat menyimpan file
        if (!empty($_FILES["foto"]["tmp_name"]))
        {
            $LastID = $this->film_m->getLastID()->idfilm;
            $newID = ++$LastID;
            $namaExpl = explode('.', basename($_FILES['foto']['name']));
            $jmlArr = count($namaExpl);
            $namaFix = '';
            for ($i = 0; $i < $jmlArr-1; $i++) {
                $namaFix .= $namaExpl[$i];
            }

            $namafileOri = strtolower(url_title("fuftv".'-'.$post['jdlpost'].'-'.$data['iduser'].'-'.$newID.'-'.date('Ymd').'-'.time('Hms')).'.'.$namaExpl[$jmlArr-1]);
            // replace 
            $_FILES['foto']['name'] = $namafileOri;

            $jenis_gambar=$_FILES['foto']['type'];
            if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png" || $jenis_gambar=="image/png")
            {
                $gambar = $namafolder . basename($_FILES['foto']['name']);
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $gambar)) {
                    //echo "Gambar yang di upload: ".basename($_FILES['foto']['name']);
                    $data['posterfilm'] = basename($_FILES['foto']['name']);
                } else {
                 echo "Gambar gagal dikirim";
             }
         } else {
            echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
        }
    } else {
        $data['posterfilm'] = "default.jpg";
    }
    $a = $_FILES['foto']['name'];
    $file = "asset/img/poster/$a";
    $resizedFile = "asset/img/poster/$a";
    $this->resize->smart_resize_image(null , file_get_contents($file), 178 , 251 , false , $resizedFile , true , false ,65 );
    $save = $this->film_m->insertaddfilm($data);
    if (!empty($_POST['idtag'])) {
        $this->film_m->insert_multi_tag();
    }
    if ($save > 0) {
        redirect('admin/episode/addepisode/'.$save);
    } else {
        echo 'badala';
    }
}
public function detailfilm($idfilm){
    $data['title'] = $this->film_m->get_tittle($idfilm);
    $data['admdetaillist'] = $this->film_m->admdetail($idfilm);
    $data['listepisode'] = $this->film_m->get_admepisode_film($idfilm);
    $data['page'] = 'admin/film/detailfilm_v';
    $this->load->view('dashboard_v', $data);
}

public function editfilm($idfilm){
    $data['title'] = 'Edit Film';
    $data['tag'] = 'Ubah informasi dasar film yang telah dipilih.';
    $data['page'] = 'admin/film/editfilm_v';

    $data['admdetaillist'] = $this->film_m->geteditdetailfilm($idfilm);
    $data['kat'] = $this->film_m->get_kategori();
    $data['ambiltag'] = $this->film_m->get_tag();
    $data['relasitag'] = $this->film_m->select_by_idfilm($idfilm);


    $this->load->view('dashboard_v', $data);
}

public function proseseditfilm(){
    $idfilm = $this->input->post('idfilm');
    $data['idkategori'] = $this->input->post('kategori');
    $data['jdlfilm'] = $this->input->post('jdlpost');
    $data['typefilm'] = $this->input->post('typefilm');
    $data['statusfilm'] = $this->input->post('statusfilm');
    $data['productionfilm'] = $this->input->post('productionfilm');
    $data['airedfilm'] = $this->input->post('airedfilm');
    $data['totalepsfilm'] = $this->input->post('totalepsfilm');
    $data['durasifilm'] = $this->input->post('durasifilm');
    $data['btsusiafilm'] = $this->input->post('btsusiafilm');
    $data['deskripsifilm'] = $this->input->post('deskripsifilm');

    $file = $this->film_m->get_daftarfilmby_row($idfilm)->row('posterfilm');

    if (!empty($_FILES["foto"]["tmp_name"])) {
        if ($file != "default.jpg") {
            unlink("asset/img/poster/$file");
        }
    }

    $namafolder="asset/img/poster/"; //folder tempat menyimpan file
    if (!empty($_FILES["foto"]["tmp_name"]))
        {
            $LastID = $this->film_m->getLastID()->idfilm;
            $newID = ++$LastID;
            $namaExpl = explode('.', basename($_FILES['foto']['name']));
            $jmlArr = count($namaExpl);
            $namaFix = '';
            for ($i = 0; $i < $jmlArr-1; $i++) {
                $namaFix .= $namaExpl[$i];
            }

            $namafileOri = strtolower(url_title("fuftv".'-'.$data['jdlfilm'].'-'.$data['iduser'].'-'.$newID.'-'.date('Ymd').'-'.time('Hms')).'.'.$namaExpl[$jmlArr-1]);
            // replace file name
            $_FILES['foto']['name'] = $namafileOri;

            $jenis_gambar=$_FILES['foto']['type'];
            
            if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png" || $jenis_gambar=="image/png")
            {
                $gambar = $namafolder . basename($_FILES['foto']['name']);
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $gambar)) {
                    //echo "Gambar yang di upload: ".basename($_FILES['foto']['name']);
                    $data['posterfilm'] = basename($_FILES['foto']['name']);
                } else {
                 echo "Gambar gagal dikirim";
             }
         } else {
            echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
        }
    } else {
        $data['posterfilm'] = $this->input->post('fotosaatini');
    }

    $a = $_FILES['foto']['name'];

    $file = "asset/img/poster/$a";

    $resizedFile = "asset/img/poster/$a";

    $this->resize->smart_resize_image(null , file_get_contents($file), 178 , 251 , false , $resizedFile , true , false ,65 );

    $this->film_m->updatefilm($idfilm, $data);

    $this->film_m->delete_relasi_tag($idfilm);
    if (!empty($_POST['idtag'])) {
        $this->film_m->insert_multi_tag_by_idfilm($idfilm);
    }
    $alias = $this->input->post('aliasfilm');
    $this->db->cache_delete('film', "$alias");
    redirect(base_url("admin/film/editfilm/$idfilm"));
}

public function deletefilm($id){
    $episode = $this->film_m->get_episode_by_idfilm($id);
    foreach ($episode as $key) {
        if ($key->imgeps != "default.jpg") {
            unlink("asset/img/epsimage/$key->imgeps");
        }
    }

    $file = $this->film_m->get_daftarfilmby_row($id)->row('posterfilm');

    if ($file != "default.jpg") {
        unlink("asset/img/poster/$file");
    }

    $this->film_m->delete_relasi_tag($id);
    $this->film_m->delete_film($id);

    redirect('admin/film','refresh');
    }
}
