<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Laporan Penjualan</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-
    J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-
  Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-
  wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <style>
    table tr td,
    table tr th{
      font-size: 9pt;
    }
  </style>
</head>
<body>
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="text-center mt-2">
        <h5>LAPORAN PENJUALAN TOKO D2 BOUQUET</h5>
        <br>
        <h5 class="text-center">DETAIL LAPORAN TRANSAKSI</h5>
      </div>
    </div>
  </div>
  <br><br>
  <div class="container-fluid">
      <h6>Toko  : D2 Bouquet </h6>
      <h6>Alamat : Jl. Soekarno Hatta No. 12 Malang </h6>
      <h6>Email : dilde@gmail.com </h6>
      <h6>No Telepon : 081234098111</h6>
      <br>
  
  
  <table class="table table-bordered">
    <caption>Tabel Laporan Penjualan</caption>
        <tr>
            <th>ID Transaksi</th>
            <th>Nama Pembeli</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Pembayaran</th>
            <th>Status</th>
            <th>Waktu</th>
        </tr>

        @foreach ($paginate as $trs)
        <tr>
            <td>{{ $trs ->id }}</td>
            <td>{{ $trs ->pembeli->nama }}</td>
            <td>{{ $trs ->barang->nama }}</td>
            <td>{{ $trs ->jumlah }}</td>
            <td>{{ $trs ->barang->harga }}</td>
            <td>{{ $trs ->pembayaran }}</td>
            <td>{{ $trs ->status }}</td>
            <td>{{ $trs ->waktu }}</td>
        </tr>
        @endforeach
    </table>
  </div>
</body>
</html> 