  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Request Management
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Request Management</a></li>
        <li class="active">Add Request</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <?php echo validation_errors('<div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Failed!</h4>', '</div>
          </div>'); ?>

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

        <!-- column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Request</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open('Request/insert'); ?>
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="txtname" class="form-control" placeholder="Full Name">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                  <label>Employee ID</label>
                    <input type="text" name="txtempid" class="form-control" placeholder="Employee ID">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                  <label>Email</label>
                    <input type="text" name="txtemail" class="form-control" placeholder="Email">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                  <label>Date of Joined</label>
                    <input type="date" name="txtdoj" class="form-control" placeholder="DOJ">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                  <label>Department</label>
                    <select class="form-control" name="slcdepartment">
                      <option value="">Select</option>
                      <?php
                      if(isset($department))
                      {
                        foreach($department as $cnt)
                        {
                          print "<option value='".$cnt['id']."'>".$cnt['department_name']."</option>";
                        }
                      } 
                      ?>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                  <label>Address</label>
                    <textarea class="form-control" name="txtaddress"></textarea>
                  </div>
                </div>                              
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Submit</button>
              </div>
            </form>
          </div>          
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->