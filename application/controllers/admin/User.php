<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller{
    function __construct()
	{
		parent::__construct();
		$this->load->model('admin/account');
		$this->load->model('admin/user_m');
		$this->load->library('resize');

        if(!$this->account->validate_admin()){
            show_404();
        }
    }
	
	public function index()
	{
		$this->data['usr'] = $this->user_m->get_user();
		$this->data['title'] = 'User';
		$this->data['tagline'] = 'Data Semua User';
		$this->data['page'] = 'admin/user/user_v';
		$this->load->view('dashboard_v', $this->data);
	}

	public function detail($id){
		$this->data['detail'] = $this->user_m->get_by_id_user($id)->row();
		$this->data['title'] = 'Detai User';
        $this->data['page'] = 'admin/user/detailuser_v';
        $this->load->view('dashboard_v', $this->data);
	}

	public function edit($id){
		$this->data['edit'] = $this->user_m->get_by_id_user($id)->row();
		$this->data['title'] = 'Edit User';
        $this->data['page'] = 'admin/user/edituser_v';
        $this->load->view('dashboard_v', $this->data);
	}

	public function prosesedit(){
        $id = $this->input->post('iduser');
        $data['longname'] = $this->input->post('longname');
        $data['email'] = $this->input->post('email');
        $data['handphone'] = $this->input->post('handphone');
        $data['fb'] = $this->input->post('facebook');
        $data['tw'] = $this->input->post('twitter');

        $file = $this->user_m->get_user_by_row($id)->row('imguser');
        
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
            $data['imguser'] = $this->input->post('fotousersaatini');
        }

        $a = basename($_FILES['userimage']['name']);
        //file yang akan di resize
        $file = "asset/img/userimage/$a";

        //output resize (bisa juga di ubah ke format yang berbeda ex: jpg, png dll)
        $resizedFile = "asset/img/userimage/$a";
        
        $this->resize->smart_resize_image(null , file_get_contents($file), 200 , 200 , false , $resizedFile , true , false ,35 );

        $this->user_m->updateuser($id, $data);
                
        redirect(base_url('admin/user'));
	}

	public function delete($id){
        $file = $this->user_m->get_user_by_row($id)->row('imguser');

        if ($file != "avatar.png") {
            unlink("asset/img/userimage/$file");
        }
        
        $this->user_m->delete_user($id);
        redirect('admin/user','refresh');
	}

    public function adduser(){
        $data['title'] = 'Tambah User';
        $data['tagline'] = 'Add User';
        $data['page'] = 'admin/user/adduser_v';
        $this->load->view('dashboard_v', $data);
    }

    public function prosesadd(){
        $data['username'] = $this->input->post('username');
        $data['longname'] = $this->input->post('longname');
        $data['email'] = $this->input->post('email');
        $data['handphone'] = $this->input->post('handphone');
        $data['fb'] = $this->input->post('facebook');
        $data['tw'] = $this->input->post('twitter');
        $data['idlevel'] = $this->input->post('idlevel');
        $data['gender'] = $this->input->post('gender');
        $data['pwd'] = md5($this->input->post('pwd'));

        $namafolder="asset/img/userimage/"; //folder tempat menyimpan file
        if (!empty($_FILES["userimage"]["tmp_name"]))
        {
            
            $namaExpl = explode('.', basename($_FILES['userimage']['name']));
            $jmlArr = count($namaExpl);
            $namaFix = '';
            for ($i = 0; $i < $jmlArr-1; $i++) {
                $namaFix .= $namaExpl[$i];
            }

            $namafileOri = $namaFix.'_'.date('Ymd').'.'.$namaExpl[$jmlArr-1];
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
            $data['imguser'] = "avatar.png";
        }

        $this->form_validation->set_rules('username', 'username', 'is_unique[user.username]');
        $this->form_validation->set_rules('pwd', 'Password', 'required|matches[pwd2]'); // check apakah password sama dengan password2
        $this->form_validation->set_rules('pwd2', 'Konfirmasi Password', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->data['page']  = 'admin/user/adduser_v';
            $this->data['title'] = 'Tambah User';
            $this->data['message'] = validation_errors();
            $this->data['error'] = true;

            $this->load->view("dashboard_v", $this->data); // menampilkan error yang dihasilkan

        }else{
            $a = basename($_FILES['userimage']['name']);
            //file yang akan di resize
            $file = "asset/img/userimage/$a";

            //output resize (bisa juga di ubah ke format yang berbeda ex: jpg, png dll)
            $resizedFile = "asset/img/userimage/$a";
        
            $this->resize->smart_resize_image(null , file_get_contents($file), 200 , 200 , false , $resizedFile , true , false ,35 );

            $this->user_m->insertuser($data);
            redirect(base_url('admin/user'));
        }
    }
}