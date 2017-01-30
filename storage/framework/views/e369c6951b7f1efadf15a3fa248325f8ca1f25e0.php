<?php $__env->startSection('content'); ?>

<div class="app app-default">
   <div class="shadowfull">
		<div class="cards ">
    
   <?php if(!empty($employee)): ?>
<div class="col-md-3"></div>
   <div class="col-md-6" style="padding-left: 50px;">


       <h1 style="text-align: center;">Payment</h1><br><br>
       <label for="">Select Employee</label>
     
       <div class="input-group">
       <form action="/payment/getpayment" method="post">
           <?php echo e(csrf_field()); ?>

       <select class="form-control" name="payment"  >
       <option default>Select employee Id</option>
       <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
       <?php if($employee->active==1): ?>
       <option value="<?php echo e($employee->id); ?>"><?php echo e($employee->fullname); ?></option>
         <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </select>
      </div> <button class="btn btn-success btn-sm">Submit</button>
   <div class="col-md-3"></div>
      
      </form>
      <?php endif; ?> 

  <?php if(!empty($history)): ?>
   <table class="table table-striped table-bordered table-hover" >
      <thead>
        <tr>
          <th>Employee Name</th>
          <th>Email</th>
          <th>Total Payment</th>
          <th>Payment Month........</th>
          <th>Year</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userhistory): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    
        <tr>
          <td><?php echo e($userhistory->fullname); ?></td>
          <td><?php echo e($userhistory->email); ?></td>
          <td><?php echo e($userhistory->grand_total); ?></td>
         <td> <?php echo e(date('d-m-Y h:m A', strtotime($userhistory->payment_date))); ?></td>
         <td> 2016</td>
        </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
      </tbody>
    </table>
     <span class="tituloPremio"><?php echo e($history->render()); ?></span>
</div>
   
   <?php endif; ?>

    <?php if(!empty($payment)): ?>
    <?php $__currentLoopData = $payment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
<div class="col-md-6">
      <div class="row">
            <form action="/payment" method="post">
             <?php echo e(csrf_field()); ?>

          	<div class="col-md-6">
          	     <label for="">Full Name</label>
          		   <input type="hidden" readonly="" value="<?php echo e($payment->id); ?>" name="emp_id" class="form-control" placeholder="Input">
               	 <input type="text" readonly="" name="fullname" value="<?php echo e($payment->fullname); ?>" class="form-control"  placeholder="Input"><br>
               	 <label for="">Paygrade</label>
              	 <input type="text" readonly="" name="paygrade" value="<?php echo e($payment->paygrade_name); ?>" class="form-control" placeholder="Input"><br>
                 <label for="">Extra Salary</label>
                 <?php if(!empty($extrasalary)): ?>
                 <?php $extra=0; ?>
        			   <?php $__currentLoopData = $extrasalary; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extrasalary): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
      				   <?php $extra+=  $extrasalary->amount; ?>
        			   <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
      				  <input type="text" readonly="" name="extra" value="<?php echo e($extra); ?>" class="form-control" placeholder="extra slary"><br>
                  <?php endif; ?>
          	</div>

          	 <div class="col-md-6">
          	      <label for="">Designation</label>
          	      <input type="hidden" readonly="" name="designation_id" value="<?php echo e($payment->des_id); ?>" class="form-control" placeholder="Input">
                	<input type="text" readonly="" name="designation" value="<?php echo e($payment->designation); ?>" class="form-control" placeholder="Input"><br>
          		    <label for="">Basic Salary</label>
              	  <input type="text" readonly="" name="basic" value="<?php echo e($payment->basic); ?>" class="form-control" placeholder=""><br>
                  <label for="">Sub Total Salary</label>
       		      	<input type="text" id="subtotal" name="subtotal" readonly="" value="<?php echo e($payment->basic+$extra); ?>" class="form-control" placeholder=""><br>
            </div>
</div>


      <label for="">Deduction Salary</label>
     	<input type="text" value="" name="deduction" onkeyup="xyz(this.value)" id="deduct" class="form-control" placeholder="Deduct Salary"><br>
      <label for="">Grand total</label>
     	<input type="text" id="grand" name="grandtotal" value="" class="form-control" placeholder="Grand total"><br>
     	<textarea type="text" value="" name="description" class="form-control" placeholder="Description....."></textarea><br>
      <label for="">Select Date of Payment</label>
     	<input type="date"  name="dateselect" class="form-control" placeholder="Select Date"><br>
      <button type="submit" class="btn btn-success">Submit</button>
     
 </div>
 </form> 
 <div class="col-md-6 ">
      <div class="item">
  	  <img  src="/images/<?php echo e($payment->images); ?>"><br><br>
      <div style="text-align: center;">
      <h2>	<?php echo e($payment->fullname); ?></h2>
      </div><br><br><br><br><br><br><br><br><br><br>
      <a href="/payment/create"><button class="btn btn-success">Back</button></a>
      </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</div>
  
	<?php endif; ?>
</div>    
</div>

	

<?php $__env->stopSection(); ?>

<?php echo $__env->make('partial.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partial.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>