<?php $__env->startSection('content'); ?>





<?php $__currentLoopData = $emp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
            Employee
    </div>
        <div class="card-body">  
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form action="/register/<?php echo e($user->id); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put">
                    <label for="">Fullname</label>
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i></span>

                        <input type="text" name="fname" value="<?php echo e($user->fullname); ?>" required class="form-control" placeholder="Fullname" aria-describedby="basic-addon1">
                    </div>
                        <?php echo e(csrf_field()); ?>

                        <label for="">Email</label>
                        <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                         <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                            <input type="text" name="email" value="<?php echo e($user->email); ?>" required class="form-control" placeholder="email" aria-describedby="basic-addon1">
                        </div>
                       
                         
                          <?php if(!empty($designation)): ?>
                        <label for="">Select Designation</label>
                        <div class="input-group">
                            <select class="form-control" name="designation"  >
                                <option default>Select Designation</option>
                                <?php $__currentLoopData = $designation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $designation): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($designation->id); ?> "><?php echo e($designation->designation); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                        </div>   <?php endif; ?>
                           <?php if(!empty($paygrade)): ?>
                           <label for="">Select Paygrade</label>
                        <div class="input-group">
                            <select class="form-control"  name="paygrade" >
                                <option default>Select Paygrade</option>
                                <?php $__currentLoopData = $paygrade; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paygrade): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($paygrade->id); ?> "><?php echo e($paygrade->paygrade_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                            </select>
                        </div> 
                          <?php endif; ?>
                          <label for="">Select Image </label>
                        <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                         <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                            <input type="file" name="image" class="form-control" placeholder="photos" aria-describedby="basic-addon1">
                        </div>
                       

                            <button type="submit" class="btn btn-success btn-submit"> Register</button>
                     

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('partial.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>