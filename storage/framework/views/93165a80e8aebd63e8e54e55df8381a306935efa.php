<?php $__env->startSection('content'); ?>



<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body app-heading">
          <div class="app-title">
            <div class="title" style="text-align: center;"><span class="highlight">Payment History</span></div>
            <div class="description"></div>
               
                <div class="col-xs-12">
                  <div class="card">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Basic Salary</th>
                          <th>Extra Salary</th>
                          <th>Sub Total</th>
                          <th>Deduction</th>
                          <th>Grand Total</th>
                          <th>Payment Date</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $__currentLoopData = $payhistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payhistory): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                          <td><?php echo e($payhistory->basic); ?></td>
                          <td><?php echo e($payhistory->additional_total); ?></td>
                          <td><?php echo e($payhistory->sub_total); ?></td>
                          <td><?php echo e($payhistory->substruction_total); ?></td>
                          <td><?php echo e($payhistory->grand_total); ?></td>
                          <td><?php echo e($payhistory->payment_date); ?></td>
 
    
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                       
                      </tbody>
                    </table>
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