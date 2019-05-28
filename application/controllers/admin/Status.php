<?php defined('BASEPATH') OR exit('No direct access script allowed');
/**
 * 
 */
class Status extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mstatus");
		$this->load->library('form_validation');
	}

	function index()
	{
		$data["status"] = $this->Mstatus->getAll();
		$this->load->view("admin/vAddStatus", $data);
	}

	function add()
	{
		$status = $this->Mstatus;
		$validation = $this->form_validation;

		if ($validation->run()) {
			$status->save();
			$this->session->set_flashdata('success', 'Berhasil ditambahkan');
			redirect(site_url('admin/location'));
		}

		$this->load->view("admin/vAddStatus");
	}

	function edit($id=null)
	{
		$status = $this->Mstatus;
		$validation = $this->form_validation;

		if ($validation->run()) {
			$status->update();
			$this->session->set_flashdata('success', 'Berhasil dirubah');
			redirect(site_url('admin/location'));
		}

		$data["edit"] = $this->Mstatus->getById($id);
		$this->load->view("admin/vEditStatus", $data);
	}

	function delete($id)
	{
		if ($this->Mstatus->delete($id)) {
			redirect(site_url('admin/location'));
		}
	}
}