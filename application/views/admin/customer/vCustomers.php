<?php $this->load->view("admin/_partials/atas.php")?>
    <div class="container">
        <h1 style="font-size:20pt">Simple Serverside Datatable Codeigniter Custom Filter</h1>
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title" >Custom Filter : </h3>
            </div>
            <div class="panel-body">
                <form id="form-filter" class="form-horizontal">
                    <div class="form-group">
                        <label for="country" class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-4">
                            <?php echo $form_country; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="FirstName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="FirstName">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="LastName">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label"></label>
                        <div class="col-sm-4">
                            <button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
                            <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body">
        	<div class="table-responsive">
	        <table id="table" class="table table-bordered zebra-table" width="100%" cellspacing="0">
	            <thead>
	                <tr>
	                    <th>No</th>
	                    <th>First Name</th>
	                    <th>Last Name</th>
	                    <th>Phone</th>
	                    <th>Address</th>
	                    <th>City</th>
	                    <th>Country</th>
	                </tr>
	            </thead>
	            <tbody>
	            </tbody>
	 
	            <tfoot>
	                <tr>
	                    <th>No</th>
	                    <th>First Name</th>
	                    <th>Last Name</th>
	                    <th>Phone</th>
	                    <th>Address</th>
	                    <th>City</th>
	                    <th>Country</th>
	                </tr>
	            </tfoot>
	        </table>	
        </div>

        </div>
        
        
    </div>
 
<script src="<?php echo base_url('assets/jquery/jquery-2.2.3.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js')?>"></script>

<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.min.js')?>"></script> 
 
<script type="text/javascript">
 
var table;
 
$(document).ready(function() {
 
    //datatables
    table = $('#table').DataTable({ 
 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('admin/customers/ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
                data.country = $('#country').val();
                data.FirstName = $('#FirstName').val();
                data.LastName = $('#LastName').val();
            }
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
 
    });
 
    $('#btn-filter').click(function(){ //button filter event click
        table.ajax.reload();  //just reload table
    });
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });
 
});
 
</script>

<?php $this->load->view("admin/_partials/bawah.php")?>
