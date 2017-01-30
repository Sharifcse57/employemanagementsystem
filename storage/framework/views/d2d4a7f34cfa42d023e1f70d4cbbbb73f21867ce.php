<?php $__env->startSection('content'); ?>

<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
            Employee
</div>
    <div class="card-body">  
				<div class="col-lg-4">
    			 <form action="/leave_search" method="post">
	               <select class="form-control" name="status"  >
                        <option default>Select status</option>
                        <option value="1">Accepted</option>
                        <option value="2">Rejected</option>
                    </select>
	              <?php echo e(csrf_field()); ?>

	              <button class="btn btn-success">Search</button>
                 </form>
              </div>
        <table class="table table-striped table-bordered table-hover">
	      <thead>
	        <tr>
	          <th>Employee Id</th>
	          <th>Leave from</th>
	          <th>Leave to</th>
	          <th>Status</th>
	        </tr>
	      </thead>
	      <?php if(!empty ($leavehistory)): ?>
		      <?php $__currentLoopData = $leavehistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		      <tbody>
		      
		        <tr>
		          <td><a href="leavehistorydetails/leaveid/<?php echo e($history->id); ?>/employeeid/<?php echo e($history->employee_id); ?>"><?php echo e($history->employee_id); ?></a></td>
		          <td><?php echo e($history->leave_form); ?></td>
		          <td><?php echo e($history->leave_to); ?></td>
		          <td>
		            <?php if($history->status == 1): ?>
		          	<?php echo e('accepted'); ?>

		          	<?php elseif($history->status == 2): ?>
					<?php echo e('Rejected'); ?>

					<?php endif; ?>
		          </td>
		        </tr>
		      </tbody>
		      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	    </table>
	       <?php echo e($leavehistory->render()); ?>

 		<?php endif; ?>


 		<?php if(!empty ($searchleave)): ?>
		      <?php $__currentLoopData = $searchleave; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $search): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		      <tbody>
		        <tr>
		          <td><a href="leavehistorydetails/leaveid/<?php echo e($search->id); ?>/employeeid/<?php echo e($search->employee_id); ?>"><?php echo e($search->employee_id); ?></a></td>
		          <td><?php echo e($search->leave_form); ?></td>
		          <td><?php echo e($search->leave_to); ?></td>
		          <td>
		            <?php if($search->status == 1): ?>
		          	<?php echo e('accepted'); ?>

		          	<?php elseif($search->status == 2): ?>
					<?php echo e('Rejected'); ?>

					<?php endif; ?>
		          </td>
		        </tr>
		      </tbody>
		      <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	    </table>
	       <?php echo e($searchleave->render()); ?>

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