  <div class="content-wrapper">

    <section class="content-header">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php 
              if(isset($department))
              {
                echo sizeof($department);
              }
              else{
                echo 0;
              }
              ?></h3>
              <p>Departments</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-social-buffer"></i>
            </div>
            <a href="<?php echo base_url(); ?>manage-department" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php 
              if(isset($employee))
              {
                echo sizeof($employee);
              }
              else{
                echo 0;
              }
              ?></h3>
              <p>Employees</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-android-contacts"></i>
            </div>
            <a href="<?php echo base_url(); ?>manage-employee" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php 
              if(isset($leave))
              {
                echo sizeof($leave);
              }
              else{
                echo 0;
              }
              ?></h3>
              <p>Leave Requests</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-log-out"></i>
            </div>
            <a href="<?php echo base_url(); ?>approve-leave" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>$<?php 
              if(isset($salary))
              {
                foreach ($salary as $s) {
                  echo $s['total'];
                }                
              }
              else{
                echo 0;
              }
              ?></h3>
              <p>Salary Payments</p>
            </div>
            <div class="icon">
              <i class="ionicons ion-social-usd"></i>
            </div>
            <a href="<?php echo base_url(); ?>manage-salary" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>        
      </div>
    </section>
  </div>
