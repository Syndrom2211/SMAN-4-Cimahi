<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Score extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();

		// Load Model
		$this->load->model("m_score");
		$this->load->model("m_pengaturan");

		// Setting
		$tampilnama = $this->m_pengaturan->tampilnama();
		$this->load->vars('tnma', $tampilnama);

		$tampilgambar = $this->m_pengaturan->tampilgambar();
		$this->load->vars('tgam', $tampilgambar);
	}
	
	function index(){		
		// List Siswa 
		$score = $this->m_score->score();
		$this->load->vars('sco', $score);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/score/score");
		$this->load->view("admin/footer");
	}

	// Start Edit
	public function edit_score($id){
		// List Siswa 
		$score = $this->m_score->edit_score($id);
		$this->load->vars('sco', $score);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/score/form_score");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_score(){
		$this->m_score->prosesedit_score();
		redirect('score');
	}
	// End Edit

	
	// Start Hapus
	function hapus_score($id){
		$this->m_score->hapus_score($id);
		redirect('score');
	}
	// End Hapus
	
	// Session
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginadmin/');
		}
	}
}