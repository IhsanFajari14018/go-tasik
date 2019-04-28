<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survei extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model("m_pariwisata");
    $this->load->model("m_survei");
    $this->load->helper('file');
    $this->load->helper('download');
  }

  public function index()	{
    $data["daftar_wisata"] = $this->m_pariwisata->getDataWisata();
    $data["daftar_mie_bakso"] = $this->m_pariwisata->getDataByKategori("mie-bakso");
    $data["daftar_bubur_ayam"] = $this->m_pariwisata->getDataByKategori("bubur-ayam");
    $data["daftar_soto"] = $this->m_pariwisata->getDataByKategori("soto");
    $data["daftar_kupat_tahu"] = $this->m_pariwisata->getDataByKategori("kupat-tahu");
    $data["daftar_kuliner_lainnya"] = $this->m_pariwisata->getDataByKategori("kuliner-lainnya");
    $this->load->view('survei',$data);
  }

  /*
  * Method untuk menyimpan data survei
  */
  public function sendDataSurvei(){
    if($this->m_survei->addSurvei()) {
      redirect(site_url('survei'));
    }
  }

  /*
  * Method untuk download file data survei
  * Hanya bisa mendownload jika sudah login sebagai admin
  */
  public function downloadDataSurvei(){
    //If not login, cannot access this.
    $data = $this->session->has_userdata('logged_in');
    if(!$data){
      redirect('admin');
    }else{
      $this->writeToDat();
      force_download('./file/data_survei.dat', NULL);
    }
  }

  /*
  * Method untuk menulis data table survei pada sebuah file .dat
  */
  private function writeToDat(){
    $data = $this->m_survei->getAllSurvei();

    $result = '';
    foreach ($data as $d ) {
      $result = $result . $d->data_survei . PHP_EOL;
    }
    echo $result;

    $data = $result;
    if(write_file('./file/data_survei.dat', $data)){
      echo 'File written!';
    }else{
      echo 'Unable to write the file';
    }
  }
}
