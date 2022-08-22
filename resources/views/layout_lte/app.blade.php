<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Pengolahan Data | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset ('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('adminlte/dist/css/adminlte.min.css')}}">
  <link rel="shrotcut icon" href="{{ asset('gambar/logo.png') }}">
</head>
<body class="hold-transition login-page" style="background-image: url('{{ asset("gambar/background-login.jpg") }}'); background-size: cover; background-attachment: fixed;">  
  <div class="login-box">    
    @yield('content')
</div>
<!-- /.login-box -->
      @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show">
          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="nc-icon nc-simple-remove"></i>
          </button>
          <span>{{ Session::get('success') }}</span>
        </div>
      @endif
      @if (Session::has('danger'))
        <div class="alert alert-danger alert-dismissible fade show">
          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="nc-icon nc-simple-remove"></i>
          </button>
          <span>{{ Session::get('danger') }}</span>
        </div>
      @endif

<!--footer-->
<br>
<span class="copyright">
  <marquee>
    <strong style="color: white;">Copyright &copy; <script>document.write(new Date().getFullYear());</script> &diams; Sistem Informasi Pengolahan Data - Ikatan Pedagang Kaki Lima</strong>
  </marquee>
</span>

<!-- jQuery -->
<script src="{{ asset ('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('adminlte/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
