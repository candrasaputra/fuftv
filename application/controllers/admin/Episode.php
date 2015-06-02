<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Episode extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/episode_m');
        $this->load->library('resize');
        date_default_timezone_set("Asia/Jakarta");

        if(!$this->account->validate_admin()){
            show_404();
        }
    }

    public function index()
    {
        $this->data['listepisode'] = $this->episode_m->listepisode();
        $this->data['listpublish'] = $this->episode_m->list_by_visibility('publish');
        $this->data['listdraff'] = $this->episode_m->list_by_visibility('draff');
        $this->data['listberjadwal'] = $this->episode_m->list_by_visibility('berjadwal');

        $this->data['title'] = 'Daftar Episode/Sub film';
        $this->data['page'] = 'admin/episode/listepisode_v';
        $this->load->view('dashboard_v', $this->data);
    }

    public function addepisode($id = null){
        $this->data['detail'] = $this->episode_m->get_detail_film($id);

        $this->data['title'] = 'Tambah Episode';
        $this->data['tag'] = 'Tambah episode pada film yang telah di pilih.';
        $this->data['page'] = 'admin/episode/addepisode_v';
        $this->data['idfilm'] =$id;
        $this->load->view('dashboard_v',$this->data);
    }


    public function prosesaddepisode() {
        $post = $this->input->post();
        //print_r($post);
        //exit();
        $data = array(
                'idfilm'        => $post['idfilm'],
                'jdleps'        => $post['jdleps'],
                'alias' 	    => strtolower(url_title($post['jdlfilm'].' '.$post['jdleps'].' '.'Subtitle Indonesia')),
                'deseps'        => $post['deseps'],
                'iduser'        => $this->session->userdata('c_id'),
                'visibility'    => $post['visibility'],
                'timeepisode'   => date("Y-m-d H:i:s"),
                );

        if ($post['visibility'] == "berjadwal" && !empty($post['timeepisode'])) {
            $data['timeepisode'] = $post['timeepisode'];
        }

        $namafolder="asset/img/epsimage/"; //folder tempat menyimpan file
        if (!empty($_FILES["epsimage"]["tmp_name"]))
        {
            $LastID = $this->episode_m->getLastID()->idepisode;
            $newID = ++$LastID;
            $namaExpl = explode('.', basename($_FILES['epsimage']['name']));
            $jmlArr = count($namaExpl);
            $namaFix = '';
            for ($i = 0; $i < $jmlArr-1; $i++) {
                $namaFix .= $namaExpl[$i];
            }

            $namafileOri = strtolower(url_title("fuftv".'-'.$post['jdlfilm'].'-'.$post['jdleps'].'-'.$data['iduser'].'-'.$newID.'-'.date('Ymd').'-'.time('Hms')).'.'.$namaExpl[$jmlArr-1]);
            // replace file name
            $_FILES['epsimage']['name'] = $namafileOri;
            $jenis_gambar=$_FILES['epsimage']['type'];
            if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/png" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
            {
                $gambar = $namafolder . basename($_FILES['epsimage']['name']);
                if (move_uploaded_file($_FILES['epsimage']['tmp_name'], $gambar)) {
                    //echo "Gambar yang di upload: ".basename($_FILES['epsimage']['name']);
                    $data['imgeps'] = basename($_FILES['epsimage']['name']);
                } else {
                   echo "Gambar gagal dikirim";
                }
           } else {
                echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
           }
        } else {
            $data['imgeps'] = "default.jpg";
        }

        $a = basename($_FILES['epsimage']['name']);
        //file yang akan di resize
        $file = "asset/img/epsimage/$a";

        //output resize (bisa juga di ubah ke format yang berbeda ex: jpg, png dll)
        $resizedFile = "asset/img/epsimage/$a";

        $this->resize->smart_resize_image(null , file_get_contents($file), 420 , 234 , false , $resizedFile , true , false ,35 );

        $save = $this->episode_m->saveps($data);

        $idterakhir = $this->episode_m->getLastID()->idepisode;

        if (!empty($_POST['codelinkstreaming'])) {
            $this->episode_m->insert_multi_streaming($idterakhir);
        }

        if (!empty($_POST['codelinkdownload'])) {
            $this->episode_m->insert_multi_download($idterakhir);
        }

        if ($save > 0) {
            redirect('admin/film/detailfilm/'.$_POST['idfilm']);
        } else {
            echo 'badala';
        }
    }

    public function delete(){
        $id = $_POST['idepisode'];
        $idfilm = $_POST['idfilm'];

        $file = $this->episode_m->get_episode_by_row($id)->row('imgeps');

        if ($file != "default.jpg") {
            unlink("asset/img/epsimage/$file");
        }

        $this->episode_m->delete_episode($id);

        redirect(base_url('admin/film/detailfilm/'.$idfilm));
    }

    public function delete_from_listepisode($id){
        $idfilm = $_POST['idfilm'];

        $file = $this->episode_m->get_episode_by_row($id)->row('imgeps');

        if ($file != "default.jpg") {
            unlink("asset/img/epsimage/$file");
        }

        $this->episode_m->delete_episode($id);

        redirect(base_url('admin/episode/'));
    }

    public function edit($idepisode, $idfilm){
        $this->data['detail'] = $this->episode_m->get_detail_film($idfilm);

        $this->data['editepisode'] = $this->episode_m->edit_episode($idepisode)->row();
        $this->data['linkStreaming'] = $this->episode_m->linkStreaming($idepisode, $idfilm);
        $this->data['linkDownload'] = $this->episode_m->linkDownload($idepisode, $idfilm);
        $this->data['title'] = 'Edit Episde';
        $this->data['idfilm'] = $idfilm;
        $this->data['page'] = 'admin/episode/editepisode_v';

        $this->load->view('dashboard_v', $this->data);
    }

    public function prosesedit(){
        $post = $this->input->post();
        
        $file = $this->episode_m->get_episode_by_row($post['idepisode'])->row('imgeps');
        
        if (!empty($_FILES["epsimage"]["tmp_name"])) {
            if ($file != "default.jpg") {
                unlink("asset/img/epsimage/$file");
            }
        }

        $data = array(
                'idfilm'        => $post['idfilm'],
                'jdleps'        => $post['jdleps'],
                'alias' 	    => strtolower(url_title($post['jdlfilm'].' '.$post['jdleps'].' '.'Subtitle Indonesia')),
                'deseps'        => $post['deseps'],
                'iduser'        => $this->session->userdata('c_id'),
                'visibility'    => $post['visibility'],
                'timeepisode'   => date("Y-m-d H:i:s"),
                );

        if ($post['visibility'] == "berjadwal" && !empty($post['timeepisode'])) {
            $data['timeepisode'] = $post['timeepisode'];
        }

        $namafolder="asset/img/epsimage/"; //folder tempat menyimpan file
        if (!empty($_FILES["epsimage"]["tmp_name"]))
        {
            $LastID = $this->episode_m->getLastID()->idepisode;
            $newID = ++$LastID;
            $namaExpl = explode('.', basename($_FILES['epsimage']['name']));
            $jmlArr = count($namaExpl);
            $namaFix = '';
            for ($i = 0; $i < $jmlArr-1; $i++) {
                $namaFix .= $namaExpl[$i];
            }

            $namafileOri = strtolower(url_title("fuftv".'-'.$post['jdlfilm'].'-'.$post['jdleps'].'-'.$data['iduser'].'-'.$newID.'-'.date('Ymd').'-'.time('Hms')).'.'.$namaExpl[$jmlArr-1]);
            // replace file name
            $_FILES['epsimage']['name'] = $namafileOri;
            $jenis_gambar=$_FILES['epsimage']['type'];
            if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/png" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
            {
                $gambar = $namafolder . basename($_FILES['epsimage']['name']);
                if (move_uploaded_file($_FILES['epsimage']['tmp_name'], $gambar)) {
                    //echo "Gambar yang di upload: ".basename($_FILES['epsimage']['name']);
                    $data['imgeps'] = basename($_FILES['epsimage']['name']);
                } else {
                   echo "Gambar gagal dikirim";
                }
           } else {
                echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
           }
        } else {
            $data['imgeps'] = $post['fotosaatini'];
        }

        $a = basename($_FILES['epsimage']['name']);
        //file yang akan di resize
        $file = "asset/img/epsimage/$a";

        //output resize (bisa juga di ubah ke format yang berbeda ex: jpg, png dll)
        $resizedFile = "asset/img/epsimage/$a";

        $this->resize->smart_resize_image(null , file_get_contents($file), 420 , 234 , false , $resizedFile , true , false ,35 );

        $idepisode = $post['idepisode'];
        $idfilm = $post['idfilm'];
        $save = $this->episode_m->update_episode($idepisode, $data);

        $this->episode_m->multi_del_linkdownload($idfilm, $idepisode);
        $this->episode_m->multi_del_linkstreaming($idfilm, $idepisode);

        if (!empty($_POST['codelinkstreaming'])) {
            $this->episode_m->insert_multi_streaming($idepisode);
        }

        if (!empty($_POST['codelinkdownload'])) {
            $this->episode_m->insert_multi_download($idepisode);
        }
        $alias = $this->input->post('aliaseps');
        $this->db->cache_delete('post', $alias);
        redirect('admin/episode/edit/'.$_POST['idepisode'].'/'.$_POST['idfilm']);
    }

    public function publish($id){
        $data['visibility'] = "publish";
        $data['timeepisode']= date("Y-m-d H:i:s");
        $idepisode=$id;

        $this->episode_m->update_episode($idepisode, $data);

        redirect('admin/episode','refresh');
    }

    public function draff($id){
        $data['visibility'] = "draff";
        $idepisode=$id;

        $this->episode_m->update_episode($idepisode, $data);

        redirect('admin/episode','refresh');
    }
}
