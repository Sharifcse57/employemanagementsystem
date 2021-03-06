<?php $__env->startSection('content'); ?>
<div class="app app-default">
<div class="shadowfull">
      <div class="row">
        <div class="col-lg-12">
          <div class="card ">
              <div class="card-header">
              <ul class="nav nav-tabs">
              <li  class="active">
              <a  aria-controls="tab1" role="tab"><b>Current Employees</b></a>
              </li>
              </ul>
              <div class="col-xs-12"><br>
              <form action="/employeesearch" method="post">
              <span class="col-xs-4 pull-left"> <input class="form-control" required="" type="text" name="search" placeholder="Search..."></span>
              <?php echo e(csrf_field()); ?>

              <button class="btn btn-success">Submit</button>
              </form>
              </div>
              </div>
              <div style="margin-left: 30px; >
               <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus" ></span>Add New employee</button>
              </div>
               <div style="margin-left: 30px; >
                     <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#adminModal"><span class="glyphicon glyphicon-plus" ></span>Add New admin</button>
               </div>
         <div class="success alert-success"  ></div>
            <div class="card-body no-padding tab-content">
                  <div role="tabpanel" class="tab-pane active no-padding" id="tab1">
                   <?php if(!empty($searchemployee)): ?>
                     
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Employee Id</th>
                        <th>Employee Name</th>
                      </tr>
                    </thead>
                     <?php $__currentLoopData = $searchemployee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $searchemployee): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <tbody>
                      <tr>
                        <td> <a href="/register/<?php echo e($searchemployee->id); ?>/view/<?php echo e($searchemployee->paygrade_id); ?>"><?php echo e($searchemployee->id); ?></a></td>
                        <td><?php echo e($searchemployee->fullname); ?></td>

                      </tr>
                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                  </table>
                   <a href="/register" class="btn btn-success" style="margin-left: 30px">Back</a>
                  <?php endif; ?>
                    <div class="search-result">
                      <ul class="result">
                      <?php if(!empty($employee)): ?>
                      <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <li id="data_<?php echo e($user->id); ?>"> 
                        <div class="img">
                        <a href="register/<?php echo e($user->id); ?>/view/<?php echo e($user->basic); ?>/<?php echo e($user->paygrade_id); ?>"><img  src="/images/<?php echo e($user->images); ?>" height="150px" /></a>
                        </div>
                        <div class="info">
                        <div class="title"><a href="register/<?php echo e($user->id); ?>/view/<?php echo e($user->basic); ?>/<?php echo e($user->paygrade_id); ?>"><span class="highlight"><?php echo e($user->fullname); ?></span> |  Join Date <?php echo e($user->joindate); ?></a></div>
                        <div class="list">
                        <ul>
                        <li><b><?php echo e($user->designation); ?></b></li>
                        <li><?php echo e($user->paygrade_name); ?></li>
                        <li><?php echo e($user->email); ?></li>
                        <li><?php echo e($user->phone); ?></li><br><br>
                        <a href="register/<?php echo e($user->id); ?>/edit"><button class="btn btn-info">Update</button></a>
                        <button class="nnn btn btn-danger" value="<?php echo e($user->id); ?>" active="0" ">Deactive</button>
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
 <?php endif; ?>
  
<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add New Employee</h4>
            </div>
            <div class="modal-body">
              <form action="/register" method="post" enctype="multipart/form-data">
                <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                    <input type="text" name="fname" required class="form-control" placeholder="Fullname" aria-describedby="basic-addon1">
                </div>
                    <?php echo e(csrf_field()); ?>

                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2">
                    <i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" name="username" required class="form-control" placeholder="Username" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group">
                     <span class="input-group-addon" id="basic-addon3">
                     <i class="fa fa-key" aria-hidden="true"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon3">
                    </div>
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                     <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                        <input type="text" name="email" required class="form-control" placeholder="email" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                     <i class="glyphicon glyphicon-phone" aria-hidden="true"></i></span>
                        <input type="number" name="num" required class="form-control" placeholder="Phone number" aria-describedby="basic-addon1">
                    </div>
                     
                      <?php if(!empty($designation)): ?>
    
                    <div class="input-group">
                        <select class="form-control" name="designation"  >
                            <option default>Select Designation</option>
                            <?php $__currentLoopData = $designation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $designation): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option value="<?php echo e($designation->id); ?> "><?php echo e($designation->designation); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select>
                    </div>   <?php endif; ?>
                       <?php if(!empty($paygrade)): ?>
                    <div class="input-group">
                        <select class="form-control"  name="paygrade" >
                            <option default>Select Paygrade</option>
                            <?php $__currentLoopData = $paygrade; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paygrade): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <option value="<?php echo e($paygrade->id); ?> "><?php echo e($paygrade->paygrade_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </select>
                    </div> 
                      <?php endif; ?>
                    <div class="input-group">
                     <span class="input-group-addon" id="basic-addon1">
                     <i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span>
                        <input type='date' name="date" class="form-control"  placeholder="Joindate"/>
                    </div>
                     <div class="input-group">
                     <span class="input-group-addon" id="basic-addon1">
                     <i class="glyphicon glyphicon-th-list" aria-hidden="true"></i></span>
                        <textarea name="address" class="form-control"  placeholder="Address...."/></textarea>
                        
                    </div>
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                     <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                        <input type="file" name="image" class="form-control" placeholder="photos" aria-describedby="basic-addon1">
                    </div>
                    <div class="text-center">

                        <button type="submit" class="btn btn-success btn-submit"> Register</button>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="adminModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add New Admin</h4>
            </div>
            <div class="modal-body">
              <form action="/add_new_admin" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2">
                    <i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" name="username" required class="form-control" placeholder="Username" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group">
                     <span class="input-group-addon" id="basic-addon3">
                     <i class="fa fa-key" aria-hidden="true"></i></span>
                        <input type="password" name="password" required class="form-control" placeholder="Password" aria-describedby="basic-addon3">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success btn-submit"> Submit</button>
                    </div>
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