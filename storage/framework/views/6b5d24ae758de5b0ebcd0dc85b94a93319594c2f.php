<?php $__env->startSection('content'); ?>

<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
            Employee
</div>
    <div class="card-body">  
          <?php if(!empty ($leavehistory)): ?>
	      <?php $__currentLoopData = $leavehistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

	      <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			
			 <div class="img">
			  <a href="#"><img  src="/images/<?php echo e($emp->images); ?>" height="150px" /></a>         
             </div>
				<h2>Fullname : <?php echo e($emp->fullname); ?></h2>
				<hr>
				<hr>
				<h3>Leave form : <?php echo e($leave->leave_form); ?></h3>
				<h3>Leave To : <?php echo e($leave->leave_to); ?></h3>
				<h3>Leave details : </h3>

				<div>  
					<?php echo e(strip_tags(html_entity_decode($leave->descrtiption))); ?>

				</div>

				<h3>Status: 
					<?php if($leave->status == 1): ?>
					<?php echo e('Accepted'); ?>

					<?php elseif($leave->status == 2): ?>
					<?php echo e('Rejected'); ?>

					<?php endif; ?>

				</h3><br>

				<a href="/leavehistory" class="btn btn-success">Backto history</a>
	       <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	       <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	      <?php endif; ?>
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