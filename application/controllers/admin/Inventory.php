<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Inventory extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Minventory');
	}

	public function index()
	{
		$data["inventories"] = $this->Minventory->getAll();
		$this->load->view("admin/inventory/vListInventory", $data);
	}

	public function add()
	{

		$this->load->view("admin/inventory/vAddInventory");
	}
}