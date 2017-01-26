<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Listadmin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();

		// Load Model
		$this->load->model("m_listadmin");
		$this->load->model("m_pengaturan");

		// Setting
		$tampilnama = $this->m_pengaturan->tampilnama();
		$this->load->vars('tnma', $tampilnama);

		$tampilgambar = $this->m_pengaturan->tampilgambar();
		$this->load->vars('tgam', $tampilgambar);
	}
	
	function index(){		
		// List Siswa 
		$listadmin = $this->m_listadmin->listadmin();
		$this->load->vars('lsa', $listadmin);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listadmin/listadmin");
		$this->load->view("admin/footer");
	}
	
	// Start Hapus
	function hapus_listadmin($id){
		$this->m_listadmin->hapus_listadmin($id);
		redirect('listadmin');
	}
	// End Hapus
	
	// Start Edit
	public function edit_listadmin($id){
		// List Siswa 
		$listadmin = $this->m_listadmin->edit_listadmin($id);
		$this->load->vars('lsi', $listadmin);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listadmin/form_listadmin");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_listadmin(){
		$this->m_listadmin->prosesedit_listadmin();
		redirect('listadmin');
	}
	// End Edit

	// Start Tambah
	public function tambah_listadmin(){
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listadmin/form_tambah_listadmin");
		$this->load->view("admin/footer");
	}
	
	public function prosestambah_listadmin(){
		$this->m_listadmin->tambah_listadmin();
		redirect('listadmin');
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