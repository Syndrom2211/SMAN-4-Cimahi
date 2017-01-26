<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_score extends CI_Model{
	function index(){
		// KOSONG
	}

	function score(){
		$this->db->order_by('id_score', 'desc');
		$query = $this->db->get('tb_score');
		return $query->result();
	}

	// Start Hapus
	function hapus_score($id){
		$this->db->where("id_score", $id);
		$this->db->delete("tb_score");
	}

	// Start Edit
	function edit_score($id){
		$this->db->where('id_score', $id);
		$query = $this->db->get('tb_score');
		return $query;
	}				
		
	function prosesedit_score(){
		$update_score = array(
			'matkul' => $this->input->post('matkul'),
			'score' => $this->input->post('score')
		);
		$id = $this->input->post('id_score');
		$this->db->where('id_score', $id);
		$this->db->update('tb_score', $update_score);
	}
	// End Edit
	
}
