<?php $this->load->view("admin/_partials/atas.php")?>
	<h3 class="judulHalaman">Edit Location</h3>
	<form method="post" class="form-horizontal formm">
		<input type="hidden" name="id" value="<?php echo $edit->location_id?>">
		<div class="form-group">
			<label>Code</label>
			<input class="form-control" type="text" placeholder="Ex : 2001" name="code" value="<?php echo $edit->code?>">
		</div>

		<div class="form-group">
			<label>Location Name</label>
			<input class="form-control" type="text" placeholder="location name" name="location_name" value="<?php echo $edit->location_name?>">
		</div>

		<div class="form-group">
			<label>Detail</label>
			<textarea class="form-control" placeholder="detail address" name="detail"><?php echo $edit->detail?></textarea>
		</div>
		<button name="btn_edit_location" class="btn btn-primary">Simpan</button>
	</form>

<?php $this->load->view("admin/_partials/bawah.php")?>