<?php $__env->startSection('content'); ?>



<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body app-heading">
          <div class="app-title">
            <div class="title" style="text-align: center;"><span class="highlight">Salary Info</span></div>
            <div class="description"></div>
                <div class="col-md-6">
                <div class="card card-mini">
                  <div class="card-header">
                  <?php $__currentLoopData = $designation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $designation): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <label for="">Designation : <?php echo e($designation->designation); ?></label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                  </div>
                  <div class="card-body">
                   <?php $__currentLoopData = $grade; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                       <b>Paygrade :  <?php echo e($grade->paygrade_name); ?></b><br><br>
                        <b>Basic:  <?php echo e($grade->basic); ?></b><br><br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>     
                        
                         
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card card-mini">
                  <div class="card-header">
                    Extra salary
                  </div>
                  <div class="card-body">
                    <!-- <b>Home :4000</b><br><br>
                    <b>Health: 500</b><br><br>
                    <b>Lunch: 500</b><br><br>
                    <b>Extra: 500</b><br><br>
                    <b>Transport: 500</b><br><br> -->
                     <?php if(!empty($payitems)): ?>
                     <?php $totalamount=0; ?>
                    <?php $__currentLoopData = $payitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payitems): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    
                       <b>Payitem Name:  <?php echo e($payitems->payitem); ?></b><br><br>
                       <b>amount :  <?php echo e($payitems->amount); ?></b><br><br>
                      
                        <?php $totalamount+=  $payitems->amount; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
                          <h3>  Grand salary : <?php echo e($totalamount+$grade->basic); ?> </h3>
                    <?php endif; ?>
                   
                   


                  </div>
                </div>
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