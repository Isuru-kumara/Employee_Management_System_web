  <div class="content-wrapper">
    <section class="content-header">
      <h1>Performance</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Performance</a></li>
        <li class="active">Employee Performance</li>
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

        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Employee Performance</h3>
            </div>
            <?php echo form_open('Salary/insert'); ?>
              <div class="box-body">               
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Employee Departments</label>                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Employee Availability</label>                    
                  </div>
                </div>
              </div>
              <div id="salarydiv">
              </div>              
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script>
    function getemployee(dept) {
            $.ajax({
                type: "POST",
                url:  "<?php echo site_url('Salary/get_salary_list'); ?>",
                data: 'dept='+dept,
                success: function(data){
                    $('#salarydiv').html(data);
                }
            });
        }
  </script>

  <script>
    $(document).on('keyup','input.expenses',function(){
      $expenses = $(this).parents('tr').find('.expenses');
      $expenseTotal = $(this).parents('tr').find('#total');
      $expenseTotal.val('0');
      $.each($expenses,function(index,object){    
        if($(object).val()!='')
        {
     $expenseTotal.val(parseInt($expenseTotal.val())+parseInt($(object).val()));
        }
      })
    });
  </script>