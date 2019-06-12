<?php $this->load->view("admin/_partials/atas.php")?>
	<h3 class="judulHalaman">Add Location</h3>

	<?php
		$oldCode = intval($lastCode->code);
		$newCode = $oldCode + 0001;
	?>

	<form method="post" class="form-horizontal formm">
		<div class="form-group">
			<label>Code</label>
			<input class="form-control" type="text" name="code" value="<?php echo intval($newCode)?>">
		</div>

		<div class="form-group">
			<label>Category Name</label>
			<input class="form-control" type="text" placeholder="location name" name="location_name" value="">
		</div>

		<div class="form-group">
			<label>Detail</label>
			<textarea class="form-control" placeholder="detail address" name="detail"></textarea>
		</div>
		<button name="btn_add_location" class="btn btn-primary">Simpan</button>
	</form>

<?php $this->load->view("admin/_partials/bawah.php")?>