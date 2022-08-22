@extends('layouts.dashboard')
@section('content')
<a href="{{route('createpedagangalunalun')}}" class="btn btn-info">Tambah Data</a>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3>Tabel Data Pedagang Alun-alun Kota Cirebon</h3>
            </div>
            <table class="table">
                <thead class="text-primary">
                    <th>Nama Pedagang</th>
                    <th>No. Telepon</th>
                    <th>Nama Kegiatan Usaha</th>
                    <th>Wilayah Usaha</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    @foreach ($alunalun as $item)
                        <tr>
                            <td>{{$item->pedagang}}</td>
                            <td>(+62){{$item->telepon}}</td>
                            <td>{{$item->nama_usaha}}</td>
                            <td>{{$item->wilayah}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection