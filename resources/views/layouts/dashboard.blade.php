</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Sistem Informasi Pengolahan Data &diams; Ikatan Pedagang Kaki Lima
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  {{-- <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" /> --}}
  <!--jam.js-->
  <script src="{{asset('js/jam.js')}}"></script>
  <style>
    #watch {
        color: rgb(252, 150, 65);
        position: absolute;
        z-index: 1;
        height: 40px;
        width: 700px;
        overflow: show;
        margin: auto;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        font-size: 10vw;
        -webkit-text-stroke: 3px rgb(210, 65, 36);
        text-shadow: 4px 4px 10px rgba(210, 65, 36, 0.4),
            4px 4px 20px rgba(210, 45, 26, 0.4),
            4px 4px 30px rgba(210, 25, 16, 0.4),
            4px 4px 40px rgba(210, 15, 06, 0.4);
    }
</style>
 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body class="" onload="realtimeClock()">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset('gambar/logo.jpg')}}">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Sipoda &diams; IPKL
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="{{route('home')}}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="{{route('presensimasuk')}}">
              <i class="nc-icon nc-check-2"></i>
              <p>Presensi Masuk</p>
            </a>
          </li>
          <li>
            <a href="{{route('presensikeluar')}}">
              <i class="nc-icon nc-minimal-left"></i>
              <p>Presensi Pulang</p>
            </a>
          </li>
          @if (auth()->user()->level == "admin")
          <li>
            <a href="{{route('filter-data')}}">
              <i class="nc-icon nc-single-copy-04"></i>
              <p>Rekap Data Presensi</p>
            </a>
          </li>
          <li>
            <a href="{{route('dataprofile')}}">
              <i class="nc-icon nc-single-02"></i>
              <p>Data Profile</p>
            </a>
          </li>
          <li>
            <a href="{{ url('pengumuman') }}">
              <i class="nc-icon nc-paper"></i>
              <p>Pengumuman</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="{{route('adminkategoriiuran')}}">
              <i class="nc-icon nc-tag-content"></i>
              <p>Data Kategori Iuran</p>
            </a>
          </li>
          <li>
            <a href="{{route('datakaryawan')}}">
              <i class="nc-icon nc-badge"></i>
              <p>Data Karyawan</p>
            </a>
          </li>
          @endif
          @if(auth()->user()->level == "sekretaris")
          <li>
            <a href="{{route('pedagangkeraton')}}">
              <i class="nc-icon nc-app"></i>
              <p>Data Pedagang</p>
              <p>Wilayah Keraton</p>
            </a>
          </li>
          <li>
            <a href="{{route('pedagangalunalun')}}">
              <i class="nc-icon nc-app"></i>
              <p>Data Pedagang</p>
              <p>Wilayah Alun-Alun</p>
            </a>
          </li>
          <li>
            <a href="{{route('wilayah')}}">
              <i class="nc-icon nc-map-big"></i>
              <p>Data Wilayah</p>
            </a>
          </li>          
          {{-- <li>
            <a href="{{route('pegawai')}}">
              <i class="nc-icon nc-map-big"></i>
              <p>Data Pegawai</p>
            </a>
          </li>           --}}
          @endif
          @if(auth()->user()->level == "bendahara")
          <li class="active-pro">
            <a href="{{route('iuran')}}">
              <i class="nc-icon nc-money-coins"></i>
              <p>Data Iuran</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="{{route('kategoriiuran')}}">
              <i class="nc-icon nc-tag-content"></i>
              <p>Kategori Iuran</p>
            </a>
          </li>
          @endif
          <li class="active-pro">
            <a href="{{ route('logout') }}">
              <i class="nc-icon nc-button-power"></i>
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Selamat Datang, {{ auth()->user()->name }} ({{auth()->user()->level }})</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show">
          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="nc-icon nc-simple-remove"></i>
          </button>
          <span>{{ Session::get('success') }}</span>
        </div>
        @endif
        @if (Session::has('danger'))
        <div class="alert alert-danger alert-dismissible fade show">
          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="nc-icon nc-simple-remove"></i>
          </button>
          <span>{{ Session::get('danger') }}</span>
        </div>
        @endif
      </nav>
      <!-- End Navbar -->
      <!--start of content-->
      <div class="content">
        @yield('content')
      </div>
      <footer class="main-footer">
        <span class="copyright">
          <marquee>
            <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script> &diams; Sistem Informasi Pengolahan Data - Ikatan Pedagang Kaki Lima</strong>
          </marquee>
        </span>
      </footer>
    </div>
  </div>
  <!-- ck-editor -->
  @yield('ck-editor')
  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assets/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('assets/demo/demo.js')}}"></script>
  
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>