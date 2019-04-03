<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata_model extends CI_Model {

  public function getData(){
    return $this->db->get("objek_wisata")->result();
  }

  public function getDataByID($id = null){
    return $this->db->get_where("objek_wisata", ["id_pariwisata" => $id])->row();
  }

  public function getDataWisata($id = null){
    return $this->db->get_where("detail", ["fk_pariwisata" => $id])->result();
  }

  public function getDataReview($id = null){
    $this->db->order_by('tanggal', 'DESC');
    return $this->db->get_where("data_review", ["fk_pariwisata" => $id])->result();
  }

  public function getHargaWisata($id = null){
    return $this->db->get_where("harga_terendah", ["fk_pariwisata" => $id])->row();
  }

}
