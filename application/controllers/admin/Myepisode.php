<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Myepisode extends MY_Controller{
    function __construct()
	{
		parent::__construct();
    }
	
	public function index()
	{
		$this->data['listmyepisode'] = $this->episode_m->listepisode();
        $this->data['listpublish'] = $this->episode_m->list_by_visibility('publish');
        $this->data['listdraff'] = $this->episode_m->list_by_visibility('draff');
        $this->data['listberjadwal'] = $this->episode_m->list_by_visibility('berjadwal');

        $this->data['title'] = 'My Episode';
		$this->data['page'] = 'admin/myepisode/myepisode_v';
		$this->load->view('dashboard_v', $this->data);
	}
}