<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Loginuser extends CI_Controller{	
	function __construct(){
		parent::__construct();
		
		// Load Model
		$this->load->model('m_loginuser');
	}
	
	function index(){		
		$this->load->view("admin/header");
		$this->load->view("loginuser");
		$this->load->view("admin/footer");
	}	
	
	// Proses Login Siswa 
	function aksi(){
		$nis_siswa	= $this->input->post('nis_siswa');
		$password = md5($this->input->post('password_siswa'));
		$query = $this->m_loginuser->validasi($nis_siswa, $password);

		if($query){
			$data = array(
				'nis_siswa' => $query->nis_siswa,
				'jurusan_siswa' => $query->jurusan_siswa,
				'kelas_siswa' => $query->kelas_siswa,
				'is_logged_in' => true
			);

			$this->session->set_userdata($data);
			redirect('page/list_test');
			
		}else{
			$this->data['pesan'] = 'Login Gagal !';
			$this->load->view("admin/header");
			$this->load->view("loginuser", $this->data);
			$this->load->view("admin/footer");
		}
	}
	// End Proses Login	
}