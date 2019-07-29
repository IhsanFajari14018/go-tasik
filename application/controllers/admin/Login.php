<?php
class Login extends CI_Controller{

  private $username;
  private $password;

  function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
    $this->username = "goadmintasik";
    $this->password = '$2y$10$X3sujzzk6/ncN4/FtSqbx.69htAz927vNovymwNdJVr4aLr31ofB.';
  }

  public function index(){
    $this->load->view("admin/login");
  }

  /*
  * Method untuk memverifikasi input dari form login
  */
  public function verifikasi(){
    $post = $this->input->post();

    $username = $post["username"];
    $password = $post["password"];

    $decryptedPass = password_verify($password, $this->password);
    if(($username == $this->username) && $decryptedPass){
      $this->setLoginSession();
      redirect('admin/pariwisata');
    }else{
      $this->session->set_flashdata('wrong', 'Password salah!');
      redirect('admin/login');
    }
  }

  /*
  * Method untuk menyetel session logged_in agar memiliki akses untuk masuk
  * page admin
  */
  private function setLoginSession(){
    $newdata = array(
      'logged_in' => TRUE
    );
    $this->session->set_userdata($newdata);
  }

  /*
  * Method untuk mengakhiri session admin
  */
  private function setLogoutSession(){
    $this->session->unset_userdata('logged_in');
  }

  /*
  * Method untuk keluar dari page admin selagi sembari mematikan session
  */
  public function logout(){
    $this->setLogoutSession();
    redirect('admin');
  }
}
