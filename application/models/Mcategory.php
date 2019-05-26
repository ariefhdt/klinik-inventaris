<?php defined('BASEPATH') OR exit('No direct script access alowed');
/**
 * 
 */
class Mcategory extends CI_Model
{
	public $code = "1009";
	public $name = "Test";
	public $description = "Percobaan pembunuhan";
	
	function save()
	{
		// $post = $this->input->post();
		// $this->code = $post["code"];
		// $this->name = $post["name"];
		// $this->description = $post["description"];
		$this->db->insert("tb_categories", $this);
	}

	function getAll()
	{
		$this->db->get("tb_categories")->result();
	}

	function getById($id)
	{
		return $this->db->get_where("tb_categories", ["category_id" => $id])->row();
	}
}