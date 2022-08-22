@extends('layouts.dashboard')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('updatedatakaryawan', $dtKaryawan->id)}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="karyawan">Nama Lengkap</label>
                        <input type="text" class="form-control" name="karyawan" value="{{$dtKaryawan->karyawan}}" placeholder="masukkan nama lengkap">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" class="form-control" name="nik" value="{{$dtKaryawan->nik}}" placeholder="nomor induk kewarganegaraan">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telepon">No Telepon</label>
                        <input type="number" class="form-control" name="telepon" value="{{$dtKaryawan->telepon}}" placeholder="masukkan nomor telepon aktif">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{$dtKaryawan->alamat}}" placeholder="masukkan alamat lengkap">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$dtKaryawan->email}}" placeholder="masukkan alamat email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select name="jabatan" id="jabatan" class="form-control">
                            <option disabled value selected>{{$dtKaryawan->jabatan}}</option>
                            <option value="{{$dtKaryawan->jabatan}}" {{$dtKaryawan->jabatan}}>bendahara</option>
                            <option value="{{$dtKaryawan->jabatan}}" {{$dtKaryawan->jabatan}}>sekretaris</option>
                            <option value="{{$dtKaryawan->jabatan}}" {{$dtKaryawan->jabatan}}>karyawan</option>
                        </select>
                    </div>
                </div>
            </div>
            <a href="{{route('datakaryawan')}}" class="btn">Kembali</a>
            <button class="btn btn-success" type="submit">Update Data</button>
        </form>
    </div>
</div>
@endsection