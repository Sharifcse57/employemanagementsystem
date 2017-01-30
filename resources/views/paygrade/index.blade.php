
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
            <div class="col-lg-12">
              @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
              @endif
                <table class="table">
                  <thead>
                  <tr>
                    <th>Paygrade Name</th>
                    <th>Basic Salary</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @if (!empty($paygrade))
                  @foreach ($paygrade as $paygrade)
                  <tr>
                    <td>{{ $paygrade->paygrade_name }}</td>
                    <td>{{ $paygrade->basic }}</td>
                    <td> 
                    <a href="/paygrade/{{$paygrade->id}}/edit"  class="btn btn-info" >
                           <span class="glyphicon glyphicon-edit"></span>
                     </a>
                     <a href="/paygrade/{{$paygrade->id}}/deactive"  class="btn btn-danger">Deactive</a>
                     </td>
                     <td>
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
