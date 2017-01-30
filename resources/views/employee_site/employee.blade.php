
@extends('partial.layout')
@extends('partial.header')
@extends('partial.sidebar')
@extends('partial.navbar')
@extends('partial.footer')
@section('content')
    <div class="customapp">
    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Add New</button>
    </div>


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
                    {{ csrf_field() }}
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2">
                    <i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" name="username" required class="form-control" placeholder="Username" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group">
                     <span class="input-group-addon" id="basic-addon3">
                     <i class="fa fa-key" aria-hidden="true"></i></span>
                        <input type="text" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon3">
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
                        <input type='date' name="date" class="form-control"  placeholder="Joindate"/>
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
@endsection
