<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main_m extends CI_Model {
	public function fufmain(){
		$this->db->limit(8);
		$this->db->join('kategori', 'kategori.idkategori = jdlfilm.idkategori');
		$this->db->order_by("idfilm", "desc");
		$sdf = $this->db->get('jdlfilm');
		return $sdf->result();
	}
	public function get_tittle($detail){
		// $query = $this->db->query("select * from fx_jdlfilm where idfilm=$detail");
		$this->db->select('*');
		$this->db->from('fx_jdlfilm');
		$this->db->where('alias', $detail);
		$query = $this->db->get();
		
		return $query;
	}
	public function reqfilm($reqfilm){
		$this->db->insert('reqfilm', $reqfilm);
	}

	public function get_reqfilm(){
		$this->db->order_by("idreqfilm", "desc");
		$sdf = $this->db->get('reqfilm');
		return $sdf->result();
	}

	public function get_daftarfilm(){
		$this->db->join('kategori', 'kategori.idkategori = jdlfilm.idkategori');
		$this->db->order_by("jdlfilm", "asc");
		$sdf = $this->db->get('jdlfilm');
		return $sdf->result();
	}

	public function get_daftarfilmbykategori($idkategori){
		$this->db->join('kategori', 'kategori.idkategori = jdlfilm.idkategori');
		$this->db->where('jdlfilm.idkategori', "$idkategori");
		$this->db->order_by("jdlfilm", "asc");
		$sdf = $this->db->get('jdlfilm');
		return $sdf->result();
	}

	public function get_daftarfilmbykategori_row($idkategori){
		$this->db->join('kategori', 'kategori.idkategori = jdlfilm.idkategori');
		$this->db->where('jdlfilm.idkategori', "$idkategori");
		$this->db->order_by("jdlfilm", "asc");
		$sdf = $this->db->get('jdlfilm');
		return $sdf;
	}
	public function get_detailfilm($detail){
		$this->db->join('kategori', 'kategori.idkategori = jdlfilm.idkategori');
		// $this->db->where("idfilm", $detail);
		$this->db->where("alias", $detail);
		$sdf = $this->db->get('jdlfilm');
		return $sdf->row();
	}
	public function get_idfilmbyalias($detail){
		$this->db->select('idfilm');
		$this->db->where("alias", $detail);
		$sdf = $this->db->get('jdlfilm');
		return $sdf->row();
	}
	public function get_episode_film($detail){
		$this->db->where('visibility', "publish");
		$this->db->where('idfilm',$detail);
		$sdf = $this->db->get('episode');
		return $sdf->result();
	}
	public function get_row_episode($getposteps){
		$this->db->select('episode.*, jdlfilm.*, episode.alias as epsalias');
		$this->db->join('jdlfilm', 'episode.idfilm = jdlfilm.idfilm');
		$this->db->where("episode.alias", $getposteps);
		$sdf = $this->db->get('episode');

		return $sdf;
	}
	public function get_cek_episode($getposteps){
		$this->db->select('jdlfilm.idfilm, episode.epsview');
		$this->db->join('jdlfilm', 'episode.idfilm = jdlfilm.idfilm', 'inner');
		$this->db->where("episode.alias", $getposteps);
		$sdf = $this->db->get('episode');

		return $sdf;
	}
	public function get_cek_film($detail){
		$this->db->select('idfilm, filmview');
		$this->db->where("alias", $detail);
		$sdf = $this->db->get('jdlfilm');

		return $sdf;
	}
	public function updateHits($epsalias) {
    // get hits
		$this->db->select('epsview');
		$this->db->from('episode');
		$this->db->where('alias', $epsalias);
		$query = $this->db->get();
		$result = $query->row();
		$lastHits = (int)$result->epsview;


		$value['epsview'] = $lastHits + 1;

		$this->db->update('episode', $value, array('alias'=>$epsalias));
	}
	public function updateHitsFilm($idfilm) {
    // get hits
		$this->db->select('filmview');
		$this->db->from('jdlfilm');
		$this->db->where('idfilm', $idfilm);
		$query = $this->db->get();
		$result = $query->row();
		$lastHits = (int)$result->filmview;


		$value['filmview'] = $lastHits + 1;

		$this->db->update('jdlfilm', $value, array('idfilm'=>$idfilm));
	}
	public function get_linkstreaming($idfilm, $getideps){
		$this->db->order_by("idlinkstreaming", "desc");
		$this->db->where("fx_episode_idepisode", $getideps);
		$this->db->where("fx_episode_idfilm", $idfilm);
		$sdf = $this->db->get('linkstreaming');
		return $sdf->result();
	}
	public function get_linkdownload($idfilm, $getideps){
		$this->db->order_by("idlinkdownload", "desc");
		$this->db->where("fx_episode_idepisode", $getideps);
		$this->db->where("fx_episode_idfilm", $idfilm);
		$sdf = $this->db->get('linkdownload');
		return $sdf->result();
	}
	public function get_episode_lainnya($idfilm){
		$this->db->limit(6);
		$this->db->where("idfilm", $idfilm);
		$this->db->where("visibility", "publish");
		$sdf = $this->db->get('episode');
		return $sdf->result();
	}

	public function get_detail_film($idfilm){
		$this->db->join('kategori', 'kategori.idkategori = jdlfilm.idkategori');
		$this->db->where("idfilm", $idfilm);
		$sdf = $this->db->get('jdlfilm');
		return $sdf->row();
	}
	public function get_tag_film($idtag){
		$this->db->join('tag','tag.idtag = relasitag.idtag');
		$this->db->where('idfilm', $asda->$idtag);
		$sdf = $this->db->get('relasitag')->result_array();
		return $sdf->row();
	}
	public function get_jdl($detail){
		$this->db->where('jdlfilm',$detail);
		$sdf = $this->db->get('jdlfilm');
		return $sdf->row();
	}

	public function get_all_saran($limit, $start){
		$this->db->limit($limit, $start);
		$this->db->select('episode.*, jdlfilm.*, episode.alias as epsalias');
		$this->db->where("episode.visibility", "publish");
		$this->db->order_by("epsview", "desc");
		$this->db->join('jdlfilm', 'episode.idfilm = jdlfilm.idfilm');
		
		$query = $this->db->get('episode');
		if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	public function disarankan_m(){
		$this->db->select('episode.*, jdlfilm.*, episode.alias as epsalias');
		$this->db->where("episode.visibility", "publish");
		$this->db->limit(6);
		$this->db->order_by("epsview", "desc");
		$this->db->join('jdlfilm', 'episode.idfilm = jdlfilm.idfilm');
		$sdf = $this->db->get('episode');

		return $sdf->result();
	}
	public function show_eps_by_kat($idkategori){
		$this->db->select('episode.*, jdlfilm.*, episode.alias as epsalias');
		$this->db->where("episode.visibility", "publish");
		$this->db->limit(6);
		$this->db->where('idkategori', $idkategori);
		$this->db->order_by("epsview", "desc");
		$this->db->join('jdlfilm', 'episode.idfilm = jdlfilm.idfilm');
		$sdf = $this->db->get('episode');

		return $sdf->result();
	}
	public function latsupdate(){
		$this->db->select('episode.*, jdlfilm.*, episode.alias as epsalias');
		$this->db->where("episode.visibility", "publish");
		$this->db->limit(18);
		$this->db->order_by("timeepisode", "desc");
		$this->db->join('jdlfilm', 'episode.idfilm = jdlfilm.idfilm');
		$sdf = $this->db->get('episode');
		return $sdf->result();
	}
	public function getlatsupdate($limit, $start){
		$this->db->limit($limit, $start);
		$this->db->select('episode.*, jdlfilm.*, episode.alias as epsalias');
		$this->db->where("episode.visibility", "publish");
		$this->db->order_by("episode.timeepisode", "desc");
		$this->db->join('jdlfilm', 'episode.idfilm = jdlfilm.idfilm');
		$query = $this->db->get('episode');
		if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	public function serupa_m($idkat){
		$this->db->select('episode.*, jdlfilm.*, episode.alias as epsalias');
		$this->db->where("episode.visibility", "publish");
		$this->db->limit(6);
		$this->db->where("jdlfilm.idkategori", $idkat);
		$this->db->order_by("idepisode", "RANDOM");
		$this->db->join('jdlfilm', 'episode.idfilm = jdlfilm.idfilm');
		$sdf = $this->db->get('episode');
		return $sdf->result();
	}
	public function serupa_for_film_m($idkat){
		$this->db->limit(6);
		$this->db->where("jdlfilm.idkategori", $idkat);
		$this->db->order_by("idfilm", "RANDOM");
		$this->db->join('kategori', 'kategori.idkategori = jdlfilm.idkategori');
		$sdf = $this->db->get('jdlfilm');
		return $sdf->result();
	}
	public function get_idfilm($detail){
		$this->db->where('jdlfilm',$detail);
		$sdf = $this->db->get('jdlfilm');
		return $sdf->row();
	}
	public function get_kategori(){
		$sdf = $this->db->get('kategori');
		return $sdf->result();
	}
	public function get_listkat_by_alias($alias){
		$this->db->join('kategori', 'kategori.idkategori = jdlfilm.idkategori');
		$this->db->where('kategori.katalias', "$alias");
		$this->db->order_by("jdlfilm", "desc");
		$sdf = $this->db->get('jdlfilm');
		return $sdf;
	}
	public function get_listag_by_alias($alias){
		$this->db->join('relasitag', 'relasitag.idfilm = jdlfilm.idfilm');
		$this->db->join('tag', 'tag.idtag = relasitag.idtag');
		$this->db->join('kategori', 'kategori.idkategori = jdlfilm.idkategori');
		$this->db->where('tag.tagalias', "$alias");
		$sdf = $this->db->get('jdlfilm');
		return $sdf->result();
	}
	public function get_tagname_by_alias($alias){
		$this->db->where('tagalias', $alias);
		$query = $this->db->get('tag');

		return $query->row();
	}
	public function count_bykat_episode($idkategori){
		$this->db->select('episode.*, jdlfilm.*, episode.alias as epsalias');
		$this->db->where("episode.visibility", "publish");
		$this->db->order_by("idepisode", "desc");
		$this->db->join('jdlfilm', 'episode.idfilm = jdlfilm.idfilm');
		$this->db->where('jdlfilm.idkategori', "$idkategori");
		$this->db->where('idkategori', $idkategori);
		$this->db->from('episode');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function get_listkat_by_idkat($limit, $start, $idkategori){
		$this->db->limit($limit, $start);
		$this->db->select('episode.*, jdlfilm.*, episode.alias as epsalias');
		$this->db->where("episode.visibility", "publish");
		$this->db->order_by("timeepisode", "desc");
		$this->db->join('jdlfilm', 'episode.idfilm = jdlfilm.idfilm');
		$this->db->where('jdlfilm.idkategori', "$idkategori");

		$query = $this->db->get('episode');
		if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	public function count_film_by_kategori($idkategori){
		if ($idkategori>0) {
			$this->db->where('idkategori', "$idkategori");
		}
		$this->db->from('jdlfilm');
		$rs = $this->db->count_all_results();
		return $rs;
	}
	public function get_tag(){
		$this->db->limit(5);
		$sdf = $this->db->get('tag');
		return $sdf->result();
	}
	public function get_all_tag(){
		$sdf = $this->db->get('tag');
		return $sdf->result();
	}
	public function count_tag($idtag){
		$this->db->where('idtag', $idtag);
		$this->db->from('relasitag');
		$rs = $this->db->count_all_results();
		return $rs;
	}
	public function search($cariini){
		$this->db->like('jdlfilm', $cariini);
		//$this->db->limit(6);
		$this->db->join('kategori', 'kategori.idkategori = jdlfilm.idkategori');
		$this->db->order_by("idfilm", "desc");
		$sdf = $this->db->get('jdlfilm');
		return $sdf->result();
	}

	public function get_kategori_with_content($idkategori, $limit){
		$this->db->select('e.*, j.jdlfilm, j.deskripsifilm');
		$this->db->where("e.visibility", "publish");
		$this->db->from('jdlfilm AS j');
		$this->db->join('episode AS e', 'j.idfilm = e.idfilm');
		$this->db->where('j.idkategori', $idkategori);
		$this->db->order_by('e.timeepisode', 'DESC');
		// $this->db->group_by('j.idfilm');
		$this->db->limit($limit);

		$sdf = $this->db->get();
		return $sdf->result();
	}
	public function get_menontonini($idfilm){	
		$this->db->select('filmview');
		$this->db->from('jdlfilm');
		$this->db->where('idfilm', $idfilm);
		$query = $this->db->get();

		return $query->row('filmview');
	}
	public function tontonanpopuler(){

		$this->db->limit(6);
		$this->db->from('jdlfilm AS j');
		$this->db->join('kategori AS k', 'k.idkategori = j.idkategori');
		$this->db->select('j.*,k.*');
		$this->db->order_by('j.filmview', 'DESC');

		$sdf = $this->db->get();
		return $sdf->result();
	}
	public function count_film() {
        return $this->db->count_all_results("jdlfilm");
    }
	public function tontonanpopuler2($limit, $start){
		$this->db->limit($limit, $start);

		$this->db->from('jdlfilm AS j');
		$this->db->join('kategori AS k', 'k.idkategori = j.idkategori');
		$this->db->select('j.*,k.*');
		$this->db->order_by('j.filmview', 'DESC');

		$sdf = $this->db->get();
		return $sdf->result();
	}
	public function count_episode() {
		$this->db->where("visibility", "publish");
        return $this->db->count_all("episode");
    }
	public function filter_by_tag(){
		$idtag = $this->input->post('idtag');
		$this->db->from('jdlfilm AS j');
        $this->db->join('relasitag AS r', 'j.idfilm = r.idfilm');
        $this->db->order_by('j.jdlfilm');
        if (!empty($idtag)) {
			foreach ($idtag as $key) {
        		$this->db->or_where('r.idtag',$key);
        	}
        	
		}
		$query = $this->db->get();
		return $query->result();
	}
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
