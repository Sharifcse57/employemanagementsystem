@section("sidebar")
    <aside class="app-sidebar" id="sidebar">
        <div class="sidebar-header">
            <a class="sidebar-brand" href="#"><span class="highlight">EMS</span> Employee</a>
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
                        <div class="title">Profile</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="/profile">View Profile</a> </li>
                          
                        </ul>
                    </div>
                </li>
                    
                 <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="title">Attendance</div>
                    </a>
                    <div class="dropdown-menu">

                        <ul>
                        
                            <li><a href="/checkin/{{$id}}">Attendance</a>  </li>
                         
                        </ul>
                        
                    </div>
                </li>


                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                        </div>
                        <div class="title">Leave</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="/leavestatus">Leave History</a> </li>
                            <li><a href="/leave">Apply Leave</a></li>
                        </ul>
                    </div>
                </li>

                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-pie-chart" aria-hidden="true"></i>
                        </div>
                        <div class="title">Salary</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="/salaryinfo">Salary info</a></li>
                           
                        </ul>
                    </div>
                </li>


                <li class="dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                        <div class="title">Payment</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="/salaryhistory">Payment History</a> </li>
                        </ul>
                    </div>
                </li>



            </ul>
        </div>

    </aside>
@endsection