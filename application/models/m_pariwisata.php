<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pariwisata extends CI_Model {

  /*
  * Method untuk mendapatkan semua data pariwisata, termasuk ratingnya
  */
  public function getDataPariwisata(){
    return $this->db->get("daftar_pariwisata")->result();
  }

  /*
  * Method untuk mendapatkan data kuliner
  */
  public function getDataKuliner(){
    return $this->db->get("wisata_kuliner")->result();
  }

  /*
  * Method untuk mendapatkan data wisata
  */
  public function getDataWisata(){
    return $this->db->get("objek_wisata")->result();
  }

  /*
  * Method untuk mendapatkan data rekomendasi pariwisata
  */
  public function getDataRekomendasi(){
    $this->db->group_by("id_rekomendasi");
    return $this->db->get("daftar_rekomendasi")->result();
  }

  /*
  * Method untuk mendapatkan data rekomendasi pariwisata berdasarkan ID
  */
  public function getDataRekomendasiByID($id){
    $this->db->where('id_pariwisata', $id);
    $this->db->group_by("id_rekomendasi");
    return $this->db->get("daftar_rekomendasi")->result();
  }

  /*
  * Method untuk mencari pariwisata deari navbar search
  */
  public function getDataBySearch(){
    $post = $this->input->post();
    $search = $post["search"];

    $this->db->like('nama', $search);
    $this->db->or_like('alamat', $search);
    $this->db->or_like('kategori', $search);
    return $this->db->get('daftar_pariwisata')->result();
  }

  /*
  * Method untuk mendapatkan informasi apakah pariwisata ini
  * memiliki data 'tiket' atau tidak.
  */
  public function getTipePariwisata($id){
    $this->db->like('nama', 'Tiket');
    $this->db->where('fk_pariwisata', $id);
    return $this->db->get('detail')->row();
  }

  /*
  * Method untuk mendapatkan data semua kuliner
  * Digunakan di bagian header (Navbar)
  */
  public function getDataByKategori($kategori){
    $this->db->where('kategori', $kategori);
    return $this->db->get("daftar_pariwisata")->result();
  }

  /*
  * Method untuk mendapatkan informasi umum pada wisata ini
  */
  public function getDataByID($id = null){
    return $this->db->get_where("daftar_pariwisata", ["id_pariwisata" => $id])->row();
  }

  /*
  * Method untuk mendapatkan informasi layanan, menu, & galeri yang dimiliki
  * pariwisata ini
  */
  public function getDetailInformasiPariwisata($id = null){
    return $this->db->get_where("detail", ["fk_pariwisata" => $id])->result();
  }

  /*
  * Method untuk mendapatkan informasi layanan, menu, & galeri yang dimiliki
  * pariwisata ini tanpa menampilkan data yang bernama 'Tiket'.
  */
  public function getDetailWithoutTicket($id = null){
    $this->db->not_like('nama', 'Tiket');
    return $this->db->get_where("detail", ["fk_pariwisata" => $id])->result();
  }

  /*
  * Method untuk mendapatkan data review kuliner
  */
  public function getDataReview($id = null){
    $this->db->order_by('tanggal', 'DESC');
    return $this->db->get_where("data_review", ["fk_pariwisata" => $id])->result();
  }

  /*
  * Method untuk menambahkan ulasan untuk suatu pariwisata
  */
  public function addDataReview($id){
    $post = $this->input->post();

    // Data Pemberi Ulasan
    $name = $post["nama"];
    $email = $post["email"];

    $userID = $this->getUserID($name, $email); //dapatkan informasi user
    $this->fk_user = $userID->id;
    $this->ulasan = $post["ulasan"];
    $this->tanggal = date("Y/m/d");
    $this->ditampilkan = 0;
    $this->rating = $post["rating"];
    $this->fk_pariwisata = $id;

    return $this->db->insert("review", $this);
  }

  /*
  * Method untuk mendapatkan info detail dari tiket.
  * Periksa apakah tiketnya memiliki klasifikasi tiket weekday weekend
  */
  public function getTipeTiket($id){
    $where = "fk_pariwisata='$id' AND nama='Tiket Weekday' OR nama='Tiket Weekend'";
    $this->db->where($where);
    return $this->db->get("detail");
  }

  /*
  * Method untuk memeriksa apakah sudah ada data user tersebut
  */
  public function isUserExist(){
    $post = $this->input->post();
    $name = $post["nama"];
    $email = $post["email"];
    return $this->getUserID($name, $email);
  }

  /*
  * Method untuk menambahkan user
  */
  public function addUser(){
    $post = $this->input->post();
    $name = $post["nama"];
    $email = $post["email"];

    $data = array(
      'nama' => $name,
      'email' => $email
    );

    return $this->db->insert("user", $data);
  }

  /*
  * Method untuk mendapatkan ID user berdasarkan nama & email
  */
  private function getUserID($name, $email){
    $this->db->where('nama', $name);
    $this->db->where('email', $email);
    return $this->db->get("user")->row();
  }


  /*
  * Method untuk mendapatkan data wisata
  */
  public function getNDataWisata($limit, $start){
    // $this->db->limit($limit, 10);
    $this->db->limit($limit, $start);
    return $this->db->get("objek_wisata")->result();
  }

  /*
  * Method untuk mendapatkan jumlah data wisata
  */
  public function nDataWisata(){
    return $this->db->count_all("objek_wisata");
  }

  /*
  * Method untuk mendapatkan data kuliner
  */
  public function getNDataKuliner($limit, $start){
    // $this->db->limit($limit, 10);
    $this->db->limit($limit, $start);
    return $this->db->get("wisata_kuliner")->result();
  }

  /*
  * Method untuk mendapatkan jumlah data kuliner
  */
  public function nDataKuliner(){
    return $this->db->count_all("wisata_kuliner");
  }
}
