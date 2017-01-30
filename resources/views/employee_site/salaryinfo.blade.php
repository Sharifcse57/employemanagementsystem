
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
            <div class="title" style="text-align: center;"><span class="highlight">Salary Info</span></div>
            <div class="description"></div>
                <div class="col-md-6">
                <div class="card card-mini">
                  <div class="card-header">
                  @foreach($designation as $designation)
                    <label for="">Designation : {{$designation->designation}}</label>
                    @endforeach
                  </div>
                  <div class="card-body">
                   @foreach($grade as $grade)
                       <b>Paygrade :  {{$grade->paygrade_name}}</b><br><br>
                        <b>Basic:  {{$grade->basic}}</b><br><br>
                    @endforeach     
                        
                         
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card card-mini">
                  <div class="card-header">
                    Extra salary
                  </div>
                  <div class="card-body">
                    <!-- <b>Home :4000</b><br><br>
                    <b>Health: 500</b><br><br>
                    <b>Lunch: 500</b><br><br>
                    <b>Extra: 500</b><br><br>
                    <b>Transport: 500</b><br><br> -->
                     @if(!empty($payitems))
                     <?php $totalamount=0; ?>
                    @foreach($payitems as $payitems)
                    
                       <b>Payitem Name:  {{$payitems->payitem}}</b><br><br>
                       <b>amount :  {{$payitems->amount}}</b><br><br>
                      
                        <?php $totalamount+=  $payitems->amount; ?>

                    @endforeach 
                          <h3>  Grand salary : {{ $totalamount+$grade->basic}} </h3>
                    @endif
                   
                   


                  </div>
                </div>
              </div>
         </div>
      </div>
    </div>

  </div>








@endsection
