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
}