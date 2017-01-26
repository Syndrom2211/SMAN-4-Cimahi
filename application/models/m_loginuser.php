<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_loginuser extends CI_Model{
	function validasi($nis_siswa, $password){
		$this->db->where('nis_siswa', $nis_siswa);
		$this->db->where('password_siswa', $password);
		$query = $this->db->get('tb_listsiswa');
		
		if($query->num_rows == 1){
			foreach($query->result() as $row){
        		$data = $row;
      		}
      		return $data;
		}else{
			return FALSE;
		}
	}
	/*
	function tampiljur(){
		$this->db->select('*');
		$this->db->where('nis_siswa', $this->input->post('nis_siswa'));
    	$jurlas = $this->db->get('tb_listsiswa');
    	
    	if($jurlas->num_rows == 1){
			return true;
		}
    }
    */
}