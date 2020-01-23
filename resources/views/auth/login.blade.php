<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/custom.css')}}">
</head>
<body class="hold-transition login-page">
  <div class="container-fluid login-page-bg">
    <div class="container login-page-box">
      <div class="row">
        <div class="col-md-8 col-sm-6">
          
        </div>
        <div class="col-md-4 col-sm-6 form-login-padding">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <h3 class="text-center text-secondary">Nitipdong</h3>
            <div class="form-group">
              <label class="form-login-label" for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label class="form-login-label" for="password">password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
            <p class="mb-1">
              <a class="forgot-password" href="forgot-password.html">I forgot my password</a>
            </p>
            <button class="btn btn-login col-md-12">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<!-- jQuery -->
<script src="{{asset('lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
