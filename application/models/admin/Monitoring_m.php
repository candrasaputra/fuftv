<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Monitoring_m extends CI_Model {
	public function listmonitoring(){
		$this->db->select('*');
		$this->db->from('ci_sessions');
		$this->db->order_by('timestamp','asc');

		$query = $this->db->get();

		return $query->result();
	}

	public function logout_paksa($id){
		$this->db->where_in('id', $id);
		$this->db->delete('ci_sessions');
	}

	public function empty_sessions(){
		$this->db->empty_table('ci_sessions'); 
	}
}