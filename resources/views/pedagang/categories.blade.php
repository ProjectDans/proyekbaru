@extends('layouts.dashboard')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h3>Data Pedagang</h3>
            <p>Data Pedagang Yang Tercatat Berdasarkan Wilayah</p>
        </div>
        <table class="table">
            <thead class="text-primary text-center">
                <th>No.</th>
                <th>Nama Tempat</th>
                <th>Alamat</th>
                <th></th>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>1</td>
                    <td><a href="{{route('pedagangalunalun')}}">Alun-alun Kota Cirebon</a></td>
                    <td>Jl. Kartini, Kebonbaru, Kec. Kejaksan, Kota Cirebon, Jawa Barat</td>
                </tr>
                <tr class="text-center">
                    <td>2</td>
                    <td><a href="{{route('pedagangkeraton')}}">Alun-alun Keraton Kasepuhan</a></td>
                    <td>Jl. Kasepuhan, Kesepuhan, Kec. Lemahwungkuk, Kota Cirebon, Jawa Barat</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection