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
                  
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form action="/paygrade/{{$grade->id}}" method="post">
                            <input type="hidden" name="_method" value="put">
                                <input type="text" value="{{$grade->paygrade_name}}" name="name" class="form-control" placeholder="Enter designation">
                                <input type="text" value="{{$grade->basic}}" name="range" class="form-control" placeholder="Enter designation">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-success">Update paygrade</button>
                            </form>
                        </div>
                       <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>










@endsection
