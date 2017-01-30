<?php $__env->startSection('content'); ?>

<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
            Employee
</div>
    <div class="card-body">  
          <?php if(!empty ($leaveinfo)): ?>
	      <?php $__currentLoopData = $leaveinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			 <?php if($leave->status==0): ?>
			 <div class="img">
                        <a href="#"><img  src="/images/<?php echo e($leave->images); ?>" height="150px" /></a>
             </div>
				<h2>Fullname : <?php echo e($leave->fullname); ?></h2>
				<hr>
				<hr>
				<h3>Leave form : <?php echo e($leave->leave_form); ?></h3>
				<h3>Leave To : <?php echo e($leave->leave_to); ?></h3>
				<h3>Leave details : </h3>

				<div>
				<?php echo e(strip_tags(html_entity_decode($leave->descrtiption))); ?>

				</div><br><br>
				<table>
					<tbody>
						<tr>
							<td>
							<form action="/acceptleave" method="post">
			         		<?php echo e(csrf_field()); ?>

			            	 <input type="hidden" value="<?php echo e($leave->id); ?>" name="accept_id">
			            	 <button class="btn btn-success">Accept</button>
			    			</form>
			    			</td>
			           		 <td>
			           		 <form action="/rejectleave" method="post">
			                 <?php echo e(csrf_field()); ?>

			                     <input type="hidden" value="<?php echo e($leave->id); ?>" name="reject_id">
			                     <button class="btn btn-danger">Reject</button>
			           		 </form>
			            	</td>
						</tr>
					</tbody>
				</table>
			 <?php endif; ?>		
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