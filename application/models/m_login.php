<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_login extends CI_Model{
	function validasi($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get('tb_admin');
		
		if($query->num_rows == 1){
			foreach($query->result() as $row){
        		$data = $row;
      		}
			return $data;
		}else{
			return FALSE;
		}
	}
}