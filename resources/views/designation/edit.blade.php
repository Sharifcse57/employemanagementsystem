
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
                            <label class="switch">
                                <input type="checkbox">
                                <div class="slider round dog-button"></div>
                            </label>

                            <table class="table" id="dog" style="display: none;">
                                <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>
                                <tr>
                                    <td>Mary</td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                </tr>
                                <tr>
                                    <td>July</td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                </tr>
                                </tbody>
                            </table>



                            {{--<div id="cat" style="display: none;">aaaaaaaaaaa</div>--}}


                            <form action="/designation/{{$desig->id}}" method="post">
                            <input type="hidden" name="_method" value="put">
                                <input type="text" value="{{$desig->designation}}" name="name" class="form-control" placeholder="Enter designation">

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
