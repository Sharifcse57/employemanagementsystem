<?php $__env->startSection('content'); ?>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Employee designation names
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">

       <h3><strong>Basic: </strong><?php echo e($paygrade->basic); ?></h3>
            <br>
            <br>
                  <form action="/paygrade/<?php echo e($paygrade->id); ?>/salary/" method="post">
                  <?php 
                          $total_ammount=0;
                  ?>
                       <?php $__currentLoopData = $payitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                       <span class="col-xs-12">
                       <strong>
                          <?php echo e($item->payitem); ?> :
                       </strong>
                       <br>
                       <br>
                       </span>
                       <span class="col-xs-6">Exact($)</span>
                       <span class="col-xs-5 col-xs-offset-1">Percent (%) </span>
                       <span class="col-xs-6">                         
                          <input class="form-control exact_input" id="accurate_<?php echo e($item->id); ?>" data_acccurate="<?php echo e($item->id); ?>" type="number" value="<?php echo e(!empty($salarylist[$item->id])? $salarylist[$item->id]:''); ?>" name="salarylist[<?php echo e($item->id); ?>]" placeholder="Enter amount">
                        </span>
                          <span class="col-xs-6">
                             <span class="col-xs-1">
                         OR        
                        </span>
                             <span class="col-xs-11">
                          <input class="form-control percent_input" id="percent_<?php echo e($item->id); ?>" basic_payment="<?php echo e($paygrade->basic); ?>" data_acccurate="<?php echo e($item->id); ?>"   value="<?php echo e(!empty($salarylist[$item->id])? $salarylist[$item->id]*100/$paygrade->basic :''); ?>"  placeholder="Enter % amount">
                                  </span>
                          </span>

                           <?php 
                              $total_ammount+= !empty($salarylist[$item->id])? $salarylist[$item->id]:'';
                            ?>
                   <hr class="style1">  
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    <?php echo e(csrf_field()); ?>

                  <h4><strong>Total ammount: </strong > <span id="total_ammount"><?php echo e($total_ammount); ?></span> </h4>




                <button class="btn btn-success">submit</button>

                </form>
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