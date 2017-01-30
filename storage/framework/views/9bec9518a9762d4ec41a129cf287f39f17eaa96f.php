<?php $__env->startSection('content'); ?>
<?php date_default_timezone_set("Asia/Dhaka"); $date= date('D-M-Y');   $time = date('h-i-sa');  ?>
      



<div class="row">
    <div class="col-lg-12">
      <div class="card">
      <?php if(session('status')): ?>
                <div class="alert alert-success">
                  <?php echo e(session('status')); ?>

                </div>
      <?php endif; ?>
      
        <div class="card-body app-heading">
          <div class="app-title">
            <div class="title" style="text-align: center;"><span class="highlight">Attendence</span>
             <form action="/attendance" method="post">
                 <?php echo e(csrf_field()); ?>


                <input type="hidden" value="<?php echo e($id); ?>" name="emp_id">
                <div class="card">
                <textarea name="description" id="" cols="35" rows="3" placeholder="Description....."></textarea><br>
                <button type="submit" class="btn btn-success ">Check In</button>
                 <!-- <button type="submit" class="btn btn-primary">Check Out</button><br> -->
                </div>  
             </form>
             </div>        
            </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('employee.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('employee.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('employee.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('employee.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>