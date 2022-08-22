@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h4>Form Pembuatan Data Iuran</h4>
            </div>
            <form action="{{route('postiuran')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="pedagang" class="form-control" placeholder="masukkan nama lengkap">                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Usaha</label>
                            <input type="text" name="usaha" class="form-control" placeholder="masukkan nama usaha">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jumlah Iuran</label>
                            <input type="number" name="jumlah" class="form-control" placeholder="masukkan jumlah iuran">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kategori Pedagang</label>
                            <select class="form-control" name="kategoriiuran_id" id="kategoriiuran_id">
                                <option disabled selected>Pilih</option>
                                @foreach ($kategoriiuran as $item)
                                    <option value="{{$item->id}}">{{$item->kategoriiuran}}</option>
                                @endforeach                               
                            </select>
                            {{-- <input type="number" name="jumlah" class="form-control" placeholder="masukkan jumlah iuran"> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal Penagihan</label>
                            <input type="date" name="tanggal" class="form-control" placeholder="masukkan jumlah iuran">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{route('iuran')}}" class="btn btn-sm btn-brown">Kembali</a>
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>

    
<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h4>List Data Pedagang Wilayah Alun-alun Kota Cirebon</h4>
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
        {{ $alunalun->links('pagination::bootstrap-4') }}
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h4>List Data Pedagang Wilayah Alun-alun Keraton Kasepuhan</h4>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $alunalun->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection