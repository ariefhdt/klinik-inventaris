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
		if ($this->session->userdata('isloggedin')) {
			$data["status"] = $this->Mstatus->getAll();
		$this->load->view("admin/status/vListStatus", $data);
		}else{
			redirect('admin/users/login');
		}
	}

	public function add()
	{
		if (isset($_POST['btn_add_status'])) {
			$this->Mstatus->save($_POST);
			redirect("admin/status");
		}
		$this->load->view("admin/status/vAddStatus");
	}

	public function edit($id)
	{
		if (isset($_POST['btn_edit_status'])) {
			$this->Mstatus->update($_POST, $id);
			redirect("admin/status");
		}

		$data["edit"] = $this->Mstatus->getById($id);
		$this->load->view("admin/status/vEditStatus", $data);
	}

	public function delete($id)
	{
		if ($this->Mstatus->delete($id)) {
			redirect("admin/status");
		}
	}
}