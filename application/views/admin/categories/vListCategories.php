<?php $this->load->view("admin/_partials/atas.php")?>
<h3 class="text-center">Category List</h3>
<a href="categories/add" class="btn btn-primary">Add Category</a>
<hr>
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
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php foreach($categories as $row):?>
                  <tr>
                    <td><?php echo $row->code?></td>
                    <td><?php echo $row->category_name?></td>
                    <td><?php echo $row->description?></td>
                    <td width="180" class="text-center">
                      <a href=""
                       class="btn btn-small"><i class="fas fa-edit"></i></a>
                      <a onclick="deleteConfirm('')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

<?php $this->load->view("admin/_partials/bawah.php")?>