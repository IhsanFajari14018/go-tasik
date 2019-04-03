<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

    private $_table = "service";

    public $id;
    public $tipelayanan;
    public $detail;
    public $price;

    public function rules(){
        return [
            ['field' => 'tipelayanan',
            'label' => 'Layanan',
            'rules' => 'required'],

            ['field' => 'detail',
            'label' => 'Detail',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'required|numeric'],
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getById($id){
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save(){
        $post = $this->input->post();
        //$this->id = uniqid();
        $this->tipelayanan = $post["tipelayanan"];
        $this->detail = $post["detail"];
        $this->price = $post["price"];
        return $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->tipelayanan = $post["tipelayanan"];
        $this->detail = $post["detail"];
        $this->price = $post["price"];
        // $this->db->where('id_berita', $id);
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id){
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
