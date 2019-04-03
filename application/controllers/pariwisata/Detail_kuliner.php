<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_kuliner extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Kuliner_model");
	}

	public function index()	{
		$data = array(
			'title' => 'Wisata Kuliner - Mie Bakso Laksana',
			'heading' => 'My Heading',
			'message' => 'My Message'
		);

		$this->load->view('wisata_kuliner/detail_kuliner', $data);
	}

	public function getDetailKuliner($id=null){
		if (!isset($id)) show_404();

		// Data informasi kuliner
		$result = $this->Kuliner_model->getDataByID($id);
		$data["detail_kuliner"] = $result;

		// Kalau datanya ga ada, beri tahu bahwa page tidak ada.
		if (!$result) {
			show_404();
		}

		// Data Menu
		$result = $this->Kuliner_model->getDataKuliner($id);
		$data["menu_kuliner"] = $result;

		// Data Ulasan
		$result = $this->Kuliner_model->getDataReview($id);
		$data["daftar_ulasan"] = $result;

		$this->load->view("wisata_kuliner/detail_kuliner", $data);

		// DEBUG
		// echo $data["detail_kuliner"]->nama;
		// echo "<br>";
		// echo $data["detail_kuliner"]->foto;
	}
}
