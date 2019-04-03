<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()	{
		$data = $this->mymodel->selectData('pariwisata');
		$this->load->view('welcome_message',array('data_pariwisata' => $data));
	}

	public function insert(){
		$result = $this->mymodel->insertData('pariwisata',array(
			"id" => "1811004",
			"nama" => "Mie Baso Laksana",
			"alamat" => "Jl. Pemuda No.5, Yudanagara, Cihideung, Tasikmalaya, Jawa Barat 46121",
			"rating" => "5"
		));

		if($result >= 1){
			echo "Berhasil insert data";
		}else{
			echo "Gagal insert data";
		}
	}

	public function update(){
		$result = $this->mymodel->
			updateData(
				'pariwisata',
				array("nama" => "Bubur Ayam H. Zaenal"),
				array('id'=>"1811002")
			);

		if($result >= 1){
			echo "Berhasil update data";
		}else{
			echo "Gagal update data";
		}
	}

	public function delete(){
		$result = $this->mymodel->deleteData('pariwisata',
			array('id'=>"1811004")
		);

		if($result >= 1){
			echo "Berhasil delete data";
		}else{
			echo "Gagal delete data";
		}
	}

}
