
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
                   <span class="col-xs-6 pull-right"> <input class="form-control"  type="text" id="find"  placeholder="Search.."></span>
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
                        <div class="title"><a href="register/{{$user->id}}/view"><span class="highlight">{{$user->fullname}}</span> |  Join Date {{$user->joindate}}</a></div>
                        <div class="list">
                        <ul>
                            <li><b>{{$user->designation}}</b></li>
                            <li>{{$user->paygrade_name}}</li>
                            <li>{{$user->email}}</li>
                            <li>{{$user->phone}}</li><br><br>


                         
                             <!-- <button id="deactive" class="active btn btn-danger" value="{{$user->active}}">Deactive</button>
                              <!-- <input type="button" onclick="rrr()" value="OK"> -->
                           
                         
                               
                        


                            <!-- <a href="register/{{$user->id}}/edit"><button class="btn btn-success">Edit</button></a> -->
                            <a href="register/{{$user->id}}/destroy"><button class="btn btn-info">Edit</button></a>

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

<button onclick="window.print();">Print this page</button>
        </div>
      </div>
    </div>
</div>



    <!-- <div class="customapp">
        <div class="col-xs-12 shadowfull">
            <div class="card">
               <div class="col-xs-12">
                   <span class="col-xs-3 pull-right"> <input class="form-control"  type="text" id="find"  placeholder="Search.."></span>
               </div>
                <div class="card-body no-padding">

                    <table class="datatable table table-striped primary" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Paygrade</th>
                            <th>Email</th>
                            <th>Join Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($employee as $user)
                        <tr>
                            <td>{{$user->fullname}}</td>
                            <td>{{$user->designation}}</td>
                            <td>{{$user->paygrade_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->joindate}}</td>
                            <td>
                                <button><span class="glyphicon glyphicon-trash"></span></button>
                                <button><span class="glyphicon glyphicon-edit"></span></button>
                            </td>
                        </tr>                         
                        @endforeach
                        </tbody>                        
                    </table>
                    <span class="tituloPremio">{{$employee->render()}}</span>

                </div>
            </div>
        </div>
    </div> -->





@endsection
