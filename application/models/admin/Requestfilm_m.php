<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Requestfilm_m extends CI_Model {
	
	public function get_reqfilm(){ 
		$this->db->order_by("idreqfilm", "desc");
		$sdf = $this->db->get('reqfilm');
		return $sdf->result();
	}

	public function delete_requestfilm($id){
		$this->db->where('idreqfilm', $id);
		$this->db->delete('reqfilm');
	}
}