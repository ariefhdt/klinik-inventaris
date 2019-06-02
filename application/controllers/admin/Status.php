<?php defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 * 
 */
class Status extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mstatus');
	}

	public function index()
	{
		$data["status"] = $this->Mstatus->getAll();
		$this->load->view("admin/status/vListStatus", $data);
	}

	public function add()
	{
		if (isset($_POST['btn_add_status'])) {
			$this->Mstatus->save($_POST);
			redirect("admin/status");
		}
		$this->load->view("admin/status/vAddStatus");
	}
}