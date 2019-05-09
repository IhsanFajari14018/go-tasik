<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_pariwisata extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("m_pariwisata");
	}

	/*
	* Method ini hanya digunakan di navbar Pariwisata - Wisata Kuliner
	*/
	public function getWisataKuliner(){
		$data["daftar_rekomendasi"] = $this->m_pariwisata->getDataRekomendasi();
		$data["daftar_pariwisata"] = $this->m_pariwisata->getDataKuliner();
		$this->load->view('pariwisata/daftar_pariwisata',$data);
	}

	/*
	* Method ini hanya digunakan di navbar Pariwisata - Objek Wisata
	*/
	public function getObjekWisata(){
		$data["daftar_rekomendasi"] = $this->m_pariwisata->getDataRekomendasi();
		$data["daftar_pariwisata"] = $this->m_pariwisata->getDataWisata();
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
