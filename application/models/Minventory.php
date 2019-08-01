<?php defined('BASEPATH') OR exit('No direct script access alowed');
/**
 * 
 */
class Minventory extends CI_Model
{

	function getAll()
	{
		$this->db->select('tb_inventory.*, tb_categories.category_name, tb_status.status_name, tb_locations.location_name');
		$this->db->from('tb_inventory');
		$this->db->join('tb_categories', 'tb_inventory.category_id = tb_categories.category_id');
		$this->db->join('tb_locations', 'tb_inventory.location_id = tb_locations.location_id');
		$this->db->join('tb_status', 'tb_inventory.status_id = tb_status.status_id');
		return $this->db->get()->result();
	}

	public function getById($id)
	{
		$this->db->select('tb_inventory.*, tb_categories.category_name, tb_status.status_name, tb_locations.location_name');
		$this->db->from('tb_inventory');
		$this->db->join('tb_categories', 'tb_inventory.category_id = tb_categories.category_id');
		$this->db->join('tb_locations', 'tb_inventory.location_id = tb_locations.location_id');
		$this->db->join('tb_status', 'tb_inventory.status_id = tb_status.status_id');
		$this->db->where('inventory_id', $id);
		return $this->db->get()->row();
		//return $this->db->get_where("tb_inventory", ["inventory_id" => $id])->row();
	}

	public function getLastCode()
	{
		$sql = $this->db->query("SELECT code FROM tb_inventory ORDER BY inventory_id DESC LIMIT 1");
		return $sql->row(); 
	}

	public function dd_location()
	{
		return $this->db->get("tb_locations")->result();
	}

	public function dd_category()
	{
		return $this->db->get("tb_categories")->result();
	}

	public function dd_status()
	{
		return $this->db->get("tb_status")->result();
	}

	public function save($post) 
	{
		$code = $this->db->escape($post["code"]);
		$category_id = $this->db->escape($post["category_id"]);
		$location_id = $this->db->escape($post["location_id"]);
		$brand = $this->db->escape($post["brand"]);
		$model = $this->db->escape($post["model"]);
		$serial_number = $this->db->escape($post["serial_number"]);
		$status_id = $this->db->escape($post["status_id"]);
		$color = $this->db->escape($post["color"]);
		$price = $this->db->escape($post["price"]);
		$date_purchase = $this->db->escape($post["date_purchase"]);
		$photo = $this->_uploadImage();
		$description = $this->db->escape($post["description"]);

		$sql = $this->db->query("INSERT INTO tb_inventory VALUES(NULL, $code, $category_id, $location_id, $brand, $model, $serial_number, $status_id, $color, $price, $date_purchase, '$photo', $description)");

		if ($sql) {
			return true;
		}
	}

	public function _uploadImage()
	{
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = uniqid();
		$config['overwrite'] = true;
		$config['max_size'] = 5000;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('photo')) {
			return $this->upload->data('file_name');
		}

		return "default.png";
	}


	public function update($post, $id)
	{
		$code = $this->db->escape($post["code"]);
		$category_id = $this->db->escape($post["category_id"]);
		$location_id = $this->db->escape($post["location_id"]);
		$brand = $this->db->escape($post["brand"]);
		$model = $this->db->escape($post["model"]);
		$serial_number = $this->db->escape($post["serial_number"]);
		$status_id = $this->db->escape($post["status_id"]);
		$color = $this->db->escape($post["color"]);
		$price = $this->db->escape($post["price"]);
		$date_purchase = $this->db->escape($post["date_purchase"]);
		if (!empty($_FILES["photo"]["name"])) {
			$photo = $this->_uploadImage();
		}else{
			$photo = $this->db->escape($post["old_image"]);
		}

		$description = $this->db->escape($post["description"]);

		$sql = $this->db->query("UPDATE tb_inventory SET code = $code, category_id = $category_id, location_id = $location_id, brand = $brand, model = $model, serial_number = $serial_number, status_id = $status_id, color = $color, price = $price, date_purchase = $date_purchase, photo = '$photo', description = $description WHERE inventory_id = ".intval($id));

		return true;
	}

	public function delete($id)
	{
		$this->_deleteImage($id);
		return $this->db->delete("tb_inventory", array("inventory_id" => $id));
	}

	private function _deleteImage($id)
	{
		$photos = $this->getById($id);
		
		if ($photos->photo != "default.png") {
				$file_name = explode(".", $photos->photo[0]);
				return array_map('unlink', glob(FCPATH."upload/$file_name.*"));
			
				// Di sana kita mengambil nama file dengan fungsi exlode(). 
				// Lalu kita cari file berdasarkan nama tersbut dengan fungsi glob() 
				// Setelah file-file ditemukan, lalu kita gunakan fungsi array_map() 
				// untuk mengeksekusi fungsi unlink() pada tiap file yang ditemukan. 
				// Tanda bitang (*) setelah $filename artinya semua ektensi dipilih.

			}	
	}
}