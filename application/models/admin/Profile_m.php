<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profile_m extends CI_Model {
	
	public function get_user($id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('iduser', $id);

		return $this->db->get();
	}

	public function updateprofile($id, $data){
		$this->db->where('iduser', $id);
		$this->db->update('user', $data);
	}

	public function get_user_by_row($id){
		$this->db->where('iduser', "$id");
		$sdf = $this->db->get('user');
		return $sdf;
	}
}