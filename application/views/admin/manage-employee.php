  <div class="content-wrapper">
    <section class="content-header">
      <h1>Employee</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Employee</a></li>
        <li class="active">Manage Employee</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">

        <?php if($this->session->flashdata('success')): ?>
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                  <?php echo $this->session->flashdata('success'); ?>
            </div>
          </div>
        <?php elseif($this->session->flashdata('error')):?>
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Failed!</h4>
                  <?php echo $this->session->flashdata('error'); ?>
            </div>
          </div>
        <?php endif;?>

        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Manage Employee</h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Department</th>
                    <th>Gender</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Joined On</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    if(isset($content)):
                    $i=1; 
                    foreach($content as $cnt): 
                  ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $cnt['employee_name']; ?></td>
                        <td><img src="<?php echo base_url(); ?>uploads/profile-pic/<?php echo $cnt['pic'] ?>" class="img-circle" width="50px" alt="User Image"></td>
                        <td><?php echo $cnt['department_name']; ?></td>
                        <td><?php echo $cnt['gender']; ?></td>
                        <td><?php echo $cnt['mobile']; ?></td>
                        <td><?php echo $cnt['email']; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($cnt['dob'])); ?></td>
                        <td><?php echo date('d-m-Y', strtotime($cnt['doj'])); ?></td>
                        <td><?php echo $cnt['address']; ?></td>
                        <td><?php echo $cnt['city']; ?></td>
                        <td><?php echo $cnt['country']; ?></td>
                        <td>
                          <a href="<?php echo base_url(); ?>edit-employee/<?php echo $cnt['id']; ?>" class="btn btn-success">Edit</a>
                          <a href="<?php echo base_url(); ?>delete-employee/<?php echo $cnt['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    <?php 
                      $i++;
                      endforeach;
                      endif; 
                    ?>
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

    