<?php defined('BASEPATH') OR exit('No direct access script allowed');
/**
 * 
 */
class Status extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	function index()
	{
		$this->load->view("admin/vAddStatus");
	}

	function add()
	{

	}
}