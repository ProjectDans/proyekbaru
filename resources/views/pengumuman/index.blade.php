@extends('layouts.dashboard')
@section('content')
<div class="card">
    <div class="card-body"> 
        <table class="table">            
            <tbody>
                @foreach ($pengumuman as $item)
                <tr>
                    <td>Deskripsi Pengumuman</td>
                    <td>:</td>
                    <td><textarea class="form-control" name="isi" id="isi" cols="65" rows="10" style="padding: 15px">
                        {{$item->isi}}
                    </textarea></td>
                    <td><a href="{{ url('editpengumuman', $item->id) }}" class="btn btn-lg btn-warning">Edit</a></td>
                </tr>                    
                @endforeach
            </tbody>
        </table>
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