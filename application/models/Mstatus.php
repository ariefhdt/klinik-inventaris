<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Mstatus extends CI_Model
{
	

	public function getAll()
	{
		return $this->db->get("tb_status")->result();
	}

	public function getById($id)
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

	public function update($post, $id)
	{
		$status_name = $this->db->escape($post["status_name"]);
		$description = $this->db->escape($post["description"]);

		$this->db->query("UPDATE tb_status SET status_name = $status_name, description = $description WHERE status_id =".intval($id));

		return true;
	}

	public function delete($id)
	{
		return $this->db->delete("tb_status", array('status_id' => $id));
	}
}