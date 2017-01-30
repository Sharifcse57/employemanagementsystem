
@extends('partial.layout')
@extends('partial.header')
@extends('partial.sidebar')
@extends('partial.navbar')
@extends('partial.footer')
@section('content')

<div class="app app-default">
   <div class="shadowfull">
		<div class="cards ">
    

         <div class="col-md-12">
           <table class="table table-striped table-bordered table-hover">
              <thead style="background-color: green">
                <tr style="color: white">
                  <th>History Id</th>
                  <th>Employee Id</th>
                  <th>Basic</th>
                  <th>Additional total</th>
                  <th>Sub Total</th>
                  <th>Deduction</th>
                  <th>Grand Total</th>
                  <th>Payment Date</th>
                </tr>
              </thead>
              @if(!empty($history))
               @foreach($history as $payhistory)
              <tbody>
                <tr>
                  <td>{{$payhistory->id}}</td>
                  <td>{{$payhistory->employee_id}}</td>
                  <td>{{$payhistory->basic}}</td>
                  <td>{{$payhistory->additional_total}}</td>
                  <td>{{$payhistory->sub_total}}</td>
                  <td>{{$payhistory->substruction_total}}</td>
                  <td>{{$payhistory->grand_total}}</td>
                  <td>{{$payhistory->payment_date}}</td>
                </tr>
              </tbody>
              @endforeach
              @endif

            </table>
             <span class="tituloPremio">{{$history->render()}}</span><br>
             <a href="/payment/create" class="btn btn-success">Back</a>
            <input type="button" class="btn btn-success" value="Print this page" onClick="window.print()">
         </div>
           
       </div>
     </div>
 </div>



  
   
         

	

@endsection
