<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Listpertanyaansosiologi extends CI_Controller{

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
		$listpertanyaansosiologi = $this->m_listpertanyaan->listpertanyaansosiologi();
		$this->load->vars('lpi', $listpertanyaansosiologi);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/listpertanyaansosiologi");
		$this->load->view("admin/footer");
	}

	
	// Start Edit
	public function edit_listpertanyaansosiologi($id){
		// List Pertanyaan 
		$listpertanyaansosiologi = $this->m_listpertanyaan->edit_listpertanyaansosiologi($id);
		$this->load->vars('lpi', $listpertanyaansosiologi);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/form_listpertanyaansosiologi");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_listpertanyaansosiologi(){
		$this->m_listpertanyaan->prosesedit_listpertanyaansosiologi();
		redirect('listpertanyaansosiologi');
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaansosiologi($id){
		$this->m_listpertanyaan->hapus_listpertanyaansosiologi($id);
		redirect('listpertanyaansosiologi');
	}
	// End Hapus
	
	/*
	// Start Tambah
	public function tambah_listpertanyaanbiologi(){
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/form_tambah_listpertanyaanbiologi");
		$this->load->view("admin/footer");
	}
	*/
	public function prosestambah_listpertanyaansosiologi(){
		$this->m_listpertanyaan->tambah_listpertanyaansosiologi();
		redirect('listpertanyaansosiologi');
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