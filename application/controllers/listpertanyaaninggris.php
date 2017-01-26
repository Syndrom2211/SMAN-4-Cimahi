<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Listpertanyaaninggris extends CI_Controller{

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
		$listpertanyaaninggris = $this->m_listpertanyaan->listpertanyaaninggris();
		$this->load->vars('lpin', $listpertanyaaninggris);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/listpertanyaaninggris");
		$this->load->view("admin/footer");
	}

	
	// Start Edit
	public function edit_listpertanyaaninggris($id){
		// List Pertanyaan 
		$listpertanyaaninggris = $this->m_listpertanyaan->edit_listpertanyaaninggris($id);
		$this->load->vars('lpin', $listpertanyaaninggris);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/form_listpertanyaaninggris");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_listpertanyaaninggris(){
		$this->m_listpertanyaan->prosesedit_listpertanyaaninggris();
		redirect('listpertanyaaninggris');
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaaninggris($id){
		$this->m_listpertanyaan->hapus_listpertanyaaninggris($id);
		redirect('listpertanyaaninggris');
	}
	// End Hapus
	
	// Start Tambah
	public function tambah_listpertanyaaninggris(){
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/form_tambah_listpertanyaaninggris");
		$this->load->view("admin/footer");
	}
	
	public function prosestambah_listpertanyaaninggris(){
		$this->m_listpertanyaan->tambah_listpertanyaaninggris();
		redirect('listpertanyaaninggris');
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