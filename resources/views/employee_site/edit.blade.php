
@extends('employee.layout')
@extends('employee.header')
@extends('employee.sidebar')
@extends('employee.navbar')
@extends('employee.footer')
@section('content')





@foreach ($emp as $user)
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Employee
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3">
                            <form action="/empprofileupdate/{{$user->id}}" method="post" enctype="multipart/form-data">
                                <label for="">Fullname</label>
                                <input type="hidden" name="_method" value="put">
                                <input type="text" value="{{$user->fullname}}" name="fullname" class="form-control">
                                <label for="">Email</label>
                                <input type="text" value="{{$user->email}}" name="email" class="form-control">
                                <label for="">Mobile Number</label>
                                <input type="text" value="{{$user->phone}}" name="phone" class="form-control">
                                <label for="">Address</label>
                                <input type="text" value="{{$user->address}}" name="address" class="form-control">
                                <label for="">Username</label>
                                <input type="text" value="{{$user->username}}" name="username" class="form-control">
                                <label for="">Enter new password</label>
                                <input type="text" name="password" class="form-control" placeholder="Update password">
                                {{ csrf_field() }}
                                <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                 <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                                    <input type="file" name="image" class="form-control" placeholder="photos" aria-describedby="basic-addon1">
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endforeach

@endsection
