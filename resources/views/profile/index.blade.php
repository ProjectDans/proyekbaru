@extends('layouts.dashboard')
@section('content')
<h2>Data User</h2>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data akun yang terdaftar</h4>
                </div>
                <div class="card-body">
                    <div class="table">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Nama Akun</th>
                                <th>level akun</th>
                                <th>Alamat E-mail</th>
                                <th></th>
                            </thead>
                            <tbody>
                              @foreach($dtProfile as $item)
                              <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->level}}</td>
                                <td>{{$item->email}}</td>
                                <td><a href="{{route('editdataprofile', $item->id)}}" class="btn btn-sm btn-warning"><i class="nc-icon nc-ruler-pencil"></i></a></td>
                                <form action="{{route('deletedataprofile', $item->id)}}" method="post">
                                    @csrf
                                    <td><button type="submit" class="btn btn-sm btn-danger"><i class="nc-icon nc-simple-remove"></i></button></td>
                                </form>
                                @endforeach
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection