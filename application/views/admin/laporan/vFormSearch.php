<?php $this->load->view("admin/_partials/atas.php")?>
<h3 class="judulHalaman">Search Data by:</h3>
	<form method="post" class="form-horizontal formm" enctype="multipart/form-data">
		<div class="form-group">
			<label>Category</label>
			<select class="form-control" name="category_id">
				<?php
					echo '<option value="">--choose category--</option>';
					foreach ($categories as $a) {
						echo '<option value="'.$a->category_id.'">'.$a->category_name.'</option>';
					}
				?>
			</select>
		</div>

		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="status_id">
				<?php
					echo '<option value="">--choose status--</option>';
					foreach ($statuses as $b) {
						echo '<option value="'.$b->status_id.'">'.$b->status_name.'</option>';
					}
				?>
			</select>
		</div>
		<button name="btn_ctg_report" class="btn btn-primary">Simpan</button>

	</form> 
<?php $this->load->view("admin/_partials/bawah.php")?>