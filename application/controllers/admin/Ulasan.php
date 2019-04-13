<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ulasan extends CI_Controller {

	public function __construct() {
		parent::__construct();
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
		$data["daftar_ulasan"] = $this->m_ulasan->getALL();
		$this->load->view("admin/fitur/list_ulasan", $data);
	}

	/*
	* Method untuk menghapus pariwisata
	*/
	public function delete($id=null) {
		if (!isset($id)) show_404();

		if ($this->m_ulasan->delete($id)) {
			redirect(site_url('admin/ulasan'));
		}
	}

	public function setStatusShown($id=null){
		$status = 1;
		$ulasan = $this->m_ulasan;

		if (!isset($id)) show_404();
		if ($ulasan->updateStatus($id, $status)) {
			redirect(site_url('admin/Ulasan'));
		}
	}

	public function setStatusHidden($id=null){
		$status = 0;
		$ulasan = $this->m_ulasan;

		if (!isset($id)) show_404();
		if ($ulasan->updateStatus($id, $status)) {
			redirect(site_url('admin/Ulasan'));
		}
	}

}
