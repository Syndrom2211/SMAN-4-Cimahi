<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Listpertanyaansejarah extends CI_Controller{

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
		$listpertanyaansejarah = $this->m_listpertanyaan->listpertanyaansejarah();
		$this->load->vars('lpi', $listpertanyaansejarah);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/listpertanyaansejarah");
		$this->load->view("admin/footer");
	}

	
	// Start Edit
	public function edit_listpertanyaansejarah($id){
		// List Pertanyaan 
		$listpertanyaansejarah = $this->m_listpertanyaan->edit_listpertanyaansejarah($id);
		$this->load->vars('lpi', $listpertanyaansejarah);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/form_listpertanyaansejarah");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_listpertanyaansejarah(){
		$this->m_listpertanyaan->prosesedit_listpertanyaansejarah();
		redirect('listpertanyaansejarah');
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaansejarah($id){
		$this->m_listpertanyaan->hapus_listpertanyaansejarah($id);
		redirect('listpertanyaansejarah');
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
	public function prosestambah_listpertanyaansejarah(){
		$this->m_listpertanyaan->tambah_listpertanyaansejarah();
		redirect('listpertanyaansejarah');
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