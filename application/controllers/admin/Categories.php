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

	public function edit($id)
	{
		if (isset($_POST['btn_edit_category'])) {
			$this->Mcategories->update($_POST, $id);
			redirect("admin/categories");
		}
		$data["edit"] = $this->Mcategories->getById($id);
		$this->load->view("admin/categories/vEditCategories", $data);
	}

	public function delete($id)
	{
		if ($this->Mcategories->delete($id)) {
			redirect("admin/categories");
		}
	}
}