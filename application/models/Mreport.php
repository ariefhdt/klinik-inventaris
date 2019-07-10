<?php defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 * 
 */
class Mreport extends CI_Model
{

	public function showCategoryReport($category_id, $status_id)
	{
		$this->db->select('tb_inventory.*, tb_categories.category_name, tb_status.status_name, tb_locations.location_name');
		$this->db->from('tb_inventory');
		$this->db->join('tb_categories', 'tb_inventory.category_id = tb_categories.category_id');
		$this->db->join('tb_locations', 'tb_inventory.location_id = tb_locations.location_id');
		$this->db->join('tb_status', 'tb_inventory.status_id = tb_status.status_id');
		if ($category_id != 0) {
			$this->db->where('tb_inventory.category_id', $category_id);
		}
		if ($status_id != 0) {
			$this->db->where('tb_inventory.status_id', $status_id);
		}
		return $this->db->get()->result();

		// $sql = $this->db->query("SELECT * FROM tb_inventory WHERE category_id = ".intval($category_id));
		// return $sql->result();
	}

}