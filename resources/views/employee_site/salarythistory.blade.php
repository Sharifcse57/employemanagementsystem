
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
            <div class="title" style="text-align: center;"><span class="highlight">Payment History</span></div>
            <div class="description"></div>
               
                <div class="col-xs-12">
                  <div class="card">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Basic Salary</th>
                          <th>Extra Salary</th>
                          <th>Sub Total</th>
                          <th>Deduction</th>
                          <th>Grand Total</th>
                          <th>Payment Date</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($payhistory as $payhistory)
                        <tr>
                          <td>{{$payhistory->basic}}</td>
                          <td>{{$payhistory->additional_total}}</td>
                          <td>{{$payhistory->sub_total}}</td>
                          <td>{{$payhistory->substruction_total}}</td>
                          <td>{{$payhistory->grand_total}}</td>
                          <td>{{$payhistory->payment_date}}</td>
 
    
                        </tr>
                        @endforeach
                       
                      </tbody>
                    </table>
                </div>
              
         </div>
      </div>
    </div>

  </div>








@endsection
