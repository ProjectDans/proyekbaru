@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h4>Form Pendaftaran Pedagang Wilayah Keraton</h4>
            </div>
            <form action="{{route('updatepedagangkeraton', $keraton->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="pedagang" value="{{$keraton->pedagang}}" class="form-control" placeholder="masukkan nama lengkap">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option disabled selected>Pilihan lama : {{$keraton->jenis_kelamin}}</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="agama">Pilih Agama</label>
                            <select name="agama" class="form-control">
                                <option disabled selected>Pilihan lama : {{$keraton->agama}}</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telepon">No. Telepon</label>
                            <input type="number" name="telepon" value="{{$keraton->telepon}}" class="form-control" placeholder="masukkan nomor tlp aktif">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="number" name="nik" value="{{$keraton->nik}}" class="form-control" placeholder="masukkan Nomor Induk Kewarganegaraan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Status Nikah</label>
                            <select name="status_nikah" class="form-control">
                                <option disabled selected>Pilihan lama : {{$keraton->status_nikah}}</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Tidak Menikah">Tidak Menikah</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Penempatan Wilayah</label>
                            <input type="text" class="form-control" value="Alun-alun Keraton Kasepuhan" name="wilayah" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Kegiatan Usaha</label>
                            <input type="text" name="nama_usaha" value="{{$keraton->nama_usaha}}" class="form-control" placeholder="masukkan nama kegiatan usaha">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat">Alamat Tempat Tinggal</label>
                            <textarea name="alamat" class="form-control" placeholder="masukkan alamat tempat tinggal">{{$keraton->alamat}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <a href="{{route('pedagangkeraton')}}" class="btn btn-secondary">Kembali</a>
                    <button class="btn btn-success" type="submit">Update Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection