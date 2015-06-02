<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_m extends CI_Model {

	public function get_user(){
		$this->db->join('level', 'level.idlevel = user.idlevel');
		$rs = $this->db->get('user');
		
		return $rs->result();
	}

	public function delete_user($id){
		$this->db->where('iduser', $id);
		$this->db->delete('user');
	}

	public function get_by_id_user($id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('iduser', $id);

		return $this->db->get();
	}

	public function updateuser($id, $data){
		$this->db->where('iduser', $id);
		$this->db->update('user', $data);
	}

	public function insertuser($data){
		$this->db->insert('user', $data);
	}

	public function get_user_by_row($id){
		$this->db->where('iduser', "$id");
		$sdf = $this->db->get('user');
		return $sdf;
	}
}