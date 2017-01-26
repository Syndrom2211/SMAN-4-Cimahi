<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Listpertanyaangeografi extends CI_Controller{

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
		$listpertanyaangeografi = $this->m_listpertanyaan->listpertanyaangeografi();
		$this->load->vars('lpi', $listpertanyaangeografi);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/listpertanyaangeografi");
		$this->load->view("admin/footer");
	}

	
	// Start Edit
	public function edit_listpertanyaangeografi($id){
		// List Pertanyaan 
		$listpertanyaangeografi = $this->m_listpertanyaan->edit_listpertanyaangeografi($id);
		$this->load->vars('lpi', $listpertanyaangeografi);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/form_listpertanyaangeografi");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_listpertanyaangeografi(){
		$this->m_listpertanyaan->prosesedit_listpertanyaangeografi();
		redirect('listpertanyaangeografi');
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaangeografi($id){
		$this->m_listpertanyaan->hapus_listpertanyaangeografi($id);
		redirect('listpertanyaangeografi');
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
	public function prosestambah_listpertanyaangeografi(){
		$this->m_listpertanyaan->tambah_listpertanyaangeografi();
		redirect('listpertanyaangeografi');
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