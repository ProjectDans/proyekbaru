@extends('layouts.dashboard')
@section('content')
<form action="{{url('updatedataprofile',$dtProfile->id)}}" method="post">
    @csrf
    <div class="modal-body">
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input class="form-control" name="name" value="{{$dtProfile->name}}" disabled>
        </div>
        <div class="form-group">
          <label>Alamat Email</label>
          <input class="form-control" name="email" value="{{$dtProfile->email}}" disabled>
        </div>
        <div class="form-group">
          <label>Akses Akun</label>
          <input class="form-control" placeholder="ubah akses akun" name="level">
        </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-secondary" href="{{route('dataprofile')}}">Kembali</a>
        <button type="submit" class="btn btn-warning">Update Data</button>
      </div>
</form>
@endsection