<?php $this->load->view("admin/_partials/atas.php")?>
<h3 class="judulHalaman">Category List</h3>
<a href="categories/add" class="btn btn-primary">Add Category</a>
<hr>
	<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Category Lists</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered zebra-table" id="dataTable" width="100%" cellspacing="0">
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
                    <td><?php echo substr($row->description, 0,50)?></td>
                    <td width="180" class="text-center">
                      <a href="<?php echo site_url('admin/categories/edit/'.$row->category_id)?>"
                       class="btn btn-small"><i class="fas fa-edit"></i></a>
                      <a onclick="deleteConfirm('<?php echo site_url('admin/categories/delete/'.$row->category_id)?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

<?php $this->load->view("admin/_partials/bawah.php")?>