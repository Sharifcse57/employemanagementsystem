
@extends('partial.layout')
@extends('partial.sidebar')
@extends('partial.navbar')
@extends('partial.footer')
@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Employee designation names
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
                    <th>Id</th>
                    <th>Paygrade Name</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($paygrade as $paygrade)


                  <tr>

                    <td>{{ $paygrade->id }}</td>
                    <td>{{ $paygrade->paygrade_name }}</td>
                     <td>

                       <form action="/designation/{{$paygrade->id}}" method="post" >
                         {{ csrf_field() }}
                         <input type="hidden" name="_method" value="delete">
                         <a href="/designation/{{$paygrade->id}}/edit"  class="btn btn-default" >
                           <span class="glyphicon glyphicon-edit"></span>
                         </a>
                         <button type="submit" class="btn btn-default" name="button"> <span class="glyphicon  glyphicon-trash"></span></button>
                       </form>

                    </td>


                  </tr>
                  @endforeach
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>



@endsection
