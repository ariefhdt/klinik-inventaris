<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Mhome extends CI_Model
{
	
	public function getJumlahInventory()
	{
		$query = $this->db->get("tb_inventory");
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else
		{
			return 0;
		}
	}

	public function getJumlahCategory()
	{
		$query = $this->db->get("tb_categories");
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
	}

	public function getJumlahLocation()
	{
		$query = $this->db->get("tb_locations");
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
	}

	public function getJumlahStatus()
	{
		$query = $this->db->get("tb_status");
		if ($query->num_rows()>0) {
			return $query->num_rows();
		}else{
			return 0;
		}
	}
}