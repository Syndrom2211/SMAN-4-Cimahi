<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profilsekolah extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();

		// Load Model
		$this->load->model("m_profilsekolah");
		$this->load->model("m_pengaturan");

		// Setting
		$tampilnama = $this->m_pengaturan->tampilnama();
		$this->load->vars('tnma', $tampilnama);

		$tampilgambar = $this->m_pengaturan->tampilgambar();
		$this->load->vars('tgam', $tampilgambar);
	}
	
	function index(){		
		// StrukturORG 
		$strukturorg = $this->m_profilsekolah->strukturorg();
		$this->load->vars('so', $strukturorg);

		// Visi 
		$visi = $this->m_profilsekolah->visi();
		$this->load->vars('vi', $visi);

		// Misi 
		$misi = $this->m_profilsekolah->misi();
		$this->load->vars('mi', $misi);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/profilsekolah/profilsekolah");
		$this->load->view("admin/footer");
	}


	// Start Edit
	public function edit_visi($id){
		// Visi 
		$visi = $this->m_profilsekolah->edit_visi($id);
		$this->load->vars('vi', $visi);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/profilsekolah/form_visi");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_visi(){
		$this->m_profilsekolah->prosesedit_visi();
		redirect('profilsekolah');
	}
	// End Edit

	// Start Edit
	public function edit_misi($id){
		// Misi 
		$misi = $this->m_profilsekolah->edit_misi($id);
		$this->load->vars('mi', $misi);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/profilsekolah/form_misi");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_misi(){
		$this->m_profilsekolah->prosesedit_misi();
		redirect('profilsekolah');
	}
	// End Edit

	// Start Edit
	public function edit_strukturorg($id){
		$sub_data = array(
			'error' => '',
			'result' => ''
		);
		
		// Struktur ORG 
		$strukturorg = $this->m_profilsekolah->edit_strukturorg($id);
		$this->load->vars('so', $strukturorg);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/profilsekolah/form_strukturorg", $sub_data);
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_strukturorg(){
		$this->m_profilsekolah->prosesedit_strukturorg();
		redirect('profilsekolah');
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