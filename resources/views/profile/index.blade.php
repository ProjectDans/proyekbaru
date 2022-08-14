@extends('layouts.dashboard')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Akun Yang Sudah Terdaftar</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Nama Lengkap</th>
                                <th>Alamat E-Mail</th>
                                <th>Akses Akun</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($dtProfile as $item)                                   
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->level}}</td>
                                    <td><a href="{{ url('editdataprofile', $item->id) }}">
                                        Edit
                                      </a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Akses Akun User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input class="form-control" name="name" value="{{$item->name}}" disabled>
                </div>
                <div class="form-group">
                  <label>Alamat Email</label>
                  <input class="form-control" name="email" value="{{$item->email}}" disabled>
                </div>
                <div class="form-group">
                  <label>Akses Akun</label>
                  <input class="form-control" placeholder="ubah akses akun" name="level">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Update Data</button>
              </div>
        </form>
      </div>
    </div>
  </div>

@endsection