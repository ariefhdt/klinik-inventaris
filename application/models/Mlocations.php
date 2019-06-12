<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Mlocations extends CI_Model
{
	public function getAll()
	{
		return $this->db->get("tb_locations")->result();
	}

	public function getLastCode()
	{
		$sql = $this->db->query("SELECT code FROM tb_locations ORDER BY location_id DESC LIMIT 1");
		return $sql->row();
	}

	public function save($post)
	{
		$code = $this->db->escape($post["code"]);
		$location_name = $this->db->escape($post["location_name"]);
		$detail = $this->db->escape($post["detail"]);

		$sql = $this->db->query("INSERT INTO tb_locations VALUES (NULL, $code, $location_name, $detail)");
		if ($sql) {
			return true;
		}else{
			return false;
		}
	}

	public function getById($id)
	{
		return $this->db->get_where("tb_locations", ["location_id" => $id])->row();
	}

	public function update($post, $id)
	{
		$code = $this->db->escape($post["code"]);
		$location_name = $this->db->escape($post["location_name"]);
		$detail = $this->db->escape($post["detail"]);

		$this->db->query("UPDATE tb_locations SET code = $code, location_name = $location_name, detail = $detail WHERE location_id =".intval($id));

		return true;
	}

	public function delete($id)
	{
		return  $this->db->delete("tb_locations", array("location_id" => $id));
	}
}