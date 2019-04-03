<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_kuliner extends CI_Controller {
	public function __construct(){
			parent::__construct();
			$this->load->model("Kuliner_model");
	}

	public function index()	{
		$data["daftar_kuliner"] = $this->Kuliner_model->getData();
		$this->load->view("wisata_kuliner", $data);
	}
}
