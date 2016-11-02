<!DOCTYPE html>
<html>
<head>
  <title>Employee registration from</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="/css/theme/yellow.css">


</head>
<body>
  <div class="app app-default">

<div class="app-container app-login">
  <div class="flex-center">
    <div class="app-header"></div>
    <div class="app-body">
      <div class="loader-container text-center">
          <div class="icon">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
              </div>
            </div>
          <div class="title">Logging in...</div>
      </div>
      <div class="app-block">

        <div class="app-form">
          <div class="form-suggestion">
            Create an account for free.
          </div>
          <form action="/" method="POST">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Fullname" aria-describedby="basic-addon1">
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon2">
                  <i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon2">
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">
                  <i class="fa fa-key" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon3">
              </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="glyphicon glyphicon-calendar" aria-hidden="true"></i></span>
              <input type='date' class="form-control" id='datetimepicker4' placeholder="Joindate"/>
            </div>

                     <select class="input-group"  name=cat >
                         <option default>Select Designation</option>
                         @foreach ($designation as $designation)

                         <option value="{{$designation->id}} ">{{$designation->designation}}</option>
                         @endforeach
                     </select>

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <i class="glyphicon glyphicon-tasks" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Paygrade" aria-describedby="basic-addon1">
            </div>
              <div class="text-center">
                  <input type="submit" class="btn btn-success btn-submit" value="Register">
              </div>
          </form>


        </div>
      </div>
    </div>
    <div class="app-footer">
    </div>
  </div>
</div>

  </div>
  
  <script type="text/javascript" src="/js/vendor.js"></script>
  <script type="text/javascript" src="/js/app.js"></script>
  <script type="text/javascript" src="/js/custom.js"></script>

</body>
</html>