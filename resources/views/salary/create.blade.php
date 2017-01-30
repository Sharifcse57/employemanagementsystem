
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
                    Basic Elements
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Add New</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add new Payitems</h4>
      </div>
      <div class="modal-body">
     
        <form action="/paygrade" method="post">
            <input type="text" name="name" class="form-control" placeholder="Enter Paygrade name">
            <input type="text" name="range" class="form-control" placeholder="Salary Range">
              <div class="input-group">
                <select class="form-control" name="designation"  >
                    <option default>Select Designation</option>
                    @foreach ($designation as $designation)
                        <option value="{{$designation->id}} ">{{$designation->designation}}</option>
                    @endforeach
                </select>
                </div>
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
