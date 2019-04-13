<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_detail extends CI_Model {

	private $_table = "berita";

	public $nama = "";

	public function rules(){
		return [
			['field' => 'nama',
			'label' => 'Nama',
			'rules' => 'required']
		];
	}

	public function getById($id){
		return $this->db->get_where("detail", ['id_detail' => $id])->row();
	}

	public function save($fk){
		$post = $this->input->post();

		$this->nama = $post["nama"];
		$this->deskripsi = $post["deskripsi"];
		$this->harga = $this->isNull($post['harga']);

		$fileName = $this->uploadFotoPariwisata($fk); //Upload FILE + Nomori foto dgn ID
		if($fileName == "-1"){
			$this->foto = NULL;
		}else{
			$pathFoto = "img\\Pariwisata\\".$fileName; //PATH untuk di DB
			$this->foto = $pathFoto;
		}

		$this->fk_pariwisata = $fk;

		$this->db->insert("detail", $this);
	}

	/*
	* Method untuk menghapus detail dan foto pada database juga direktori
	*/
	public function delete($id) {
		$this->deleteImage($id);
		$this->db->where('id_detail',$id);
		return $this->db->delete("detail");
	}

	public function update($id, $fk){
		$post = $this->input->post();

		$this->nama = $post["nama"];
		$this->deskripsi = $post["deskripsi"];
		$this->harga = $this->isNull($post['harga']);

		if (!empty($_FILES["foto"]["name"])) {
			$fileName = $this->uploadFotoPariwisata($fk); //Upload FILE + Nomori foto dgn fk_pariwisata
			$pathFoto = "img\\Pariwisata\\".$fileName; //PATH untuk di DB
			$this->foto = $pathFoto;
		} else {
			$this->foto = $post["old_foto"];
		}

		$this->db->where('id_detail',$id);
		$this->db->update("detail", $this);
	}


	/*
	############################ PRIVATE METHOD #############################
	*/

	/*
	* Method untuk upload Foto
	* Memberikan konfigurasi untuk penamaan foto &
	* alamat penyimpanan foto
	*/
	private function uploadFotoPariwisata($id){
		$currName = $this->nama;
		$new_name = $id." ".$currName;

		$config['upload_path']	= './img/Pariwisata/';
		$config['allowed_types']= 'gif|jpg|jpeg|png';
		$config['file_name']		= $new_name;
		$config['overwrite']		= true;
		$config['max_size']			= 1024; // 1MB
		// $config['max_width']= 1024;
		// $config['max_height']= 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			return $this->upload->data("file_name"); //nama file + jpg nya
		}else{
			return "-1";
		}
	}

	/*
	* Method untuk menghapus foto dari directory
	*/
	private function deleteImage($id){
		$detail = $this->getById($id);
		unlink($detail->foto);
	}

	/*
	* Method untuk memberi value NULL jika memang kosong
	*/
	private function isNull($value){
		if( $value == "" ){
			return NULL;
		}else{
			return $value;
		}
	}

}
