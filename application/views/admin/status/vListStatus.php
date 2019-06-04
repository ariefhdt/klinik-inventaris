<?php $this->load->view("admin/_partials/atas.php")?>
<h3 class="text-center">Location List</h3>
<a href="status/add" class="btn btn-primary">Add Status</a>
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
                    <th>Name</th>
                    <th>Description</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php foreach($status as $row):?>
                  <tr>
                    <td><?php echo $row->status_name?></td>
                    <td><?php echo $row->description?></td>
                    <td width="180" class="text-center">
                      <a href="<?php echo site_url("admin/status/edit/".$row->status_id)?>"
                       class="btn btn-small"><i class="fas fa-edit"></i></a>
                      <a onclick="deleteConfirm('<?php echo site_url('admin/status/delete/'.$row->status_id)?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

<?php $this->load->view("admin/_partials/bawah.php")?>