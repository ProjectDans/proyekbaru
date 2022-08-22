@extends('layouts.dashboard')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{url('updatepengumuman',$pengumuman->id)}}" method="post">
            @csrf                
            <div class="form-group">
                <label><h3>Isi Pengumuman</h3></label>
                <textarea class="form-control" name="isi" id="isi" cols="30" rows="10">{{$pengumuman->isi}}</textarea>
            </div>
            <button class="btn btn-info btn-block">Upload</button>
        </form>
    </div>
</div>
@endsection
@section('ck-editor')
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
ClassicEditor
    .create( document.querySelector( '#isi' ) )
    .catch( error => {
        console.error( error );
    } );
</script>
@endsection