<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Listpertanyaanmtk extends CI_Controller{

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
		$listpertanyaanmtk = $this->m_listpertanyaan->listpertanyaanmtk();
		$this->load->vars('lpim', $listpertanyaanmtk);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/listpertanyaanmtk");
		$this->load->view("admin/footer");
	}

		
	// Start Edit
	public function edit_listpertanyaanmtk($id){
		// List Pertanyaan 
		$listpertanyaanmtk = $this->m_listpertanyaan->edit_listpertanyaanmtk($id);
		$this->load->vars('lpim', $listpertanyaanmtk);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/form_listpertanyaanmtk");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_listpertanyaanmtk(){
		$this->m_listpertanyaan->prosesedit_listpertanyaanmtk();
		redirect('listpertanyaanmtk');
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaanmtk($id){
		$this->m_listpertanyaan->hapus_listpertanyaanmtk($id);
		redirect('listpertanyaanmtk');
	}
	// End Hapus
	
	// Start Tambah
	public function tambah_listpertanyaanmtk(){
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listpertanyaan/form_tambah_listpertanyaanmtk");
		$this->load->view("admin/footer");
	}
	
	public function prosestambah_listpertanyaanmtk(){
		$this->m_listpertanyaan->tambah_listpertanyaanmtk();
		redirect('listpertanyaanmtk');
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