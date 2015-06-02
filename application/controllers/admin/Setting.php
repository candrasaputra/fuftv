<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends MY_Controller{
    function __construct()
	{
		parent::__construct();
    }
	
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
        
        $this->data['title'] = 'Setting';
        $this->data['page'] = 'admin/setting/setting_v';

        $this->load->view('dashboard_v', $this->data);
    }

    public function emptycache(){
        $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
        $this->cache->clean();
        $this->session->set_flashdata('message', 'Cache Berhasil Di Kosongkan');
        redirect('admin/setting');
    }
}