@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
        <br>
          <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Data Transaksi</div>
     
            <br><br>
            <div class="pull-left mt-2">
                <a style="float: right" href="{{ route('laporan_pdf') }}" 
                    class="btn btn-success">Cetak Laporan</a>
            </div>
            <br><br>
        </div>
        </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-error">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="feat_prod_box_details">
    <table class="cart_table">
        <caption>Tabel Transaksi Penjualan</caption>
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
            <th style="width:150px;">Action</th>
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
            <td>{{ $trs ->catatan }}</td>
            <td>{{ $trs ->waktu }}</td>
            <td>
                <form action="{{ route('transaksi.destroy',['transaksi'=>$trs->id]) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('transaksi.edit', $trs->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    Current Page: {{ $paginate->currentPage() }}<br>
    Jumlah Data: {{ $paginate->total() }}<br>
    Data Halaman: {{ $paginate->perPage() }}<br>
    <br>
    {{ $paginate->links() }}
  </div>
@endsection