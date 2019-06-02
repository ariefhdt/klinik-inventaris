<?php defined('BASEPATH') OR exit ('No direct script acces allowed');
/**
 * 
 */
class Mcategories extends CI_Model
{
	public function getAll()
	{
		return $this->db->get("tb_categories")->result();
	}

	public function getById($id)
	{
		return $this->db->get_where("tb_categories", ["category_id" => $id])->row();
	}
	
	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$code = $this->db->escape($post["code"]);
		$category_name = $this->db->escape($post["category_name"]);
		$description = $this->db->escape($post["description"]);

		$sql = $this->db->query("INSERT INTO tb_categories VALUES (NULL, $code, $category_name, $description)");
		if($sql){
			return true;
		}else{
		return false;
		}
	}

	
	//$sql = $this->db->query("UPDATE tb_karyawan SET name = $nama, alamat = $alamat, email = $email WHERE id = ".intval($id));


}