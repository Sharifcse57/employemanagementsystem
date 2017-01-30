
@extends('partial.layout')
@extends('partial.header')
@extends('partial.sidebar')
@extends('partial.navbar')
@extends('partial.footer')
@section('content')

<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
            Employee
</div>
    <div class="card-body"> 
        @if(!empty ($leave)) 
          @if(count($leave) > 0) 
        <table class="table table-striped table-bordered table-hover">
	      <thead>
	        <tr>
	          <th>Employee name</th>
	          <th>Leave from</th>
	          <th>Leave to</th>
	          <th>Status</th>

	        </tr>
	      </thead>
	      @foreach ($leave as $leaveinfo)
	      <tbody>
	        <tr>
	          <td><a href="leavedetails/{{$leaveinfo->emp_id}}">{{$leaveinfo->fullname}}</a></td>
	          <td>{{$leaveinfo->leave_form}}</td>
	          <td>{{$leaveinfo->leave_to}}</td>
	          <td>pending</td>
	        </tr>
	      </tbody>
	      @endforeach
	      @else
	       <h1 style="text-align: center; ">Currently there is no leave application</h1>
       @endif
      @endif
    </table>
    {{$leave->render()}}
    </div>
</div>
</div>
</div>
@endsection
