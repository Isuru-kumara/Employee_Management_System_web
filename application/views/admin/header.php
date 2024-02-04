<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Employee Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .rounded-border {
      border-radius: 30px 0px 0px 30px;
    }
  </style>
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="<?php echo base_url(); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      
      <img src="assets/dist/img/Logo.png" alt="Logo" height="100%" width="100%">
      <span class="logo-lg"><b>Astray </b>Apps</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/dist/img/admin-user.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/dist/img/admin-user.png" class="img-circle" alt="User Image">
                <p>Admin</p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url(); ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat">Sign out</a>
                </div>                
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/dist/img/admin-user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="active"><a href="<?php echo base_url(); ?>">&nbsp;<i class="fa fa-dashboard"></i>&nbsp;&nbsp; <span>Dashboard</span></a></li>

        <li class="treeview">
          <a href="#">
          &nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp; <span>Employees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-employee"><i class="fa fa-circle-o"></i> Add Employee</a></li>
            <li><a href="<?php echo base_url(); ?>manage-employee"><i class="fa fa-circle-o"></i> Manage Employee</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
          &nbsp;<i class="fa fa-bank"></i>&nbsp;&nbsp; <span>Departments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-department"><i class="fa fa-circle-o"></i> Add Departments</a></li>
            <li><a href="<?php echo base_url(); ?>manage-department"><i class="fa fa-circle-o"></i> Manage Departments</a></li>
          </ul>
        </li>
        <li class=""><a href="<?php echo base_url(); ?>manage-employee">&nbsp;<i class="fa fa-calendar-plus-o"></i>&nbsp;&nbsp; Attendance</a></li>

        <li class="treeview">
          <a href="#">
          &nbsp;<i class="fa fa-money"></i>&nbsp;&nbsp; <span>Payroll</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>add-salary"><i class="fa fa-circle-o"></i> Add Salary</a></li>
            <li><a href="<?php echo base_url(); ?>manage-salary"><i class="fa fa-circle-o"></i> Manage Salary</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
          &nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp; <span>Calendar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>calendar"><i class="fa fa-circle-o"></i> Add Events</a></li>
            <li><a href="<?php echo base_url(); ?>calendar"><i class="fa fa-circle-o"></i> Manage Events</a></li>
          </ul>
        </li>

        <li class="treeview ">
          <a href="#">
          &nbsp;<i class="fa fa-clipboard"></i>&nbsp;&nbsp; <span>Leave Requests</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>approve-leave"><i class="fa fa-circle-o"></i> Manage Employee's Leave</a></li>
            <li><a href="<?php echo base_url(); ?>leave-history"><i class="fa fa-circle-o"></i> Leave History</a></li>
          </ul>
        </li>
        
        <li class=""><a href="<?php echo base_url(); ?>chat">&nbsp;<i class="fa fa-book"></i>&nbsp;&nbsp; Messages</a></li>
        <li class=""><a href="<?php echo base_url(); ?>add-salary">&nbsp;<i class="fa fa-bar-chart"></i>&nbsp;&nbsp; Performance</a></li>
        <div class="container-fluid pt-5"></div><br><br><br>
        <li><a href="<?php echo base_url(); ?>logout">&nbsp;<i class="fa fa-arrow-circle-o-right"></i>&nbsp;&nbsp; <span>Logout</span></a></li>
      </ul>
    </section>
  </aside>

  <?php
    if ($this->session->userdata('usertype')!=1)
    { 
      redirect('login');
    }
  ?>

<script>
  $(document).ready(function () {
    // Add active class to clicked list item
    $('.sidebar-menu li').click(function () {
      $('.sidebar-menu li').removeClass('active');
      $(this).addClass('active');
    });
  });
</script>

</body>