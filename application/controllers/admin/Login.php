<?php
class Login extends CI_Controller{

  private $username;
  private $password;

  function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
    $this->username = "goadmintasik";
    $this->password = "gotas1k";
  }

  public function index(){
    $this->load->view("admin/login");
  }

  public function verifikasi(){
    $post = $this->input->post();

    $username = $post["username"];
    $password = $post["password"];

    if(($username == $this->username) && ($password == $this->password)){
      $this->setLoginSession();
      redirect('admin/pariwisata');
    }else{
      redirect('admin/login');
    }
  }

  private function setLoginSession(){
    $newdata = array(
      'logged_in' => TRUE
    );
    $this->session->set_userdata($newdata);
  }

  private function setLogoutSession(){
    $this->session->unset_userdata('logged_in');
  }

  public function logout(){
    //echo "ASD";
    $this->setLogoutSession();
    redirect('admin');
  }
}
