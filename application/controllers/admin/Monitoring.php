<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Monitoring extends MY_Controller {
	 function __construct()
    {
        parent::__construct();
        $this->load->model('admin/monitoring_m');
    }
 
    public function index(){
        date_default_timezone_set('Asia/Jakarta');
        
        $this->data['title'] = 'Daftar User Yang Sedang Login';
        $this->data['page'] = 'admin/monitoring/monitoring_v';

        $this->data['monitoring'] = $this->monitoring_m->listmonitoring();
        $this->load->view('dashboard_v', $this->data);
    }

    public function logoutpaksa($id){
        $result = $this->monitoring_m->logout_paksa($id);
        
        redirect('admin/monitoring','refresh');
    }

    public function emptysessions(){
        $this->monitoring_m->empty_sessions();
        
        redirect('admin/monitoring','refresh');
    }
}