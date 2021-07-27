<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


   </head>

   
<body class="hold-transition login-page"  style="background-attachment: fixed; 
background-size: 100% 100%;background-image: url('{{ asset('Image/well-hospital.jpg') }}');">
 <div class="login-box" style = "height: 450px;" >
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin Log in</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><b>Sign in to start your session</b></p>

      <form action="{{ route('auth.admin_check') }}" method="post">
         @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
  
           @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
          <span class="text-danger">@error('email'){{ $message }} @enderror</span>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Enter password">
          <span class="text-danger">@error('password'){{ $message }} @enderror</span>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          {{-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
               <a href="{{ route('auth.admin_register') }}" class="text-center">Register a new membership</a>
              </label>
            </div>
          </div> --}}
          <!-- /.col -->
          <div class="col-4" style="margin-left: 8%">
            <a href="{{ route('auth.admin_register') }}" class="btn btn-success btn-block btn-flat" >Sign Up</a>
          </div>
          <div class="col-4" style="margin-right: 10%; margin-left: 12%">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->
      {{-- <p class="mb-0">
        <a href="{{ route('auth.admin_register') }}" class="text-center">Register a new membership</a>
      </p> --}}
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
