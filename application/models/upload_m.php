<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload_m extends CI_Model {
	public function record_count() {
        return $this->db->count_all("jdlfilm");
    }
 
    public function get_film($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("jdlfilm");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
}