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
		$data["categories"] = $this->Minventory->dd_category();
		$data["locations"] = $this->Minventory->dd_location();
		$data["statuses"] = $this->Minventory->dd_status();
		$this->load->view("admin/laporan/vLaporan", $data);
	}

	public function getRecords()
	{
		if (isset($_POST['btn_show_report'])) {
			$a["w"] = $this->db->escape($post["category_id"]);
			$this->load->view("admin/laporan/vResultLaporan", $a);
		}
	}

	public function categoryReport()
	{
		$data["categories"] = $this->Minventory->dd_category();
		$this->load->view("admin/laporan/vCategoryReport", $data);
	}

	public function LocationReport()
	{
		$data["locations"] = $this->Minventory->dd_location();
		$this->load->view("admin/laporan/vLocationReport", $data);
	}

	public function StatusReport()
	{
		$data["statuses"] = $this->Minventory->dd_status();
		$this->load->view("admin/laporan/vStatusReport", $data);
	}

}