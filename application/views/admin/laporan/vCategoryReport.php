<?php $this->load->view("admin/_partials/atas.php")?>
<h3 class="judulHalaman">Add Inventory</h3>
	<form method="post" class="form-horizontal formm" enctype="multipart/form-data">
		<div class="form-group">
			<label>Category</label>
			<select class="form-control" name="category_id">
				<?php
					echo '<option value="">--choose category--</option>';
					foreach ($categories as $a) {
						echo '<option value="'.$a->category_id.'">'.$a->category_name.'</option>';
					}
				?>
			</select>
		</div>
		<button name="btn_add_inventory" class="btn btn-primary">Simpan</button>

	</form> 
<?php $this->load->view("admin/_partials/bawah.php")?>