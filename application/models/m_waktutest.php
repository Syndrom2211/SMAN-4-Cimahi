<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_waktutest extends CI_Model{
	function index(){
		// KOSONG
	}
		/************************ WAKTU ************************/
	function waktu(){
		$query = $this->db->get('tb_waktutest');
		return $query->result();
	}
	
	// Start Edit
	function edit_waktutest($id){
		$this->db->where('id_waktu', $id);
		$query = $this->db->get('tb_waktutest');
		return $query;
	}				
		
	function prosesedit_waktutest(){
		$update_waktutest = array(
			'matkul' => $this->input->post('matkul'),
			'waktu' => $this->input->post('waktu')
		);
		$id = $this->input->post('id_waktu');
		$this->db->where('id_waktu', $id);
		$this->db->update('tb_waktutest', $update_waktutest);
	}
	// End Edit
	

	/************************ WAKTU ************************/

}