<?php $__env->startSection('content'); ?>



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
            <div class="title" style="text-align: center;"><span class="highlight">Leave Panel</span></div>
            <div class="description"></div>
            <div class="col-md-12" style="margin-top: 30px;">
             
             <div class="col-md-10 col-md-offset-1">
                <form action="/leave/store" method="post">
                  <div class="col-md-6">
                   <label for="">Select leave form</label>
                   <input type="text" name="leave_from" required="" id="datepick1" class="form-control" placeholder="leave from">
                  </div>
                  <div class="col-md-6">
                    <label for="">Select leave to</label>
                   <input type="text" id="datepick2" required="" name="leave_to" class="form-control" placeholder="leave To">
                  </div>
                   <br>
                   <br>
                   <label for="">Description</label>
                   <textarea name="descrtiption" required class="ckeditor"  placeholder="Address...."/></textarea>
                   <input type="hidden" value="<?php echo e($id); ?>" name="id">
                       <?php echo e(csrf_field()); ?>

                  <button type="submit" class="btn btn-success" style="margin-top: 30px">Submti</button>
                </form>
            </div>
      
            </div>
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