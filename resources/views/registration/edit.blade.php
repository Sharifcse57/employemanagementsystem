
@extends('partial.layout')
@extends('partial.header')
@extends('partial.sidebar')
@extends('partial.navbar')
@extends('partial.footer')
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
                    <form action="/register/{{$user->id}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put">
                    <label for="">Fullname</label>
                    <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i></span>

                        <input type="text" name="fname" value="{{$user->fullname}}" required class="form-control" placeholder="Fullname" aria-describedby="basic-addon1">
                    </div>
                        {{ csrf_field() }}
                        <label for="">Email</label>
                        <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                         <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                            <input type="text" name="email" value="{{$user->email}}" required class="form-control" placeholder="email" aria-describedby="basic-addon1">
                        </div>
                       
                         
                          @if (!empty($designation))
                        <label for="">Select Designation</label>
                        <div class="input-group">
                            <select class="form-control" name="designation"  >
                                <option default>Select Designation</option>
                                @foreach ($designation as $designation)
                                    <option value="{{$designation->id}} ">{{$designation->designation}}</option>
                                @endforeach
                            </select>
                        </div>   @endif
                           @if(!empty($paygrade))
                           <label for="">Select Paygrade</label>
                        <div class="input-group">
                            <select class="form-control"  name="paygrade" >
                                <option default>Select Paygrade</option>
                                @foreach ($paygrade as $paygrade)
                                    <option value="{{$paygrade->id}} ">{{$paygrade->paygrade_name}}</option>
                                @endforeach
                            </select>
                        </div> 
                          @endif
                          <label for="">Select Image </label>
                        <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                         <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                            <input type="file" name="image" class="form-control" placeholder="photos" aria-describedby="basic-addon1">
                        </div>
                       

                            <button type="submit" class="btn btn-success btn-submit"> Register</button>
                     

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
  @endforeach

@endsection
