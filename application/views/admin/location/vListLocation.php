<?php $this->load->view("admin/_partials/atas.php")?>
<h3 class="text-center">Location List</h3>
<a href="locations/add" class="btn btn-primary">Add Location</a>
<hr>
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
                    <th>Name</th>
                    <th>Detail</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php foreach($locations as $row):?>
                  <tr>
                    <td><?php echo $row->code?></td>
                    <td><?php echo $row->location_name?></td>
                    <td><?php echo $row->detail?></td>
                    <td width="150" class="text-center">
                      <a href="<?php echo site_url('admin/locations/edit/'.$row->location_id)?>"
                       class="btn btn-small"><i class="fas fa-edit"></i></a>
                      <a onclick="deleteConfirm('<?php echo site_url('admin/locations/delete/'.$row->location_id)?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

<?php $this->load->view("admin/_partials/bawah.php")?>