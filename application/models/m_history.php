<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_history extends CI_Model{
	function index(){
		// KOSONG
	}

	function historysejarah_satu(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 1);
		$query = $this->db->get('tb_historysejarah');
		return $query->result();
	}

	// Start Hapus
	function hapus_historysejarah_satu($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historysejarah");
	}

	function historysejarah_dua(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 2);
		$query = $this->db->get('tb_historysejarah');
		return $query->result();
	}

	// Start Hapus
	function hapus_historysejarah_dua($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historysejarah");
	}

	function historysejarah_tiga(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 3);
		$query = $this->db->get('tb_historysejarah');
		return $query->result();
	}

	// Start Hapus
	function hapus_historysejarah_tiga($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historysejarah");
	}

	function historykimia_satu(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 1);
		$query = $this->db->get('tb_historykimia');
		return $query->result();
	}

	// Start Hapus
	function hapus_historykimia_satu($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historykimia");
	}

	function historykimia_dua(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 2);
		$query = $this->db->get('tb_historykimia');
		return $query->result();
	}

	// Start Hapus
	function hapus_historykimia_dua($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historykimia");
	}

	function historykimia_tiga(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 3);
		$query = $this->db->get('tb_historykimia');
		return $query->result();
	}

	// Start Hapus
	function hapus_historykimia_tiga($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historykimia");
	}

	function historyekonomi_satu(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 1);
		$query = $this->db->get('tb_historyekonomi');
		return $query->result();
	}

	// Start Hapus
	function hapus_historyekonomi_satu($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historyekonomi");
	}

	function historyekonomi_dua(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 2);
		$query = $this->db->get('tb_historyekonomi');
		return $query->result();
	}

	// Start Hapus
	function hapus_historyekonomi_dua($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historyekonomi");
	}

	function historyekonomi_tiga(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 3);
		$query = $this->db->get('tb_historyekonomi');
		return $query->result();
	}

	// Start Hapus
	function hapus_historyekonomi_tiga($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historyekonomi");
	}

	function historysosiologi_satu(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 1);
		$query = $this->db->get('tb_historysosiologi');
		return $query->result();
	}

	// Start Hapus
	function hapus_historysosiologi_satu($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historysosiologi");
	}

	function historysosiologi_dua(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 2);
		$query = $this->db->get('tb_historysosiologi');
		return $query->result();
	}

	// Start Hapus
	function hapus_historysosiologi_dua($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historysosiologi");
	}

	function historysosiologi_tiga(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 3);
		$query = $this->db->get('tb_historysosiologi');
		return $query->result();
	}

	// Start Hapus
	function hapus_historysosiologi_tiga($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historysosiologi");
	}

	function historygeografi_satu(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 1);
		$query = $this->db->get('tb_historygeografi');
		return $query->result();
	}

	// Start Hapus
	function hapus_historygeografi_satu($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historygeografi");
	}

	function historygeografi_dua(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 2);
		$query = $this->db->get('tb_historygeografi');
		return $query->result();
	}

	// Start Hapus
	function hapus_historygeografi_dua($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historygeografi");
	}

	function historygeografi_tiga(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 3);
		$query = $this->db->get('tb_historygeografi');
		return $query->result();
	}

	// Start Hapus
	function hapus_historygeografi_tiga($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historygeografi");
	}

	function historybiologi_satu(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 1);
		$query = $this->db->get('tb_historybiologi');
		return $query->result();
	}

	// Start Hapus
	function hapus_historybiologi_satu($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historybiologi");
	}

	function historybiologi_dua(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 2);
		$query = $this->db->get('tb_historybiologi');
		return $query->result();
	}

	// Start Hapus
	function hapus_historybiologi_dua($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historybiologi");
	}

	function historybiologi_tiga(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 3);
		$query = $this->db->get('tb_historybiologi');
		return $query->result();
	}

	// Start Hapus
	function hapus_historybiologi_tiga($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historybiologi");
	}

	function historyfisika_satu(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 1);
		$query = $this->db->get('tb_historyfisika');
		return $query->result();
	}

	// Start Hapus
	function hapus_historyfisika_satu($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historyfisika");
	}

	function historyfisika_dua(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 2);
		$query = $this->db->get('tb_historyfisika');
		return $query->result();
	}

	// Start Hapus
	function hapus_historyfisika_dua($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historyfisika");
	}

	function historyfisika_tiga(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 3);
		$query = $this->db->get('tb_historyfisika');
		return $query->result();
	}

	// Start Hapus
	function hapus_historyfisika_tiga($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historyfisika");
	}

	function historyindo_satu(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 1);
		$query = $this->db->get('tb_historyindo');
		return $query->result();
	}

	// Start Hapus
	function hapus_historyindo_satu($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historyindo");
	}

	function historyindo_dua(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 2);
		$query = $this->db->get('tb_historyindo');
		return $query->result();
	}	

	// Start Hapus
	function hapus_historyindo_dua($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historyindo");
	}

	function historyindo_tiga(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 3);
		$query = $this->db->get('tb_historyindo');
		return $query->result();
	}	

	// Start Hapus
	function hapus_historyindo_tiga($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historyindo");
	}

	function historyinggris_satu(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 1);
		$query = $this->db->get('tb_historyinggris');
		return $query->result();
	}

	// Start Hapus
	function hapus_historyinggris_satu($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historyinggris");
	}

	function historyinggris_dua(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 2);
		$query = $this->db->get('tb_historyinggris');
		return $query->result();
	}

	// Start Hapus
	function hapus_historyinggris_dua($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historyinggris");
	}

	function historyinggris_tiga(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 3);
		$query = $this->db->get('tb_historyinggris');
		return $query->result();
	}

	// Start Hapus
	function hapus_historyinggris_tiga($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historyinggris");
	}

	function historymtk_satu(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 1);
		$query = $this->db->get('tb_historymtk');
		return $query->result();
	}

	// Start Hapus
	function hapus_historymtk_satu($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historymtk");
	}

	function historymtk_dua(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 2);
		$query = $this->db->get('tb_historymtk');
		return $query->result();
	}

	// Start Hapus
	function hapus_historymtk_dua($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historymtk");
	}

	function historymtk_tiga(){
		$this->db->order_by('tanggal', 'desc');
		$this->db->where('kelas_siswa', 3);
		$query = $this->db->get('tb_historymtk');
		return $query->result();
	}

	// Start Hapus
	function hapus_historymtk_tiga($jam){
		$this->db->where("jam", $jam);
		$this->db->delete("tb_historymtk");
	}

}