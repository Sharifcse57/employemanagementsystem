
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
          Employee Payitems names
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-8">
              @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
              @endif
                <table class="table">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Payitems Name</th>
                  </tr>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Add New</button>
                  </thead>
                  <tbody>
                  @foreach ($payitems as $items)
                  <tr>
                    <td>{{ $items->id }}</td>
                    <td>{{ $items->payitem }}</td>
                     <td>
                       <form action="/payitem/{{$items->id}}" method="post" >
                         {{ csrf_field() }}
                         <input type="hidden" name="_method" value="delete">
                         <a href="/payitem/{{$items->id}}/edit"  class="btn btn-info" >
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
<!-- Modal -->


<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add new Payitems</h4>
      </div>
      <div class="modal-body">
     
        <form action="/payitem" method="post">
              <input type="text" name="name" class="form-control" placeholder="Enter Payitem">
              {{ csrf_field() }}
          <button type="submit" class="btn btn-success">Save</button>
          {{--<button type="button" class="btn btn-default">Cancel</button>--}}
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>







@endsection


