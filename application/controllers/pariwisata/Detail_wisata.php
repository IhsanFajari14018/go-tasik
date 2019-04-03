<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_wisata extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Wisata_model");
	}

	public function getDetailWisata($id=null){
		if (!isset($id)) show_404();

		// Data informasi objek wisata
		$result = $this->Wisata_model->getDataByID($id);
		$data["detail_wisata"] = $result;

		// Kalau datanya ga ada, beri tahu bahwa page tidak ada.
		if (!$result) {
			show_404();
		}

		// Data Harga Tiket Wisata
		$result = $this->Wisata_model->getHargaWisata($id);
		$data["harga_tiket"] = $result;

		// Data Photo
		$result = $this->Wisata_model->getDataWisata($id);
		$data["spot_photo"] = $result;

		// Data Ulasan
		$result = $this->Wisata_model->getDataReview($id);
		$data["daftar_ulasan"] = $result;

		$this->load->view("objek_wisata/detail_wisata", $data);
	}
}
