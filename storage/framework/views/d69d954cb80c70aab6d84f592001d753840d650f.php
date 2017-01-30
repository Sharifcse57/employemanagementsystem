<?php $__env->startSection("navbar"); ?>

        <nav class="navbar navbar-default" id="navbar">
            <div class="container-fluid">
                <div class="navbar-collapse collapse in">
                    <ul class="nav navbar-nav navbar-mobile">
                        <li>
                            <button type="button" class="sidebar-toggle">
                                <i class="fa fa-bars"></i>
                            </button>
                        </li>
                        <li class="logo">
                            <a class="navbar-brand" href="#"><span class="highlight">EMS</span> Employee</a>
                        </li>
                        <li>
                            <button type="button" class="navbar-toggle">
                                <img class="profile-img" src="/images/profile.png">
                            </button>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                        <li class="navbar-title">Employee management system</li>
                       
                    </ul>
                    <ul class="nav navbar-nav navbar-right">



                        <li class="dropdown profile">
                            <a href="#" class="dropdown-toggle"  data-toggle="dropdown">
                                <img class="profile-img" src="/images/profile.png">
                                <div class="title">Profile</div>
                            </a>
                            <div class="dropdown-menu">
                                
                                <ul class="action">
                                    <li>
                                        <a href="/profile/<?php echo e($id); ?>">
                                            Update Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/logout-employee">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



<?php $__env->stopSection(); ?>