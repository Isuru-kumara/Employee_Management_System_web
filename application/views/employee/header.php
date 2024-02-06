<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Employee Management System</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="<?php echo base_url(); ?>" class="logo">
      <img src="assets/dist/img/Logo.png" alt="Logo" height="100%" width="100%">
      <span class="logo-lg"><b>Astray </b>Apps</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"></a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>assets/dist/img/userav.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Employee</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/dist/img/userav.png" class="img-circle" alt="User Image">
                <p>Employee<small>Since Nov, 2020</small></p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
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
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">      
        <li class="active"><a href="<?php echo base_url(); ?>">&nbsp;<i class="fa fa-dashboard"></i>&nbsp;&nbsp; <span>Dashboard</span></a></li>
        <li class="treeview">
          <a href="#">
          &nbsp;<i class="fa fa-user"></i>&nbsp;&nbsp; <span>Account</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>view-employee"><i class="fa fa-circle-o"></i> View Profile</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
          &nbsp;<i class="fa fa-money"></i>&nbsp;&nbsp; <span>Payroll</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>view-salary"><i class="fa fa-circle-o"></i> View Salary</a></li>
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
            <li><a href="<?php echo base_url(); ?>view-events"><i class="fa fa-circle-o"></i> Add Events</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
          &nbsp;<i class="fa fa-clipboard"></i>&nbsp;&nbsp; <span>Leave Requests</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>apply-leave"><i class="fa fa-circle-o"></i> Apply Leave</a></li>
            <li><a href="<?php echo base_url(); ?>view-leave"><i class="fa fa-circle-o"></i> My Leave History</a></li>
          </ul>
        </li>

        <li class=""><a href="<?php echo base_url(); ?>view-chat">&nbsp;<i class="fa fa-book"></i>&nbsp;&nbsp; <span>Messages</span></a></li>
        <li class=""><a href="<?php echo base_url(); ?>view-performance">&nbsp;<i class="fa fa-bar-chart"></i>&nbsp;&nbsp; <span>Performance</span></a></li>
        <div class="container-fluid pt-5"></div><br><br><br>
        <li class=""><a href="<?php echo base_url(); ?>logout">&nbsp;<i class="fa fa-arrow-circle-o-right"></i>&nbsp;&nbsp; <span>Logout</span></a></li>

      </ul>
    </section>
  </aside>

  <?php
    if ($this->session->userdata('usertype')!=2)
    { 
      redirect('login');
    }
  ?>