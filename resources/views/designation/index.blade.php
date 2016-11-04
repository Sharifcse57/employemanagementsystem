
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
            <div class="col-md-12">@if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
              @endif

                <table class="table">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Designation Name</th>

                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($designation as $user)


                  <tr>

                    <td>{{ $user->id }}</td>
                    <td>{{ $user->designation }}</td>
                     <td>

                       <form action="/designation/{{$user->id}}" method="post" >
                         {{ csrf_field() }}
                         <input type="hidden" name="_method" value="delete">
                         <a href="/designation/{{$user->id}}/edit"  class="btn btn-default" >
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
