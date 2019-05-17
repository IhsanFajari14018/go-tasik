<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_ulasan extends CI_Model {

	/*
  * Method untuk mendapatkan semua data ulasan
  */
	public function getAll(){
		return $this->db->get("data_review")->result();
	}

	/*
  * Method untuk menghapus data ulasan
  */
	public function delete($id) {
		return $this->db->delete("review", array("id_review" => $id));
	}

	/*
  * Method untuk memperbaharui status data ulasan
	* Digunakan untuk menentukan suatu data ulasan agar
	* ditampilkan atau tidak
  */
	public function updateStatus($id, $status){
		$this->ditampilkan = $status;
		$this->db->where('id_review',$id);
		return $this->db->update("review", $this);
	}

	/*
  * Method untuk menghapus data ulasan karena
	* pariwisatanya telah dihapus
  */
	public function deleteByPariwisata($fk) {
		return $this->db->delete("review", array("fk_pariwisata" => $fk));
	}
}
