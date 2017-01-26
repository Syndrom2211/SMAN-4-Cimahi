<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_listpertanyaan extends CI_Model{
	function index(){
		// KOSONG
	}

	/************************ KIMIA ************************/
	function listpertanyaankimia(){
		$query = $this->db->get('tb_listpertanyaankimia');
		return $query->result();
	}
	
	// Start Edit
	function edit_listpertanyaankimia($id){
		$this->db->where('id_pertanyaan', $id);
		$query = $this->db->get('tb_listpertanyaankimia');
		return $query;
	}				
		
	function prosesedit_listpertanyaankimia(){
		$update_listpertanyaankimia = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'ganda_a' => $this->input->post('ganda_a'),
			'ganda_b' => $this->input->post('ganda_b'),
			'ganda_c' => $this->input->post('ganda_c'),
			'ganda_d' => $this->input->post('ganda_d'),
			'ganda_e' => $this->input->post('ganda_e'),
			'jawaban' => $this->input->post('jawaban')
		);
		$id = $this->input->post('id_pertanyaan');
		$this->db->where('id_pertanyaan', $id);
		$this->db->update('tb_listpertanyaankimia', $update_listpertanyaankimia);
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaankimia($id){
		$this->db->where("id_pertanyaan", $id);
		$this->db->delete("tb_listpertanyaankimia");
	}
	
	// Start Tambah	
	function tambah_listpertanyaankimia(){
		$tambah_listpertanyaankimia = array(
			"pertanyaan" => $this->input->post("pertanyaan"),
			"ganda_a" => $this->input->post("ganda_a"),
			"ganda_b" => $this->input->post("ganda_b"),
			"ganda_c" => $this->input->post("ganda_c"),
			"ganda_d" => $this->input->post("ganda_d"),
			"ganda_e" => $this->input->post("ganda_e"),
			"jawaban" => $this->input->post("jawaban")
		);		

		$tambah = $this->db->insert("tb_listpertanyaankimia", $tambah_listpertanyaankimia);
		return $tambah;
	}

	/************************ KIMIA ************************/

	/************************ SEJARAH ************************/
	function listpertanyaansejarah(){
		$query = $this->db->get('tb_listpertanyaansejarah');
		return $query->result();
	}
	
	// Start Edit
	function edit_listpertanyaansejarah($id){
		$this->db->where('id_pertanyaan', $id);
		$query = $this->db->get('tb_listpertanyaansejarah');
		return $query;
	}				
		
	function prosesedit_listpertanyaansejarah(){
		$update_listpertanyaansejarah = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'ganda_a' => $this->input->post('ganda_a'),
			'ganda_b' => $this->input->post('ganda_b'),
			'ganda_c' => $this->input->post('ganda_c'),
			'ganda_d' => $this->input->post('ganda_d'),
			'ganda_e' => $this->input->post('ganda_e'),
			'jawaban' => $this->input->post('jawaban')
		);
		$id = $this->input->post('id_pertanyaan');
		$this->db->where('id_pertanyaan', $id);
		$this->db->update('tb_listpertanyaansejarah', $update_listpertanyaansejarah);
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaansejarah($id){
		$this->db->where("id_pertanyaan", $id);
		$this->db->delete("tb_listpertanyaansejarah");
	}
	
	// Start Tambah	
	function tambah_listpertanyaansejarah(){
		$tambah_listpertanyaansejarah = array(
			"pertanyaan" => $this->input->post("pertanyaan"),
			"ganda_a" => $this->input->post("ganda_a"),
			"ganda_b" => $this->input->post("ganda_b"),
			"ganda_c" => $this->input->post("ganda_c"),
			"ganda_d" => $this->input->post("ganda_d"),
			"ganda_e" => $this->input->post("ganda_e"),
			"jawaban" => $this->input->post("jawaban")
		);		

		$tambah = $this->db->insert("tb_listpertanyaansejarah", $tambah_listpertanyaansejarah);
		return $tambah;
	}
	
	/************************ SEJARAH ************************/

	/************************ EKONOMI ************************/
	function listpertanyaanekonomi(){
		$query = $this->db->get('tb_listpertanyaanekonomi');
		return $query->result();
	}
	
	// Start Edit
	function edit_listpertanyaanekonomi($id){
		$this->db->where('id_pertanyaan', $id);
		$query = $this->db->get('tb_listpertanyaanekonomi');
		return $query;
	}				
		
	function prosesedit_listpertanyaanekonomi(){
		$update_listpertanyaanekonomi = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'ganda_a' => $this->input->post('ganda_a'),
			'ganda_b' => $this->input->post('ganda_b'),
			'ganda_c' => $this->input->post('ganda_c'),
			'ganda_d' => $this->input->post('ganda_d'),
			'ganda_e' => $this->input->post('ganda_e'),
			'jawaban' => $this->input->post('jawaban')
		);
		$id = $this->input->post('id_pertanyaan');
		$this->db->where('id_pertanyaan', $id);
		$this->db->update('tb_listpertanyaanekonomi', $update_listpertanyaanekonomi);
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaanekonomi($id){
		$this->db->where("id_pertanyaan", $id);
		$this->db->delete("tb_listpertanyaanekonomi");
	}
	
	// Start Tambah	
	function tambah_listpertanyaanekonomi(){
		$tambah_listpertanyaanekonomi = array(
			"pertanyaan" => $this->input->post("pertanyaan"),
			"ganda_a" => $this->input->post("ganda_a"),
			"ganda_b" => $this->input->post("ganda_b"),
			"ganda_c" => $this->input->post("ganda_c"),
			"ganda_d" => $this->input->post("ganda_d"),
			"ganda_e" => $this->input->post("ganda_e"),
			"jawaban" => $this->input->post("jawaban")
		);		

		$tambah = $this->db->insert("tb_listpertanyaanekonomi", $tambah_listpertanyaanekonomi);
		return $tambah;
	}
	
	/************************ EKONOMI ************************/

	/************************ BIOLOGI ************************/
	function listpertanyaanbiologi(){
		$query = $this->db->get('tb_listpertanyaanbiologi');
		return $query->result();
	}

	// Start Edit
	function edit_listpertanyaanbiologi($id){
		$this->db->where('id_pertanyaan', $id);
		$query = $this->db->get('tb_listpertanyaanbiologi');
		return $query;
	}				
		
	function prosesedit_listpertanyaanbiologi(){
		$update_listpertanyaanbiologi = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'ganda_a' => $this->input->post('ganda_a'),
			'ganda_b' => $this->input->post('ganda_b'),
			'ganda_c' => $this->input->post('ganda_c'),
			'ganda_d' => $this->input->post('ganda_d'),
			'ganda_e' => $this->input->post('ganda_e'),
			'jawaban' => $this->input->post('jawaban')
		);
		$id = $this->input->post('id_pertanyaan');
		$this->db->where('id_pertanyaan', $id);
		$this->db->update('tb_listpertanyaanbiologi', $update_listpertanyaanbiologi);
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaanbiologi($id){
		$this->db->where("id_pertanyaan", $id);
		$this->db->delete("tb_listpertanyaanbiologi");
	}
	
	// Start Tambah	
	function tambah_listpertanyaanbiologi(){
		$tambah_listpertanyaanbiologi = array(
			"pertanyaan" => $this->input->post("pertanyaan"),
			"ganda_a" => $this->input->post("ganda_a"),
			"ganda_b" => $this->input->post("ganda_b"),
			"ganda_c" => $this->input->post("ganda_c"),
			"ganda_d" => $this->input->post("ganda_d"),
			"ganda_e" => $this->input->post("ganda_e"),
			"jawaban" => $this->input->post("jawaban")
		);		

		$tambah = $this->db->insert("tb_listpertanyaanbiologi", $tambah_listpertanyaanbiologi);
		return $tambah;
	}
	/************************ BIOLOGI ************************/

	/************************ FISIKA ************************/
	function listpertanyaanfisika(){
		$query = $this->db->get('tb_listpertanyaanfisika');
		return $query->result();
	}

	
	// Start Edit
	function edit_listpertanyaanfisika($id){
		$this->db->where('id_pertanyaan', $id);
		$query = $this->db->get('tb_listpertanyaanfisika');
		return $query;
	}				
		
	function prosesedit_listpertanyaanfisika(){
		$update_listpertanyaanfisika = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'ganda_a' => $this->input->post('ganda_a'),
			'ganda_b' => $this->input->post('ganda_b'),
			'ganda_c' => $this->input->post('ganda_c'),
			'ganda_d' => $this->input->post('ganda_d'),
			'ganda_e' => $this->input->post('ganda_e'),
			'jawaban' => $this->input->post('jawaban')
		);
		$id = $this->input->post('id_pertanyaan');
		$this->db->where('id_pertanyaan', $id);
		$this->db->update('tb_listpertanyaanfisika', $update_listpertanyaanfisika);
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaanfisika($id){
		$this->db->where("id_pertanyaan", $id);
		$this->db->delete("tb_listpertanyaanfisika");
	}
	
	// Start Tambah	
	function tambah_listpertanyaanfisika(){
		$tambah_listpertanyaanfisika = array(
			"pertanyaan" => $this->input->post("pertanyaan"),
			"ganda_a" => $this->input->post("ganda_a"),
			"ganda_b" => $this->input->post("ganda_b"),
			"ganda_c" => $this->input->post("ganda_c"),
			"ganda_d" => $this->input->post("ganda_d"),
			"ganda_e" => $this->input->post("ganda_e"),
			"jawaban" => $this->input->post("jawaban")
		);		

		$tambah = $this->db->insert("tb_listpertanyaanfisika", $tambah_listpertanyaanfisika);
		return $tambah;
	}
	
	/************************ FISIKA ************************/

	/************************ SOSIOLOGI ************************/
	function listpertanyaansosiologi(){
		$query = $this->db->get('tb_listpertanyaansosiologi');
		return $query->result();
	}

	
	// Start Edit
	function edit_listpertanyaansosiologi($id){
		$this->db->where('id_pertanyaan', $id);
		$query = $this->db->get('tb_listpertanyaansosiologi');
		return $query;
	}				
		
	function prosesedit_listpertanyaansosiologi(){
		$update_listpertanyaansosiologi = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'ganda_a' => $this->input->post('ganda_a'),
			'ganda_b' => $this->input->post('ganda_b'),
			'ganda_c' => $this->input->post('ganda_c'),
			'ganda_d' => $this->input->post('ganda_d'),
			'ganda_e' => $this->input->post('ganda_e'),
			'jawaban' => $this->input->post('jawaban')
		);
		$id = $this->input->post('id_pertanyaan');
		$this->db->where('id_pertanyaan', $id);
		$this->db->update('tb_listpertanyaansosiologi', $update_listpertanyaansosiologi);
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaansosiologi($id){
		$this->db->where("id_pertanyaan", $id);
		$this->db->delete("tb_listpertanyaansosiologi");
	}
	
	// Start Tambah	
	function tambah_listpertanyaansosiologi(){
		$tambah_listpertanyaansosiologi = array(
			"pertanyaan" => $this->input->post("pertanyaan"),
			"ganda_a" => $this->input->post("ganda_a"),
			"ganda_b" => $this->input->post("ganda_b"),
			"ganda_c" => $this->input->post("ganda_c"),
			"ganda_d" => $this->input->post("ganda_d"),
			"ganda_e" => $this->input->post("ganda_e"),
			"jawaban" => $this->input->post("jawaban")
		);		

		$tambah = $this->db->insert("tb_listpertanyaansosiologi", $tambah_listpertanyaansosiologi);
		return $tambah;
	}
	
	
	/************************ SOSIOLOGI ************************/

	/************************ GEOGRAFI ************************/
	function listpertanyaangeografi(){
		$query = $this->db->get('tb_listpertanyaangeografi');
		return $query->result();
	}

	
	// Start Edit
	function edit_listpertanyaangeografi($id){
		$this->db->where('id_pertanyaan', $id);
		$query = $this->db->get('tb_listpertanyaangeografi');
		return $query;
	}				
		
	function prosesedit_listpertanyaangeografi(){
		$update_listpertanyaangeografi = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'ganda_a' => $this->input->post('ganda_a'),
			'ganda_b' => $this->input->post('ganda_b'),
			'ganda_c' => $this->input->post('ganda_c'),
			'ganda_d' => $this->input->post('ganda_d'),
			'ganda_e' => $this->input->post('ganda_e'),
			'jawaban' => $this->input->post('jawaban')
		);
		$id = $this->input->post('id_pertanyaan');
		$this->db->where('id_pertanyaan', $id);
		$this->db->update('tb_listpertanyaangeografi', $update_listpertanyaangeografi);
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaangeografi($id){
		$this->db->where("id_pertanyaan", $id);
		$this->db->delete("tb_listpertanyaangeografi");
	}
	
	// Start Tambah	
	function tambah_listpertanyaangeografi(){
		$tambah_listpertanyaangeografi = array(
			"pertanyaan" => $this->input->post("pertanyaan"),
			"ganda_a" => $this->input->post("ganda_a"),
			"ganda_b" => $this->input->post("ganda_b"),
			"ganda_c" => $this->input->post("ganda_c"),
			"ganda_d" => $this->input->post("ganda_d"),
			"ganda_e" => $this->input->post("ganda_e"),
			"jawaban" => $this->input->post("jawaban")
		);		

		$tambah = $this->db->insert("tb_listpertanyaangeografi", $tambah_listpertanyaangeografi);
		return $tambah;
	}
	
	
	/************************ GEOGRAFI ************************/

	/************************ INDO ************************/
	// INDO
	function listpertanyaanindo(){
		$query = $this->db->get('tb_listpertanyaanindo');
		return $query->result();
	}
		
	// Start Tambah	
	function tambah_listpertanyaanindo(){
		$tambah_listpertanyaanindo = array(
			"pertanyaan" => $this->input->post("pertanyaan"),
			"ganda_a" => $this->input->post("ganda_a"),
			"ganda_b" => $this->input->post("ganda_b"),
			"ganda_c" => $this->input->post("ganda_c"),
			"ganda_d" => $this->input->post("ganda_d"),
			"ganda_e" => $this->input->post("ganda_e"),
			"jawaban" => $this->input->post("jawaban")
		);		

		$tambah = $this->db->insert("tb_listpertanyaanindo", $tambah_listpertanyaanindo);
		return $tambah;
	}

	// Start Edit
	function edit_listpertanyaanindo($id){
		$this->db->where('id_pertanyaan', $id);
		$query = $this->db->get('tb_listpertanyaanindo');
		return $query;
	}				
		
	function prosesedit_listpertanyaanindo(){
		$update_listpertanyaanindo = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'ganda_a' => $this->input->post('ganda_a'),
			'ganda_b' => $this->input->post('ganda_b'),
			'ganda_c' => $this->input->post('ganda_c'),
			'ganda_d' => $this->input->post('ganda_d'),
			'ganda_e' => $this->input->post('ganda_e'),
			'jawaban' => $this->input->post('jawaban')
		);
		$id = $this->input->post('id_pertanyaan');
		$this->db->where('id_pertanyaan', $id);
		$this->db->update('tb_listpertanyaanindo', $update_listpertanyaanindo);
	}
	// End Edit
	
	// Start Hapus
	function hapus_listpertanyaanindo($id){
		$this->db->where("id_pertanyaan", $id);
		$this->db->delete("tb_listpertanyaanindo");
	}
	/************************ INDO ************************/

	/************************ INGGRIS ************************/
	function listpertanyaaninggris(){
		$query = $this->db->get('tb_listpertanyaaninggris');
		return $query->result();
	}

	// Start Tambah	
	function tambah_listpertanyaaninggris(){
		$tambah_listpertanyaaninggris = array(
			"pertanyaan" => $this->input->post("pertanyaan"),
			"ganda_a" => $this->input->post("ganda_a"),
			"ganda_b" => $this->input->post("ganda_b"),
			"ganda_c" => $this->input->post("ganda_c"),
			"ganda_d" => $this->input->post("ganda_d"),
			"ganda_e" => $this->input->post("ganda_e"),
			"jawaban" => $this->input->post("jawaban")
		);		

		$tambah = $this->db->insert("tb_listpertanyaaninggris", $tambah_listpertanyaaninggris);
		return $tambah;
	}

	// Start Edit
	function edit_listpertanyaaninggris($id){
		$this->db->where('id_pertanyaan', $id);
		$query = $this->db->get('tb_listpertanyaaninggris');
		return $query;
	}				
		
	function prosesedit_listpertanyaaninggris(){
		$update_listpertanyaaninggris = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'ganda_a' => $this->input->post('ganda_a'),
			'ganda_b' => $this->input->post('ganda_b'),
			'ganda_c' => $this->input->post('ganda_c'),
			'ganda_d' => $this->input->post('ganda_d'),
			'ganda_e' => $this->input->post('ganda_e'),
			'jawaban' => $this->input->post('jawaban')
		);
		$id = $this->input->post('id_pertanyaan');
		$this->db->where('id_pertanyaan', $id);
		$this->db->update('tb_listpertanyaaninggris', $update_listpertanyaaninggris);
	}
	// End Edit

	// Start Hapus
	function hapus_listpertanyaaninggris($id){
		$this->db->where("id_pertanyaan", $id);
		$this->db->delete("tb_listpertanyaaninggris");
	}
	/************************ INGGRIS ************************/

	/************************ MATEMATIKA ************************/
	function listpertanyaanmtk(){
		$query = $this->db->get('tb_listpertanyaanmtk');
		return $query->result();
	}

	// Start Tambah	
	function tambah_listpertanyaanmtk(){
		$tambah_listpertanyaanmtk = array(
			"pertanyaan" => $this->input->post("pertanyaan"),
			"ganda_a" => $this->input->post("ganda_a"),
			"ganda_b" => $this->input->post("ganda_b"),
			"ganda_c" => $this->input->post("ganda_c"),
			"ganda_d" => $this->input->post("ganda_d"),
			"ganda_e" => $this->input->post("ganda_e"),
			"jawaban" => $this->input->post("jawaban")
		);		

		$tambah = $this->db->insert("tb_listpertanyaanmtk", $tambah_listpertanyaanmtk);
		return $tambah;
	}

	// Start Edit
	function edit_listpertanyaanmtk($id){
		$this->db->where('id_pertanyaan', $id);
		$query = $this->db->get('tb_listpertanyaanmtk');
		return $query;
	}				
		
	function prosesedit_listpertanyaanmtk(){
		$update_listpertanyaanmtk = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'ganda_a' => $this->input->post('ganda_a'),
			'ganda_b' => $this->input->post('ganda_b'),
			'ganda_c' => $this->input->post('ganda_c'),
			'ganda_d' => $this->input->post('ganda_d'),
			'ganda_e' => $this->input->post('ganda_e'),
			'jawaban' => $this->input->post('jawaban')
		);
		$id = $this->input->post('id_pertanyaan');
		$this->db->where('id_pertanyaan', $id);
		$this->db->update('tb_listpertanyaanmtk', $update_listpertanyaanmtk);
	}
	// End Edit

	// Start Hapus
	function hapus_listpertanyaanmtk($id){
		$this->db->where("id_pertanyaan", $id);
		$this->db->delete("tb_listpertanyaanmtk");
	}
	/************************ MATEMATIKA ************************/
}