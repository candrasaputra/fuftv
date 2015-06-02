<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/account');
		$this->load->model('admin/profile_m');
        $this->load->library('resize');
    }
 
    public function index(){
    	$id = $this->data['cookie']['c_id'];
		$this->data['profil'] = $this->profile_m->get_user($id)->row();
        $this->data['title'] = 'Profil';
        $this->data['tag'] = 'Change your basic account and language settings.';
        $this->data['page'] = 'admin/profile/profile_v';
        $this->load->view('dashboard_v', $this->data);

    }
    
    public function proseseditprofile(){
        $id = $this->input->post('iduser');
        $data['longname'] = $this->input->post('longname');
        $data['email'] = $this->input->post('email');
        $data['handphone'] = $this->input->post('handphone');
        $data['fb'] = $this->input->post('facebook');
        $data['tw'] = $this->input->post('twitter');

        $file = $this->profile_m->get_user_by_row($id)->row('imguser');
        echo "$file";
        if (!empty($_FILES["userimage"]["tmp_name"])) {
            if ($file != "avatar.png") {
                unlink("asset/img/userimage/$file");
            }
        }

        $namafolder="asset/img/userimage/"; //folder tempat menyimpan file
        if (!empty($_FILES["userimage"]["tmp_name"]))
        {
            $userID = $this->input->post('idusersaatini');
            $namaExpl = explode('.', basename($_FILES['userimage']['name']));
            $jmlArr = count($namaExpl);
            $namaFix = '';
            for ($i = 0; $i < $jmlArr-1; $i++) {
                $namaFix .= $namaExpl[$i];
            }

            $namafileOri = $namaFix.'_'.$data['iduser'].'_'.$userID.'_'.date('Ymd').'.'.$namaExpl[$jmlArr-1];
            // replace file name
            $_FILES['userimage']['name'] = $namafileOri;
            $jenis_gambar=$_FILES['userimage']['type'];
            if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/png" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
            {           
                $gambar = $namafolder . basename($_FILES['userimage']['name']);       
                if (move_uploaded_file($_FILES['userimage']['tmp_name'], $gambar)) {
                    $data['imguser'] = basename($_FILES['userimage']['name']);
                } else {
                   echo "Gambar gagal dikirim";
                }
           } else {
                echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
           }
        } else {
            $data['imguser'] = $this->input->post('fotousersaatini');;
        }

        $a = basename($_FILES['userimage']['name']);
        //file yang akan di resize
        $file = "asset/img/userimage/$a";

        //output resize (bisa juga di ubah ke format yang berbeda ex: jpg, png dll)
        $resizedFile = "asset/img/userimage/$a";
        
        $this->resize->smart_resize_image(null , file_get_contents($file), 200 , 200 , false , $resizedFile , true , false ,35 );

        $this->profile_m->updateprofile ($id, $data);
                
        redirect(base_url('admin/profile'));
    }

    public function proses_ubah_pass(){
        $data['pwd'] = md5($this->input->post('pass'));

        $id = $this->data['cookie']['c_id'];
        $this->profile_m->updateprofile($id, $data);
                
        redirect(base_url('admin/profile'));
    }
}