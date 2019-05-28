<?php $this->load->view("admin/_partials/atas.php")?>

<!-- Judul Halaman -->
<h2 class="text-center">Edit Location</h2>

	<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success" role="alert">
		<?php echo $this->session->flashdata('success'); ?>
	</div>
	<?php endif; ?>

	<div class="card-body">
		<!-- Form Input Data -->
		<form action="<?php base_url('admin/location/edit') ?>" method="post" >

			<input type="hidden" name="id" value="<?php echo $edit->location_id?>">

			<div class="form-group">
				<label for="code">Code*</label>
				<input class="form-control" type="text" name="code" value="<?php echo $edit->code?>" />
			</div>

			<div class="form-group">
				<label for="name">Name*</label>
				<input class="form-control" type="text" name="name" value="<?php echo $edit->name?>" />
			</div>

			<div class="form-group">
				<label for="detail">Detail*</label>
				<input class="form-control" type="text" name="detail" value="<?php echo $edit->detail?>" />
			</div>
			<input class="btn btn-success" type="submit" name="btn" value="Save" />
		</form>

	</div>

<?php $this->load->view("admin/_partials/bawah.php")?>