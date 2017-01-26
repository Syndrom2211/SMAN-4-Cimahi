<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pengaturan extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();

		// Load Model
		$this->load->model("m_pengaturan");

		// Setting
		$tampilnama = $this->m_pengaturan->tampilnama();
		$this->load->vars('tnma', $tampilnama);

		$tampilgambar = $this->m_pengaturan->tampilgambar();
		$this->load->vars('tgam', $tampilgambar);
	}
	
	function index(){		
		// Setting 
		$pengaturan = $this->m_pengaturan->index();
		$this->load->vars('p', $pengaturan);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/pengaturan/pengaturan");
		$this->load->view("admin/footer");
	}

	// Start Edit
	public function edit($id){
		// Setting 
		$pengaturan = $this->m_pengaturan->edit($id);
		$this->load->vars('p', $pengaturan);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/pengaturan/form_pengaturan");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit(){
		$this->m_pengaturan->prosesedit();
		redirect('pengaturan');
	}
	// End Edit

	// Start Edit
	public function edit_gambar($id){
		$sub_data = array(
			'error' => '',
			'result' => ''
		);
		
		// Gambar Admin
		$gambar_admin = $this->m_pengaturan->edit_gambar($id);
		$this->load->vars('sg', $gambar_admin);

		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/pengaturan/form_gambaradmin", $sub_data);
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_gambar(){
		$this->m_pengaturan->prosesedit_gambar();
		redirect('pengaturan');
	}
	// End Edit
	
	// Session
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginadmin/');
		}
	}	
}