<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Jadwalkelas extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();

		// Load Model
		$this->load->model("m_jadwalkelas");
		$this->load->model("m_pengaturan");

		// Setting
		$tampilnama = $this->m_pengaturan->tampilnama();
		$this->load->vars('tnma', $tampilnama);

		$tampilgambar = $this->m_pengaturan->tampilgambar();
		$this->load->vars('tgam', $tampilgambar);
	}
	
	function index(){		
		// Jadwal Kelas 
		$jadwalkelas = $this->m_jadwalkelas->jadwalkelas();
		$this->load->vars('jdl', $jadwalkelas);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/jadwalkelas/jadwalkelas");
		$this->load->view("admin/footer");
	}

	
	// Start Edit
	public function edit_jadwalkelas($id){
		// List Siswa 
		$jadwalkelas = $this->m_jadwalkelas->edit_jadwalkelas($id);
		$this->load->vars('jdl', $jadwalkelas);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/jadwalkelas/form_jadwalkelas");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_jadwalkelas(){
		$this->m_jadwalkelas->prosesedit_jadwalkelas();
		redirect('jadwalkelas');
	}
	// End Edit

	// Start Hapus
	function hapus_jadwalkelas($id){
		$this->m_jadwalkelas->hapus_jadwalkelas($id);
		redirect('jadwalkelas');
	}
	// End Hapus
	
	// Start Tambah
	public function tambah_jadwalkelas(){
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/jadwalkelas/form_tambah_jadwalkelas");
		$this->load->view("admin/footer");
	}
	
	public function prosestambah_jadwalkelas(){
		$this->m_jadwalkelas->tambah_jadwalkelas();
		redirect('jadwalkelas');
	}
	// End Tambah
	
	// Session
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginadmin/');
		}
	}
}