@extends('layouts.dashboard')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h4>Form Pendaftaran Pedagang Baru</h4>
            </div>
            <form action="{{route('postpegawai')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jabatan_id">Pilih</label>
                            <select name="jabatan_id" id="jabatan_id" class="form-control select2">
                                <option disabled selected>Pilih</option>
                                @foreach ($jab as $item)
                                    <option value="{{$item->id}}">{{$item->jabatan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <hr>
                    <a href="{{route('pegawai')}}" class="btn btn-secondary">Kembali</a>
                    <button class="btn btn-success" type="submit">Submit Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection