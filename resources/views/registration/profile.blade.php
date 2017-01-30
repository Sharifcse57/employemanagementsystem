
@extends('partial.layout')
@extends('partial.header')
@extends('partial.sidebar')
@extends('partial.navbar')
@extends('partial.footer')
@section('content')

@if(!empty ($employee ))
@foreach ($employee as $user)
@if(!empty ($paygrade ))
@foreach ($paygrade as $paygrade)
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body app-heading">
          <img class="profile-img" src="/images/{{$user->images}}">
          <div class="app-title">
            <div class="title"><span class="highlight">{{$user->fullname}}</span></div>
            <div class="description">{{$paygrade->designation}}</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="card card-tab">
        <div class="card-header">
          <ul class="nav nav-tabs">
            <li role="tab1" class="active">
              <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Profile</a>
            </li>
          </ul>
        </div>
        <div class="card-body no-padding tab-content">
          <div role="tabpanel" class="tab-pane active" id="tab1">
            <div class="row">
               <div class="col-md-6">
               <br><br><br>
                 <b>Hire dates: {{$user->joindate}}</b><br><br>
                  <b>Mobile Number: {{$user->phone}}</b><br><br>
                  <b>Email:  {{$user->email}}</b><br><br>
                  <b>Address: {{$user->address}}</b><br><br>
               </div>
               <div class="col-md-6" style="float:right;">
                 <a href="#" >
                  <img src="/images/{{$user->images}}"  width="400px"  class="img-responsive">
                 </a><br>
                 <b>Paygrade : {{$paygrade->paygrade_name}} </b><br><br>
                 <b>Basic Salary : {{$basic}}</b><br><br>
               </div>
            </div>
          </div>
          <a href="/register" class="btn btn-success" style="margin-left: 30px">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
@endif
@endforeach
@endif


@if(!empty ($searchemployee ))
@foreach ($searchemployee as $user)
@if(!empty ($searchpaygrade ))
@foreach ($searchpaygrade as $paygrade)
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body app-heading">
          <img class="profile-img" src="/images/{{$user->images}}">
          <div class="app-title">
            <div class="title"><span class="highlight">{{$user->fullname}}</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="card card-tab">
        <div class="card-header">
          <ul class="nav nav-tabs">
            <li role="tab1" class="active">
              <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Profile</a>
            </li>
          </ul>
        </div>
        <div class="card-body no-padding tab-content">
          <div role="tabpanel" class="tab-pane active" id="tab1">
            <div class="row">
               <div class="col-md-6">
               <br><br><br>
                 <b>Hire dates: {{$user->joindate}}</b><br><br>
                  <b>Mobile Number: {{$user->phone}}</b><br><br>
                  <b>Email:  {{$user->email}}</b><br><br>
                  <b>Address: {{$user->address}}</b><br><br>
               </div>
               <div class="col-md-6" style="float:right;">
                 <a href="#" >
                  <img src="/images/{{$user->images}}"  width="400px"  class="img-responsive">
                 </a><br>
                 <b>Paygrade : {{$paygrade->paygrade_name}} </b><br><br>
               </div>
            </div>
          </div>
           <a href="/register" class="btn btn-success" style="margin-left: 30px">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
@endif
@endforeach
@endif
@endsection
