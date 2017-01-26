<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Listpertanyaanfisika extends CI_Controller{

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
		$listpertanyaanfisika = $this->m_listpertanyaan->listpertanyaanfisika();
		$this->load->vars('lpi', $listpertanyaanfisika);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/listpertanyaanfisika");
		$this->load->view("admin/footer");
	}

	
	// Start Edit
	public function edit_listpertanyaanfisika($id){
		// List Pertanyaan 
		$listpertanyaanfisika = $this->m_listpertanyaan->edit_listpertanyaanfisika($id);
		$this->load->vars('lpi', $listpertanyaanfisika);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/form_listpertanyaanfisika");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_listpertanyaanfisika(){
		$this->m_listpertanyaan->prosesedit_listpertanyaanfisika();
		redirect('listpertanyaanfisika');
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaanfisika($id){
		$this->m_listpertanyaan->hapus_listpertanyaanfisika($id);
		redirect('listpertanyaanfisika');
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
	public function prosestambah_listpertanyaanfisika(){
		$this->m_listpertanyaan->tambah_listpertanyaanfisika();
		redirect('listpertanyaanfisika');
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