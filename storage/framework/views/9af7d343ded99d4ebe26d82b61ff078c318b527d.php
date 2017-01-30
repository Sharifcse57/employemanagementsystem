<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form action="/paygrade/<?php echo e($grade->id); ?>" method="post">
                            <input type="hidden" name="_method" value="put">
                                <input type="text" value="<?php echo e($grade->paygrade_name); ?>" name="name" class="form-control" placeholder="Enter designation">
                                <input type="text" value="<?php echo e($grade->basic); ?>" name="range" class="form-control" placeholder="Enter designation">
                                <?php echo e(csrf_field()); ?>

                                <button type="submit" class="btn btn-success">Update paygrade</button>
                            </form>
                        </div>
                       <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>










<?php $__env->stopSection(); ?>

<?php echo $__env->make('partial.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>