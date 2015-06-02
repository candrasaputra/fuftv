<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Postberjadwal_m extends CI_Model {
	public function list_episode_berjadwal(){
		$this->db->from('episode as e');
		$this->db->select('j.jdlfilm, e.timeepisode, e.jdleps, e.idepisode');
		$this->db->order_by("timeepisode", "ASC");
		$this->db->join('jdlfilm as j', 'e.idfilm = j.idfilm', 'inner');
		$this->db->where('visibility', "berjadwal");
		$sdf = $this->db->get();
		
		return $sdf->result();
	}

	public function update_episode($idepisode, $data){
		$this->db->where('idepisode', $idepisode);
		$this->db->update('episode', $data);
	}
}