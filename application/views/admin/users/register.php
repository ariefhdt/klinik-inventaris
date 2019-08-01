<!DOCTYPE html>
<html>
<head>
	<title>Register - Inventory Clinic</title>
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
	<div class="text-center">
		<h3>User Registration</h3>
		<br>
	</div>
	<div class="form-group">
		<input class="form-control" type="text" name="name" placeholder="enter name" value="<?php echo !empty($user['name'])?$user['name']:''; ?>"  />
		<?php echo form_error('name', '<span style="color:red" class="help-block">','</span>'); ?>
	</div>
	<div class="form-group">
		<input class="form-control" type="text" name="email" placeholder="enter email" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" />
		<?php echo form_error('email', '<span style="color:red" class="help-block">','</span>'); ?>
	</div>
	<div class="form-group">
		<input class="form-control" type="text" name="location" placeholder="enter location" />
	</div>
	<div class="form-group">
		<input class="form-control" type="password" name="password" placeholder="enter password"  />
		<?php echo form_error('password', '<span style="color:red" class="help-block">','</span>'); ?>
	</div>
	<div class="form-group">
		<input class="form-control" type="password" name="cpassword" placeholder="confirm password"  />
		<?php echo form_error('cpassword', '<span style="color:red" class="help-block">','</span>'); ?>
	</div>

	<div class="form-group">
		<?php
		if(!empty($user['gender']) && $user['gender']=='Male'){
			$mcheck='checked="checked"';
			$fcheck='';
		}elseif (!empty($user['gender']) && $user['gender']=='Female') {
			$fcheck='checked="checked"';
			$mcheck='';
		}

		else{
			$fcheck='';
			$mcheck='';
		}

		?>
		<input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>/>Male
	    <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>/>Female
	</div>
	<div class="form-group text-center">
		<input class="btn btn-primary form-control" type="submit" name="submit" value="submit" />
	</div>
	<div class="text-center">
		<span>Already have an account? click <a href="<?php echo base_url(); ?>admin/users/login">here</a> to login.</span>
	</div>
</form>
</body>
</html>