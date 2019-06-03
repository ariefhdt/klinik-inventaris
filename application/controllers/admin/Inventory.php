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
		if (isset($_POST['btn_add_inventory'])) {
			$this->Minventory->save($_POST);
			redirect("admin/inventory");
		}
		$data["categories"] = $this->Minventory->dd_category();
		$data["locations"] = $this->Minventory->dd_location();
		$data["statuses"] = $this->Minventory->dd_status();
		$this->load->view("admin/inventory/vAddInventory", $data);
	}


}