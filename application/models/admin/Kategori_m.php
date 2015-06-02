<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kategori_m extends CI_Model {

	public function get_kategori(){

		$rs = $this->db->get('kategori');

		return $rs->result();
	}
	public function get_kategori_row($id){
		$this->db->where('idkategori', $id);
		$rs = $this->db->get('kategori');

		return $rs->row();
	}
	function insert_kategori($data){
		$this->db->insert('kategori', $data);
	}

	public function update_kategori($id, $data){
		$this->db->where('idkategori', $id);
		$this->db->update('kategori', $data);
	}
	public function delete_kategori($id){
        $this->db->where('idkategori', $id);
        $this->db->delete('kategori');
    }

    public function count_kategori_film($idkategori){
		$this->db->where('idkategori', $idkategori);
		$this->db->from('jdlfilm');
		$rs = $this->db->count_all_results();
		return $rs;
	}
}