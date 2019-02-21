<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = $this->mymodel->selectData('pariwisata');
		$this->load->view('welcome_message',array('data_pariwisata' => $data));
	}

	// TUTORIAL 4
	// public function get(){
	// 	$result = $data = $this->mymodel->selectData('pariwisata');
	//
	// 	if($result >= 1){
	// 		echo "Berhasil get data";
	// 	}else{
	// 		echo "Gagal get data";
	// 	}
	// }

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
		$result = $this->mymodel->updateData('pariwisata',array(
			"nama" => "Bubur Ayam H. Zaenal"
		),array('id'=>"1811002"));

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

	//TUTORIAL 1
	// public function cetak($satu = 'ihsan', $dua = 'fajari')
	// {
	// 	echo 'HEHE WEB ',$satu,' dan ',$dua;
	// 	//$this->load->view('welcome_message');
	// }
}
