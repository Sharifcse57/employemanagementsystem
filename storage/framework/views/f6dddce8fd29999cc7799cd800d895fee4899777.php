<?php $__env->startSection('content'); ?>



<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body app-heading">
          <img class="profile-img" src="/images/<?php echo e($user->images); ?>">
          <div class="app-title">
            <div class="title"><span class="highlight"><?php echo e($user->fullname); ?></span></div>
            <div class="description"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="card card-tab">
        <div class="card-header">
          <ul class="nav nav-tabs">
            <li role="tab1" class="active">
              <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Profile</a>
            </li>
            
          </ul>
        </div>
        <div class="card-body no-padding tab-content">
          <div role="tabpanel" class="tab-pane active" id="tab1">
            <div class="row">
            
               <div class="col-md-6">
               <br>
                 <a href="#" >
                 <img src="/images/<?php echo e($user->images); ?>"  width="250px"  class="img-responsive">
                 </a><br>
                 <?php $__currentLoopData = $grade; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>   
                 <b>Paygrade : <?php echo e($grade->paygrade_name); ?> </b><br><br>
                 <b>Basic Salary : <?php echo e($grade->basic); ?></b><br><br>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 

               </div>
               <div class="col-md-6" style="float:right;">
                  <br><br>
                  <div class="col-md-5">
                   <h1> Basic info</h1>
                  <?php $__currentLoopData = $designation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $designation): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>  
                  <b>Designation : <?php echo e($designation->designation); ?></b><br><br>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>   
                  <b>Hire date : <?php echo e($user->joindate); ?></b><br><br>
                  <b>Mobile Number : <?php echo e($user->phone); ?></b><br><br>
                  <b>Email :  <?php echo e($user->email); ?></b><br><br>
                  <b>Address: <?php echo e($user->address); ?></b><br><br>
                  </div>
                  
               </div>
              
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