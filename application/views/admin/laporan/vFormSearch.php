<?php $this->load->view("admin/_partials/atas.php")?>
<h3 class="judulHalaman">Search Data by:</h3>
	<form method="post" class="form-horizontal formm" enctype="multipart/form-data">
		<div class="form-group">
			<label>Category</label>
			<select class="form-control" name="category_id">
				<?php
					echo '<option value="0">--semua kategori--</option>';
					foreach ($categories as $a) {
						echo '<option value="'.$a->category_id.'">'.$a->category_name.'</option>';
					}
				?>
			</select>
		</div>

		<div class="form-group">
			<label>Location</label>
			<select class="form-control" name="location_id">
				<?php
					echo '<option value="0">--semua lokasi--</option>';
					foreach ($locations as $c) {
						echo '<option value="'.$c->location_id.'">'.$c->location_name.'</option>';
					}
				?>
			</select>
		</div>

		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="status_id">
				<?php
					echo '<option value="0">--semua status--</option>';
					foreach ($statuses as $b) {
						echo '<option value="'.$b->status_id.'">'.$b->status_name.'</option>';
					}
				?>
			</select>
		</div>
		<div class="text-center">
			<button name="btn_ctg_report" class="btn btn-primary">Tampilkan</button>
		</div>

	</form> 
<?php $this->load->view("admin/_partials/bawah.php")?>