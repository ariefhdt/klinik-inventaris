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
}