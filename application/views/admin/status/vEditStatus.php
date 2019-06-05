<?php $this->load->view("admin/_partials/atas.php")?>
	<h3 class="judulHalaman">Edit Status</h3>
	<form method="post" class="form-horizontal formm">
		<div class="form-group">
			<label>Status Name</label>
			<input class="form-control" type="text" name="status_name" value="<?php echo $edit->status_name?>" placeholder="Status name">
		</div>

		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description" placeholder="Description"><?php echo $edit->description?>?</textarea>
		</div>
		<button name="btn_edit_status" class="btn btn-primary">Simpan</button>

	</form>

<?php $this->load->view("admin/_partials/bawah.php")?>