<?php $__env->startSection('content'); ?>

<div class="app app-default">
   <div class="shadowfull">
		<div class="cards ">
    

         <div class="col-md-12">
           <table class="table table-striped table-bordered table-hover">
              <thead style="background-color: green">
                <tr style="color: white">
                  <th>History Id</th>
                  <th>Employee Id</th>
                  <th>Basic</th>
                  <th>Additional total</th>
                  <th>Sub Total</th>
                  <th>Deduction</th>
                  <th>Grand Total</th>
                  <th>Payment Date</th>
                </tr>
              </thead>
              <?php if(!empty($history)): ?>
               <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payhistory): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
              <tbody>
                <tr>
                  <td><?php echo e($payhistory->id); ?></td>
                  <td><?php echo e($payhistory->employee_id); ?></td>
                  <td><?php echo e($payhistory->basic); ?></td>
                  <td><?php echo e($payhistory->additional_total); ?></td>
                  <td><?php echo e($payhistory->sub_total); ?></td>
                  <td><?php echo e($payhistory->substruction_total); ?></td>
                  <td><?php echo e($payhistory->grand_total); ?></td>
                  <td><?php echo e($payhistory->payment_date); ?></td>
                </tr>
              </tbody>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
              <?php endif; ?>

            </table>
             <span class="tituloPremio"><?php echo e($history->render()); ?></span><br>
             <a href="/payment/create" class="btn btn-success">Back</a>
            <input type="button" class="btn btn-success" value="Print this page" onClick="window.print()">
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