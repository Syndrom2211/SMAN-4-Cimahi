<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Loginadmin extends CI_Controller{	
	function __construct(){
		parent::__construct();
		
		// Load Model
		$this->load->model('m_login');
		$this->load->model("m_pengaturan");

		// Setting
		$tampilnama = $this->m_pengaturan->tampilnama();
		$this->load->vars('tnma', $tampilnama);

		$tampilgambar = $this->m_pengaturan->tampilgambar();
		$this->load->vars('tgam', $tampilgambar);
	}
	
	function index(){		
		$this->load->view("admin/header");
		$this->load->view("admin/loginadmin");
		$this->load->view("admin/footer");
	}	
	
	// Proses Login
	function aksi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->m_login->validasi($username, $password);
		
		if($query){
			$data = array(
				'nama_admin' => $query->nama_admin,
				'gambar_admin' => $query->gambar_admin,
				'is_logged_in' => true
			);
			
			$this->session->set_userdata($data);
			redirect('admin/');
		}else{
			$this->data['pesan'] = 'Username atau Password salah !';
			$this->load->view("admin/header");
			$this->load->view("admin/loginadmin", $this->data);
			$this->load->view("admin/footer");
		}
	}
	// End Proses Login
	
	// Start Logout
	function logout(){
		$this->session->sess_destroy();
		redirect('loginadmin/');
	}
	// End Logout
}