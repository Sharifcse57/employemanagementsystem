
@extends('partial.layout')
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
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="/designation" method="post">
                                <input type="text" name="name" class="form-control" placeholder="Enter designation">

                                {{ csrf_field() }}


                            <button type="submit" class="btn btn-primary">Save</button>
                            {{--<button type="button" class="btn btn-default">Cancel</button>--}}



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
