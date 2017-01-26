<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_listpertanyaanindo extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

    public function aturscoreindo(){
        $aturscoreindo = $this->db->query('SELECT * FROM tb_score WHERE id_score = 1');
        $datascore = $aturscoreindo->result();
        return $datascore[0];
    }

    public function max_data(){
    	$datamax = $this->db->query('SELECT * FROM tb_listpertanyaanindo');
    	return $datamax->num_rows();
    }

    public function waktupanggil(){
    	$this->db->select('*');
        $this->db->from('tb_waktutest');
        $this->db->where('id_waktu', 1);
		return $this->db->get()->result_array();
	}

    public function tambah_historyindo(){
		$tambah_historyindo = array(
			"nis_siswa" => $this->input->post("nis_siswa"),
			"jurusan_siswa" => $this->input->post("jurusan_siswa"),
			"kelas_siswa" => $this->input->post("kelas_siswa"),
			"tanggal" => $this->input->post("tanggal"),
			"jam" => $this->input->post("jam"),
			"jumlah_pertanyaan" => $this->input->post("maxdata"),
			"benar" => $this->input->post("benar"),
			"salah" => $this->input->post("salahnya"),
			"score" => $this->input->post("score")
		);		

		$tambah = $this->db->insert("tb_historyindo", $tambah_historyindo);
		return $tambah;
    }

    public function get_pertanyaan($idpertanyaan){   
    	//after retrieving add to session
		// $previous_ids = $this->session->userdata('previous_ids');
		// $previous_ids[] = $idpertanyaan;

		// $this->session->set_userdata('previous_ids', $previous_ids);
    	// $this->db->where_not_in('id_pertanyaan', $previous_ids);

		$this->db->select('*');
        $this->db->from('tb_listpertanyaanindo');
        $this->db->order_by('id_pertanyaan', 'RANDOM');
		$this->db->limit(1);
		return $this->db->get()->result_array();

		/*
		$this->db->select('*');
        $this->db->from('tb_listpertanyaanindo');
        $this->db->order_by('id_pertanyaan', 'RANDOM');
        $this->db->limit(1);
        return $this->db->get()->result_array();
		*/

		/*
    	$pertanyaan = $this->session->userdata('pertanyaan');
    	$ganda_a = $this->session->userdata('ganda_a');
    	$ganda_b = $this->session->userdata('ganda_b');
    	$ganda_c = $this->session->userdata('ganda_c');
    	$ganda_d = $this->session->userdata('ganda_d');

    	$data = array(
    			'pertanyaan' => $pertanyaan,
    			'ganda_a' => $ganda_a,
    			'ganda_b' => $ganda_b,
    			'ganda_c' => $ganda_c,
    			'ganda_d' => $ganda_d
    		);

        if(!isset($data)){
        	$query = $this->db->query("SELECT * FROM tb_listpertanyaanipa ORDER BY rand()");
        	$c = 0;
        	while($c<$query){
        		$c++;
        		$data[] = $this->session->set_userdata($data);
        		return $data->result_array();
        	}
        }
    	
        if(!isset($_SESSION['soal'])){
        	$query = $this->db->query("SELECT * FROM tb_listpertanyaanipa ORDER BY rand()");
        	$c = 0;
        	$_SESSION['soal'] = array();
        	while($c<-$query){
        		$c++;
        		$_SESSION['soal'][] = array($query['pertanyaan'],$query['ganda_a'],$query['ganda_b'],$query['ganda_c'],$query['ganda_d']);
        		return $query->result_array();
        	}
        }else{

        }
        */        
        
    }
}