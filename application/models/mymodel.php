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
