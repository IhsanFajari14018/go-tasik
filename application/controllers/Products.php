<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library('form_validation');
    }

    public function index(){
        $data["service"] = $this->product_model->getAll();
        $this->load->view("admin/product/list", $data);
    }

    public function add(){
        $service = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($service->rules());

        if ($validation->run()){
            $service->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/product/new_form");
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/products');

        $service = $this->product_model;
        $validation = $this->form_validation;
        $validation->set_rules($service->rules());

        if ($validation->run()){
            $service->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $service->getById($id);
        if (!$data["product"]) show_404();

        $this->load->view("admin/product/edit_form", $data);
    }

    public function delete($id=null){
        if (!isset($id)) show_404();

        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/products'));
        }
    }
}
