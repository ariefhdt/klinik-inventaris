<?php defined('BASEPATH') OR exit('No direct script access alowed');
/**
 * 
 */
class Minventory extends CI_Model
{
	
	private $inventory_id;
	private $code;
	private $category_id;
	private $location_id;
	private $brand;
	private $model;
	private $serial_number;
	private $status_id;
	private $color;
	private $price;
	private $date_purchase;
	private $photo;
	private $description;

	function getAll()
	{
		$this->db->select('tb_inventory.*, tb_categories.category_name, tb_status.status_name, tb_locations.location_name');
		$this->db->from('tb_inventory');
		$this->db->join('tb_categories', 'tb_inventory.category_id = tb_categories.category_id');
		$this->db->join('tb_locations', 'tb_inventory.location_id = tb_locations.location_id');
		$this->db->join('tb_status', 'tb_inventory.status_id = tb_status.status_id');
		return $this->db->get()->result();
	}
}