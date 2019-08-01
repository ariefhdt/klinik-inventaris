<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Locations extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mlocations');
	}

	public function index()
	{
		if ($this->session->userdata('isloggedin')) {
			$data["locations"] = $this->Mlocations->getAll();
			$this->load->view("admin/location/vListLocation", $data);
		}else{
			redirect('admin/users/login');
		}
		
	}

	public function add()
	{
		if (isset($_POST['btn_add_location'])) {
			$this->Mlocations->save($_POST);
			redirect("admin/locations");
		}
		$data["lastCode"] = $this->Mlocations->getLastCode();
		$this->load->view("admin/location/vAddLocation", $data);
	}

	public function edit($id) 
	{
		if (isset($_POST['btn_edit_location'])) {
			$this->Mlocations->update($_POST, $id);
			redirect("admin/locations");
		}
		$data["edit"] = $this->Mlocations->getById($id);
		$this->load->view("admin/location/vEditLocation", $data);
	}

	public function delete($id)
	{
		if ($this->Mlocations->delete($id)) {
			redirect("admin/locations");
		}
	}

}