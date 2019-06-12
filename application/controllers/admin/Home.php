<?php 

/**
 * 
 */
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mhome");
	}

	public function index()
	{
		$data["inventory"] = $this->Mhome->getJumlahInventory();
		$data["category"] = $this->Mhome->getJumlahCategory();
		$data["location"] = $this->Mhome->getJumlahLocation();
		$data["status"] = $this->Mhome->getJumlahStatus();
		$this->load->view("admin/home", $data);
	}


}