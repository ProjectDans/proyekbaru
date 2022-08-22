@extends('layouts.dashboard')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h3>Data Wilayah</h3>
        </div>
        <table class="table">
            <thead class="text-primary">
                <th>No.</th>
                <th>Nama Tempat</th>
                <th>Alamat</th>
                <th></th>
            </thead>
            <tbody>
                <?php $no=1;?>
                @foreach ($dtWilayah as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->wilayah}}</td>
                        <td>{{$item->alamat}}</td>
                        {{-- <td><a href="" class="btn btn-sm btn-warning"><i class="nc-icon nc-ruler-pencil"></i></a></td>
                        <td><a href="" class="btn btn-sm btn-danger"><i class="nc-icon nc-simple-remove"></i></a></td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection