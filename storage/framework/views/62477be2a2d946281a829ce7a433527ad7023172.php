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
                            <form action="/empprofileupdate/<?php echo e($user->id); ?>" method="post" enctype="multipart/form-data">
                                <label for="">Fullname</label>
                                <input type="hidden" name="_method" value="put">
                                <input type="text" value="<?php echo e($user->fullname); ?>" name="fullname" class="form-control">
                                <label for="">Email</label>
                                <input type="text" value="<?php echo e($user->email); ?>" name="email" class="form-control">
                                <label for="">Mobile Number</label>
                                <input type="text" value="<?php echo e($user->phone); ?>" name="phone" class="form-control">
                                <label for="">Address</label>
                                <input type="text" value="<?php echo e($user->address); ?>" name="address" class="form-control">
                                <label for="">Username</label>
                                <input type="text" value="<?php echo e($user->username); ?>" name="username" class="form-control">
                                <label for="">Enter new password</label>
                                <input type="text" name="password" class="form-control" placeholder="Update password">
                                <?php echo e(csrf_field()); ?>

                                <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                 <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                                    <input type="file" name="image" class="form-control" placeholder="photos" aria-describedby="basic-addon1">
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('employee.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('employee.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('employee.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('employee.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('employee.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>