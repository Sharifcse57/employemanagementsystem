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
          Employee salary Information
        </div>
        <div class="card-body">
          <div class="row ">
            <div class="col-md-6 shadow">
              <?php $grade=""?>
              @foreach ($salarys as $salary) 
              <?php  $grade=$salary->paygrade_name; ?>
              @endforeach
              <h2>Paygrade : {{$grade}} </h2>
                      <table class="table">
                       <thead>
                        <th>Payitem Name</th>
                        <th>Amount</th>
                      </thead>
                        <?php $totalsalary = 0; ?>
                        @foreach ($salarys as $salarys)
                        <?php $totalsalary+=  $salarys->amount; ?>
                      <tbody>
                        <tr>
                        <td> {{ $salarys->payitem }}</td>
                        <td> {{ $salarys->amount }}</td>
                        <td> </td>
                        <td> </td>
                        </tr>
                      </tbody>
                       @endforeach
                  </table>
            </div>
            <div class="col-md-6">
              <h2>Basic Amount</h2><b>{{$basic}}</b>
                      <table class="table">
                      <thead>
                        <th>Total payitems amount</th>
                        <th>Total</th>
                      </thead>
                      <tbody>
                        <tr>
                   
                        <td> {{$totalsalary}}</td>
                        <td> 
                        {{$totalsalary+$basic}}
                        </td>
                        </tr>
                      </tbody>
                  </table>
            </div>
          </div><br><br>
           <a href="/salaryshow" class="btn btn-success">Back</a>
        </div>
      </div>
    </div>
</div>

@endsection


