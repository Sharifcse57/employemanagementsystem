<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body app-heading">
          <div class="app-title">
            <div class="title" style="text-align: center;"><span class="highlight">Leave Status</span></div>
            <div class="description"></div>
            <div class="col-md-12" style="margin-top: 30px;">
             <div class="col-md-1"></div>
             <div class="col-md-10">
             <label for="">Leave Status</label>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Request from</th>
                      <th>Request To</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php $__currentLoopData = $leave; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <tr>
                      <td><?php echo e($leave->leave_form); ?></td>
                      <td><?php echo e($leave->leave_to); ?></td>
                        <?php if($leave->status==0): ?>
                             <td><?php echo e('Pending'); ?></td>
                        <?php elseif($leave->status==1): ?>
                            <td><?php echo e('Accepted'); ?></td>
                         <?php elseif($leave->status==2): ?> 
                            <td><?php echo e('Rejected'); ?></td>   
                        <?php endif; ?>
                    </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>  
                  </tbody>
                </table>
             </div>
             <div class="col-md-1"></div>

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