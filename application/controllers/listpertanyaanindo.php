<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Listpertanyaanindo extends CI_Controller{

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
		$listpertanyaanindo = $this->m_listpertanyaan->listpertanyaanindo();
		$this->load->vars('lpin', $listpertanyaanindo);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/listpertanyaanindo");
		$this->load->view("admin/footer");
	}
	
	// Start Hapus
	function hapus_listpertanyaanindo($id){
		$this->m_listpertanyaan->hapus_listpertanyaanindo($id);
		redirect('listpertanyaanindo');
	}
	// End Hapus	

	// Start Edit
	public function edit_listpertanyaanindo($id){
		// List Pertanyaan 
		$listpertanyaanindo = $this->m_listpertanyaan->edit_listpertanyaanindo($id);
		$this->load->vars('lpin', $listpertanyaanindo);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/form_listpertanyaanindo");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_listpertanyaanindo(){
		$this->m_listpertanyaan->prosesedit_listpertanyaanindo();
		redirect('listpertanyaanindo');
	}
	// End Edit	
	
	// Start Tambah
	public function tambah_listpertanyaanindo(){
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/form_tambah_listpertanyaanindo");
		$this->load->view("admin/footer");
	}
	
	public function prosestambah_listpertanyaanindo(){
		$this->m_listpertanyaan->tambah_listpertanyaanindo();
		redirect('listpertanyaanindo');
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