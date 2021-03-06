<?php $this->load->view("admin/_partials/atas.php")?>

<!-- Judul Halaman -->
<h2 class="text-center">Edit Category</h2>

	<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success" role="alert">
		<?php echo $this->session->flashdata('success'); ?>
	</div>
	<?php endif; ?>

	<div class="card-body">
		<!-- Form Input Data -->
		<form action="<?php base_url('admin/category/edit') ?>" method="post" >

			<input type="hidden" name="id" value="<?php echo $edit->category_id?>">

			<div class="form-group">
				<label for="code">Code*</label>
				<input class="form-control" type="text" name="code" value="<?php echo $edit->code?>" />
			</div>

			<div class="form-group">
				<label for="name">Name*</label>
				<input class="form-control" type="text" name="name" value="<?php echo $edit->name?>" />
			</div>

			<div class="form-group">
				<label for="description">Description*</label>
				<input class="form-control" type="text" name="description" value="<?php echo $edit->description?>" />
			</div>
			<input class="btn btn-success" type="submit" name="btn" value="Save" />
		</form>

	</div>

<?php $this->load->view("admin/_partials/bawah.php")?>