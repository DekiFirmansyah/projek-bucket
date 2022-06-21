@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
          <br>
            <div class="pull-left mt-2">
                <h2>DATA BARANG</h2>
            </div>
            <div class="pull-left mt-2">
                <a style="float: right" href="{{ route('laporan_pdf') }}" 
                    class="btn btn-success">Cetak Laporan</a>
            </div>
            
            <br>
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

    <table class="table table-bordered">
        <tr>
            <th>ID Transaksi</th>
            <th>Nama Pembeli</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Pembayaran</th>
            <th>Status</th>
            <th>Catatan</th>
            <th>Waktu</th>
            <th width="100px">Action</th>
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

    Current Page: {{ $paginate->currentPage() }}<br>
    Jumlah Data: {{ $paginate->total() }}<br>
    Data Halaman: {{ $paginate->perPage() }}<br>
    <br>
    {{ $paginate->links() }}
  </div>
@endsection