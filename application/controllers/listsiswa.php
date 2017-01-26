<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Listsiswa extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();

		// Load Model
		$this->load->model("m_listsiswa");
		$this->load->model("m_pengaturan");

		// Setting
		$tampilnama = $this->m_pengaturan->tampilnama();
		$this->load->vars('tnma', $tampilnama);

		$tampilgambar = $this->m_pengaturan->tampilgambar();
		$this->load->vars('tgam', $tampilgambar);
	}
	
	function index(){		
		// List Siswa 
		$listsiswa = $this->m_listsiswa->listsiswa();
		$this->load->vars('lsi', $listsiswa);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listsiswa/listsiswa");
		$this->load->view("admin/footer");
	}

	// Start Edit
	public function edit_listsiswa($id){
		// List Siswa 
		$listsiswa = $this->m_listsiswa->edit_listsiswa($id);
		$this->load->vars('lsi', $listsiswa);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listsiswa/form_listsiswa");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_listsiswa(){
		$this->m_listsiswa->prosesedit_listsiswa();
		redirect('listsiswa');
	}
	// End Edit

	// Start Hapus
	function hapus_listsiswa($id){
		$this->m_listsiswa->hapus_listsiswa($id);
		redirect('listsiswa');
	}
	// End Hapus

	// Start Tambah
	public function tambah_listsiswa(){
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/listsiswa/form_tambah_listsiswa");
		$this->load->view("admin/footer");
	}
	
	public function prosestambah_listsiswa(){
		$this->m_listsiswa->tambah_listsiswa();
		redirect('listsiswa');
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