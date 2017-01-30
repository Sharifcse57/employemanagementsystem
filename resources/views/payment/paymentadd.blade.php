
@extends('partial.layout')
@extends('partial.header')
@extends('partial.sidebar')
@extends('partial.navbar')
@extends('partial.footer')
@section('content')
<div class="app app-default">
   <div class="shadowfull">
		<div class="cards ">
   @if(!empty($employee))
<div class="col-md-3"></div>
   <div class="col-md-6" style="padding-left: 50px;">
       <h1 style="text-align: center;">Payment</h1><br><br>
       <label for="">Select Employee</label>
       <div class="input-group">
       <form action="/payment/getpayment" method="post">
           {{ csrf_field() }}
       <select class="form-control" name="payment"  >
       <option default>Select employee Id</option>
       @foreach ($employee as $employee)
       @if($employee->active==1)
       <option value="{{$employee->id}}">{{$employee->fullname}}</option>
         @endif
        @endforeach
        </select>
      </div> <button class="btn btn-success btn-sm">Submit</button>
   <div class="col-md-3"></div>
      
      </form>
      @endif 

  @if(!empty($history))
   <table class="table table-striped table-bordered table-hover" >
      <thead>
        <tr>
          <th>Employee Name</th>
          <th>Email</th>
          <th>Total Payment</th>
          <th>Payment Month........</th>
          <th>Year</th>
        </tr>
      </thead>
      <tbody>
        @foreach($history as $userhistory)
    
        <tr>
          <td>{{$userhistory->fullname}}</td>
          <td>{{$userhistory->email}}</td>
          <td>{{$userhistory->grand_total}}</td>
         <td> {{date('d-m-Y h:m A', strtotime($userhistory->payment_date))}}</td>
         <td> 2016</td>
        </tr>
         @endforeach
      </tbody>
    </table>
     <span class="tituloPremio">{{$history->render()}}</span>
</div>
   
   @endif

    @if(!empty($payment))
    @foreach ($payment as $payment)
<div class="col-md-6">
      <div class="row">
            <form action="/payment" method="post">
             {{ csrf_field() }}
          	<div class="col-md-6">
          	     <label for="">Full Name</label>
          		   <input type="hidden" readonly="" value="{{$payment->id}}" name="emp_id" class="form-control" placeholder="Input">
               	 <input type="text" readonly="" name="fullname" value="{{$payment->fullname}}" class="form-control"  placeholder="Input"><br>
               	 <label for="">Paygrade</label>
              	 <input type="text" readonly="" name="paygrade" value="{{$payment->paygrade_name}}" class="form-control" placeholder="Input"><br>
                 <label for="">Extra Salary</label>
                 @if(!empty($extrasalary))
                 <?php $extra=0; ?>
        			   @foreach ($extrasalary as $extrasalary)
      				   <?php $extra+=  $extrasalary->amount; ?>
        			   @endforeach
      				  <input type="text" readonly="" name="extra" value="{{$extra}}" class="form-control" placeholder="extra slary"><br>
                  @endif
          	</div>

          	 <div class="col-md-6">
          	      <label for="">Designation</label>
          	      <input type="hidden" readonly="" name="designation_id" value="{{$payment->des_id}}" class="form-control" placeholder="Input">
                	<input type="text" readonly="" name="designation" value="{{$payment->designation}}" class="form-control" placeholder="Input"><br>
          		    <label for="">Basic Salary</label>
              	  <input type="text" readonly="" name="basic" value="{{$payment->basic}}" class="form-control" placeholder=""><br>
                  <label for="">Sub Total Salary</label>
       		      	<input type="text" id="subtotal" name="subtotal" readonly="" value="{{$payment->basic+$extra}}" class="form-control" placeholder=""><br>
            </div>
</div>
      <label for="">Deduction Salary</label>
     	<input type="text" value="" name="deduction" onkeyup="xyz(this.value)" id="deduct" class="form-control" placeholder="Deduct Salary"><br>
      <label for="">Grand total</label>
     	<input type="text" id="grand" name="grandtotal" value="" class="form-control" placeholder="Grand total"><br>
     	<textarea type="text" value="" name="description" class="form-control" placeholder="Description....."></textarea><br>
      <label for="">Select Date of Payment</label>
     	<input type="date"  name="dateselect" class="form-control" placeholder="Select Date"><br>
      <button type="submit" class="btn btn-success">Submit</button>
     
 </div>
 </form> 
 <div class="col-md-6 ">
      <div class="item">
  	  <img  src="/images/{{$payment->images}}"><br><br>
      <div style="text-align: center;">
      <h2>	{{$payment->fullname}}</h2>
      </div><br><br><br><br><br><br><br><br><br><br>
      <a href="/payment/create"><button class="btn btn-success">Back</button></a>
      </div>
  </div>
@endforeach
</div>
  
	@endif
</div>    
</div>

	

@endsection
