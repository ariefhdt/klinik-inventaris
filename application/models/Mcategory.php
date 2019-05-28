<?php defined('BASEPATH') OR exit('No direct script access alowed');
/**
 * 
 */
class Mcategory extends CI_Model
{
	private $category_id;
	public $code;
	public $name;
	public $description;
	
	function save()
	{
		$post = $this->input->post();
		$this->code = $post["code"];
		$this->name = $post["name"];
		$this->description = $post["description"];
		$this->db->insert("tb_categories", $this);
	}

	public function getAll()
	{
		return $this->db->get("tb_categories")->result();
	}

	function getById($id)
	{
		return $this->db->get_where("tb_categories", ["category_id" => $id])->row();
	}

	public function update()
	{
		$post = $this->input->post();
		$this->category_id = $post["id"];
		$this->code = $post["code"];
		$this->name = $post["name"];
		$this->description = $post["description"];
		$this->db->update("tb_categories", $this, array('category_id' =>$post['id']));
	}

	public function delete($id)
	{
		return $this->db->delete("tb_categories", array("category_id" =>$id));
	}
}