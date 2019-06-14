<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo SITE_NAME?></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('css/sb-admin.css')?>" rel="stylesheet">

  <link href="<?php echo base_url('css/style.css')?>" rel="stylesheet">


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-blue-1 static-top">

    <a class="navbar-brand mr-1" href="<?php echo site_url("admin/home")?>"><?php echo SITE_NAME?></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav bg-blue-1">
      <li class="nav-item <?php echo $this->uri->segment(2)== 'home'? 'active': ''?>">
        <a class="nav-link" href="<?php echo site_url("admin/home")?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item <?php echo $this->uri->segment(2)== 'inventory'? 'active': ''?>">
        <a class="nav-link" href="<?php echo site_url("admin/inventory")?>">
          <i class="fas fa-fw fa-folder"></i>
          <span>Inventory</span>
        </a>
      </li>

      <li class="nav-item <?php echo $this->uri->segment(2)== 'categories'? 'active': ''?>">
        <a class="nav-link" href="<?php echo site_url("admin/categories")?>">
          <i class="fas fa-fw fa-list"></i>
          <span>Category</span>
        </a>
      </li>

      <li class="nav-item <?php echo $this->uri->segment(2)== 'locations'? 'active': ''?>">
        <a class="nav-link" href="<?php echo site_url("admin/locations")?>">
          <i class="fas fa-fw fa-map-marked"></i>
          <span>Location</span>
        </a>
      </li>

      <li class="nav-item <?php echo $this->uri->segment(2)== 'status'? 'active': ''?>">
        <a class="nav-link" href="<?php echo site_url("admin/status")?>">
          <i class="fas fa-fw fa-memory"></i>
          <span>Status</span>
        </a>
      </li>

      <li class="nav-item <?php echo $this->uri->segment(2)== 'report'? 'active': ''?>">
        <a class="nav-link" href="<?php echo site_url("admin/report")?>">
          <i class="fas fa-fw fa-memory"></i>
          <span>Report</span>
        </a>
      </li>
<!-- 
      <li class="nav-item dropdown <?php echo $this->uri->segment(2)== 'inventory'? 'active': ''?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Inventaris</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item " href="<?php echo site_url("admin/inventory/add")?>">Add Inventory</a>
          <a class="dropdown-item" href="<?php echo site_url("admin/inventory")?>">All Data</a>
          <a class="dropdown-item" href="#">By Category</a>
          <a class="dropdown-item" href="#">By Location</a>
        </div>
      </li>

      <li class="nav-item dropdown <?php echo $this->uri->segment(2)== 'categories'? 'active': ''?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa fa-cog"></i>
          <span>Maintanance</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item " href="<?php echo site_url("admin/categories")?>">Categories</a>
          <a class="dropdown-item" href="<?php echo site_url("admin/locations")?>">Locations</a>
          <a class="dropdown-item" href="<?php echo site_url("admin/status")?>">Status</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">
          <i class="fas fa-fw fa-user"></i>
          <span>Users</span></a>
      </li>
 -->    </ul>

    <div id="content-wrapper">
        <div class="container-fluid">
