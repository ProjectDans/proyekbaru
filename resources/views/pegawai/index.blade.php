@extends('layouts.dashboard')
@section('content')
<a href="{{route('createpegawai')}}" class="btn btn-info">Tambah Data</a>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3>Tabel Data Pedagang Alun-alun Kota Cirebon</h3>
            </div>
            <table class="table">
                <thead class="text-primary">
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    <?php $no=1;?>
                    @foreach ($dtPegawai as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->pegawai}}</td>
                            <td>{{$item->jabatan->jabatan}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->tanggal}}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-warning"><i class="nc-icon nc-ruler-pencil"></i></a>
                                <a href="" class="btn btn-sm btn-danger"><i class="nc-icon nc-simple-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                {{ $dtPegawai->links('pagination::bootstrap-4') }}
            </table>
        </div>
    </div>
@endsection