<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tag_m extends CI_Model {

	public function get_tag(){

		$rs = $this->db->get('tag');

		return $rs->result();
	}
	function insert_tag($data){
		$this->db->insert('tag', $data);
	}

	public function delete_tag($id){
        $this->db->where('idtag', $id);
        $this->db->delete('tag');
    }
    public function get_tag_row($id){
		$this->db->where('idtag', $id);
		$rs = $this->db->get('tag');

		return $rs->row();
	}
	public function update_tag($id, $data){
		$this->db->where('idtag', $id);
		$this->db->update('tag', $data);
	}
	public function count_tag_film($idtag){
		$this->db->where('idtag', $idtag);
		$this->db->from('relasitag');
		$rs = $this->db->count_all_results();
		return $rs;
	}
	public function delete_relasi_tag($id){
		$this->db->where_in('idtag', $id);
		$this->db->delete('relasitag');
	}
}