
@section("sidebar")
    <aside class="app-sidebar" id="sidebar">
        <div class="sidebar-header">
            <a class="sidebar-brand" href="#"><span class="highlight">EMS</span> Admin</a>
            <button type="button" class="sidebar-toggle">
                <i class="fa fa-times"></i>
            </button>
        </div>

        <div class="sidebar-menu">

            <ul class="sidebar-nav">
                <li class="active">

                    <a href="/employee">
                        <div class="icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <div class="title">Employee Info</div>
                    </a>
                </li>
                <li class="@@menu.messaging">
                    <a href="/designation">
                        <div class="icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <div class="title">Designation info</div>
                    </a>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <div class="title">Salary info</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> UI Kits</li>
                            <li><a href="./uikits/customize.html">Customize</a></li>

                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <div class="title">Payment info</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="/designation/create">Add designation</a> </li>
                            <li><a href="/payitem/create">Add Payitems</a></li>

                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <div class="title">Timesheet info</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="/designation/create">Add designation</a> </li>
                            <li><a href="/payitem/create">Add Payitems</a></li>

                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <div class="title">Settings</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="/designation/create">Add designation</a> </li>
                            <li><a href="/payitem/create">Add Payitems</a></li>
                            <li><a href="/paygrade">Paygrades</a></li>
                            <li><a href="/employee/create">Register Employee</a></li>
                            <li><a href="/employee">Register Employee</a></li>

                        </ul>
                    </div>
                </li>

            </ul>
        </div>

    </aside>

@endsection