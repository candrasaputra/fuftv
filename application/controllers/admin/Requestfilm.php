<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Requestfilm extends MY_Controller {
 	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/requestfilm_m', 'rf');
        $this->load->library('timeago');
    }

    public function index(){

    	$this->data['reqfilm'] = $this->rf->get_reqfilm();

        $this->data['title'] = 'Request Film';
        $this->data['page'] = 'admin/requestfilm/request-film_v';
        $this->load->view('dashboard_v', $this->data);

    }

    public function delete($id){

    	$this->rf->delete_requestfilm($id);
		
		redirect('admin/requestfilm','refresh');
    }
}