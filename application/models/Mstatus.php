<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Mstatus extends CI_Model
{
	
	private $status_id;
	private $name;
	private $description;

	function getAll()
	{
		return $this->db->get("tb_status")->result();
	}

	function getById($id)
	{
		return $this->db->get_where("tb_status", ["status_id" => $id])->row();
	}

	function save()
	{
		$post = $this->input->post();
		$this->name = $post["name"];
		$this->description = $post["description"];
		$this->db->insert("tb_status", $this);
	}

	function update()
	{
		$post = $this->input->post();
		$this->status_id = $post["id"];
		$this->name = $post["name"];
		$this->description = $post["description"];
		$this->db->update("tb_status", $this, array('location_id' => $post["id"])); //jangan lupa input hidden
	}

	function delete($id)
	{
		return $this->db->delete("tb_status", array('location_id' => $id));
	}
}