<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Episode_m extends CI_Model {
	public function delete_episode($id){
        $this->db->where('idepisode', $id);
        $this->db->delete('episode');
    }

    public function edit_episode($idepisode){
    	$this->db->select('*');
		$this->db->from('episode');
		$this->db->where('idepisode', $idepisode);

		$query = $this->db->get();

		return $query;
    }

    public function get_detail_film($id) {
		$this->db->select('*');
		$this->db->from('jdlfilm');
		$this->db->where('idfilm', $id);
		$query = $this->db->get();

		return $query->row();
	}

	public function saveps($data) {

		$query = $this->db->insert('episode', $data);

		return $this->db->insert_id();
	}

	public function getDetail($id) {
		$this->db->select('*');
		$this->db->from('episode');
		$this->db->where('idepisode', $id);
		$query = $this->db->get();

		return $query->row();
	}

	public function getLastID() {
		$this->db->select('idepisode');
		$this->db->from('episode');
		$this->db->order_by('idepisode', 'desc');

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

	public function insert_multi_streaming($idterakhir){
		$data2 = array();

		$cls = $_POST['codelinkstreaming'];

        foreach ($this->input->post('jdllinkstreaming') as $key=>$value) {
            $data2[] = array(
            	'fx_episode_idfilm' => $_POST['idfilm'],
            	'fx_episode_idepisode' => $idterakhir,
                'jdllinkstreaming' => $value,
                'codelinkstreaming' => str_replace("\"","'",$cls[$key]),
            );
        }

       return $this->db->insert_batch('linkstreaming', $data2);
	}

	public function insert_multi_download($idterakhir){
		$data3 = array();

		$cld = $_POST['codelinkdownload'];
		$qld = $_POST['quality'];

        foreach ($this->input->post('jdllinkdownload') as $key=>$value) {
            $data3[] = array(
            	'fx_episode_idfilm' => $_POST['idfilm'],
            	'fx_episode_idepisode' => $idterakhir,
                'jdllinkdownload' => $value,
                'quality' => $qld[$key],
                'codelinkdownload' => $cld[$key],
            );
        }
       	$this->db->insert_batch('linkdownload', $data3);

        return $this->db->insert_id();
	}
	public function listepisode(){
		$this->db->order_by("idepisode", "desc");
		$this->db->join('jdlfilm', 'episode.idfilm = jdlfilm.idfilm');
		$sdf = $this->db->get('episode');
		return $sdf->result();
	}

	public function list_by_visibility($visibility){
		$this->db->order_by("idepisode", "desc");
		$this->db->join('jdlfilm', 'episode.idfilm = jdlfilm.idfilm');
		$this->db->where('visibility', $visibility);
		$sdf = $this->db->get('episode');
		return $sdf->result();
	}

	public function linkStreaming($idepisode, $idfilm) {
		$this->db->select('*');
		$this->db->from('linkstreaming');
		$this->db->where('fx_episode_idepisode', $idepisode);
		$this->db->where('fx_episode_idfilm', $idfilm);

		$query = $this->db->get();

		return $query->result();
	}

	public function linkDownload($idepisode, $idfilm) {
		$this->db->select('*');
		$this->db->from('linkdownload');
		$this->db->where('fx_episode_idepisode', $idepisode);
		$this->db->where('fx_episode_idfilm', $idfilm);

		$query = $this->db->get();

		return $query->result();
	}

	public function update_episode($idepisode, $data){
		$this->db->where('idepisode', $idepisode);
		$this->db->update('episode', $data);
	}

	public function multi_del_linkdownload($idfilm, $idepisode){
		$this->db->where_in('fx_episode_idfilm', $idfilm);
		$this->db->where_in('fx_episode_idepisode', $idepisode);
		$this->db->delete('linkdownload');
	}

	public function multi_del_linkstreaming($idfilm, $idepisode){
		$this->db->where_in('fx_episode_idfilm', $idfilm);
		$this->db->where_in('fx_episode_idepisode', $idepisode);
		$this->db->delete('linkstreaming');
	}

	public function get_episode_by_row($id){
		$this->db->where('idepisode', "$id");
		$sdf = $this->db->get('episode');
		return $sdf;
	}
}
