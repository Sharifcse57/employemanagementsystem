<?php $__env->startSection('content'); ?>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Paygrade wise basic salary information
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <?php if(session('status')): ?>
                <div class="alert alert-success">
                  <?php echo e(session('status')); ?>

                </div>
              <?php endif; ?>
                <table class="table">
                  <thead>
                  <tr>
                    <th>Paygrade Name</th>
                    <th>Designation Name</th>
                    <th>Basic</th>
                    <th>Salary</th>


                  </tr>
                  </thead>
                  <tbody>
                  <?php if(!empty($paygrade)): ?>
                  <?php $__currentLoopData = $paygrade; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paygrade): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>


                  <tr>

                    <td><?php echo e($paygrade->paygrade_name); ?></td>
                    <td><?php echo e($paygrade->designation); ?></td>
                    <td><?php echo e($paygrade->basic); ?></td>
                    <!-- <td><button class="button">Skim</button></td> -->
                     <td>
                       <a href="paygrade/<?php echo e($paygrade->id); ?>/salary"  class="btn btn-info btn-xs" >
                          Edit Salary
                       </a>
                       <a href="paygrade/<?php echo e($paygrade->id); ?>/salary/basic/<?php echo e($paygrade->basic); ?>"  class="btn btn-success btn-xs" >
                          Show Salary
                       </a>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                  </tbody>
                  <?php endif; ?>
                </table>
            </div>
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