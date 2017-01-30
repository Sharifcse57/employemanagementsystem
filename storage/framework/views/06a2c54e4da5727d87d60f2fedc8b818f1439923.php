<?php $__env->startSection('content'); ?>
<div class="app app-default">
<div class="shadowfull">
      <div class="row">
        <div class="col-lg-12">
          <div class="card ">
            <div class="card-header">
              <ul class="nav nav-tabs">
                <li  class="active">
                  <a  aria-controls="tab1" role="tab"><b>Deactivated Employees</b></a>
                </li>
              </ul>
              <div class="col-xs-12">
                   
               </div>

            </div>
            <div class="success"></div>
            <div class="card-body no-padding tab-content">
              <div role="tabpanel" class="tab-pane active no-padding" id="tab1">
                <div class="search-result">
                 
                  <ul class="result">
                  <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                    
                    <li id="data_<?php echo e($user->id); ?>">
                      <div class="img">
                      <a href="register/<?php echo e($user->id); ?>/view"> <img  src="/images/<?php echo e($user->images); ?>" height="150px" /></a>
                      </div>

                      <div class="info">
                        <div class="title"><a href="#"><span class="highlight"><?php echo e($user->fullname); ?></span> |  Join Date <?php echo e($user->joindate); ?></a>
                        </div>
                        <div class="list">
                        <ul>
                            <li><b><?php echo e($user->designation); ?></b></li>
                            <li><?php echo e($user->paygrade_name); ?></li>
                            <li><?php echo e($user->email); ?></li>
                            <li><?php echo e($user->phone); ?></li><br><br>
                             <button class="active btn btn-danger" value="<?php echo e($user->id); ?>" active="1" ">Active</button>
                        </ul>
                        </div>
                      </div> 
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                      </ul>
                </div>
              </div>
            </div>
          </div>
           <span class="tituloPremio"><?php echo e($employee->render()); ?></span>
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