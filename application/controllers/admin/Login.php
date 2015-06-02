<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index(){
		$post = $this->input->post('submit');

		if($post){

			$this->load->model('admin/account');

			$this->account->set_user($this->input->post('usr'));
			$this->account->set_password($this->input->post('pwd'));

			$this->form_validation->set_rules('usr', 'Username', 'required|alpha_dash');
			$this->form_validation->set_rules('pwd', 'Password', 'required|alpha_dash');

			if ($this->form_validation->run() == FALSE){
				$data['error'] = validation_errors();
			}else{

				if($this->account->do_login()){
					header('location: '.base_url().'admin');
				}else{
					$data['error'] = 'User dan Password tidak sesuai, silahkan periksa kembali';
				}
			}	
		}else{

			$data['error']   = $this->session->flashdata('error');			
		}
		$this->load->view('admin/login2',$data);

		//$this->output->enable_profiler(true);

	}

	public function logout(){
		$this->load->model('admin/account');
		$this->account->do_logout();
		$data['sukses'] = 'Logout Sukses';
		//$this->load->view('admin/login',$data);
		header('location: '.base_url().'admin/login');
	}

}