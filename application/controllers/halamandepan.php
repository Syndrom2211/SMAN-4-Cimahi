<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Halamandepan extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->is_logged_in();

		// Load Model
		$this->load->model("m_haldepan");
		$this->load->model("m_pengaturan");
		
		// Setting
		$tampilnama = $this->m_pengaturan->tampilnama();
		$this->load->vars('tnma', $tampilnama);

		$tampilgambar = $this->m_pengaturan->tampilgambar();
		$this->load->vars('tgam', $tampilgambar);
	}
	
	function index(){		

		// Sangkut 
		$haldepan = $this->m_haldepan->sangkut();
		$this->load->vars('h', $haldepan);

		// Hubungi 
		$hubungi = $this->m_haldepan->hubungi();
		$this->load->vars('hu', $hubungi);

		// Twitter 
		$twitter = $this->m_haldepan->twitter();
		$this->load->vars('tw', $twitter);

		// Info Depan 
		$infodp = $this->m_haldepan->infodepan();
		$this->load->vars('idp', $infodp);

		// View Administrator
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/haldepan/halamandepan");
		$this->load->view("admin/footer");
	}

	// Start Edit
	public function edit_sangkut($id){
		// Setting
		$pengaturan = $this->m_pengaturan->tampilnama();
		$this->load->vars('p', $pengaturan);

		// Sangkut 
		$haldepan = $this->m_haldepan->edit_sangkut($id);
		$this->load->vars('h', $haldepan);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/haldepan/form_sangkut");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_sangkut(){
		$this->m_haldepan->prosesedit_sangkut();
		redirect('halamandepan');
	}
	// End Edit

	// Start Edit
	public function edit_hubungi($id){
		// Hubungi 
		$hubungi = $this->m_haldepan->edit_hubungi($id);
		$this->load->vars('hu', $hubungi);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/haldepan/form_hubungi");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_hubungi(){
		$this->m_haldepan->prosesedit_hubungi();
		redirect('halamandepan');
	}
	// End Edit

	// Start Edit
	public function edit_twitter($id){
		// Twitter 
		$twitter = $this->m_haldepan->edit_twitter($id);
		$this->load->vars('tw', $twitter);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/haldepan/form_twitter");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_twitter(){
		$this->m_haldepan->prosesedit_twitter();
		redirect('halamandepan');
	}
	// End Edit

	// Start Edit
	public function edit_infodepan($id){
		// Info Depan 
		$infodp = $this->m_haldepan->edit_infodepan($id);
		$this->load->vars('idp', $infodp);
		
		$this->load->view("admin/header");
		$this->load->view("admin/menu");
		$this->load->view("admin/haldepan/form_infodepan");
		$this->load->view("admin/footer");
	}
	
	public function prosesedit_infodepan(){
		$this->m_haldepan->prosesedit_infodepan();
		redirect('halamandepan');
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