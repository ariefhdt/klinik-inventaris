<?php defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 * 
 */
class Mreport extends CI_Model
{
	public function index()
	{
		$this->load->view("admin/laporan/vLaporan");
	}

}