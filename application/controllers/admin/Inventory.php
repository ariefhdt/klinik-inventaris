<?php defined('BASEPATH') OR exit('No direct script access alowed');
/**
 * 
 */
class Inventory extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Minventory");
		$this->load->library('form_validation');
	}

	function index()
	{
		$data["inventory"] = $this->Minventory->getAll();
		$this->load->view("admin/vListInventory", $data);
	}
}