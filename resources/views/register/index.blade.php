@extends('layout_lte.app')
@section('content')
<div class="text-center" style="padding: 25px">
  <h3 style="color: white;">Registrasi - User</h3>
</div>
<div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="" class="h1"><b>SIPODA</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Pendaftaran Akun Baru!</p>
  
        <form action="{{route('postregister')}}" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" placeholder="Full name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
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
          <div class="input-group mb-3">
            <select name="level" class="form-control">
              <option selected disabled>Pilih Akses Akun</option>
              <option value="bendahara">Bendahara</option>
              <option value="sekretaris">Sekretaris</option>
            </select>            
          </div>
          <div class="row">
            </div>
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
          <div class="card-footer">
            <p>Sudah Punya Akun?</p><a href="{{route('login')}}" class="text-center">Login</a>
          </div>
          <br>
        </form>
   
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
@endsection