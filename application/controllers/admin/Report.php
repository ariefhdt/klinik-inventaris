<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Report extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("Minventory");
		$this->load->model("Mreport");
	}

	public function index()
	{
		if ($this->session->userdata('isloggedin')) {
				if (isset($_POST['btn_ctg_report'])) {
				$category_id = $this->input->post("category_id");
				$status_id = $this->input->post("status_id");
				$location_id = $this->input->post("location_id");
				redirect("admin/report/showBy/".$category_id."/".$location_id."/".$status_id);
			}
			$data["categories"] = $this->Minventory->dd_category();
			$data["statuses"] = $this->Minventory->dd_status();
			$data["locations"] = $this->Minventory->dd_location();
			$this->load->view("admin/laporan/vFormSearch", $data);
		}else{
			redirect('admin/users/login');
		}
		
	}


	public function showBy($category_id=0, $location_id=0, $status_id=0)
	{
		$data["tampil"] = $this->Mreport->showCategoryReport($category_id, $location_id, $status_id); 
		$this->load->view("admin/laporan/vShowReport", $data);

	}


}