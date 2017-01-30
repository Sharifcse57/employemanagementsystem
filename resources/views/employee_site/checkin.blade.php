@extends('employee.layout')
@extends('employee.header')
@extends('employee.sidebar')
@extends('employee.navbar')
@extends('employee.footer')
@section('content')
<?php date_default_timezone_set("Asia/Dhaka"); $date= date('D-M-Y');   $time = date('h-i-sa');  ?>
      



<div class="row">
    <div class="col-lg-12">
      <div class="card">
      @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
      @endif
      
        <div class="card-body app-heading">
          <div class="app-title">
            <div class="title" style="text-align: center;"><span class="highlight">Attendence</span>
             <form action="/attendance" method="post">
                 {{ csrf_field() }}

                <input type="hidden" value="{{$id}}" name="emp_id">
                <div class="card">
                <textarea name="description" id="" cols="35" rows="3" placeholder="Description....."></textarea><br>
                <button type="submit" class="btn btn-success ">Check In</button>
                 <!-- <button type="submit" class="btn btn-primary">Check Out</button><br> -->
                </div>  
             </form>
             </div>        
            </div>
        </div>
      </div>
@endsection
