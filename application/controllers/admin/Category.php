<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Category extends CI_Controller
{ 
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mcategory");
		$this->load->library('form_validation');

	}

	function index()
	{
		$data["categories"] = $this->Mcategory->getAll();
		$this->load->view("admin/vAddCategory", $data);
	}

	function add() 
	{
		$category = $this->Mcategory;
		$validation = $this->form_validation;

		if ($validation->run()) {
			$category->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect(site_url("admin/category"));
		}

		$this->load->view("admin/vAddCategory");
	}
	function lihat($id=null)
	{
		$category = $this->Mcategory;
		$data["lihat"] = $category->getById($id);
		$this->load->view("admin/vLihatCategory", $data);
	}

	function edit($id=null)
	{
		$category = $this->Mcategory;
		$validation = $this->form_validation;

		if ($validation->run()) {
			$category->update();
			$this->session->set_flashdata('success', 'Berhasil ditambahkan');
			redirect(site_url('admin/category'));
		}

		$data["edit"] = $category->getById($id);
		$this->load->view("admin/vEditCategory", $data);
	}

	function delete($id)
	{
		if ($this->Mcategory->delete($id)) {
			redirect(site_url("admin/category"));
		}
	}
}