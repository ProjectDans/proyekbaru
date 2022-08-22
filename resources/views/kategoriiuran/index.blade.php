@extends('layouts.dashboard')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h3>Data Kategori Iuran</h3>
        </div>
            <table class="table table-hover">
                <thead>
                    <th>No.</th>
                    <th>Kode Iuran</th>
                    <th>Jumlah Penagihan</th>
                    <th colspan="2"></th>
                </thead>
                <tbody>
                    <?php $no=1;?>
                    @foreach ($kategoriiuran as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->kategoriiuran}}</td>
                            <td>Rp {{$item->jumlah}},-</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        {{-- {{ $dtIuran->links('pagination::bootstrap-4') }} --}}
    </div>
</div>
@endsection