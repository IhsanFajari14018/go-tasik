<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
  public function selectData($tabelName){
    $data = $this ->db->get($tabelName);
    return $data -> result_array();
  }

  public function insertData($tabelName,$data){
    echo "Call : Function insert <br/>";
    $result = $this->db->insert($tabelName,$data);
    return $result;
  }

  //updateData('pariwisata',array("nama" => "Bubur Ayam H. Zaenal"),array('id'=>"1811002"))
  public function updateData($tabelName,$data,$where){
    echo "Call : Function update <br/>";

    $result = $this->db->update($tabelName,$data,$where);
    return $result;
  }

  public function deleteData($tabelName,$where){
    echo "Call : Function delete <br/>";
    $result = $this->db->delete($tabelName,$where);
    return $result;
  }

}
