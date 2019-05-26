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
		}

		$this->load->view("admin/vAddCategory");
	}
}