<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller{
    function __construct()
	{
		parent::__construct();
    }
	
	public function index()
	{
		$this->data['title'] = 'Halaman Utama';
		$this->data['page'] = 'admin/main/main_v';
		$this->load->view('dashboard_v', $this->data);
	}
}