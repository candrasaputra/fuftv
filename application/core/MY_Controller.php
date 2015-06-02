<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct(){
        parent:: __construct();

        $this->load->model('admin/account');

        //$this->output->enable_profiler(true);

        if(!$this->account->validate_cookie()){
            $this->session->set_flashdata('error', 'Silahkan login terlebih dahulu');
            header('location: '.base_url().'admin/login');
        }else{
            $this->data['cookie'] = $this->account->get_cookie();
        }
    }   
}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */