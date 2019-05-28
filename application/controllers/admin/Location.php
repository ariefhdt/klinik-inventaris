<?php defined('BASEPATH') OR exit('No direct access script allowed');
/**
 * 
 */
class Location extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mlocation");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["locations"] = $this->Mlocation->getAll();
		$this->load->view("admin/vAddLocation", $data);
	}

	public function add()
	{
		$location = $this->Mlocation;
		$validation = $this->form_validation;

		if ($validation->run()) {
			$location->save();
			$this->session->set_flashdata('success', 'Berhasil ditambahkan');
			redirect(site_url("admin/location"));
		}

		$this->load->view("admin/vAddLocation");

	}

	public function edit($id=null)
	{
		$location = $this->Mlocation;
		$validation = $this->form_validation;

		if ($validation->run()) {
			$location->update();
			$this->session->set_flashdata('success', 'Berhasil ditambahkan');
			redirect(site_url("admin/location"));
		}

		$data["edit"] = $this->Mlocation->getById($id);
		$this->load->view("admin/vEditLocation", $data);
	}

	public function delete($id=null)
	{
		if ($this->Mlocation->delete($id)) {
			redirect(site_url('admin/location'));
		}
	}


}