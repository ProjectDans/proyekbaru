@extends('layouts.dashboard')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('createdatakaryawan')}}" class="btn btn-info">Buat Data Karyawan Baru</a>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Master Data Karyawan</h4>
                </div>
                <div class="card-body">
                    <div class="table-hover">
                        <table class="table">
                            <thead class="text-primary text-center">
                                <th>Nama Lengkap Karyawan</th>
                                <th>NIK</th>
                                <th>No Telepon</th>
                                <th>Alamat</th>
                                <th>E-mail</th>
                                <th>Jabatan</th>
                                <th colspan="2"></th>
                            </thead>
                            <tbody>
                                @foreach ($dtKaryawan as $item)
                                <tr>
                                    <td>{{$item->karyawan}}</td>
                                    <td>{{$item->nik}}</td>
                                    <td>(+62){{$item->telepon}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->jabatan}}</td>
                                    <td></td>
                                    <td><a href="" class="btn btn-sm btn-success">Edit</a></td>
                                    <td><a href="" class="btn btn-sm btn-danger">Delete</a></td>
                                </tr>                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection