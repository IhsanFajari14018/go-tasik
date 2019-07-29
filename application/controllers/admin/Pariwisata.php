<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pariwisata extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("m_admin");
		$this->load->model("m_pariwisata");
		$this->load->model("m_ulasan");
		$this->load->library('form_validation');

		//If not login, cannot access this.
		$data = $this->session->has_userdata('logged_in');
		if(!$data){
			redirect('admin');
		}
	}

	/*
	* Method untuk menampilkan daftar data pariwisata
	*/
	public function index() {
		$data["daftar_pariwisata"] = $this->m_admin->getALL();
		$this->load->view("admin/fitur/list_pariwisata", $data);
	}

	/*
	* Method untuk menampilkan daftar data pariwisata
	*/
	public function info($id=null) {
		if (!isset($id)) show_404();

		// Data informasi pariwisata
		$result = $this->m_admin->getDataByID($id);
		$data["detail_pariwisata"] = $result;

		// Kalau datanya ga ada, beri tahu bahwa page tidak ada.
		if (!$result) {
			show_404();
		}

		// Data menu, layanan, atau galeri
		$result = $this->m_pariwisata->getDetailInformasiPariwisata($id);
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

		$this->load->view("admin/fitur/info_pariwisata", $data);
	}

	/*
	* Method untuk menambahkan pariwisata
	*/
	public function add() {
		$pariwisata = $this->m_admin;
		$validation = $this->form_validation;
		$validation->set_rules($pariwisata->rules());

		if ($validation->run()) {
			$pariwisata->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$this->load->view("admin/fitur/add_pariwisata");
	}

	/*
	* Method untuk memperbaharui data pariwisata
	*/
	public function edit($id = null){
		if (!isset($id)) redirect('admin/portal');

		$pariwisata = $this->m_admin;
		$validation = $this->form_validation;
		$validation->set_rules($pariwisata->rules());

		if ($validation->run()) {
			$pariwisata->update($id);
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["pariwisata"] = $pariwisata->getDataByID($id);
		if (!$data["pariwisata"]) show_404();

		$this->load->view("admin/fitur/edit_pariwisata", $data);
	}

	/*
	* Method untuk menghapus pariwisata
	*/
	public function delete($id=null) {
		if (!isset($id)) show_404();

		if ($this->m_admin->delete($id)) {
			//hapus juga ulasannya
			$this->m_ulasan->deleteByPariwisata($id);
			redirect(site_url('admin/pariwisata'));
		}
	}

}
