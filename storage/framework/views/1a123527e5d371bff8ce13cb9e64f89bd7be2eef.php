<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Employee salary Information
        </div>
        <div class="card-body">
          <div class="row ">
            <div class="col-md-6 shadow">
              <?php $grade=""?>
              <?php $__currentLoopData = $salarys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salary): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
              <?php  $grade=$salary->paygrade_name; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
              <h2>Paygrade : <?php echo e($grade); ?> </h2>
                      <table class="table">
                       <thead>
                        <th>Payitem Name</th>
                        <th>Amount</th>
                      </thead>
                        <?php $totalsalary = 0; ?>
                        <?php $__currentLoopData = $salarys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salarys): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <?php $totalsalary+=  $salarys->amount; ?>
                      <tbody>
                        <tr>
                        <td> <?php echo e($salarys->payitem); ?></td>
                        <td> <?php echo e($salarys->amount); ?></td>
                        <td> </td>
                        <td> </td>
                        </tr>
                      </tbody>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                  </table>
            </div>
            <div class="col-md-6">
              <h2>Basic Amount</h2><b><?php echo e($basic); ?></b>
                      <table class="table">
                      <thead>
                        <th>Total payitems amount</th>
                        <th>Total</th>
                      </thead>
                      <tbody>
                        <tr>
                   
                        <td> <?php echo e($totalsalary); ?></td>
                        <td> 
                        <?php echo e($totalsalary+$basic); ?>

                        </td>
                        </tr>
                      </tbody>
                  </table>
            </div>
          </div><br><br>
           <a href="/salaryshow" class="btn btn-success">Back</a>
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