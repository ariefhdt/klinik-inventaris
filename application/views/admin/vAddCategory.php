<?php $this->load->view("admin/_partials/atas.php") ?>


<!-- Judul Halaman -->
<h2 class="text-center">Add Category</h2>

	<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success" role="alert">
		<?php echo $this->session->flashdata('success'); ?>
	</div>
	<?php endif; ?>

	<div class="card-body">
		<!-- Form Input Data -->
	<form action="<?php base_url('admin/category/add') ?>" method="post" enctype="multipart/form-data" >

		<div class="form-group">
			<label for="code">Code*</label>
			<input class="form-control" type="text" name="code" placeholder="blank" />
		</div>

		<div class="form-group">
			<label for="name">Name*</label>
			<input class="form-control" type="text" name="name" placeholder="blank"/>
		</div>

		<div class="form-group">
			<label for="description">Description*</label>
			<input class="form-control" type="text" name="description" placeholder="blank"/>
		</div>
		<input class="btn btn-success" type="submit" name="btn" value="Save" />
	</form>

	</div>
	<div class="card-footer small text-muted">
		* required fields
	</div>

	<br>
	<hr>
	<br>

	<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Category Lists</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>System Architect</td>
                    <td width="180" class="text-center">
			            <a href="<?php echo site_url('') ?>"
			             class="btn btn-small"><i class="fas fa-eye"></i></a>
			            <a href="<?php echo site_url('') ?>"
			             class="btn btn-small"><i class="fas fa-edit"></i></a>
			            <a onclick="deleteConfirm('') ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
			          </td>
                    
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

</div>
<!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/bawah.php") ?>