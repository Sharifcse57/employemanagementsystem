
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
          Employee designation names
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
              @endif
                <table class="table">
                  <thead>
                  <tr>
                    <th>Designation Name</th>
                    <th>Action</th>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Add New</button>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($designation as $user)
                  <tr>
                    <td>{{ $user->designation }}</td>
                     <td>
                       <form action="/designation/{{$user->id}}" method="post" >
                         {{ csrf_field() }}
                         <input type="hidden" name="_method" value="delete">
                         <a href="/designation/{{$user->id}}/edit"  class="btn btn-info" >
                           <span class="glyphicon glyphicon-edit"></span>
                         </a>
                         <!-- <button type="submit" class="btn btn-danger" name="button"> <span class="glyphicon  glyphicon-trash"></span></button> --> 
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

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Designation</h4>
        </div>
        <div class="modal-body">
          <form action="/designation" method="post">
              <input type="text" name="name" class="form-control" placeholder="Enter designation">
              {{ csrf_field() }}
          <button type="submit" class="btn btn-success">Save</button>
          <!-- {{--<button type="button" class="btn btn-default">Cancel</button>--}} -->
          </form>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        </div>
      </div>
    </div>
</div>

@endsection
