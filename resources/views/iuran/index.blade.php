@extends('layouts.dashboard')
@section('content')

<div class="card">
  <div class="card-body">
    <a href="{{route('createiuran')}}" class="btn btn-success">Buat Data Iuran Baru <i class="nc-icon nc-cloud-download-93"></i></a>
    <a href="{{route('cetakiuran')}}" target="_blank" class="btn btn-info">Cetak Data <i class="nc-icon nc-box"></i></a>
        <table class="table table-hover">
            <thead>
                <th>No.</th>
                <th>Nama Pedagang</th>
                <th>Nama Usaha</th>
                <th>Kategori Iuran</th>
                <th>Jumlah Iuran</th>
                <th>Tanggal Penagihan</th>
                <th></th>
            </thead>
            <tbody class="text-center">
              <?php $no=1;?>
                @foreach ($dtIuran as $item)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->pedagang}}</td>
                    <td>{{$item->usaha}}</td>
                    <td>{{$item->kategoriiuran->kategoriiuran}}</td>
                    <td>Rp {{$item->kategoriiuran->jumlah}},- / bulan</td>
                    <td>{{$item->tanggal}}</td>
                    <td>
                      <a href="{{route('deleteiuran', $item->id)}}" class="btn btn-sm btn-danger-outline">Setor</a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $dtIuran->links('pagination::bootstrap-4') }} --}}
    </div>
</div>
@endsection