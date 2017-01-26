<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_haldepan extends CI_Model{
	function index(){
		// KOSONG
	}

	function sangkut(){
		$query = $this->db->get('tb_sangkut');
		return $query->result();
	}

	function hubungi(){
		$query = $this->db->get('tb_hubungi');
		return $query->result();
	}

	function twitter(){
		$query = $this->db->get('tb_twitter');
		return $query->result();
	}

	function infodepan(){
		$query = $this->db->get('tb_infodp');
		return $query->result();
	}

	// Start Edit
	function edit_sangkut($id){
		$this->db->where('id_sangkut', $id);
		$query = $this->db->get('tb_sangkut');
		return $query;
	}
		
	function prosesedit_sangkut(){
		$update_sangkut = array(
			'judul_sangkut1' => $this->input->post('judul_sangkut1'),
			'link_sangkut1' => $this->input->post('link_sangkut1'),
			'judul_sangkut2' => $this->input->post('judul_sangkut2'),
			'link_sangkut2' => $this->input->post('link_sangkut2'),
			'judul_sangkut3' => $this->input->post('judul_sangkut3'),
			'link_sangkut3' => $this->input->post('link_sangkut3'),
			'judul_sangkut4' => $this->input->post('judul_sangkut4'),
			'link_sangkut4' => $this->input->post('link_sangkut4'),
			'judul_sangkut5' => $this->input->post('judul_sangkut5'),
			'link_sangkut5' => $this->input->post('link_sangkut5')
		);
		$id = $this->input->post('id_sangkut');
		$this->db->where('id_sangkut', $id);
		$this->db->update('tb_sangkut', $update_sangkut);
	}
	// End Edit

	// Start Edit
	function edit_hubungi($id){
		$this->db->where('id_hubungi', $id);
		$query = $this->db->get('tb_hubungi');
		return $query;
	}
		
	function prosesedit_hubungi(){
		$update_hubungi = array(
			'hubungi_text' => $this->input->post('hubungi_text'),
			'link_email' => $this->input->post('link_email'),
			'link_fb' => $this->input->post('link_fb')
		);
		$id = $this->input->post('id_hubungi');
		$this->db->where('id_hubungi', $id);
		$this->db->update('tb_hubungi', $update_hubungi);
	}
	// End Edit

	// Start Edit
	function edit_twitter($id){
		$this->db->where('id_twitter', $id);
		$query = $this->db->get('tb_twitter');
		return $query;
	}
		
	function prosesedit_twitter(){
		$update_twitter = array(
			'kode_widget' => $this->input->post('kode_widget')
		);
		$id = $this->input->post('id_twitter');
		$this->db->where('id_twitter', $id);
		$this->db->update('tb_twitter', $update_twitter);
	}
	// End Edit

	// Start Edit
	function edit_infodepan($id){
		$this->db->where('id_infodp', $id);
		$query = $this->db->get('tb_infodp');
		return $query;
	}
		
	function prosesedit_infodepan(){
		$update_infodp = array(
			'infodp_txt' => $this->input->post('infodp_txt')
		);
		$id = $this->input->post('id_infodp');
		$this->db->where('id_infodp', $id);
		$this->db->update('tb_infodp', $update_infodp);
	}
	// End Edit
}