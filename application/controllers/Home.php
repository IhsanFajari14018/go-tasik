<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("m_pariwisata");
	}

	public function index()	{
		$data["daftar_rekomendasi"] = $this->m_pariwisata->getDataRekomendasi();
		$this->load->view('home',$data);
	}
}
