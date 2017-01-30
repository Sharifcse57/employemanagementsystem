
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
          @if(!empty ($leavehistory))
	      @foreach ($leavehistory as $leave)

	      @foreach ($employee as $emp)
			
			 <div class="img">
			  <a href="#"><img  src="/images/{{$emp->images}}" height="150px" /></a>         
             </div>
				<h2>Fullname : {{$emp->fullname}}</h2>
				<hr>
				<hr>
				<h3>Leave form : {{$leave->leave_form}}</h3>
				<h3>Leave To : {{$leave->leave_to}}</h3>
				<h3>Leave details : </h3>

				<div>  
					{{ strip_tags(html_entity_decode($leave->descrtiption)) }}
				</div>

				<h3>Status: 
					@if($leave->status == 1)
					{{'Accepted'}}
					@elseif($leave->status == 2)
					{{'Rejected'}}
					@endif

				</h3><br>

				<a href="/leavehistory" class="btn btn-success">Backto history</a>
	       @endforeach
	       @endforeach
	      @endif
    </div>
</div>
</div>
</div>


@endsection
