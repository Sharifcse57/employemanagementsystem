
@extends('partial.layout')
@extends('partial.header')
@extends('partial.sidebar')
@extends('partial.navbar')
@extends('partial.footer')
@section('content')

<div class="app app-default">

   <div class="shadowfull">
		<div class="cards ">
      @if(!empty($paymenthistory))
     <div class="col-lg-12" style="padding-left: 50px;">
       <h1 style="text-align: center;">Payment </h1>
       <div class="row animated  " style="color:black;">
        <div class="col-lg-5"> 
          <form action="/searchpaymentbydate" method="post">
             <h3>Report By Date </h3>
                <table >
                   {{ csrf_field() }}
                    <tr>
                        <td><label for="">Report from</label><input type="text" id="datepicker1"  class="form-control" required  aria-describedby="inputSuccess2Status1" name="from_date" placeholder="Report From" ></td><td>&nbsp;&nbsp;</td>

                        <td><label for="">Report To</label><input type="text" id="datepicker2"  class="form-control" required  aria-describedby="inputSuccess2Status2" name="to_date" placeholder="Report To" ></td><td>&nbsp;&nbsp;</td>
                      </tr>
                      <tr>
                        <td><input type="submit" class="btn btn-success" value="Show Report" ></td>
                      </tr>  
                      <tr>
                        <td><a href="/payment/show" class="btn btn-success">Add new payment</a></td>
                      </tr>
                </table>
                <hr /> <hr/>
            </form>
        </div><br><br>
         <div class="col-lg-4">
          <label for="">Report by history....</label>
            <form action="/searchhistory" method="post"> 
             <div class="input-group">
               {{ csrf_field() }}
                   <input class="form-control" required type="number" name="searchpaymentemployee" placeholder="Enter history id">
              </div> 
                <button type="submit" class="btn btn-success btn-sm">Submit</button>
            </form>
        </div>
     </div>
      @endif 
  @if(!empty($history))
   <table class="table table-striped table-bordered table-hover" >
      <thead>
        <tr>
          <th>History Id</th>
          <th>Employee Name</th>
          <th>Email</th>
          <th>Total Payment</th>
          <th>Payment Month</th>
          <th>Year</th>
        </tr>
      </thead>
      <tbody>
        @foreach($history as $userhistory)
        <tr>
          <td><a href="/searchhistory/{{$userhistory->id}}">{{$userhistory->id}}</a></td>  
          <td>{{$userhistory->fullname}}</td>
          <td>{{$userhistory->email}}</td>
          <td>{{$userhistory->grand_total}}</td>
          <?php $monthName=""; ?>
          <?php $month= date('m', strtotime($userhistory->payment_date)) ?>
          <?php  $monthName = date('F', mktime(0, 0, 0, $month, 10)); ?>
         <td> {{$monthName}}</td>
         <td>{{2016}}</td>
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
                     <?php $abc=0; ?>
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
                  <?php $abc=  $payment->basic+$extra; ?>
            </div>
</div>
      <label for="">Deduction Salary</label>
     	<input type="text" value="" name="deduction" onkeyup="xyz(this.value)" id="deduct" class="form-control" placeholder="Deduct Salary"><br>
      <label for="">Grand total</label>
     	<input type="text" id="grand" name="grandtotal" value="" class="form-control" placeholder="Grand total"><br>
     	<textarea type="text" cols="5" rows="8" value="" name="description" class="form-control" placeholder="Description....."></textarea><br>
      <button type="submit" class="btn btn-success">Submit</button>
 </div>
 </form> 
<div class="col-md-6 ">
<div class="item">
<img  src="/images/{{$payment->images}}">
</div>
<div class="paymentempname">
<?php $month=0; ?>
<h2>	{{$payment->fullname}}</h2>
    @if(!empty($lastpaydate))
   <h4>  Last payment Date : 
    @foreach ($lastpaydate as $lastpaydate)
    {{$lastpaydate->payment_date}}  </h4>
    @endforeach
    @endif 
    @if(!empty($attendance))
    @foreach ($attendance as $attendance)
    <h4>Year : {{$attendance->entry_year}}</h4> 
    <?php $month  = $attendance->entry_month;
      $monthName = date('F', mktime(0, 0, 0, $month, 10));
     ?>
    <h4>Month : {{$monthName}}</h4> 
    <h4>Total attendance this month : {{$attendance->total_entry}}</h4> 
    <?php 
    $perdaysalary=($abc/25);
    $total = $perdaysalary* $attendance->total_entry; 
    $amount_deduction = $abc-$total;
     ?>
     <h4>Perday salary :{{$perdaysalary}}</h4>
     <h4>Total salary this month:{{$total}}</h4>
     <h4>Total amount deduction from sub total:{{$amount_deduction}}</h4>
      @endforeach
    @endif   
 <br>         
 <br> 
<h4>Calculator</h4>         
<form  name=calculator>
   <table  border=2>
   <tr>
   <td colspan=4><input class="input" type=text name=txt1 size="30"></td>
   </tr>
      <tr>
      <td><input class="button" type=button value="0" name="zero" onclick="sharifcal(zero.value)"></td>
      <td><input class="button" type=button value="1" name="one" onclick="sharifcal(one.value)"></td>
      <td><input class="button" type=button value="2" name="two" onclick="sharifcal(two.value)"></td>
      <td><input class="operator" type=button value="+" name="plus" onclick="sharifcal(plus.value)"></td>
      </tr>
      <tr>
      <td><input class="button" type=button value="3" name="three" onclick="sharifcal(three.value)"></td>
      <td><input class="button" type=button value="4" name="four" onclick="sharifcal(four.value)"></td>
      <td><input class="button" type=button value="5" name="five" onclick="sharifcal(five.value)"></td>
      <td><input class="operator" type=button value="-" name="minus" onclick="sharifcal(minus.value)"></td>
      </tr>
      <tr>
      <td><input class="button" type=button value="6" name="six" onclick="sharifcal(six.value)"></td>
      <td><input class="button" type=button value="7" name="seven" onclick="sharifcal(seven.value)"></td>
      <td><input class="button" type=button value="8" name="eight" onclick="sharifcal(eight.value)"></td>
      <td><input class="operator" type=button value="*" name="multiply" onclick="sharifcal(multiply.value)"></td>
      </tr>
      <tr>
      <td><input class="button" type=button value="9" name="nine" onclick="sharifcal(nine.value)">
      </td>   <td><input class="cancel" type=button value="CE" onClick="calculator.reset();">
      </td>   <td><input class="operator" type=button name=eqlbtn value== onclick="txt1.value=eval(txt1.value)"></td>
      <td><input class="operator" type=button value="/" name="divide" onclick="sharifcal(divide.value)"></td>
      </tr>
   </table>
 </form>
      
</div>

@endforeach

</div>
@endif
<a href="/payment/create"><button class="btn btn-success" style="margin: 60px 40px">Back</button></a>
</div>    
</div>

	

@endsection
