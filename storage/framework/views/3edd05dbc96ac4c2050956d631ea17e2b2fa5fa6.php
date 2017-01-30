<!DOCTYPE html>
<html>
<head>
  <title>Employee management system</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link rel="stylesheet" type="text/css" href="css/flat-admin.css">
  <link rel="stylesheet" type="text/css" href="css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="css/theme/yellow.css">
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
        <div class="form-header">
        <div class="app-brand"><span class="highlight">EMS</span> Login</div>
        </div>
        <form action="/loginme" method="POST">
           <?php echo e(csrf_field()); ?>

            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon2">
                <i class="fa fa-key" aria-hidden="true"></i></span>
              <input type="text" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2">
            </div>
             <select class="form-control" name="action">
                            <option value="2">Employee</option>
                            <option value="1">Admin</option>
                           
              </select>

               <div class="text-center" style="margin-top: 20px;">
                <input type="submit" class="btn btn-success btn-submit" value="Login">
            </div>
        </form>
          <?php if(session('error')): ?>
                <div class="alert alert-success">
                  <?php echo e(session('error')); ?>

                </div>
          <?php endif; ?>
      </div>
      </div>
    </div>
    <div class="app-footer">
    </div>
  </div>
</div>
</div>
  
<script type="text/javascript" src=".js/vendor.js"></script>
<script type="text/javascript" src="js/app.js"></script>

</body>
</html>