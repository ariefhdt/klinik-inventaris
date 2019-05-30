<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Mlocation extends CI_Model
{
	private $code;
	private $location_name;
	private $detail;

	public function getAll()
	{
		return $this->db->get("tb_locations")->result();
	}

	public function getById($id)
	{
		return $this->db->get_where("tb_locations", ["location_id" => $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->code = $post["code"];
		$this->location_name = $post["name"];
		$this->detail = $post["detail"];
		$this->db->insert("tb_locations", $this);

	}

	public function update()
	{
		$post = $this->input->post();
		$this->code = $post["code"];
		$this->location_name = $post["name"];
		$this->detail = $post["detail"];
		$this->db->update("tb_locations", $this, array('location_id' => $post['id'])); //jangan lupa tambahkan input hidden untuk id
	}

	public function delete($id)
	{
		return $this->db->delete("tb_locations", array("location_id" => $id));
	}
}