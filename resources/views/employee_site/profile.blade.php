
@extends('employee.layout')
@extends('employee.header')
@extends('employee.sidebar')
@extends('employee.navbar')
@extends('employee.footer')
@section('content')



<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body app-heading">
          <img class="profile-img" src="/images/{{$user->images}}">
          <div class="app-title">
            <div class="title"><span class="highlight">{{$user->fullname}}</span></div>
            <div class="description"></div>
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
               <br>
                 <a href="#" >
                 <img src="/images/{{$user->images}}"  width="250px"  class="img-responsive">
                 </a><br>
                 @foreach ($grade as $grade)   
                 <b>Paygrade : {{$grade->paygrade_name}} </b><br><br>
                 <b>Basic Salary : {{$grade->basic}}</b><br><br>
                 @endforeach 

               </div>
               <div class="col-md-6" style="float:right;">
                  <br><br>
                  <div class="col-md-5">
                   <h1> Basic info</h1>
                  @foreach ($designation as $designation)  
                  <b>Designation : {{$designation->designation}}</b><br><br>
                  @endforeach   
                  <b>Hire date : {{$user->joindate}}</b><br><br>
                  <b>Mobile Number : {{$user->phone}}</b><br><br>
                  <b>Email :  {{$user->email}}</b><br><br>
                  <b>Address: {{$user->address}}</b><br><br>
                  </div>
                  
               </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>





@endsection
