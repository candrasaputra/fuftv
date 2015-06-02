<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Detailfilm_m extends CI_Model {
	public function get_daftarfilm($detail){
		$this->db->where('idfilm',$detail);
		$sdf = $this->db->get('jdlfilm');
		return $sdf->row();
	}

	public function get_jdl($detail){
		$this->db->where('jdlfilm',$detail);
		$sdf = $this->db->get('jdlfilm');
		return $sdf->row();
	}
}