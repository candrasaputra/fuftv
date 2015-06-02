<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Account extends CI_Model {

	var $usr;
	var $pwd;
	var $usr_data;	

	public function __construct(){
		$this->usr = '';
		$this->pwd = '';
	}

	public function set_user($user){
		$this->usr = $user;
		$this->usr_data['c_usr'] = $user;
	}
	
	public function set_password($password){
		$this->pwd = $password;
		$this->usr_data['c_pwd'] = md5($password);
	}

	public function do_login(){

		$query = "Select * from fx_user where username='$this->usr' and pwd=md5('$this->pwd')";
		$result = $this->db->query($query);
		$rows = $result->row_array();

		if ($this->db->affected_rows() > 0) {
			$this->load->library('user_agent');

			if ($this->agent->is_browser())
			{
			        $agent = $this->agent->browser().' '.$this->agent->version();
			}
			elseif ($this->agent->is_robot())
			{
			        $agent = $this->agent->robot();
			}
			elseif ($this->agent->is_mobile())
			{
			        $agent = $this->agent->mobile();
			}
			else
			{
			        $agent = 'Unidentified User Agent';
			}


			$this->usr_data['c_id'] = $rows['iduser'];
			$this->usr_data['c_level'] = $rows['idlevel'];
			$this->usr_data['c_usr'] = $rows['username'];
			$this->usr_data['c_lastlog']  = $rows['lastlog'];
			$this->usr_data['platform']  = $this->agent->platform();
			$this->usr_data['browser']  = $agent;
			$this->usr_data['logged_in']  = true;

			$this->set_cookie();
			$this->_update_log($rows['iduser']);

            return true;
        } else {
            return false;
        }

	}	

	public function do_logout(){
		$sess = array();

        $sess['c_usr'] = '';
        $sess['c_pwd'] = '';
        $sess['c_id']  = '';
        $sess['c_lastlog'] = '';

        $this->session->unset_userdata($sess);
        session_destroy();
        $this->session->sess_destroy();
	}

	protected function set_cookie(){
		$this->session->set_userdata($this->usr_data);
	}

	public function get_cookie(){
		$sess = array();

        $sess['c_usr'] = $this->session->userdata('c_usr');
        $sess['c_pwd'] = $this->session->userdata('c_pwd');
        $sess['c_lastlog']  = $this->session->userdata('c_lastlog');
        $sess['c_id']  = $this->session->userdata('c_id');

        return $sess;
	}

	public function validate_cookie(){
		if ($this->session->userdata('c_usr') != '' && $this->session->userdata('c_pwd') != '')
            return true;
        else
            return false;
	}

	public function validate_admin(){
		if ($this->session->userdata('c_usr') != '' && $this->session->userdata('c_pwd') != '' && $this->session->userdata('c_level') == 1)
            return true;
        else
            return false;
	}

	private function _update_log($id) {
        $str = "update fx_user set lastlog=now() where iduser=$id";
        $query = $this->db->query($str);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}	