<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .text-font {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        p {
            line-height: 150%;
        }
        .group-left {            
            width: 50%;
            margin-top: 50px;
            margin-left: 50px;
        }
        .signature {            
            width: 50%;
            margin-top: 65px;
            margin-left: 50px;
        }
        .text-center {
            text-align: center;
        }
        .table-center {
            display: inline-block;
            align-items: center;
        }
    </style>
    <title>Cetak Data Iuran</title>
</head>
<body>
    <div class="form-group text-font">
        <div class="header-text" style="padding: 10px; width: 25%">
            <p><img src="{{asset('gambar/logo.png')}}" width="70px" style="float: left"/><h3>Lembar Penagihan Iuran</h3></p>
        </div>
        <div class="group-left">
            <p>Surat Dari, </p>
            <p><b>Bendahara</b></p>
            <p>Diberitahukan kepada pedagang yang terkait, berikut terlampir data jumlah untuk penagihan iuran dengan periode pembayaran yang perlu dilakukan per bulan: </p>
        </div>
        <div class="table-center">
            <table class="static" align="left" border="1px" rules="all" style="margin-top: 15px; margin-left: 50px; margin-right: 50px">
                <thead class="text-center">
                    <th width="100px">No.</th>
                    <th width="500px">Nama Pedagang</th>
                    <th width="250px">Nama Usaha</th>
                    <th width="250px">Kategori Iuran</th>
                    <th width="250px">Jumlah Iuran</th>
                    <th width="250px">Tanggal Penagihan</th>  
                </thead>
                <tbody class="text-center">
                    <?php $no=1;?>
                    @foreach ($dtIuran as $item)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->pedagang}}</td>
                    <td>{{$item->usaha}}</td>
                    <td>{{$item->kategoriiuran->kategoriiuran}}</td>
                    <td>Rp {{$item->kategoriiuran->jumlah}},- / bulan</td>
                    <td>{{$item->tanggal}}</td>
                  </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="group-left">
            <p>Tanggal Iuran Dibuat : {{$item->created_at}}</p>
        </div>
    </div>
    <div class="signature">
        <script language="JavaScript">
            window.print();
            var tanggallengkap = new String();
            var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
            namahari = namahari.split(" ");
            var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
            namabulan = namabulan.split(" ");
            var tgl = new Date();
            var hari = tgl.getDay();
            var tanggal = tgl.getDate();
            var bulan = tgl.getMonth();
            var tahun = tgl.getFullYear();
            tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;
            </script>        
        <span id='jam' ></span><script language='JavaScript'>document.write(tanggallengkap);</script>
        <p style="margin-top: 50px">Bendahara</p>
    </div> 
</body>
</html>