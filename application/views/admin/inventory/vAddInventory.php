<?php $this->load->view("admin/_partials/atas.php")?>

	<h3 class="text-center">Add Inventory</h3>
	<form method="post" class="form-horizontal" enctype="multipart/form-data">
		<div class="form-group">
			<label>Code</label>
			<input class="form-control" type="text" placeholder="ex : 1001" name="code" value="">
		</div>

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

		<div class="form-group">
			<label>Location</label>
			<select class="form-control" name="location_id">
				<?php
					echo '<option value="">--choose location--</option>';
					foreach ($locations as $b) {
						echo '<option value="'.$b->location_id.'">'.$b->location_name.'</option>';
					}
				?>
			</select>
		</div>

		<div class="form-group">
			<label>Brand</label>
			<input class="form-control" type="text" name="brand" placeholder="Insert brand name" value="">
		</div>

		<div class="form-group">
			<label>Model</label>
			<input class="form-control" type="text" name="model" placeholder="Insert model product" value="">
		</div>

		<div class="form-group">
			<label>Serial Number</label>
			<input class="form-control" type="text" name="serial_number" placeholder="Insert serial number" value="">
		</div>

		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="status_id">
				<?php
					echo '<option value="">--choose status--</option>';
					foreach ($statuses as $c) {
						echo'<option value="'.$c->status_id.'">'.$c->status_name.'</option>';
					}
				?>
			</select>
		</div>

		<div class="form-group">
			<label>Color</label>
			<input class="form-control" type="text" name="color" placeholder="Insert color product" value="">
		</div>

		<div class="form-group">
			<label>Product Price</label>
			<input class="form-control" type="number" name="price" placeholder="Insert product price" value="">
		</div>

		<div class="form-group">
			<label>Date Purchase</label>
			<input class="form-control" type="date" name="date_purchase" value="">
		</div>

		<div class="form-group">
			<label>Photo</label>
			<input class="form-control" type="file" name="photo" value="">
		</div>

		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" placeholder="description" name="description"></textarea>
		</div>
		<button name="btn_add_inventory" class="btn btn-primary">Simpan</button>

	</form> 

<?php $this->load->view("admin/_partials/bawah.php")?>