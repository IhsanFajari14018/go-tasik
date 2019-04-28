<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_pariwisata extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("m_pariwisata");
	}

	public function getDetailPariwisata($id = null){
		if (!isset($id)) show_404();

		// Data informasi pariwisata
		$result = $this->m_pariwisata->getDataByID($id);
		$data["detail_pariwisata"] = $result;

		// Kalau datanya ga ada, beri tau bahwa page tidak ada.
		if (!$result) {
			show_404();
		}

		// Data menu, layanan, atau galeri, tanpa TIKET
		$result = $this->m_pariwisata->getDetailWithoutTicket($id);
		$data["data_pariwisata"] = $result;

		// Data Ulasan
		$result = $this->m_pariwisata->getDataReview($id);
		$data["daftar_ulasan"] = $result;

		// Apakah mengandung Tiket? jika iya berarti ini WISATA
		$result = $this->m_pariwisata->getTipePariwisata($id);
		if($result){
			$data["tipe_pariwisata"] = 'wisata';
		}else{
			$data["tipe_pariwisata"] = 'kuliner';
		}

		// Data Tiket
		$result = $this->m_pariwisata->getTipeTiket($id);
		if($result->num_rows() >= 2 ){
			$data["hasWeekDayEnd"] = TRUE;
		}else{
			$data["hasWeekDayEnd"] = FALSE;
		}
		$data["data_tiket"] = $result->result();

		//Variable untuk menentukan perlu tidaknya ditampilkan rekomendasi pariwisata
		$data["is_show"] = FALSE;

		// Data rekomendasi
		$result = $this->m_pariwisata->getDataRekomendasiByID($id);
		$data["daftar_rekomendasi"] = $result;
		if(count($result)>0){
			$data["is_show"] = TRUE;
		}

		// Data pariwisata serupa
		$kategori = $data["detail_pariwisata"]->kategori;
		$result = $this->m_pariwisata->getDataByKategori($kategori);
		$data["daftar_pariwisataSerupa"] = $result;

		$this->load->view("pariwisata/detail_pariwisata", $data);
	}

	public function addUlasan($id = null){
		$service = $this->m_pariwisata;

		//verify user
		$result = $service->isUserExist();
		if($result){
			// EXIST, just add review
			$service->addDataReview($id);
		}else{
			// NOT EXIST, create user, then add review
			$service->addUser();
			$service->addDataReview($id);
		}

		$this->session->set_flashdata('success', 'Ulasan Anda akan segera muncul setelah kami review. Terimakasih! ');
		$this->getDetailPariwisata($id); //return $this->load-view
	}

}
