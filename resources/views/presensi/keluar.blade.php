@extends('layouts.dashboard')
@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="card card-info card-outline">
            <div class="card-header">Presensi Keluar</div>
            <div class="card-body">
                <form action="{{route('ubahpresensi')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <center>
                            <label id="clock" style="font-size: 100px; color: #0A77DE; -webkit-text-stroke: 3px #00ACFE;
                                        text-shadow: 4px 4px 10px #CDE4B1,
                                                        4px 4px 20px rgba(210, 45, 26, 0.4),
                                                        4px 4px 30px rgba(210, 25, 16, 0.4),
                                                        4px 4px 40px rgba(210, 15, 06, 0.4);">
                            </label>
                        </center>
                    </div>
                    <center>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Klik Untuk Presensi Keluar</button>
                        </div>
                    </center>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection