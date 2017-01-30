
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
          Paygrade wise basic salary information
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
              @endif
                <table class="table">
                  <thead>
                  <tr>
                    <th>Paygrade Name</th>
                    <th>Designation Name</th>
                    <th>Basic</th>
                    <th>Salary</th>


                  </tr>
                  </thead>
                  <tbody>
                  @if (!empty($paygrade))
                  @foreach ($paygrade as $paygrade)


                  <tr>

                    <td>{{ $paygrade->paygrade_name }}</td>
                    <td>{{ $paygrade->designation }}</td>
                    <td>{{ $paygrade->basic }}</td>
                    <!-- <td><button class="button">Skim</button></td> -->
                     <td>
                       <a href="paygrade/{{$paygrade->id}}/salary"  class="btn btn-info btn-xs" >
                          Edit Salary
                       </a>
                       <a href="paygrade/{{$paygrade->id}}/salary/basic/{{$paygrade->basic}}"  class="btn btn-success btn-xs" >
                          Show Salary
                       </a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  @endif
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>



@endsection
