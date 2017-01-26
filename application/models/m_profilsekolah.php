<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_profilsekolah extends CI_Model{
	function index(){
		// KOSONG
	}

	function strukturorg(){
		$query = $this->db->get('tb_strukturorg');
		return $query->result();
	}

	function visi(){
		$query = $this->db->get('tb_visi');
		return $query->result();
	}

	function misi(){
		$query = $this->db->get('tb_misi');
		return $query->result();
	}

	// Start Edit
	function edit_visi($id){
		$this->db->where('id_visi', $id);
		$query = $this->db->get('tb_visi');
		return $query;
	}
		
	function prosesedit_visi(){
		$update_visi = array(
			'txt_visi' => $this->input->post('txt_visi')
		);
		$id = $this->input->post('id_visi');
		$this->db->where('id_visi', $id);
		$this->db->update('tb_visi', $update_visi);
	}
	// End Edit

	// Start Edit
	function edit_misi($id){
		$this->db->where('id_misi', $id);
		$query = $this->db->get('tb_misi');
		return $query;
	}
		
	function prosesedit_misi(){
		$update_misi = array(
			'txt_misi' => $this->input->post('txt_misi')
		);
		$id = $this->input->post('id_misi');
		$this->db->where('id_misi', $id);
		$this->db->update('tb_misi', $update_misi);
	}
	// End Edit

	// Start Edit
	function edit_strukturorg($id){
		$this->db->where('id_strukturorg', $id);
		$query = $this->db->get('tb_strukturorg');
		return $query;
	}
		
	function prosesedit_strukturorg(){
		if($this->input->post('go_upload')){
			$config['upload_path'] = 'css/images';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '1000';
			$config['max_width'] = '1920';
			$config['max_height'] = '1080';

			$this->load->library('upload', $config);
			$result_array = array();

			for($i=1; $i<=1; $i++){
				if(!empty($_FILES['picture'.$i]['name'])){
					if(!$this->upload->do_upload('picture'.$i)){
						$sub_data['error'] = $this->upload->display_errors();
					}else{
						$update_strukturorg = array(
							'isi_strukturorg' => $_FILES['picture1']['name']
						);
						$id = $this->input->post('id_strukturorg');
						$this->db->where('id_strukturorg', $id);
						$this->db->update('tb_strukturorg', $update_strukturorg);
						array_push($result_array, $this->upload->data());
					}
				}
			}	
			$sub_data['result'] = $result_array;
		}
	}
	// End Edit
}