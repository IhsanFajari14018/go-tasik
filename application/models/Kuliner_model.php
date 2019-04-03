<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuliner_model extends CI_Model {

  public function getData(){
    return $this->db->get("wisata_kuliner")->result();
  }

  public function getDataByID($id = null){
    return $this->db->get_where("wisata_kuliner", ["id_pariwisata" => $id])->row();
  }

  public function getDataKuliner($id = null){
    return $this->db->get_where("detail", ["fk_pariwisata" => $id])->result();
  }

  public function getDataReview($id = null){
    $this->db->order_by('tanggal', 'DESC');
    return $this->db->get_where("data_review", ["fk_pariwisata" => $id])->result();
  }

}
