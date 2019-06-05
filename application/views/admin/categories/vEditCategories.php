<?php $this->load->view("admin/_partials/atas.php")?>

<h3 class="judulHalaman">Edit Category</h3>
<form method="post" class="form-horizontal formm">

	<input type="hidden" name="id" value="<?php echo $edit->category_id?>">
	<div class="form-group">
		<label>Code</label>
		<input class="form-control" type="text" name="code" value="<?php echo $edit->code?>">
	</div>

	<div class="form-group">
		<label>Category Name</label>
		<input class="form-control" type="text" name="category_name" value="<?php echo $edit->category_name?>">
	</div>

	<div class="form-group">
		<label>Description</label>
		<textarea class="form-control" name="description"><?php echo $edit->description?></textarea>
	</div>
	<center>
		<button name="btn_edit_category" class="btn btn-primary">
			Simpan
		</button>
	</center>

</form>

<?php $this->load->view("admin/_partials/bawah.php")?>