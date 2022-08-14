@extends('layouts.dashboard')
@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="card card-info card-outline">
            <div class="card-header">Presensi Masuk</div>
            <div class="card-body">
                <form action="{{route('simpanpresensimasuk')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <center>
                            <label id="clock" style="font-size: 100px; color: #0A77DE; -webkit-text-stroke: 3px #00ACFE;
                                        text-shadow: 4px 4px 10px #36D6FE,
                                        4px 4px 20px #36D6FE,
                                        4px 4px 30px#36D6FE,
                                        4px 4px 40px #36D6FE;">
                            </label>
                        </center>
                    </div>
                    <center>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Klik Untuk Presensi Masuk</button>
                        </div>
                    </center>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection