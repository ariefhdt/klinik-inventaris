<?php $this->load->view("admin/_partials/atas.php") ?>

<!-- Judul Halaman -->
<h2 class="text-center">Add Status</h2>

	<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success" role="alert">
		<?php echo $this->session->flashdata('success'); ?>
	</div>
	<?php endif; ?>

	<div class="card-body">
		<!-- Form Input Data -->
		<form action="<?php base_url('admin/location/add') ?>" method="post" >

			<div class="form-group">
				<label for="name">Name*</label>
				<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
				 type="text" name="name" placeholder="Insert Status Name" />
				<div class="invalid-feedback">
					<?php echo form_error('name') ?>
				</div>
			</div>

			<div class="form-group">
				<label for="description">Description*</label>
				<textarea class="form-control" name="description" placeholder="Insert Detail Status"></textarea>
			</div>
			<input class="btn btn-success" type="submit" name="btn" value="Save" />
		</form>
	</div>

	<br>
	<hr>
	<br>

	<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Status Lists</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php foreach($status as $row):?>
	                  <tr>
	                    <td><?php echo $row->name?></td>
	                    <td><?php echo $row->description?></td>
	                    <td width="180" class="text-center">
				            <a href="<?php echo site_url('admin/status/edit/'.$row->status_id) ?>"
				             class="btn btn-small"><i class="fas fa-edit"></i></a>
				            <a onclick="deleteConfirm('') ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
				          </td>
	                  </tr>
              		<?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

</div>
<!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/bawah.php") ?>