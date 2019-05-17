<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_pariwisata extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_pariwisata");
		$this->load->library('pagination');
	}

	/*
	* Method ini hanya digunakan di navbar Pariwisata - Wisata Kuliner
	*/
	public function getWisataKuliner(){
		$data["daftar_rekomendasi"] = $this->m_pariwisata->getDataRekomendasi();

		// pagination configuration
		$total_rows = $this->m_pariwisata->nDataKuliner();
		$config['base_url'] = base_url().'pariwisata/Daftar_pariwisata/getWisataKuliner/';
		$config['total_rows'] = $total_rows;
		$config['per_page'] = 4;
		$config['uri_segment'] = 4;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);

		$data['daftar_pariwisata'] = $this->m_pariwisata->getNDataKuliner($config['per_page'], $from);
		$this->load->view('pariwisata/daftar_pariwisata',$data);
	}

	/*
	* Method ini hanya digunakan di navbar Pariwisata - Objek Wisata
	*/
	public function getObjekWisata(){
		$data["daftar_rekomendasi"] = $this->m_pariwisata->getDataRekomendasi();

		// pagination configuration
		$total_rows = $this->m_pariwisata->nDataWisata();
		$config['base_url'] = base_url().'pariwisata/Daftar_pariwisata/getObjekWisata/';
		$config['total_rows'] = $total_rows;
		$config['per_page'] = 4;
		$config['uri_segment'] = 4;
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);

		$data["daftar_pariwisata"] = $this->m_pariwisata->getNDataWisata($config['per_page'], $from);
		$this->load->view('pariwisata/daftar_pariwisata',$data);
	}

	/*
	* Method ini hanya digunakan di navbar Kategori - [pilih kategori]
	*/
	public function getPariwisataByKategori($kategori = null){
		$data["daftar_rekomendasi"] = $this->m_pariwisata->getDataRekomendasi();
		$data["daftar_pariwisata"] = $this->m_pariwisata->getDataByKategori($kategori);
		$this->load->view('pariwisata/daftar_pariwisata',$data);
	}

	/*
	* Method ini hanya digunakan di navbar pada kolom search "Cari pariwisata"
	*/
	public function getPariwisataBySearch(){
		$data["daftar_rekomendasi"] = $this->m_pariwisata->getDataRekomendasi();
		$data["daftar_pariwisata"] = $this->m_pariwisata->getDataBySearch();
		$this->load->view('pariwisata/daftar_pariwisata',$data);
	}

}
