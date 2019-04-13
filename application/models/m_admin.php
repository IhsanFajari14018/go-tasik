<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_admin extends CI_Model {

	private $_table = "berita";

	public $nama = "";

	public function rules(){
		return [
			['field' => 'nama',
			'label' => 'Nama',
			'rules' => 'required'],

			['field' => 'deskripsi',
			'label' => 'Deskripsi',
			'rules' => 'required'],

			['field' => 'alamat',
			'label' => 'Alamat',
			'rules' => 'required'],

			['field' => 'buka',
			'label' => 'Jam Buka',
			'rules' => 'required'],

			['field' => 'kategori',
			'label' => 'Kategori',
			'rules' => 'required'],

			['field' => 'url_map',
			'label' => 'Url Map',
			'rules' => 'required'],

		];
	}

	public function getAll(){
		return $this->db->get("pariwisata")->result();
	}

	public function getDataByID($id){
		return $this->db->get_where("daftar_pariwisata", ['id_pariwisata' => $id])->row();
	}

	public function save(){
		$post = $this->input->post();
		//$this->id_berita = uniqid();
		$this->nama = $post["nama"];
		$this->deskripsi = $post["deskripsi"];
		$this->alamat = $post["alamat"];
		$this->telepon = $post["telepon"];
		$this->email = $post["email"];
		$this->buka = $post["buka"];
		$this->kategori = $post["kategori"];
		$this->url_map = $post["url_map"];

		$id = ($this->getLatestID() + 1); //NO. ID untuk di foto //ditambah 1 karena kan utk di ID selanjutnya
		$fileName = $this->uploadFotoPariwisata($id); //Upload FILE + Nomori foto dgn ID
		$pathFoto = "img\\Pariwisata\\".$fileName; //PATH untuk di DB
		$this->foto = $pathFoto;

		$this->db->insert("pariwisata", $this);
	}

	private function uploadFotoPariwisata($id){
		$currName = $this->nama;
		$new_name = $id." ".$currName;

		$config['upload_path']	= './img/Pariwisata/';
		$config['allowed_types']= 'gif|jpg|png';
		$config['file_name']		= $new_name;
		$config['overwrite']		= true;
		$config['max_size']			= 1024; // 1MB
		// $config['max_width']= 1024;
		// $config['max_height']= 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			return $this->upload->data("file_name"); //nama file + jpg nya
		}else{
			return "default.jpg";
		}
	}

	private function getLatestID(){
		return $this->db->from("pariwisata")->count_all_results();
	}

	//

	public function delete($id) {
		return $this->db->delete("pariwisata", array("id_pariwisata" => $id));
	}

	private function deleteFoto($id){
		$portal = $this->getById($id);
		if ($berita->foto != "default.jpg") {
			$filename = explode(".", $berita->foto)[0];
			return array_map('unlink', glob(FCPATH."upload/portal/$filename.*"));
		}
	}

	public function update($id){
		$post = $this->input->post();

		$this->nama = $post["nama"];
		$this->deskripsi = $post["deskripsi"];
		$this->alamat = $post["alamat"];
		$this->telepon = $post["telepon"];
		$this->email = $post["email"];
		$this->buka = $post["buka"];
		$this->kategori = $post["kategori"];
		$this->url_map = $post["url_map"];

		if (!empty($_FILES["foto"]["name"])) {
			$fileName = $this->uploadFotoPariwisata($id); //Upload FILE + Nomori foto dgn ID
			$pathFoto = "img\\Pariwisata\\".$fileName; //PATH untuk di DB
			$this->foto = $pathFoto;
			// $this->foto = $this->uploadFotoPariwisata($id);
		} else {
			$this->foto = $post["old_foto"];
		}

		$this->db->where('id_pariwisata',$id);
		$this->db->update("pariwisata", $this);
	}
}
