<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Postberjadwal extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model("postberjadwal_m");
    }

    public function index(){
    	$list = $this->postberjadwal_m->list_episode_berjadwal();
    	if (!empty($list)) {
    		foreach ($list as $key) {
    			echo "$key->idepisode"." $key->jdlfilm"." $key->jdleps"." $key->timeepisode"."<br/>";

    			if (($key->timeepisode)<(date("Y-m-d H:i:s"))) {

		    		$data['visibility'] = "publish";
			        $idepisode=$key->idepisode;

			        $this->postberjadwal_m->update_episode($idepisode, $data);
		    	}
    		}
    	}
    }
}
?>