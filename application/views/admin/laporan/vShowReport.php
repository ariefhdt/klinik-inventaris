<?php $this->load->view("admin/_partials/atas.php")?>
<h3 class="judulHalaman">Report Data</h3>
	<div class="card mb-3">
		<div class="card-header">
			<a href="<?php echo site_url('admin/report/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
		</div>
	<div class="card-body">

	<!-- table data -->
	<div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Inventory List</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered zebra-table" id="dataTable" width="100%" cellspacing="0">
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
            	<?php foreach($tampil as $row):?>
                  <tr>
                    <td><?php echo $row->code?></td>
                    <td><?php echo $row->category_name?></td>
                    <td><?php echo $row->location_name?></td>
                    <td><?php echo $row->brand?></td>
                    <td><?php echo $row->status_name?></td>
                    <td width="180" class="text-center">
			            <a href="<?php echo site_url('admin/inventory/lihat/'.$row->inventory_id) ?>"
			             class="btn btn-small"><i class="fas fa-eye"></i></a>
			            <a href="<?php echo site_url('admin/inventory/edit/'.$row->inventory_id) ?>"
			             class="btn btn-small"><i class="fas fa-edit"></i></a>
			            <a onclick="deleteConfirm('<?php echo site_url('admin/inventory/delete/'.$row->inventory_id)?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
			          </td>
                  </tr>
          		<?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
<?php $this->load->view("admin/_partials/bawah.php")?>