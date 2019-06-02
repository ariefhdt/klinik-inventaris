<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Locations extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mlocations');
	}

	public function index()
	{
		$data["locations"] = $this->Mlocations->getAll();
		$this->load->view("admin/location/vListLocation", $data);
	}

	public function add()
	{
		if (isset($_POST['btn_add_location'])) {
			$this->Mlocations->save($_POST);
			redirect("admin/locations");
		}
		$this->load->view("admin/location/vAddLocation");
	}

}