<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objek_wisata extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model("Wisata_model");
	}

	public function index()	{
		$data["daftar_wisata"] = $this->Wisata_model->getData();
		$this->load->view('objek_wisata',$data);
	}
}
