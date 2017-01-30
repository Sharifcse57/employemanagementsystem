<?php $__env->startSection('content'); ?>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Employee designation names
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <?php if(session('status')): ?>
                <div class="alert alert-success">
                  <?php echo e(session('status')); ?>

                </div>
              <?php endif; ?>
                <table class="table">
                  <thead>
                  <tr>
                    <th>Designation Name</th>
                    <th>Action</th>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Add New</button>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $designation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                  <tr>
                    <td><?php echo e($user->designation); ?></td>
                     <td>
                       <form action="/designation/<?php echo e($user->id); ?>" method="post" >
                         <?php echo e(csrf_field()); ?>

                         <input type="hidden" name="_method" value="delete">
                         <a href="/designation/<?php echo e($user->id); ?>/edit"  class="btn btn-info" >
                           <span class="glyphicon glyphicon-edit"></span>
                         </a>
                         <!-- <button type="submit" class="btn btn-danger" name="button"> <span class="glyphicon  glyphicon-trash"></span></button> --> 
                       </form>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Designation</h4>
        </div>
        <div class="modal-body">
          <form action="/designation" method="post">
              <input type="text" name="name" class="form-control" placeholder="Enter designation">
              <?php echo e(csrf_field()); ?>

          <button type="submit" class="btn btn-success">Save</button>
          <!--  -->
          </form>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
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