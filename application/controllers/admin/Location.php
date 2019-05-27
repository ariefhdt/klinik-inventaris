<?php defined('BASEPATH') OR exit('No direct access script allowed');
/**
 * 
 */
class Location extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	function index()
	{
		$this->load->view("admin/vAddLocation");
	}

	function add()
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
}