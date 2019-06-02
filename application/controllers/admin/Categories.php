<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Categories extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mcategories');
	}
	function index()
	{
		$data["categories"] = $this->Mcategories->getAll();
		$this->load->view("admin/categories/vListCategories", $data);
	}

	public function add()
	{
		if (isset($_POST['tombol_submit'])) {
			$this->Mcategories->simpan($_POST);
			redirect("admin/categories");
		}
		$this->load->view("admin/categories/vAddCategories");
	}
}