
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
          <div class="app-title">
            <div class="title" style="text-align: center;"><span class="highlight">Leave Status</span></div>
            <div class="description"></div>
            <div class="col-md-12" style="margin-top: 30px;">
             <div class="col-md-1"></div>
             <div class="col-md-10">
             <label for="">Leave Status</label>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Request from</th>
                      <th>Request To</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($leave as $leave)
                    <tr>
                      <td>{{$leave->leave_form}}</td>
                      <td>{{$leave->leave_to}}</td>
                        @if($leave->status==0)
                             <td>{{'Pending'}}</td>
                        @elseif ($leave->status==1)
                            <td>{{'Accepted'}}</td>
                         @elseif ($leave->status==2) 
                            <td>{{'Rejected'}}</td>   
                        @endif
                    </tr>
                     @endforeach  
                  </tbody>
                </table>
             </div>
             <div class="col-md-1"></div>

            </div>
        </div>

   
      </div>
    </div>

  </div>








@endsection
