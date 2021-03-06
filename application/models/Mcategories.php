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

	public function getLastCode()
	{
		$sql = $this->db->query("SELECT code FROM tb_categories ORDER BY category_id DESC LIMIT 1");
		return $sql->row();
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

	public function update($post, $id){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$code = $this->db->escape($post["code"]);
		$category_name = $this->db->escape($post["category_name"]);
		$description = $this->db->escape($post["description"]);

		$sql = $this->db->query("UPDATE tb_categories SET code = $code, category_name = $category_name, description = $description WHERE category_id = ".intval($id));
		
		return true;
	}

	public function delete($id)
	{
		return $this->db->delete("tb_categories", array("category_id" => $id));
	}


}