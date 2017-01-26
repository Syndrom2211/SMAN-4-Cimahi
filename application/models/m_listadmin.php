<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_listadmin extends CI_Model{
	function index(){
		// KOSONG
	}

	function listadmin(){
		$this->db->order_by('id_admin', 'desc');
		$query = $this->db->get('tb_admin');
		return $query->result();
	}

	// Start Edit
	function edit_listadmin($id){
		$this->db->where('id_admin', $id);
		$query = $this->db->get('tb_admin');
		return $query;
	}				
		
	function prosesedit_listadmin(){
		if($this->input->post('go_update')){
			$config['upload_path'] = 'css/images/users';
			$config['allowed_types'] = 'jpg';
			$config['max_size'] = '1000';
			$config['max_width'] = '700';
			$config['max_height'] = '500';
			
			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload()){
				$sub_data['error'] = $this->upload->display_errors();
			}else{
				$sub_data['result'] = $this->upload->data();
			}

			$update_listadmin = array(
				'nama_admin' => $this->input->post('nama_admin'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'gambar_admin' => $_FILES['userfile']['name']
			);
			
			$id = $this->input->post('id_admin');
			$this->db->where('id_admin', $id);
			$this->db->update('tb_admin', $update_listadmin);
		}
	}
	// End Edit

	// Start Hapus
	function hapus_listadmin($id){
		$this->db->where("id_admin", $id);
		$this->db->delete("tb_admin");
	}
	
	// Start Tambah	
	function tambah_listadmin(){
		$tambah_listadmin = array(
			"nama_admin" => $this->input->post("nama_admin"),
			"username" => $this->input->post("username"),
			"password" => md5($this->input->post("password")),
			"gambar_admin" => $this->input->post("gambar_admin"),
		);		

		$tambah = $this->db->insert("tb_admin", $tambah_listadmin);
		return $tambah;
	}
	
}
