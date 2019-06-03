<?php defined('BASEPATH') OR exit('No direct script access alowed');
/**
 * 
 */
class Minventory extends CI_Model
{

	function getAll()
	{
		$this->db->select('tb_inventory.*, tb_categories.category_name, tb_status.status_name, tb_locations.location_name');
		$this->db->from('tb_inventory');
		$this->db->join('tb_categories', 'tb_inventory.category_id = tb_categories.category_id');
		$this->db->join('tb_locations', 'tb_inventory.location_id = tb_locations.location_id');
		$this->db->join('tb_status', 'tb_inventory.status_id = tb_status.status_id');
		return $this->db->get()->result();
	}

	public function dd_location()
	{
		// $sql = $this->db->query("SELECT code, location_name FROM tb_locations")->result();
		return $this->db->get("tb_locations")->result();
	}

	public function dd_category()
	{
		return $this->db->get("tb_categories")->result();
	}

	public function dd_status()
	{
		return $this->db->get("tb_status")->result();
	}

	public function save($post)
	{
		$code = $this->db->escape($post["code"]);
		$category_id = $this->db->escape($post["category_id"]);
		$location_id = $this->db->escape($post["location_id"]);
		$brand = $this->db->escape($post["brand"]);
		$model = $this->db->escape($post["model"]);
		$serial_number = $this->db->escape($post["serial_number"]);
		$status_id = $this->db->escape($post["status_id"]);
		$color = $this->db->escape($post["color"]);
		$price = $this->db->escape($post["price"]);
		$date_purchase = $this->db->escape($post["date_purchase"]);
		$photo = "default.png";
		$description = $this->db->escape($post["description"]);

		$sql = $this->db->query("INSERT INTO tb_inventory VALUES(NULL, $code, $category_id, $location_id, $brand, $model, $serial_number, $status_id, $color, $price, $date_purchase, NULL, $description)");

		if ($sql) {
			return true;
		}
	}
}