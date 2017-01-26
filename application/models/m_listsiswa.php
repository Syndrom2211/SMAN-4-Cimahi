<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_listsiswa extends CI_Model{
	function index(){
		// KOSONG
	}

	function listsiswa(){
		$this->db->order_by('id_listsiswa', 'desc');
		$query = $this->db->get('tb_listsiswa');
		return $query->result();
	}

	// Start Edit
	function edit_listsiswa($id){
		$this->db->where('id_listsiswa', $id);
		$query = $this->db->get('tb_listsiswa');
		return $query;
	}				
		
	function prosesedit_listsiswa(){
		$update_listsiswa = array(
			'nis_siswa' => $this->input->post('nis_siswa'),
			'nama_siswa' => $this->input->post('nama_siswa'),
			'username_siswa' => $this->input->post('username_siswa'),
			'password_siswa' => md5($this->input->post('password_siswa')),
			'kelas_siswa' => $this->input->post("kelas_siswa"),
			'jurusan_siswa' => $this->input->post('jurusan_siswa')
		);
		$id = $this->input->post('id_listsiswa');
		$this->db->where('id_listsiswa', $id);
		$this->db->update('tb_listsiswa', $update_listsiswa);
	}
	// End Edit

	// Start Hapus
	function hapus_listsiswa($id){
		$this->db->where("id_listsiswa", $id);
		$this->db->delete("tb_listsiswa");
	}

	// Start Tambah	
	function tambah_listsiswa(){
		$tambah_listsiswa = array(
			"nis_siswa" => $this->input->post("nis_siswa"),
			"nama_siswa" => $this->input->post("nama_siswa"),
			"username_siswa" => $this->input->post("username_siswa"),
			"password_siswa" => md5($this->input->post("password_siswa")),
			"kelas_siswa" => $this->input->post("kelas_siswa"),
			"jurusan_siswa" => $this->input->post("jurusan_siswa")
		);	

		$kueris = $this->db->query('SELECT nis_siswa FROM tb_listsiswa');
		$jkjkjk = $this->input->post('nis_siswa');

		// Menghindari Redudansi
		foreach($kueris->result() as $row){
			$gak = $row->nis_siswa;
			if($jkjkjk==$gak){
				echo "<script>alert('Gagal tambah, NIS sudah ada');window.location.href='listsiswa';</script>";
				return FALSE;
			}else if($jkjkjk!=$gak){
				$tambah = $this->db->insert("tb_listsiswa", $tambah_listsiswa);
				return $tambah;
			}	
		}			
	}
}