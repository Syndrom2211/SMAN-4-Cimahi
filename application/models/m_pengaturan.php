<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_pengaturan extends CI_Model{
	function index(){
		$query = $this->db->get('tb_admin');
		return $query->result();
	}
	
	function tampilnama(){
		$this->db->select('nama_admin');
		//$this->db->where('username');
		$query = $this->db->get('tb_admin');
		return $query->result();
	}

	function tampilgambar(){
		$this->db->select('gambar_admin');
		// $this->db->where('id_admin', 1);
		$query = $this->db->get('tb_admin');
		return $query->result();
	}

	// Start Edit
	function edit($id){
		$this->db->where('id_admin', $id);
		$query = $this->db->get('tb_admin');
		return $query;
	}
		
	function prosesedit(){
		$update_pengaturan = array(
			'username' => $this->input->post('username'),
			'nama_admin' => $this->input->post('nama_admin'),
			'password' => md5($this->input->post('password'))
		);
		$id = $this->input->post('id_admin');
		$this->db->where('id_admin', $id);
		$this->db->update('tb_admin', $update_pengaturan);
	}
	// End Edit

	// Start Edit
	function edit_gambar($id){
		$this->db->where('id_admin', $id);
		$query = $this->db->get('tb_admin');
		return $query;
	}
		
	function prosesedit_gambar(){
		if($this->input->post('go_upload')){
			$config['upload_path'] = 'css/images/users';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '1000';
			$config['max_width'] = '700';
			$config['max_height'] = '500';

			$this->load->library('upload', $config);
			$result_array = array();

			for($i=1; $i<=1; $i++){
				if(!empty($_FILES['picture'.$i]['name'])){
					if(!$this->upload->do_upload('picture'.$i)){
						$sub_data['error'] = $this->upload->display_errors();
					}else{
						$update_gambaradmin = array(
							'gambar_admin' => $_FILES['picture1']['name']
						);
						$id = $this->input->post('id_admin');
						$this->db->where('id_admin', $id);
						$this->db->update('tb_admin', $update_gambaradmin);
						array_push($result_array, $this->upload->data());
					}
				}
			}	
			$sub_data['result'] = $result_array;
		}
	}
	// End Edit
}