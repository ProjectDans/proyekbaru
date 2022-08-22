@extends('layouts.dashboard')
@section('content')
<a href="{{route('createpedagangkeraton')}}" class="btn btn-info">Tambah Data</a>
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3>Tabel Data Pedagang Alun-alun Keraton Kasepuhan</h3>
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
                    @foreach ($keraton as $item)
                        <tr>
                            <td>{{$item->pedagang}}</td>
                            <td>(+62){{$item->telepon}}</td>
                            <td>{{$item->nama_usaha}}</td>
                            <td>{{$item->wilayah}}</td>
                            <td><a href="{{route('editpedagangkeraton', $item->id)}}" class="btn btn-sm btn-warning"><i class="nc-icon nc-ruler-pencil"></i></a></td>
                            <form action="{{route('deletepedagangkeraton', $item->id)}}" method="post">
                                @csrf
                                <td><button type="submit" class="btn btn-sm btn-danger"><i class="nc-icon nc-simple-remove"></i></button>
                                </td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection