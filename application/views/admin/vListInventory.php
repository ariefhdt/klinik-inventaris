<?php $this->load->view("admin/_partials/atas.php")?>
<!-- Judul Halaman -->
<h2 class="text-center">All Data Inventory</h2>
<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Location Lists</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Code</th>
                    <th>Category</th>
                    <th>location</th>
                    <th>Brand</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php foreach($inventory as $row):?>
	                  <tr>
	                    <td><?php echo $row->code?></td>
	                    <td><?php echo $row->category_name?></td>
	                    <td><?php echo $row->location_name?></td>
	                    <td><?php echo $row->brand?></td>
	                    <td><?php echo $row->status_name?></td>
	                    <td width="180" class="text-center">
				            <a href="<?php echo site_url('') ?>"
				             class="btn btn-small"><i class="fas fa-eye"></i></a>
				            <a href="<?php echo site_url('admin/location/edit/'.$row->location_id) ?>"
				             class="btn btn-small"><i class="fas fa-edit"></i></a>
				            <a onclick="deleteConfirm('<?php echo site_url('admin/location/delete/'.$row->location_id)?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
				          </td>
	                  </tr>
              		<?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
<?php $this->load->view("admin/_partials/bawah.php")?>