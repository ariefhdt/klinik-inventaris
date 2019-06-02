<?php $this->load->view("admin/_partials/atas.php")?>
	<h3 class="text-center">Edit Category</h3>
	<form method="post" class="form-horizontal">
		<div class="form-group">
			<label>Code</label>
			<input class="form-control" type="text" name="code" value="">
		</div>

		<div class="form-group">
			<label>Category Name</label>
			<input class="form-control" type="text" name="category_name" value="">
		</div>

		<div class="form-group">
			<label>Code</label>
			<textarea class="form-control" name="description"></textarea>
		</div>
		<center>
			<button name="tombol_submit" class="btn btn-primary">
				Simpan
			</button>
		</center>

	</form>

<?php $this->load->view("admin/_partials/bawah.php")?>