@extends('layouts.dashboard')
@section('content')
    <div class="col-md-12">
      @if (auth()->user()->level == "admin")
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-single-02 text-success"></i>
                      </div>
                    </div>
                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p class="card-category">Jumlah Data Profile</p>
                        <p class="card-title">{{$countProfile}}<p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer ">
                  <hr>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-badge text-warning"></i>
                      </div>
                    </div>
                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p class="card-category">Jumlah Karyawan</p>
                        <p class="card-title">{{$countKaryawan}}<p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer ">
                  <hr>                
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-vector text-danger"></i>
                      </div>
                    </div>
                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p class="card-category">Jumlah Data Iuran</p>
                        <p class="card-title">{{$countIuran}}<p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer ">
                  <hr>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                        <i class="nc-icon nc-favourite-28 text-primary"></i>
                      </div>
                    </div>
                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p class="card-category">Total Data Pedagang</p>
                        <p class="card-title">{{$countPedagang}}<p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer ">
                  <hr>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card ">
                <div class="card-header ">
                  <h5 class="card-title">Data Akun Yang Terdaftar</h5>
                </div>
                <div class="card-body">
                  <div class="table-hover">
                      <table class="table">
                          <thead class=" text-primary">
                              <th>Nama Lengkap</th>
                              <th>Alamat E-Mail</th>
                              <th>Akses Akun</th>
                          </thead>
                          <tbody>
                              @foreach ($dtProfile as $item)                                   
                              <tr>
                                  <td>{{$item->name}}</td>
                                  <td>{{$item->email}}</td>
                                  <td>{{$item->level}}</td>
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
        @endif
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Pengumuman Terbaru</h5>
              </div>
              <div class="card-body ">
                {!! $pengumuman->isi !!}
              </div>
            </div>
            @if(auth()->user()->level == "sekretaris")
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Jumlah Data Pedagang Yang Terdaftar</h5>
                  </div>
                  <div class="card-body">
                    <table>
                      <tr>
                        <th width="350px"></th>
                        <th width="75px"></th>
                      </tr>
                      <tr>
                        <td>Data Pedagang Alun-alun Keraton Kasepuhan</td>
                        <td>:</td>
                        <td>{{$countKeraton}}</td>
                      </tr>
                      <tr>
                        <td>Data Pedagang Alun-alun Kota Cirebon</td>
                        <td>:</td>
                        <td>{{$countAlunalun}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>
          @if(auth()->user()->level == "bendahara")
          <div class="col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Data Iuran</h5>
                <p class="card-category">Pedagang yang belum bayar iuran</p>
              </div>
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                      <th>No.</th>
                      <th>Nama Pedagang</th>
                      <th>Jumlah Iuran</th>
                      <th colspan="2"></th>
                  </thead>
                  <tbody>
                    <?php $no=1;?>
                      @foreach ($dtIuran as $item)
                          <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->pedagang}}</td>
                            <td>Rp {{$item->jumlah}},-</td>
                          </tr>
                      @endforeach                    
                  </tbody>
              </table>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Data Iuran</h5>
                <p class="card-category">Pedagang yang sudah membayar iuran</p>
              </div>
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                      <th>No.</th>
                      <th>Nama Pedagang</th>
                      <th>Jumlah Iuran</th>
                      <th></th>
                  </thead>
                  <tbody class="text-center">
                    <?php $no=1;?>
                      @foreach ($sudahbayar as $item)
                          <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->pedagang}}</td>
                            <td>Rp {{$item->jumlah}},-</td>
                          </tr>
                      @endforeach                    
                  </tbody>
              </table>
              </div>
            </div>
          </div>
          @endif
        </div>
@endsection