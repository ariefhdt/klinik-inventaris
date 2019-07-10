<?php $this->load->view("admin/_partials/atas.php")?>

	<?php
	if (isset($lastCode->code)) {
		$oldCode = intval($lastCode->code);
		$newCode = $oldCode + 0001;
	}else
	{
		$newCode = 1001;
	}
		
	?>

	<h3 class="judulHalaman">Add Category</h3>
	<form method="post" class="form-horizontal formm">
		<div class="form-group">
			<label>Code</label>
			<input class="form-control" type="text" placeholder="ex : 1001" name="code" value="<?php echo $newCode?>">
		</div>

		<div class="form-group">
			<label>Category Name</label>
			<input class="form-control" type="text" name="category_name" placeholder="Category name" value="">
		</div>

		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" placeholder="description" name="description"></textarea>
		</div>
		<button name="tombol_submit" class="btn btn-primary">Simpan</button>
 
	</form>

<?php $this->load->view("admin/_partials/bawah.php")?>