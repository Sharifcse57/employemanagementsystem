<?php $__env->startSection("sidebar"); ?>
    <aside class="app-sidebar" id="sidebar">
        <div class="sidebar-header">
            <a class="sidebar-brand" href="#"><span class="highlight">EMS</span> Admin</a>
            <button type="button" class="sidebar-toggle">
                <i class="fa fa-times"></i>
            </button>
        </div>
        <div class="sidebar-menu">
            <ul class="sidebar-nav">
               
                    
                 <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="title">Employee info</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="/register">Current Employees</a> </li>
                            <li><a href="/deactivate">Deactive Employees</a></li>
                        </ul>
                    </div>
                </li>

                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                        </div>
                        <div class="title">Designation info</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="/designation">Designation Details</a> </li>
                        </ul>
                    </div>
                </li>

                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-pie-chart" aria-hidden="true"></i>
                        </div>
                        <div class="title">Paygrade info</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="/paygrade">Current paygrades</a> </li>
                            <li><a href="/deactivepaygrade">Deactivated Paygrades</a></li>
                            <li><a href="/paygrade/create">Add Paygrade</a></li>
                            <li><a href="/payitem">Manage Payitems</a></li>
                        </ul>
                    </div>
                </li>


                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                        <div class="title">Salary info</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="/salaryshow">Salary Management</a> </li>
                            <!-- <li><a href="/payment/create">Payment</a></li> -->
                            <!-- <li><a href="/invoice">invoice</a></li> -->
                        </ul>
                    </div>
                </li>

                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <div class="title">Payment</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="/payment/create">Payment management</a></li>
                        </ul>
                    </div>
                </li>

                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <div class="title">Leave info</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="/manageleave">Pending Leave Applications</a></li>
                            <li><a href="/leavehistory">Leave history</a></li>
                        </ul>
                    </div>
                </li>

                

                

            </ul>
        </div>

    </aside>
<?php $__env->stopSection(); ?>