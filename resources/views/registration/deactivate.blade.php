
@extends('partial.layout')
@extends('partial.header')
@extends('partial.sidebar')
@extends('partial.navbar')
@extends('partial.footer')
@section('content')
<div class="app app-default">
<div class="shadowfull">
      <div class="row">
        <div class="col-lg-12">
          <div class="card ">
            <div class="card-header">
              <ul class="nav nav-tabs">
                <li  class="active">
                  <a  aria-controls="tab1" role="tab"><b>Deactivated Employees</b></a>
                </li>
              </ul>
              <div class="col-xs-12">
                   
               </div>

            </div>
            <div class="success"></div>
            <div class="card-body no-padding tab-content">
              <div role="tabpanel" class="tab-pane active no-padding" id="tab1">
                <div class="search-result">
                 
                  <ul class="result">
                  @foreach ($employee as $user)

                    
                    <li id="data_{{$user->id}}">
                      <div class="img">
                      <a href="register/{{$user->id}}/view"> <img  src="/images/{{$user->images}}" height="150px" /></a>
                      </div>

                      <div class="info">
                        <div class="title"><a href="#"><span class="highlight">{{$user->fullname}}</span> |  Join Date {{$user->joindate}}</a>
                        </div>
                        <div class="list">
                        <ul>
                            <li><b>{{$user->designation}}</b></li>
                            <li>{{$user->paygrade_name}}</li>
                            <li>{{$user->email}}</li>
                            <li>{{$user->phone}}</li><br><br>
                             <button class="active btn btn-danger" value="{{$user->id}}" active="1" ">Active</button>
                        </ul>
                        </div>
                      </div> 
                    </li>
                    @endforeach
                      </ul>
                </div>
              </div>
            </div>
          </div>
           <span class="tituloPremio">{{$employee->render()}}</span>
        </div>
      </div>
    </div>
</div>

@endsection
