
@extends('partial.layout')
@extends('partial.sidebar')
@extends('partial.navbar')
@extends('partial.footer')
@section('content')

    <div class="customapp">




        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    Datatable
                </div>
                <div class="card-body no-padding">

                    <table class="datatable table table-striped primary" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($employee as $user)
                        <tr>
                            <td>{{$user->fullname}}</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>



@endsection
