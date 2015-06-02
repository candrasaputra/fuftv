<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Feed_m extends CI_Model
{

    function get_feeds()
    {
        $query = $this->db->get('episode');
        
        return $query->result();
    }
}