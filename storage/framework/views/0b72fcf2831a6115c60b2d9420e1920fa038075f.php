<?php $__env->startSection('content'); ?>

<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
            Employee
</div>
    <div class="card-body"> 
        <?php if(!empty ($leave)): ?> 
          <?php if(count($leave) > 0): ?> 
        <table class="table table-striped table-bordered table-hover">
	      <thead>
	        <tr>
	          <th>Employee name</th>
	          <th>Leave from</th>
	          <th>Leave to</th>
	          <th>Status</th>

	        </tr>
	      </thead>
	      <?php $__currentLoopData = $leave; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leaveinfo): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	      <tbody>
	        <tr>
	          <td><a href="leavedetails/<?php echo e($leaveinfo->emp_id); ?>"><?php echo e($leaveinfo->fullname); ?></a></td>
	          <td><?php echo e($leaveinfo->leave_form); ?></td>
	          <td><?php echo e($leaveinfo->leave_to); ?></td>
	          <td>pending</td>
	        </tr>
	      </tbody>
	      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	      <?php else: ?>
	       <h1 style="text-align: center; ">Currently there is no leave application</h1>
       <?php endif; ?>
      <?php endif; ?>
    </table>
    <?php echo e($leave->render()); ?>

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