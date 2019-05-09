<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("m_detail");
		$this->load->library('form_validation');

		//If not login, cannot access this.
		$data = $this->session->has_userdata('logged_in');
		if(!$data){
			redirect('admin');
		}
	}

	/*
	* Method untuk menambahkan pariwisata
	*/
	public function add($id = null) {
		$detail = $this->m_detail;
		$validation = $this->form_validation;
		$validation->set_rules($detail->rules());

		if ($validation->run()) {
			$detail->save($id);
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["id"] = $id;

		$this->load->view("admin/fitur/add_detail", $data);
	}

	/*
	* Method untuk menghapus salah satu detail dari pariwisata
	*/
	public function delete($fk=null,$id=null) {
		if (!isset($fk)) show_404();

		if ($this->m_detail->delete($fk)) {
			$this->session->set_flashdata('delete', 'Berhasil dihapus');
			redirect(site_url('admin/pariwisata/info/'.$id));
		}
	}

	/*
	* Method untuk memperbaharui detail dari pariwisata
	*/
	public function edit($id = null, $fk = null){
		if (!isset($id)) show_404();

		$detail = $this->m_detail;
		$validation = $this->form_validation;
		$validation->set_rules($detail->rules());

		if ($validation->run()) {
			$detail->update($id, $fk);
			$this->session->set_flashdata('success', 'Berhasil diperbaharui');
			redirect(site_url('admin/pariwisata/info/'.$fk));
		}

		$data["detail"] = $detail->getById($id);
		if (!$data["detail"]) show_404();

		// Untuk keperluan <-Back dan parameter di form.
		$data["id"] = $fk;
		$data["fk_pariwisata"] = $fk;
		$data["id_detail"] = $id;

		$this->load->view("admin/fitur/edit_detail", $data);
	}

}
