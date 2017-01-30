
@extends('partial.layout')
@extends('partial.header')
@extends('partial.sidebar')
@extends('partial.navbar')
@extends('partial.footer')
@section('content')

<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
            Employee
</div>
    <div class="card-body">  
				<div class="col-lg-4">
    			 <form action="/leave_search" method="post">
	               <select class="form-control" name="status"  >
                        <option default>Select status</option>
                        <option value="1">Accepted</option>
                        <option value="2">Rejected</option>
                    </select>
	              {{ csrf_field() }}
	              <button class="btn btn-success">Search</button>
                 </form>
              </div>
        <table class="table table-striped table-bordered table-hover">
	      <thead>
	        <tr>
	          <th>Employee Id</th>
	          <th>Leave from</th>
	          <th>Leave to</th>
	          <th>Status</th>
	        </tr>
	      </thead>
	      @if(!empty ($leavehistory))
		      @foreach ($leavehistory as $history)
		      <tbody>
		      
		        <tr>
		          <td><a href="leavehistorydetails/leaveid/{{$history->id}}/employeeid/{{$history->employee_id}}">{{$history->employee_id}}</a></td>
		          <td>{{$history->leave_form}}</td>
		          <td>{{$history->leave_to}}</td>
		          <td>
		            @if($history->status == 1)
		          	{{ 'accepted' }}
		          	@elseif($history->status == 2)
					{{ 'Rejected' }}
					@endif
		          </td>
		        </tr>
		      </tbody>
		      @endforeach
	    </table>
	       {{$leavehistory->render()}}
 		@endif


 		@if(!empty ($searchleave))
		      @foreach ($searchleave as $search)
		      <tbody>
		        <tr>
		          <td><a href="leavehistorydetails/leaveid/{{$search->id}}/employeeid/{{$search->employee_id}}">{{$search->employee_id}}</a></td>
		          <td>{{$search->leave_form}}</td>
		          <td>{{$search->leave_to}}</td>
		          <td>
		            @if($search->status == 1)
		          	{{ 'accepted' }}
		          	@elseif($search->status == 2)
					{{ 'Rejected' }}
					@endif
		          </td>
		        </tr>
		      </tbody>
		      @endforeach
	    </table>
	       {{$searchleave->render()}}
 		@endif
		
    </div>

  
</div>

</div> 
</div>


@endsection
