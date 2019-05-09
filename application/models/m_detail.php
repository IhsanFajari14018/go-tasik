<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_detail extends CI_Model {

	/*
	* Method untuk menentukan aturan input form
	*/
	public function rules(){
		return [
			['field' => 'nama',
			'label' => 'Nama',
			'rules' => 'required']
		];
	}

	/*
	* Method untuk mendapatkan data detail dari pariwisata
	*/
	public function getById($id){
		return $this->db->get_where("detail", ['id_detail' => $id])->row();
	}

	/*
	* Method untuk menyimpan detail pariwisata baru
	*/
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

		return $this->db->insert("detail", $this);
	}

	/*
	* Method untuk menghapus detail dan foto pada database juga direktori
	*/
	public function delete($id) {
		$this->deleteImage($id);
		$this->db->where('id_detail',$id);
		return $this->db->delete("detail");
	}

	/*
	* Method untuk menghapus foto detail dari directory
	*/
	private function deleteImage($id){
		$detail = $this->getById($id);
		return unlink($detail->foto);
	}

	/*
	* Method untuk memperbaharui data detail dari pariwisata
	*/
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
		return $this->db->update("detail", $this);
	}

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
		$config['max_size']			= 1024;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			return $this->upload->data("file_name"); //nama file + jpg nya
		}else{
			return "-1";
		}
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
