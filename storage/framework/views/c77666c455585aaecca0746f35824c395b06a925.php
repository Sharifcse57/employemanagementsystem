<?php $__env->startSection('content'); ?>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Employee Payitems names
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-8">
              <?php if(session('status')): ?>
                <div class="alert alert-success">
                  <?php echo e(session('status')); ?>

                </div>
              <?php endif; ?>
                <table class="table">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Payitems Name</th>
                  </tr>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Add New</button>
                  </thead>
                  <tbody>
                  <?php $__currentLoopData = $payitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                  <tr>
                    <td><?php echo e($items->id); ?></td>
                    <td><?php echo e($items->payitem); ?></td>
                     <td>
                       <form action="/payitem/<?php echo e($items->id); ?>" method="post" >
                         <?php echo e(csrf_field()); ?>

                         <input type="hidden" name="_method" value="delete">
                         <a href="/payitem/<?php echo e($items->id); ?>/edit"  class="btn btn-info" >
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
<!-- Modal -->


<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add new Payitems</h4>
      </div>
      <div class="modal-body">
     
        <form action="/payitem" method="post">
              <input type="text" name="name" class="form-control" placeholder="Enter Payitem">
              <?php echo e(csrf_field()); ?>

          <button type="submit" class="btn btn-success">Save</button>
          
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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