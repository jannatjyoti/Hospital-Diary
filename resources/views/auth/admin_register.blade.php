<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hospital Diary Admin | Registration Page</title>
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

<body class="hold-transition register-page" style="background-attachment: fixed; 
background-size: 100% 100%;background-image: url('{{ asset('Image/hospital_dr_patient.jpg') }}');">
  <div class="register-box" style="height: 600px;">
    <div class="register-logo">
      <a href="../../index2.html"><b>Admin Register</b></a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <h5 class="login-box-msg"><b>Register a new membership</b></h5>

        <form action="{{ route('auth.admin_save') }}" method="post">
          @if(Session::get('success'))
          <div class="alert alert-success">
            {{ Session::get('success') }}
          </div>
          @endif

          @if(Session::get('fail'))
          <div class="alert alert-danger">
            {{ Session::get('fail') }}
          </div>
          @endif

          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="admin_name" placeholder="enter full name"
              value="{{ old('admin_name') }}">
            <span class="text-danger">@error('admin_name'){{ $message }} @enderror</span>
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="fas fa-user"></i>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="hospital_name" placeholder="enter hospital name"
              value="{{ old('hospital_name') }}">
            <span class="text-danger">@error('hospital_name'){{ $message }} @enderror</span>
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="fas fa-hospital"></i>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="email" placeholder="enter email address"
              value="{{ old('email') }}">
            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="fas fa-envelope"></i>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="hospital_code" placeholder="enter hospital code"
              value="{{ old('hospital_code') }}">
            <span class="text-danger">@error('hospital_code'){{ $message }} @enderror</span>
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="fas fa-keyboard"></i>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" name="address" placeholder="enter hospital address"
              value="{{ old('address') }}">
            <span class="text-danger">@error('address'){{ $message }} @enderror</span>
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="fas fa-map-marker-alt"></i>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="text" class="form-control" name="contact_no" placeholder="enter hospital contact no."
              value="{{ old('contact_no') }}">
            <span class="text-danger">@error('contact_no'){{ $message }} @enderror</span>
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="fas fa-phone"></i>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="enter password">
            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4" style="margin-left: 50px">
              <a href="{{ url("admin_login") }}" class="btn btn-primary btn-block btn-flat">Sign In</a>
            </div>
            <!-- /.col -->

            <div class="col-4" style="margin-right: 10px; margin-left: 5px">
              <button type="submit" class="btn btn-success btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>



        {{-- <a href="login.html" class="text-center">I already have a membership</a> --}}
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>