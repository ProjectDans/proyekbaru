@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h4>Edit Data Kategori</h4>
            </div>
            <form action="{{route('updatekategoriiuran', $kategoriiuran->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Kategori Iuran</label>
                            <input type="text" name="kategoriiuran" value="{{$kategoriiuran->kategoriiuran}}" class="form-control">
                        </div>
                    </div>                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Jumlah Iuran</label>
                            <input type="number" name="jumlah" value="{{$kategoriiuran->jumlah}}" class="form-control">
                        </div>
                    </div>                    
                </div>
                <div class="card-footer">
                    <hr>
                    <a href="{{route('adminkategoriiuran')}}" class="btn btn-secondary">Kembali</a>
                    <button class="btn btn-success" type="submit">Update Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection