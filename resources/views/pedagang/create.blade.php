@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h4>Form Pendaftaran Pedagang Baru</h4>
            </div>
            <form action="{{route('postpedagang')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="pedagang" class="form-control" placeholder="masukkan nama lengkap">
                            @foreach($errors->get('pedagang') as $msg)
                                <p class="text-danger">{{$msg}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option disabled selected>Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="agama">Pilih Agama</label>
                            <select name="agama" class="form-control">
                                <option disabled selected>Pilih</option>
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
                            <input type="number" name="telepon" class="form-control" placeholder="masukkan nomor tlp aktif">
                            @foreach($errors->get('telepon') as $msg)
                                <p class="text-danger">{{$msg}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="number" name="nik" class="form-control" placeholder="masukkan Nomor Induk Kewarganegaraan">
                            @foreach($errors->get('nik') as $msg)
                                <p class="text-danger">{{$msg}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Status Nikah</label>
                            <select name="status_nikah" class="form-control">
                                <option disabled selected>Pilih</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Tidak Menikah">Tidak Menikah</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Penempatan Wilayah</label>
                            <select name="wilayah" class="form-control">
                                <option disabled selected>Pilih</option>
                                <option value="Alun-alun Kota Cirebon">Alun-alun Kota Cirebon</option>
                                <option value="Alun-alun Keraton Kasepuhan">Alun-alun Keraton Kasepuhan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Kegiatan Usaha</label>
                            <input type="text" name="usaha" class="form-control" placeholder="masukkan nama kegiatan usaha">
                            @foreach($errors->get('usaha') as $msg)
                                <p class="text-danger">{{$msg}}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat">Alamat Tempat Tinggal</label>
                            <textarea name="alamat" class="form-control" placeholder="masukkan alamat tempat tinggal"></textarea>
                            @foreach($errors->get('alamat') as $msg)
                                <p class="text-danger">{{$msg}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <a href="{{route('pedagang')}}" class="btn btn-secondary">Kembali</a>
                    <button class="btn btn-success" type="submit">Submit Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection