@extends('layouts.user')

@section('content')

<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt=""></span>My cart</div>
      <div class="feat_prod_box_details">
        <table class="cart_table">
          <tr class="cart_title">
            <th>ID Transaksi</th>
            <th>Nama Pembeli</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Pembayaran</th>
            <th>Status</th>
            <th>Catatan</th>
            <th>Waktu</th>
          </tr>
          @foreach ($transaksi as $trs)
          <tr>
            <td>{{ $trs ->id }}</td>
            <td>{{ $trs ->pembeli->nama }}</td>
            <td>{{ $trs ->barang->nama }}</td>
            <td>{{ $trs ->jumlah }}</td>
            <td>{{ $trs ->barang->harga }}</td>
            <td>{{ $trs ->pembayaran }}</td>
            <td>{{ $trs ->status }}</td>
            <td>{{ $trs ->catatan }}</td>
            <td>{{ $trs ->waktu }}</td>
            
          </tr>
        @endforeach
        </table>
        <br>
        <a class="btn btn-success mt-3" href="{{ route('pesanan') }}">Kembali</a>
      <div class="clear"></div>

@endsection