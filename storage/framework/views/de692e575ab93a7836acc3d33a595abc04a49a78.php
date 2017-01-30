<?php $__env->startSection('content'); ?>

<?php if(!empty ($employee )): ?>
<?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<?php if(!empty ($paygrade )): ?>
<?php $__currentLoopData = $paygrade; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paygrade): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body app-heading">
          <img class="profile-img" src="/images/<?php echo e($user->images); ?>">
          <div class="app-title">
            <div class="title"><span class="highlight"><?php echo e($user->fullname); ?></span></div>
            <div class="description"><?php echo e($paygrade->designation); ?></div>
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
               <br><br><br>
                 <b>Hire dates: <?php echo e($user->joindate); ?></b><br><br>
                  <b>Mobile Number: <?php echo e($user->phone); ?></b><br><br>
                  <b>Email:  <?php echo e($user->email); ?></b><br><br>
                  <b>Address: <?php echo e($user->address); ?></b><br><br>
               </div>
               <div class="col-md-6" style="float:right;">
                 <a href="#" >
                  <img src="/images/<?php echo e($user->images); ?>"  width="400px"  class="img-responsive">
                 </a><br>
                 <b>Paygrade : <?php echo e($paygrade->paygrade_name); ?> </b><br><br>
                 <b>Basic Salary : <?php echo e($basic); ?></b><br><br>
               </div>
            </div>
          </div>
          <a href="/register" class="btn btn-success" style="margin-left: 30px">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php endif; ?>


<?php if(!empty ($searchemployee )): ?>
<?php $__currentLoopData = $searchemployee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<?php if(!empty ($searchpaygrade )): ?>
<?php $__currentLoopData = $searchpaygrade; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paygrade): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body app-heading">
          <img class="profile-img" src="/images/<?php echo e($user->images); ?>">
          <div class="app-title">
            <div class="title"><span class="highlight"><?php echo e($user->fullname); ?></span></div>
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
               <br><br><br>
                 <b>Hire dates: <?php echo e($user->joindate); ?></b><br><br>
                  <b>Mobile Number: <?php echo e($user->phone); ?></b><br><br>
                  <b>Email:  <?php echo e($user->email); ?></b><br><br>
                  <b>Address: <?php echo e($user->address); ?></b><br><br>
               </div>
               <div class="col-md-6" style="float:right;">
                 <a href="#" >
                  <img src="/images/<?php echo e($user->images); ?>"  width="400px"  class="img-responsive">
                 </a><br>
                 <b>Paygrade : <?php echo e($paygrade->paygrade_name); ?> </b><br><br>
               </div>
            </div>
          </div>
           <a href="/register" class="btn btn-success" style="margin-left: 30px">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partial.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>