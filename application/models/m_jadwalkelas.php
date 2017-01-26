<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_jadwalkelas extends CI_Model{
	function index(){
		// KOSONG
	}

	function jadwalkelas(){
		$this->db->order_by('id_jadwal', 'desc');
		$query = $this->db->get('tb_jadwalkelas');
		return $query->result();
	}

	
	// Start Edit
	function edit_jadwalkelas($id){
		$this->db->where('id_jadwal', $id);
		$query = $this->db->get('tb_jadwalkelas');
		return $query;
	}				
		
	function prosesedit_jadwalkelas(){
		$update_jadwalkelas = array(
			'hari' => $this->input->post('hari'),
			'kelas' => $this->input->post('kelas')
		);
		$id = $this->input->post('id_jadwal');
		$this->db->where('id_jadwal', $id);
		$this->db->update('tb_jadwalkelas', $update_jadwalkelas);
	}
	// End Edit

	// Start Hapus
	function hapus_jadwalkelas($id){
		$this->db->where("id_jadwal", $id);
		$this->db->delete("tb_jadwalkelas");
	}
	
	// Start Tambah	
	function tambah_jadwalkelas(){
		$tambah_jadwalkelas = array(
			"hari" => $this->input->post("hari"),
			"kelas" => $this->input->post("kelas")
		);		

		$tambah = $this->db->insert("tb_jadwalkelas", $tambah_jadwalkelas);
		return $tambah;
	}
	
}