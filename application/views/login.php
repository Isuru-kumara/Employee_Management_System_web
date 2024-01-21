<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    body {
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    .login-page {
      height: auto;
      position: relative;
    }

    .bg {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
        }

    video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .login-box {
      z-index: 1; /* Ensure the form is on top of the video */
      position: relative;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-page">
    <video autoplay muted loop class="bg">
      <!-- Replace 'your-video.mp4' with the actual path to your video file -->
      <source src="<?php echo base_url(); ?>assets/dist/img/background.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>

    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Employee Management System </b> </a>
      <img src="<?php echo base_url(); ?>assets/dist/img/logo2.png" class="mx-auto"/>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Please Login To Continue..</p>

        <?php echo form_open('Home/login'); ?>
          <div class="form-group has-feedback">
            <input type="text" name="txtusername" class="form-control" placeholder="Username/Employee Email">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="txtpassword" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <?php echo $this->session->flashdata('login_error'); ?>
          <div class="row">
            <!-- /.col -->
            <div class="col-xs-4">
            </div>
            <div class="col-xs-4">
            <button type="submit" class="btn btn-success btn-block btn-flat"><b>Sign In</b></button>
            </div>
            <div class="col-xs-4">
            </div>
          </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
  </div>

  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
</body>
</html>
