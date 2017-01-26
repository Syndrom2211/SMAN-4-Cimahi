<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Listpertanyaanekonomi extends CI_Controller{

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
		$listpertanyaanekonomi = $this->m_listpertanyaan->listpertanyaanekonomi();
		$this->load->vars('lpi', $listpertanyaanekonomi);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/listpertanyaanekonomi");
		$this->load->view("admin/footer");
	}

	
	// Start Edit
	public function edit_listpertanyaanekonomi($id){
		// List Pertanyaan 
		$listpertanyaanekonomi = $this->m_listpertanyaan->edit_listpertanyaanekonomi($id);
		$this->load->vars('lpi', $listpertanyaanekonomi);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/form_listpertanyaanekonomi");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_listpertanyaanekonomi(){
		$this->m_listpertanyaan->prosesedit_listpertanyaanekonomi();
		redirect('listpertanyaanekonomi');
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaanekonomi($id){
		$this->m_listpertanyaan->hapus_listpertanyaanekonomi($id);
		redirect('listpertanyaanekonomi');
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
	public function prosestambah_listpertanyaanekonomi(){
		$this->m_listpertanyaan->tambah_listpertanyaanekonomi();
		redirect('listpertanyaanekonomi');
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