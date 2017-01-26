<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Listpertanyaanbiologi extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();

		// Load Model
		$this->load->model("m_listpertanyaan");
		$this->load->model("m_pengaturan");

		// Setting
		$tampilnama = $this->m_pengaturan->tampilnama();
		$this->load->vars('tnma', $tampilnama);

		$tampilgambar = $this->m_pengaturan->tampilgambar();
		$this->load->vars('tgam', $tampilgambar);
	}
	
	function index(){		
		// List Pertanyaan 
		$listpertanyaanbiologi = $this->m_listpertanyaan->listpertanyaanbiologi();
		$this->load->vars('lpi', $listpertanyaanbiologi);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/listpertanyaanbiologi");
		$this->load->view("admin/footer");
	}

	
	// Start Edit
	public function edit_listpertanyaanbiologi($id){
		// List Pertanyaan 
		$listpertanyaanbiologi = $this->m_listpertanyaan->edit_listpertanyaanbiologi($id);
		$this->load->vars('lpi', $listpertanyaanbiologi);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/form_listpertanyaanbiologi");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_listpertanyaanbiologi(){
		$this->m_listpertanyaan->prosesedit_listpertanyaanbiologi();
		redirect('listpertanyaanbiologi');
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaanbiologi($id){
		$this->m_listpertanyaan->hapus_listpertanyaanbiologi($id);
		redirect('listpertanyaanbiologi');
	}
	// End Hapus
	
	// Start Tambah
	public function tambah_listpertanyaanbiologi(){
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/form_tambah_listpertanyaanbiologi");
		$this->load->view("admin/footer");
	}
	
	public function prosestambah_listpertanyaanbiologi(){
		$this->m_listpertanyaan->tambah_listpertanyaanbiologi();
		redirect('listpertanyaanbiologi');
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