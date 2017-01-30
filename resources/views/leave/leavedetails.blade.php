
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
          @if(!empty ($leaveinfo))
	      @foreach ($leaveinfo as $leave)
			 @if($leave->status==0)
			 <div class="img">
                        <a href="#"><img  src="/images/{{$leave->images}}" height="150px" /></a>
             </div>
				<h2>Fullname : {{$leave->fullname}}</h2>
				<hr>
				<hr>
				<h3>Leave form : {{$leave->leave_form}}</h3>
				<h3>Leave To : {{$leave->leave_to}}</h3>
				<h3>Leave details : </h3>

				<div>
				{{ strip_tags(html_entity_decode($leave->descrtiption)) }}
				</div><br><br>
				<table>
					<tbody>
						<tr>
							<td>
							<form action="/acceptleave" method="post">
			         		{{ csrf_field() }}
			            	 <input type="hidden" value="{{$leave->id}}" name="accept_id">
			            	 <button class="btn btn-success">Accept</button>
			    			</form>
			    			</td>
			           		 <td>
			           		 <form action="/rejectleave" method="post">
			                 {{ csrf_field() }}
			                     <input type="hidden" value="{{$leave->id}}" name="reject_id">
			                     <button class="btn btn-danger">Reject</button>
			           		 </form>
			            	</td>
						</tr>
					</tbody>
				</table>
			 @endif		
	       @endforeach
	      @endif
    </div>
</div>
</div>
</div>


@endsection
