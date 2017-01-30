<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="/css/flat-admin.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/css/theme/blue-sky.css">
    <link rel="stylesheet" type="text/css" href="/css/theme/blue.css">
    <link rel="stylesheet" type="text/css" href="/css/theme/red.css">
    <link rel="stylesheet" type="text/css" href="/css/theme/yellow.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui-1.10.4.custom.min.css">

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center">
                <h2>Salary for Employee Management System</h2>
                <div style="margin-left: 900px; ">
                  <input type="button" value="Print this page" onClick="print_div()"><br>
                  <a href="/payment/create" class="btn btn-success">Return</a>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="row" id="print_div">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Payment summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                             <?php if(!empty($invoice)): ?>
                             <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <td><strong>Employee Name</strong></td>
                                        <td class="text-center"><strong>Designation</strong></td>
                                        <td class="text-center"><strong>Paygrade</strong></td>
                                        <td class="text-right"><strong>Basic</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><?php echo e($invoice->emp_name); ?></td>
                                    <td class="text-center"><?php echo e($invoice->designation); ?></td>
                                    <td class="text-center"><?php echo e($invoice->paygrade); ?></td>
                                    <td class="text-right"><?php echo e($invoice->basic); ?></td>
                                </tr>
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-center"><strong>Subtotal</strong></td>
                                    <td class="highrow text-right"><?php echo e($invoice->subtotal); ?></td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Additinal Total</strong></td>
                                    <td class="emptyrow text-right"><?php echo e($invoice->extra); ?></td>
                                </tr>
                                 <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Deduction</strong></td>
                                    <td class="emptyrow text-right"><?php echo e($invoice->deduction); ?></td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>GrandTotal</strong></td>
                                    <td class="emptyrow text-right"><?php echo e($invoice->grandtotal); ?></td>
                                </tr>
                          </tbody>
                  </table>
                               <?php endif; ?> 
                                <?php if(!empty($history)): ?>
                                 <table class="table table-condensed">
                                    <thead>
                                    
                                        <tr>
                                            <td><strong>Employee Name</strong></td>
                                            <td class="text-center"><strong>Designation</strong></td>
                                           
                                            <td class="text-right"><strong>Basic</strong></td>
                                        </tr>
                                    </thead>
                            <tbody>
                                <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        
                                <tr>
                                    <td><?php echo e($history->fullname); ?></td>
                                    <td class="text-center"><?php echo e($history->designation); ?></td>
                                    <td class="text-right"><?php echo e($history->basic); ?></td>
                                </tr>
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"></td>
                                    <td class="highrow text-center"><strong>Subtotal</strong></td>
                                    <td class="highrow text-right"><?php echo e($history->sub_total); ?></td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Additinal Total</strong></td>
                                    <td class="emptyrow text-right"><?php echo e($history->additional_total); ?></td>
                                </tr>
                                 <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>Deduction</strong></td>
                                    <td class="emptyrow text-right"><?php echo e($history->substruction_total); ?></td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow text-center"><strong>GrandTotal</strong></td>
                                    <td class="emptyrow text-right"><?php echo e($history->grand_total); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </tbody>
                                  </table>
                               <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}
</style>

<script type="text/javascript" src="/js/vendor.js"></script>
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
<script type="text/javascript" src="/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/js/jquery-ui-1.10.4.custom.min.js"></script>
</body>
</html>




   
     



	


