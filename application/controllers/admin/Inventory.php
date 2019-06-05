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

	public function lihat($id)
	{
		$data["lihat"] = $this->Minventory->getById($id);
		$this->load->view("admin/inventory/vLihatInventory", $data);
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

	public function edit($id)
	{
		if (isset($_POST['btn_edit_inventory'])) {
			$this->Minventory->update($_POST, $id);
			redirect("admin/inventory");
		}
		$data["inventory"] = $this->Minventory->getById($id);
		$data["category"] = $this->Minventory->dd_category();
		$data["location"] = $this->Minventory->dd_location();
		$data["status"] = $this->Minventory->dd_status();
		$this->load->view("admin/inventory/vEditInventory", $data);
	}

	public function delete($id)
	{
		if ($this->Minventory->delete($id)) {
			redirect("admin/inventory");
		}
	}


}