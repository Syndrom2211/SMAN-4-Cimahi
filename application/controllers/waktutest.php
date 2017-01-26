<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Waktutest extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();

		// Load Model
		$this->load->model("m_listpertanyaan");
		$this->load->model("m_pengaturan");
		$this->load->model("m_waktutest");

		// Setting
		$tampilnama = $this->m_pengaturan->tampilnama();
		$this->load->vars('tnma', $tampilnama);

		$tampilgambar = $this->m_pengaturan->tampilgambar();
		$this->load->vars('tgam', $tampilgambar);
	}

	// Start Edit
	public function edit_waktutest($id){
		// List Pertanyaan 
		$waktutest = $this->m_waktutest->edit_waktutest($id);
		$this->load->vars('wak', $waktutest);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/waktutest/form_waktutest");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_waktutest(){
		$this->m_waktutest->prosesedit_waktutest();
		redirect('waktutest');
	}
	// End Edit

	function index(){
		// List Pertanyaan 
		$waktutest = $this->m_waktutest->waktu();
		$this->load->vars('wak', $waktutest);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/waktutest/waktutest");
		$this->load->view("admin/footer");
	}

	// Session
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginadmin/');
		}
	}
}