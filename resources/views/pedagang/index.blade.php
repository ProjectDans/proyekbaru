@extends('layouts.dashboard')
@section('content')
<a href="{{route('createpedagang')}}" class="btn btn-info">Tambah Data</a>
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
                    @foreach ($dtPedagang as $item)
                        <tr>
                            <td>{{$item->pedagang}}</td>
                            <td>{{$item->nik}}</td>
                            <td>{{$item->usaha}}</td>
                            <td>{{$item->wilayah->wilayah}}</td>
                            <td><a href="{{route('editpedagang', $item->id)}}" class="btn btn-sm btn-warning"><i class="nc-icon nc-ruler-pencil"></i></a></td>
                            <form action="{{route('deletepedagang', $item->id)}}" method="post">
                                @csrf
                                <td><button class="btn btn-sm btn-danger" type="submit"><i class="nc-icon nc-simple-remove"></i></button></td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection