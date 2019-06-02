<?php $this->load->view("admin/_partials/atas.php")?>
	<h3 class="text-center">Add Category</h3>
	<form method="post" class="form-horizontal">
		<div class="form-group">
			<label>Code</label>
			<input class="form-control" type="text" placeholder="ex : 1001" name="code" value="">
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