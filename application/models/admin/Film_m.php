<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Film_m extends CI_Model {
	public function get_allfilm(){
		$this->db->order_by('idfilm', 'desc');
		$this->db->join('kategori', 'kategori.idkategori = jdlfilm.idkategori');
		$rs = $this->db->get('jdlfilm');

		return $rs->result();
	}

	public function delete_film($id){
		$this->db->where('idfilm', $id);
		$this->db->delete('jdlfilm');
	}

	public function delete_relasi_tag($id){
		$this->db->where_in('idfilm', $id);
		$this->db->delete('relasitag');
	}

	public function get_tittle($idfilm){
		$query = $this->db->query("select * from fx_jdlfilm where idfilm=$idfilm");
		if ($query->num_rows() > 0)
		{
			$row = $query->row();
			return $row->jdlfilm;
		}
	}

	public function admdetail($idfilm){
		$this->db->join('kategori', 'kategori.idkategori = jdlfilm.idkategori');
		$this->db->where("idfilm", $idfilm);
		$sdf = $this->db->get('jdlfilm');
		return $sdf->row();
	}

	public function get_admepisode_film($admdetail){
		$this->db->where('idfilm',$admdetail);
		$sdf = $this->db->get('episode');
		return $sdf->result();
	}

	public function geteditdetailfilm($idfilm){
		$this->db->join('kategori', 'kategori.idkategori = jdlfilm.idkategori');
		$this->db->where("idfilm", $idfilm);
		$sdf = $this->db->get('jdlfilm');
		return $sdf->row();
	}

	public function insertaddfilm($data) {
		$query = $this->db->insert('jdlfilm', $data);

		return $this->db->insert_id();
	}

	public function getDetail($id) {
		$this->db->select('*');
		$this->db->from('jdlfilm');
		$this->db->where('idfilm', $id);
		$query = $this->db->get();

		return $query->row();
	}

	public function getLastID() {
		$this->db->select('idfilm');
		$this->db->from('jdlfilm');
		$this->db->order_by('idfilm', 'desc');

		$query = $this->db->get();

		return $query->row();
	}

	public function get_kategori(){
		$this->db->select('*');
		$this->db->from('kategori');

		$query = $this->db->get();

		return $query->result();
	}

	public function get_tag(){
		$this->db->select('*');
		$this->db->from('tag');

		$query = $this->db->get();

		return $query->result();
	}

	public function get_film(){
		$this->db->select('MAX(idfilm)');

		$sdf = $this->db->get('jdlfilm');
		return $sdf->row();
	}

	public function select_by_idfilm($id){
		$this->db->select('*');
		$this->db->from('relasitag');
		$this->db->where('idfilm', $id);

		$query = $this->db->get();

		return $query->result();
	}

	public function insert_multi_tag(){
		$data2 = array();
        foreach ($this->input->post('idtag') as $key) {
            $data2[] = array(
                'idtag' => $key,
                'idfilm' => $this->db->insert_id(),
            );
        }
        return $this->db->insert_batch('relasitag', $data2);
	}

	public function updatefilm($idfilm, $data){
		$this->db->where('idfilm', $idfilm);
		$this->db->update('jdlfilm', $data);
	}

	public function insert_multi_tag_by_idfilm($idfilm){
		$data2 = array();
        foreach ($this->input->post('idtag') as $key) {
            $data2[] = array(
                'idtag' => $key,
                'idfilm' => $idfilm,
            );
        }
        return $this->db->insert_batch('relasitag', $data2);
	}

	public function get_daftarfilmby_row($id){
		$this->db->where('idfilm', "$id");
		$sdf = $this->db->get('jdlfilm');
		return $sdf;
	}

	public function get_episode_by_idfilm($id){
		$this->db->select('episode.imgeps, jdlfilm.idfilm');
		$this->db->where('jdlfilm.idfilm', $id);
		$this->db->join('jdlfilm', 'episode.idfilm = jdlfilm.idfilm');
		$sdf = $this->db->get('episode');
		return $sdf->result();
	}
}
