<!DOCTYPE html>
<html>
<head>
	<title>Login - Inventory Clinic</title>
	<!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('css/sb-admin.css')?>" rel="stylesheet">

	<link href="<?php echo base_url('css/style.css')?>" rel="stylesheet">
</head>
<body>
	<form method="post" class="form-horizontal formm">
		<div>
			<h3 class="text-center">Sign In</h3>
			<br>
		</div>
		<div class="text-danger form-group">
		<?php
		if (!empty($success_msg)) {
			echo $success_msg;
		}elseif (!empty($error_msg)) {
			echo $error_msg;
		}
		?>
		</div>
		<div class="form-group">
		<input class="form-control" type="text" name="username" placeholder="email"/>
		</div>

		<div class="form-group">
			<input class="form-control" type="password" name="password" placeholder="password" />
		</div>

		<div class="form-group text-center">
			<input class="btn btn-primary form-control" type="submit" name="login" value="login"/ >
		</div>
		

		
	</form>
</body>
</html>



