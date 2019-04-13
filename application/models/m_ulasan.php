<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_ulasan extends CI_Model {

	public function getAll(){
		return $this->db->get("data_review")->result();
	}

	public function delete($id) {
		return $this->db->delete("review", array("id_review" => $id));
	}

	public function updateStatus($id, $status){
		$this->ditampilkan = $status;
		$this->db->where('id_review',$id);
		return $this->db->update("review", $this);
	}
}
