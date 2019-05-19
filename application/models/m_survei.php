<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_survei extends CI_Model {

	/*
  * Method untuk mendapatkan semua data pariwisata
  */
	public function getAllSurvei(){
		return $this->db->get("survei")->result();
	}

	/*
	* Method untuk menambah data survei baru
	*/
	public function addSurvei(){
		$objek_wisata = $this->input->post('objek_wisata[]');
		$mie_bakso = $this->input->post('mie_bakso[]');
		$bubur_ayam = $this->input->post('bubur_ayam[]');
		$soto = $this->input->post('soto[]');
		$kuliner_lainnya = $this->input->post('kuliner_lainnya[]');

		// String untuk menyimpan hasil akhir data survei
		$strDataSurvei="";
		// Boolean untuk memfilter data survei yang kosong
		$isEmpty = TRUE;
		// Objek Wisata
		for ($i=0; $i<count($objek_wisata); $i++){
			$isEmpty = FALSE;
			$result = $this->getIdPariwisata($objek_wisata[$i]);
			$strDataSurvei = $strDataSurvei." ".$result->id_pariwisata;
		}
		// Mie Bakso
		for ($i=0; $i<count($mie_bakso); $i++){
			$isEmpty = FALSE;
			$result = $this->getIdPariwisata($mie_bakso[$i]);
			$strDataSurvei = $strDataSurvei." ".$result->id_pariwisata;
		}
		// Bubur Ayam
		for ($i=0; $i<count($bubur_ayam); $i++){
			$isEmpty = FALSE;
			$result = $this->getIdPariwisata($bubur_ayam[$i]);
			$strDataSurvei = $strDataSurvei." ".$result->id_pariwisata;
		}
		// Soto
		for ($i=0; $i<count($soto); $i++){
			$isEmpty = FALSE;
			$result = $this->getIdPariwisata($soto[$i]);
			$strDataSurvei = $strDataSurvei." ".$result->id_pariwisata;
		}
		// Kuliner Lainnya
		for ($i=0; $i<count($kuliner_lainnya); $i++){
			$isEmpty = FALSE;
			$result = $this->getIdPariwisata($kuliner_lainnya[$i]);
			$strDataSurvei = $strDataSurvei." ".$result->id_pariwisata;
		}

		$strDataSurvei = ltrim($strDataSurvei, 'start');
		$this->data_survei = $strDataSurvei;

		if ($isEmpty) {
			$this->session->set_flashdata('failure', 'Maaf, Anda tidak bisa mengirimkan data survei yang kosong!');
			return TRUE;
		}else{
			$this->session->set_flashdata('success', 'Terimakasih telah membantu memperbaharui data rekomendasi pariwisata di Tasikmalaya!');
			return $this->db->insert('survei',$this);
		}

	}

	/*
	* Method untuk mendapatkan ID pariwisata
	* Method ini digunakan dalam method addSurvei()
	*/
	private function getIdPariwisata($name){
		$this->db->where('nama', $name);
		return $this->db->get("pariwisata")->row();
	}

}
