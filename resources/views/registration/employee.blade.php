
@extends('partial.layout')
@extends('partial.sidebar')
@extends('partial.navbar')
@extends('partial.footer')
@section('content')

    <div class="customapp">

        <div class="app-container app-login">
            <div class="flex-center">
                <div class="app-header"></div>
                <div class="app-body">
                    <div class="loader-container text-center">
                        <div class="icon">
                            <div class="sk-folding-cube">
                                <div class="sk-cube1 sk-cube"></div>
                                <div class="sk-cube2 sk-cube"></div>
                                <div class="sk-cube4 sk-cube"></div>
                                <div class="sk-cube3 sk-cube"></div>
                            </div>
                        </div>
                        <div class="title">Logging in...</div>
                    </div>
                    <div class="app-block">

                        <div class="app-form">
                            <div class="form-suggestion">
                                Create an account for free.
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="/register" method="post">
                                <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                                    <input type="text" name="fname" class="form-control" placeholder="Fullname" aria-describedby="basic-addon1">
                                </div>
                                {{ csrf_field() }}
                                <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2">
                                <i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon2">
                                </div>
                                <div class="input-group">
                                 <span class="input-group-addon" id="basic-addon3">
                                 <i class="fa fa-key" aria-hidden="true"></i></span>
                                    <input type="text" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon3">
                                </div>
                                <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                 <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                                    <input type="text"name="email" class="form-control" placeholder="email" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group">
                                    <select class="form-control" name="designation"  >
                                        <option default>Select Designation</option>
                                        @foreach ($designation as $designation)
                                            <option value="{{$designation->id}} ">{{$designation->designation}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input-group">
                                    <select class="form-control"  name="paygrade" >
                                        <option default>Select Paygrade</option>
                                        @foreach ($paygrade as $paygrade)
                                            <option value="{{$paygrade->id}} ">{{$paygrade->paygrade_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group">
                                 <span class="input-group-addon" id="basic-addon1">
                                 <i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span>
                                    <input type='date'name="date" class="form-control"  placeholder="Joindate"/>
                                </div>
                                <div class="text-center">

                                    <button type="submit" class="btn btn-success btn-submit"> Register</button>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
                <div class="app-footer">
                </div>
            </div>
        </div>

    </div>



@endsection
