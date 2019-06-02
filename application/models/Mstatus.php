<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Mstatus extends CI_Model
{
	

	function getAll()
	{
		return $this->db->get("tb_status")->result();
	}

	function getById($id)
	{
		return $this->db->get_where("tb_status", ["status_id" => $id])->row();
	}

	public function save($post)
	{
		$status_name = $this->db->escape($post["status_name"]);
		$description = $this->db->escape($post["description"]);

		$sql = $this->db->query("INSERT INTO tb_status VALUES(NULL, $status_name, $description)");

		if ($sql) {
			return true;
		}else{
			return false;
		}
	}

	function delete($id)
	{
		return $this->db->delete("tb_status", array('location_id' => $id));
	}
}