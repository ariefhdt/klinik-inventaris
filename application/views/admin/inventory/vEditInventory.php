<?php $this->load->view("admin/_partials/atas.php")?>

	<h3 class="text-center">Edit Inventory</h3>
	<form method="post" class="form-horizontal" enctype="multipart/form-data">
		<div class="form-group">
			<label>Code</label>
			<input class="form-control" type="text" placeholder="ex : 1001" name="code" value="<?php echo $inventory->code?>">
		</div>

		<div class="form-group">
			<label>Category</label>
			<select class="form-control" name="category_id">
				<?php foreach ($category as $cat){ ?>
					<option value="<?php echo $cat->category_id; ?>" <?php if ($inventory->category_id == $cat->category_id) { echo 'selected'; } ?>><?php echo $cat->category_name; ?></option>
				<?php } ?>
					 
			</select>
		</div>

		<div class="form-group">
			<label>Location</label>
			<select class="form-control" name="location_id">
				<?php foreach($location as $loc){?>
					<option value="<?php echo $loc->location_id?>" <?php if($inventory->location_id == $loc->location_id){ echo 'selected'; } ?> > <?php echo $loc->location_name?></option>
				<?php } ?>
			</select>
		</div>

		<div class="form-group">
			<label>Brand</label>
			<input class="form-control" type="text" name="brand" placeholder="Insert brand name" value="<?php echo $inventory->brand?>">
		</div>

		<div class="form-group">
			<label>Model</label>
			<input class="form-control" type="text" name="model" placeholder="Insert model product" value="<?php echo $inventory->model?>">
		</div>

		<div class="form-group">
			<label>Serial Number</label>
			<input class="form-control" type="text" name="serial_number" placeholder="Insert serial number" value="<?php echo $inventory->serial_number?>">
		</div>

		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="status_id">
				<?php foreach ($status as $stat ) { ?>
					<option value="<?php echo $stat->status_id?>" <?php if ($inventory->status_id == $stat->status_id) {
						echo 'selected';}?>> <?php echo $stat->status_name?></option>
				<?php }?>
			</select>
		</div>

		<div class="form-group">
			<label>Color</label>
			<input class="form-control" type="text" name="color" placeholder="Insert color product" value="<?php echo $inventory->color?>">
		</div>

		<div class="form-group">
			<label>Product Price</label>
			<input class="form-control" type="number" name="price" placeholder="Insert product price" value="<?php echo $inventory->price?>">
		</div>

		<div class="form-group">
			<label>Date Purchase</label>
			<input class="form-control" type="date" name="date_purchase" value="<?php echo $inventory->date_purchase?>">
		</div>

		<div class="form-group">
			<label>Photo</label>
			<input class="form-control" type="file" name="photo" value="">
			<input type="hidden" name="old_image" value="<?php echo $inventory->photo?>" >
		</div>

		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" placeholder="description" name="description"><?php echo $inventory->description?></textarea>
		</div>
		<button name="btn_edit_inventory" class="btn btn-primary">Simpan</button>

	</form> 

<?php $this->load->view("admin/_partials/bawah.php")?>