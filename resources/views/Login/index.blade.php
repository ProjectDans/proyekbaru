@extends('layout_lte.app')
@section('content')
<!-- /.login-logo -->  
<div class="text-center" style="padding: 25px">  
    <h3 style="color: white;">Login - Autentikasi</h3>
  </div>
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>SIPODA</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sistem Informasi Pengolahan Data</p>

      <form action="{{ route('postlogin') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <div class="col-12">
            <hr>
          </div>
          <div class="col-12">
            <a href="{{route('register')}}" class="btn btn-danger btn-block">Buat Akun Baru</a>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        
      </div>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

    
@endsection