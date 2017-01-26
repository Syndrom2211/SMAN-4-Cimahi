<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Page extends CI_Controller {
 	function __construct(){
		parent::__construct();

		error_reporting(0);

		$this->load->model("m_haldepan");
		$this->load->model("m_profilsekolah");
		$this->load->model("m_listsiswa");
		$this->load->model('m_listpertanyaanbiologi');
		$this->load->model('m_listpertanyaanindo');
		$this->load->model('m_listpertanyaaninggris');
		$this->load->model('m_listpertanyaanmtk');
		$this->load->model('m_listpertanyaanfisika');
		$this->load->model('m_listpertanyaansosiologi');
		$this->load->model('m_listpertanyaangeografi');
		$this->load->model('m_listpertanyaankimia');
		$this->load->model('m_listpertanyaansejarah');
		$this->load->model('m_listpertanyaanekonomi');
		$this->load->helper('date');

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

		// Visi 
		$visi = $this->m_profilsekolah->visi();
		$this->load->vars('vi', $visi);

		// Misi 
		$misi = $this->m_profilsekolah->misi();
		$this->load->vars('mi', $misi);

		// StrukturORG 
		$strukturorg = $this->m_profilsekolah->strukturorg();
		$this->load->vars('so', $strukturorg);

		// List Siswa 
		$listsiswa = $this->m_listsiswa->listsiswa();
		$this->load->vars('lsi', $listsiswa);

		// Deklarasi Nilai
		$benar = 0;
		$salah = 0;
		$score = 0;
	}

    public function index(){
        redirect("/page/home");
    }

	function home(){		
		$this->load->view("header");
		$this->load->view("home");
		$this->load->view("footer");
	}

	function visimisi(){
		$this->load->view("header");
		$this->load->view("visimisi");
		$this->load->view("footer");
	}

	function strukturorganisasi(){
		$this->load->view("header");
		$this->load->view("strukturorg");
		$this->load->view("footer");
	}
	
	function test(){
		$sub_data = '';

		// Pagination Tags
		$config['base_url'] = base_url('page/test');
		$config['total_rows'] = $this->db->count_all('tb_listsiswa');
		$config['per_page'] = '10';

		//config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul style="margin-top:0px;" class="pagination m-b-5">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
		$offset = $this->uri->segment(3);

		$this->db->order_by("id_listsiswa", "desc");
		$query = $this->db->get('tb_listsiswa', $config['per_page'], $offset);
		$sub_data['query'] = $query->result_array();
		// End of Pagination

		$this->load->view("header");
		$this->load->view("test", $sub_data);
		$this->load->view("footer");
	}

	public function list_test(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginuser/');
		}

		$max_data = $this->m_listpertanyaanbiologi->max_data();
        $this->load->vars('maxdata', $max_data);  
        
		$this->load->view("header");
		$this->load->view("list_test");
		$this->load->view("footer");
	}

	public function masuktest_indo(){
		$max_data = $this->m_listpertanyaanindo->max_data();
        $this->load->vars('maxdata', $max_data);  

        $waktupanggil = $this->m_listpertanyaanindo->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil); 

		$this->load->view("header");
		$this->load->view("masuktest/masuktest_indo");
		$this->load->view("footer");
	}

	public function masuktest_inggris(){
		$max_data = $this->m_listpertanyaaninggris->max_data();
        $this->load->vars('maxdata', $max_data);   

        $waktupanggil = $this->m_listpertanyaanindo->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil); 

		$this->load->view("header");
		$this->load->view("masuktest/masuktest_inggris");
		$this->load->view("footer");
	}

	public function masuktest_mtk(){
		$max_data = $this->m_listpertanyaanmtk->max_data();
        $this->load->vars('maxdata', $max_data);   

        $waktupanggil = $this->m_listpertanyaanindo->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil); 

		$this->load->view("header");
		$this->load->view("masuktest/masuktest_mtk");
		$this->load->view("footer");
	}

	public function masuktest_biologi(){
		$max_data = $this->m_listpertanyaanbiologi->max_data();
        $this->load->vars('maxdata', $max_data);

        $waktupanggil = $this->m_listpertanyaanindo->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil); 

		$this->load->view("header");
		$this->load->view("masuktest/masuktest_biologi");
		$this->load->view("footer");
	}

	public function masuktest_fisika(){
		$max_data = $this->m_listpertanyaanfisika->max_data();
        $this->load->vars('maxdata', $max_data);

        $waktupanggil = $this->m_listpertanyaanindo->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil);   

		$this->load->view("header");
		$this->load->view("masuktest/masuktest_fisika");
		$this->load->view("footer");
	}

	public function masuktest_sosiologi(){
		$max_data = $this->m_listpertanyaansosiologi->max_data();
        $this->load->vars('maxdata', $max_data);    

        $waktupanggil = $this->m_listpertanyaanindo->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil); 

		$this->load->view("header");
		$this->load->view("masuktest/masuktest_sosiologi");
		$this->load->view("footer");
	}

	public function masuktest_geografi(){
		$max_data = $this->m_listpertanyaangeografi->max_data();
        $this->load->vars('maxdata', $max_data); 

        $waktupanggil = $this->m_listpertanyaanindo->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil); 

		$this->load->view("header");
		$this->load->view("masuktest/masuktest_geografi");
		$this->load->view("footer");
	}

	public function masuktest_kimia(){
		$max_data = $this->m_listpertanyaankimia->max_data();
        $this->load->vars('maxdata', $max_data);

        $waktupanggil = $this->m_listpertanyaanindo->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil);     

		$this->load->view("header");
		$this->load->view("masuktest/masuktest_kimia");
		$this->load->view("footer");
	}

	public function masuktest_ekonomi(){
		$max_data = $this->m_listpertanyaanekonomi->max_data();
        $this->load->vars('maxdata', $max_data);

        $waktupanggil = $this->m_listpertanyaanindo->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil);

		$this->load->view("header");
		$this->load->view("masuktest/masuktest_ekonomi");
		$this->load->view("footer");
	}

	public function masuktest_sejarah(){
		$max_data = $this->m_listpertanyaansejarah->max_data();
        $this->load->vars('maxdata', $max_data);

        $waktupanggil = $this->m_listpertanyaanindo->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil);

		$this->load->view("header");
		$this->load->view("masuktest/masuktest_sejarah");
		$this->load->view("footer");
	}

	public function testbiologi_mulai($idpertanyaan = ''){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginuser/');
		}

		// waktu dan tanggal
		$tanggal = date('Y-m-d');
		$jam	= date('H:i:s');
		$this->load->vars('tanggal', $tanggal);
		$this->load->vars('jam', $jam);

        $max_data = $this->m_listpertanyaanbiologi->max_data();
        $this->load->vars('maxdata', $max_data);   

        $waktupanggil = $this->m_listpertanyaanbiologi->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil);      

        	if($this->input->post()){    
        		// Score
	        	$score = $this->session->userdata('score');
	        	$this->load->vars('score', $score);

	        	// Benar
	        	$benar = $this->session->userdata('benar');
	        	$this->load->vars('benar', $benar);

	        	//Salah
	        	$salah = $this->session->userdata('salah');
	        	$this->load->vars('salah', $salah);

	        	$jawaban = $this->input->post('jawab');	
	            $pertanyaan = $this->m_listpertanyaanbiologi->get_pertanyaan($idpertanyaan);            
	            $this->load->vars('loo', $pertanyaan);
	            
	            // Pengaturan Score
				$aturscorebiologi = $this->m_listpertanyaanbiologi->aturscorebiologi();
				$scorenya = $aturscorebiologi->score;

	            if($jawaban==$this->input->post('jawabasli')){
	                $this->session->set_userdata('score', $score + $scorenya);
	                $this->session->set_userdata('benar', $benar + 1);
	            }else{
	            	$this->session->set_userdata('salah', $salah + 1);
	            }

	            $data['pertanyaan'] 			= $pertanyaan;
	            $data['pertanyaan_selanjutnya'] = $idpertanyaan+1;
	            $this->load->view("header");
				$this->load->view("test/index_testbiologi", $data);
				$this->load->view("footer");
	    	}else{
	    		$pertanyaan = $this->m_listpertanyaanbiologi->get_pertanyaan(1);
	   			$this->load->vars('loo', $pertanyaan);

	       		$data['pertanyaan']				= $pertanyaan;
	       		$data['pertanyaan_selanjutnya'] = 2;
	       		$this->load->view("header");
				$this->load->view("test/index_testbiologi", $data);
				$this->load->view("footer");
	    	}
	}

	public function testsejarah_mulai($idpertanyaan = ''){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginuser/');
		}

		// waktu dan tanggal
		$tanggal = date('Y-m-d');
		$jam	= date('H:i:s');
		$this->load->vars('tanggal', $tanggal);
		$this->load->vars('jam', $jam);

        $max_data = $this->m_listpertanyaansejarah->max_data();
        $this->load->vars('maxdata', $max_data);    

        $waktupanggil = $this->m_listpertanyaansejarah->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil);   

        	if($this->input->post()){    
        		// Score
	        	$score = $this->session->userdata('score');
	        	$this->load->vars('score', $score);

	        	// Benar
	        	$benar = $this->session->userdata('benar');
	        	$this->load->vars('benar', $benar);

	        	//Salah
	        	$salah = $this->session->userdata('salah');
	        	$this->load->vars('salah', $salah);

	        	$jawaban = $this->input->post('jawab');	
	            $pertanyaan = $this->m_listpertanyaansejarah->get_pertanyaan($idpertanyaan);            
	            $this->load->vars('loo', $pertanyaan);
	            
	            if($jawaban==$this->input->post('jawabasli')){
	                $this->session->set_userdata('score', $score + 10);
	                $this->session->set_userdata('benar', $benar + 1);
	            }else{
	            	$this->session->set_userdata('salah', $salah + 1);
	            }

	            $data['pertanyaan'] 			= $pertanyaan;
	            $data['pertanyaan_selanjutnya'] = $idpertanyaan+1;
	            $this->load->view("header");
				$this->load->view("test/index_testsejarah", $data);
				$this->load->view("footer");
	    	}else{
	    		$pertanyaan = $this->m_listpertanyaansejarah->get_pertanyaan(1);
	   			$this->load->vars('loo', $pertanyaan);

	       		$data['pertanyaan']				= $pertanyaan;
	       		$data['pertanyaan_selanjutnya'] = 2;
	       		$this->load->view("header");
				$this->load->view("test/index_testsejarah", $data);
				$this->load->view("footer");
	    	}
	}

	public function testekonomi_mulai($idpertanyaan = ''){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginuser/');
		}

		// waktu dan tanggal
		$tanggal = date('Y-m-d');
		$jam	= date('H:i:s');
		$this->load->vars('tanggal', $tanggal);
		$this->load->vars('jam', $jam);

        $max_data = $this->m_listpertanyaanekonomi->max_data();
        $this->load->vars('maxdata', $max_data);      

        $waktupanggil = $this->m_listpertanyaanekonomi->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil);  

        	if($this->input->post()){    
        		// Score
	        	$score = $this->session->userdata('score');
	        	$this->load->vars('score', $score);

	        	// Benar
	        	$benar = $this->session->userdata('benar');
	        	$this->load->vars('benar', $benar);

	        	//Salah
	        	$salah = $this->session->userdata('salah');
	        	$this->load->vars('salah', $salah);

	        	$jawaban = $this->input->post('jawab');	
	            $pertanyaan = $this->m_listpertanyaanekonomi->get_pertanyaan($idpertanyaan);            
	            $this->load->vars('loo', $pertanyaan);
	            
	            // Pengaturan Score
				$aturscoresejarah = $this->m_listpertanyaansejarah->aturscoresejarah();
				$scorenya = $aturscoresejarah->score;

	            // Pengaturan Score
				$aturscoreekonomi = $this->m_listpertanyaanekonomi->aturscoreekonomi();
				$scorenya = $aturscoreekonomi->score;

	            if($jawaban==$this->input->post('jawabasli')){
	                $this->session->set_userdata('score', $score + $scorenya);
	                $this->session->set_userdata('benar', $benar + 1);
	            }else{
	            	$this->session->set_userdata('salah', $salah + 1);
	            }

	            $data['pertanyaan'] 			= $pertanyaan;
	            $data['pertanyaan_selanjutnya'] = $idpertanyaan+1;
	            $this->load->view("header");
				$this->load->view("test/index_testekonomi", $data);
				$this->load->view("footer");
	    	}else{
	    		$pertanyaan = $this->m_listpertanyaanekonomi->get_pertanyaan(1);
	   			$this->load->vars('loo', $pertanyaan);

	       		$data['pertanyaan']				= $pertanyaan;
	       		$data['pertanyaan_selanjutnya'] = 2;
	       		$this->load->view("header");
				$this->load->view("test/index_testekonomi", $data);
				$this->load->view("footer");
	    	}
	}

	public function testkimia_mulai($idpertanyaan = ''){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginuser/');
		}

		// waktu dan tanggal
		$tanggal = date('Y-m-d');
		$jam	= date('H:i:s');
		$this->load->vars('tanggal', $tanggal);
		$this->load->vars('jam', $jam);

        $max_data = $this->m_listpertanyaankimia->max_data();
        $this->load->vars('maxdata', $max_data);   

        $waktupanggil = $this->m_listpertanyaankimia->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil);      

        	if($this->input->post()){    
        		// Score
	        	$score = $this->session->userdata('score');
	        	$this->load->vars('score', $score);

	        	// Benar
	        	$benar = $this->session->userdata('benar');
	        	$this->load->vars('benar', $benar);

	        	//Salah
	        	$salah = $this->session->userdata('salah');
	        	$this->load->vars('salah', $salah);

	        	$jawaban = $this->input->post('jawab');	
	            $pertanyaan = $this->m_listpertanyaankimia->get_pertanyaan($idpertanyaan);            
	            $this->load->vars('loo', $pertanyaan);
	            
	            // Pengaturan Score
				$aturscorekimia = $this->m_listpertanyaankimia->aturscorekimia();
				$scorenya = $aturscorekimia->score;

	            if($jawaban==$this->input->post('jawabasli')){
	                $this->session->set_userdata('score', $score + $scorenya);
	                $this->session->set_userdata('benar', $benar + 1);
	            }else{
	            	$this->session->set_userdata('salah', $salah + 1);
	            }

	            $data['pertanyaan'] 			= $pertanyaan;
	            $data['pertanyaan_selanjutnya'] = $idpertanyaan+1;
	            $this->load->view("header");
				$this->load->view("test/index_testkimia", $data);
				$this->load->view("footer");
	    	}else{
	    		$pertanyaan = $this->m_listpertanyaankimia->get_pertanyaan(1);
	   			$this->load->vars('loo', $pertanyaan);

	       		$data['pertanyaan']				= $pertanyaan;
	       		$data['pertanyaan_selanjutnya'] = 2;
	       		$this->load->view("header");
				$this->load->view("test/index_testkimia", $data);
				$this->load->view("footer");
	    	}
	}

	public function testfisika_mulai($idpertanyaan = ''){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginuser/');
		}

		// waktu dan tanggal
		$tanggal = date('Y-m-d');
		$jam	= date('H:i:s');
		$this->load->vars('tanggal', $tanggal);
		$this->load->vars('jam', $jam);

        $max_data = $this->m_listpertanyaanfisika->max_data();
        $this->load->vars('maxdata', $max_data);

        $waktupanggil = $this->m_listpertanyaanfisika->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil);        

        	if($this->input->post()){    
        		// Score
	        	$score = $this->session->userdata('score');
	        	$this->load->vars('score', $score);

	        	// Benar
	        	$benar = $this->session->userdata('benar');
	        	$this->load->vars('benar', $benar);

	        	//Salah
	        	$salah = $this->session->userdata('salah');
	        	$this->load->vars('salah', $salah);

	        	$jawaban = $this->input->post('jawab');	
	            $pertanyaan = $this->m_listpertanyaanfisika->get_pertanyaan($idpertanyaan);            
	            $this->load->vars('loo', $pertanyaan);
	            
	            // Pengaturan Score
				$aturscorefisika= $this->m_listpertanyaanfisika->aturscorefisika();
				$scorenya = $aturscorefisika->score;

	            if($jawaban==$this->input->post('jawabasli')){
	                $this->session->set_userdata('score', $score + $scorenya);
	                $this->session->set_userdata('benar', $benar + 1);
	            }else{
	            	$this->session->set_userdata('salah', $salah + 1);
	            }

	            $data['pertanyaan'] 			= $pertanyaan;
	            $data['pertanyaan_selanjutnya'] = $idpertanyaan+1;
	            $this->load->view("header");
				$this->load->view("test/index_testfisika", $data);
				$this->load->view("footer");
	    	}else{
	    		$pertanyaan = $this->m_listpertanyaanfisika->get_pertanyaan(1);
	   			$this->load->vars('loo', $pertanyaan);

	       		$data['pertanyaan']				= $pertanyaan;
	       		$data['pertanyaan_selanjutnya'] = 2;
	       		$this->load->view("header");
				$this->load->view("test/index_testfisika", $data);
				$this->load->view("footer");
	    	}
	}

	public function testsosiologi_mulai($idpertanyaan = ''){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginuser/');
		}

		// waktu dan tanggal
		$tanggal = date('Y-m-d');
		$jam	= date('H:i:s');
		$this->load->vars('tanggal', $tanggal);
		$this->load->vars('jam', $jam);

        $max_data = $this->m_listpertanyaansosiologi->max_data();
        $this->load->vars('maxdata', $max_data);   

        $waktupanggil = $this->m_listpertanyaansosiologi->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil);      

        	if($this->input->post()){    
        		// Score
	        	$score = $this->session->userdata('score');
	        	$this->load->vars('score', $score);

	        	// Benar
	        	$benar = $this->session->userdata('benar');
	        	$this->load->vars('benar', $benar);

	        	//Salah
	        	$salah = $this->session->userdata('salah');
	        	$this->load->vars('salah', $salah);

	        	$jawaban = $this->input->post('jawab');	
	            $pertanyaan = $this->m_listpertanyaansosiologi->get_pertanyaan($idpertanyaan);            
	            $this->load->vars('loo', $pertanyaan);
	            
	            // Pengaturan Score
				$aturscoresosiologi = $this->m_listpertanyaansosiologi->aturscoresosiologi();
				$scorenya = $aturscoresosiologi->score;

	            if($jawaban==$this->input->post('jawabasli')){
	                $this->session->set_userdata('score', $score + $scorenya);
	                $this->session->set_userdata('benar', $benar + 1);
	            }else{
	            	$this->session->set_userdata('salah', $salah + 1);
	            }

	            $data['pertanyaan'] 			= $pertanyaan;
	            $data['pertanyaan_selanjutnya'] = $idpertanyaan+1;
	            $this->load->view("header");
				$this->load->view("test/index_testsosiologi", $data);
				$this->load->view("footer");
	    	}else{
	    		$pertanyaan = $this->m_listpertanyaansosiologi->get_pertanyaan(1);
	   			$this->load->vars('loo', $pertanyaan);

	       		$data['pertanyaan']				= $pertanyaan;
	       		$data['pertanyaan_selanjutnya'] = 2;
	       		$this->load->view("header");
				$this->load->view("test/index_testsosiologi", $data);
				$this->load->view("footer");
	    	}
	}

	public function testgeografi_mulai($idpertanyaan = ''){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginuser/');
		}

		// waktu dan tanggal
		$tanggal = date('Y-m-d');
		$jam	= date('H:i:s');
		$this->load->vars('tanggal', $tanggal);
		$this->load->vars('jam', $jam);

        $max_data = $this->m_listpertanyaangeografi->max_data();
        $this->load->vars('maxdata', $max_data);        

        $waktupanggil = $this->m_listpertanyaangeografi->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil);  

        	if($this->input->post()){    
        		// Score
	        	$score = $this->session->userdata('score');
	        	$this->load->vars('score', $score);

	        	// Benar
	        	$benar = $this->session->userdata('benar');
	        	$this->load->vars('benar', $benar);

	        	//Salah
	        	$salah = $this->session->userdata('salah');
	        	$this->load->vars('salah', $salah);

	        	$jawaban = $this->input->post('jawab');	
	            $pertanyaan = $this->m_listpertanyaangeografi->get_pertanyaan($idpertanyaan);            
	            $this->load->vars('loo', $pertanyaan);
	            
	            // Pengaturan Score
				$aturscoregeografi = $this->m_listpertanyaangeografi->aturscoregeografi();
				$scorenya = $aturscoregeografi->score;

	            if($jawaban==$this->input->post('jawabasli')){
	                $this->session->set_userdata('score', $score + $scorenya);
	                $this->session->set_userdata('benar', $benar + 1);
	            }else{
	            	$this->session->set_userdata('salah', $salah + 1);
	            }

	            $data['pertanyaan'] 			= $pertanyaan;
	            $data['pertanyaan_selanjutnya'] = $idpertanyaan+1;
	            $this->load->view("header");
				$this->load->view("test/index_testgeografi", $data);
				$this->load->view("footer");
	    	}else{
	    		$pertanyaan = $this->m_listpertanyaangeografi->get_pertanyaan(1);
	   			$this->load->vars('loo', $pertanyaan);

	       		$data['pertanyaan']				= $pertanyaan;
	       		$data['pertanyaan_selanjutnya'] = 2;
	       		$this->load->view("header");
				$this->load->view("test/index_testgeografi", $data);
				$this->load->view("footer");
	    	}
	}

	public function testindo_mulai($idpertanyaan = ''){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginuser/');
		}

		// waktu dan tanggal
		$tanggal = date('Y-m-d');
		$jam	= date('H:i:s');
		$this->load->vars('tanggal', $tanggal);
		$this->load->vars('jam', $jam);

        $max_data = $this->m_listpertanyaanindo->max_data();
        $this->load->vars('maxdata', $max_data);   

        $waktupanggil = $this->m_listpertanyaanindo->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil);     

        	if($this->input->post()){    
        		// Score
	        	$score = $this->session->userdata('score');
	        	$this->load->vars('score', $score);

	        	// Benar
	        	$benar = $this->session->userdata('benar');
	        	$this->load->vars('benar', $benar);

	        	//Salah
	        	$salah = $this->session->userdata('salah');
	        	$this->load->vars('salah', $salah);

	        	// Array Benar dan Salah
	        	//$array_benar = $this->session->userdata('array_benar');
	        	//$this->load->vars('arraybenar', $array_benar);
	        	//$array_salah = $this->session->userdata('array_salah');
	        	//$this->load->vars('arraysalah', $array_salah);

	        	$jawaban = $this->input->post('jawab');	
	            $pertanyaan = $this->m_listpertanyaanindo->get_pertanyaan($idpertanyaan);            
	            $this->load->vars('loo', $pertanyaan);

	            // Pengaturan Score
	            $aturscoreindo = $this->m_listpertanyaanindo->aturscoreindo();
	            $scorenya = $aturscoreindo->score;

	            if($jawaban==$this->input->post('jawabasli')){
	            	// Yang Benar
	        		$array_benar[] = $idpertanyaan;

	                $this->session->set_userdata('score', $score + $scorenya);
	                $this->session->set_userdata('benar', $benar + 1);	 
	                //$this->session->set_userdata('array_benar', $array_benar);
	            }else{
	            	// Yang Salah
	        		$array_salah[] = $idpertanyaan;

	            	$this->session->set_userdata('salah', $salah + 1);	
	            	//$this->session->set_userdata('array_salah', $array_salah);
	            }

	            $data['pertanyaan'] 			= $pertanyaan;
	            $data['pertanyaan_selanjutnya'] = $idpertanyaan+1;
	            $this->load->view("header");
				$this->load->view("test/index_testindo", $data);
				$this->load->view("footer");
	    	}else{
	    		$pertanyaan = $this->m_listpertanyaanindo->get_pertanyaan(1);
	   			$this->load->vars('loo', $pertanyaan);

	       		$data['pertanyaan']				= $pertanyaan;
	       		$data['pertanyaan_selanjutnya'] = 2;
	       		$this->load->view("header");
				$this->load->view("test/index_testindo", $data);
				$this->load->view("footer");
	    	}
	}

	public function testinggris_mulai($idpertanyaan = ''){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginuser/');
		}

		// waktu dan tanggal
		$tanggal = date('Y-m-d');
		$jam	= date('H:i:s');
		$this->load->vars('tanggal', $tanggal);
		$this->load->vars('jam', $jam);

        $max_data = $this->m_listpertanyaaninggris->max_data();
        $this->load->vars('maxdata', $max_data);   

        $waktupanggil = $this->m_listpertanyaaninggris->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil);     

        	if($this->input->post()){    
        		// Score
	        	$score = $this->session->userdata('score');
	        	$this->load->vars('score', $score);

	        	// Benar
	        	$benar = $this->session->userdata('benar');
	        	$this->load->vars('benar', $benar);

	        	//Salah
	        	$salah = $this->session->userdata('salah');
	        	$this->load->vars('salah', $salah);

	        	$jawaban = $this->input->post('jawab');	
	            $pertanyaan = $this->m_listpertanyaaninggris->get_pertanyaan($idpertanyaan);            
	            $this->load->vars('loo', $pertanyaan);

	            // Pengaturan Score
				$aturscoreinggris = $this->m_listpertanyaaninggris->aturscoreinggris();
				$scorenya = $aturscoreinggris->score;
	            
	            if($jawaban==$this->input->post('jawabasli')){
	                $this->session->set_userdata('score', $score + $scorenya);
	                $this->session->set_userdata('benar', $benar + 1);
	            }else{
	            	$this->session->set_userdata('salah', $salah + 1);
	            }

	            $data['pertanyaan'] 			= $pertanyaan;
	            $data['pertanyaan_selanjutnya'] = $idpertanyaan+1;
	            $this->load->view("header");
				$this->load->view("test/index_testinggris", $data);
				$this->load->view("footer");
	    	}else{
	    		$pertanyaan = $this->m_listpertanyaaninggris->get_pertanyaan(1);
	   			$this->load->vars('loo', $pertanyaan);

	       		$data['pertanyaan']				= $pertanyaan;
	       		$data['pertanyaan_selanjutnya'] = 2;
	       		$this->load->view("header");
				$this->load->view("test/index_testinggris", $data);
				$this->load->view("footer");
	    	}
	}

	public function testmtk_mulai($idpertanyaan = ''){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !== TRUE){
			redirect('loginuser/');
		}

		// waktu dan tanggal
		$tanggal = date('Y-m-d');
		$jam	= date('H:i:s');
		$this->load->vars('tanggal', $tanggal);
		$this->load->vars('jam', $jam);

        $max_data = $this->m_listpertanyaanmtk->max_data();
        $this->load->vars('maxdata', $max_data);  

        $waktupanggil = $this->m_listpertanyaanmtk->waktupanggil();
        $this->load->vars('waktupanggil', $waktupanggil);      

        	if($this->input->post()){    
        		// Score
	        	$score = $this->session->userdata('score');
	        	$this->load->vars('score', $score);

	        	// Benar
	        	$benar = $this->session->userdata('benar');
	        	$this->load->vars('benar', $benar);

	        	//Salah
	        	$salah = $this->session->userdata('salah');
	        	$this->load->vars('salah', $salah);

	        	$jawaban = $this->input->post('jawab');	
	            $pertanyaan = $this->m_listpertanyaanmtk->get_pertanyaan($idpertanyaan);            
	            $this->load->vars('loo', $pertanyaan);
	            
	            // Pengaturan Score
				$aturscoremtk = $this->m_listpertanyaanmtk>aturscoremtk();
				$scorenya = $aturscoremtk->score;

	            if($jawaban==$this->input->post('jawabasli')){
	                $this->session->set_userdata('score', $score + $scorenya);
	                $this->session->set_userdata('benar', $benar + 1);
	            }else{
	            	$this->session->set_userdata('salah', $salah + 1);
	            }

	            $data['pertanyaan'] 			= $pertanyaan;
	            $data['pertanyaan_selanjutnya'] = $idpertanyaan+1;
	            $this->load->view("header");
				$this->load->view("test/index_testmtk", $data);
				$this->load->view("footer");
	    	}else{
	    		$pertanyaan = $this->m_listpertanyaanmtk->get_pertanyaan(1);
	   			$this->load->vars('loo', $pertanyaan);

	       		$data['pertanyaan']				= $pertanyaan;
	       		$data['pertanyaan_selanjutnya'] = 2;
	       		$this->load->view("header");
				$this->load->view("test/index_testmtk", $data);
				$this->load->view("footer");
	    	}
	}

	public function sessionbaru_biologi(){
		$this->m_listpertanyaanbiologi->tambah_historybiologi();

		// Hapus session data
		$lepassesi = array(
				'score' => '', 
				'benar' => '',
				'salah' => ''
			);
		$this->session->unset_userdata($lepassesi);
		redirect('page/list_test');
	}

	public function sessionbaru_sosiologi(){
		$this->m_listpertanyaansosiologi->tambah_historysosiologi();

		// Hapus session data
		$lepassesi = array(
				'score' => '', 
				'benar' => '',
				'salah' => ''
			);
		$this->session->unset_userdata($lepassesi);
		redirect('page/list_test');
	}

	public function sessionbaru_geografi(){
		$this->m_listpertanyaangeografi->tambah_historygeografi();

		// Hapus session data
		$lepassesi = array(
				'score' => '', 
				'benar' => '',
				'salah' => ''
			);
		$this->session->unset_userdata($lepassesi);
		redirect('page/list_test');
	}

	public function sessionbaru_fisika(){
		$this->m_listpertanyaanfisika->tambah_historyfisika();

		// Hapus session data
		$lepassesi = array(
				'score' => '', 
				'benar' => '',
				'salah' => ''
			);
		$this->session->unset_userdata($lepassesi);
		redirect('page/list_test');
	}

	public function sessionbaru_indo1(){
		$this->m_listpertanyaanindo->tambah_historyindo();

		// Hapus session data
		$lepassesi = array(
				'score' => '', 
				'benar' => '',
				'salah' => ''
			);
		$this->session->unset_userdata($lepassesi);
		redirect('page/list_test');
	}

	public function sessionbaru_indo2(){
		$this->m_listpertanyaanindo->tambah_historyindo();

		// Hapus session data
		$lepassesi = array(
				'score' => '', 
				'benar' => '',
				'salah' => ''
			);
		$this->session->unset_userdata($lepassesi);
		redirect('page/list_test');
	}

	public function sessionbaru_inggris1(){
		$this->m_listpertanyaaninggris->tambah_historyinggris();

		// Hapus session data
		$lepassesi = array(
				'score' => '', 
				'benar' => '',
				'salah' => ''
			);
		$this->session->unset_userdata($lepassesi);
		redirect('page/list_test');
	}

	public function sessionbaru_inggris2(){
		$this->m_listpertanyaaninggris->tambah_historyinggris();

		// Hapus session data
		$lepassesi = array(
				'score' => '', 
				'benar' => '',
				'salah' => ''
			);
		$this->session->unset_userdata($lepassesi);
		redirect('page/list_test');
	}

	public function sessionbaru_sejarah(){
		$this->m_listpertanyaansejarah->tambah_historysejarah();

		// Hapus session data
		$lepassesi = array(
				'score' => '', 
				'benar' => '',
				'salah' => ''
			);
		$this->session->unset_userdata($lepassesi);
		redirect('page/list_test');
	}

	public function sessionbaru_mtk1(){
		$this->m_listpertanyaanmtk->tambah_historymtk();

		// Hapus session data
		$lepassesi = array(
				'score' => '', 
				'benar' => '',
				'salah' => ''
			);
		$this->session->unset_userdata($lepassesi);
		redirect('page/list_test');
	}

	public function sessionbaru_mtk2(){
		$this->m_listpertanyaanmtk->tambah_historymtk();

		// Hapus session data
		$lepassesi = array(
				'score' => '', 
				'benar' => '',
				'salah' => ''
			);
		$this->session->unset_userdata($lepassesi);
		redirect('page/list_test');
	}

	public function sessionbaru_kimia(){
		$this->m_listpertanyaankimia->tambah_historykimia();

		// Hapus session data
		$lepassesi = array(
				'score' => '', 
				'benar' => '',
				'salah' => ''
			);
		$this->session->unset_userdata($lepassesi);
		redirect('page/list_test');
	}

	public function sessionbaru_ekonomi(){
		$this->m_listpertanyaanekonomi->tambah_historyekonomi();

		// Hapus session data
		$lepassesi = array(
				'score' => '', 
				'benar' => '',
				'salah' => ''
			);
		$this->session->unset_userdata($lepassesi);
		redirect('page/list_test');
	}

	public function kembali_test(){
		// Hapus session data
		$lepassesi = array(
				'score' => '', 
				'benar' => '',
				'salah' => ''
			);
		$this->session->unset_userdata($lepassesi);
		redirect('page/list_test');
	}

	// Start Logout
	function logout(){
		$this->session->sess_destroy();
		redirect('page/test');
	}
	// End Logout
	
	function backup(){
		$this->load->helper('download');
		$tanggal=date('Ymd-His');
		$namaFile=$tanggal.'.sql.zip';
		$this->load->dbutil();
		$backup=& $this->dbutil->backup();
		force_download($namaFile, $backup);
		$this->load->view("header");
		$this->load->view("home");
		$this->load->view("footer");
	}
	
	function restoredb(){
	   
	}  
}