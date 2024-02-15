<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Request Letters
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Request Letters</a></li>
            <li class="active">View Letters</li>
        </ol>
    </section>

    <!-- Main content -->
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
            <?php elseif($this->session->flashdata('error')): ?>
                <div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Failed!</h4>
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h2 class="box-title">Your letter is ready</h2>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                    
                        <!-- Loop through the letters and display them -->
                        <?php foreach($letters as $letter): ?>
                        <div class="letter">
                        <h4><?php echo $letter['file_name']; ?></h4>
                        <p><?php echo $letter['emp_name']; ?></p>
                        <!-- Download button for each letter -->
                        <a href="<?php echo base_url('letter/download_letter/' . $letter['file_name']); ?>" class="btn btn-danger">Download</a>
                        </div>
                        <?php endforeach; ?>
                                                
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
