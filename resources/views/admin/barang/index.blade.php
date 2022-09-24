@extends('layouts.admin')

@section('content')
  <div class="row">
        <div class="col-lg-12 margin-tb">
          <br>
          <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Data Barang</div>
     
            <br><br><br>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('barang.create') }}"> Input Barang</a>
            </div>
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
        <caption>Tabel Barang</caption>
        <tr class="cart_title">
            <th>Nama</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Estimasi Pembuatan</th>
            <th>Foto</th>
            <th>Catatan</th>
            <th style="width: 220px;">Action</th>
        </tr>
        
        @foreach ($paginate as $brg)
        <tr>
            <td>{{ $brg ->nama }}</td>
            <td>{{ $brg ->harga }}</td>
            <td>{{ $brg ->kategori }}</td>
            <td>{{ $brg ->estimasi_pembuatan }}</td>
            <td><img style="width: 50px; overflow: hidden" class="rounded-circle" src="{{ asset('./storage/'. $brg->foto) }}" alt=""></td>
            <td>{{ $brg ->catatan }}</td>
            <td>
                <form action="{{ route('barang.destroy',['barang'=>$brg->id]) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('barang.show',$brg->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('barang.edit',$brg->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br><br>
    Current Page: {{ $paginate->currentPage() }}<br>
    Jumlah Data: {{ $paginate->total() }}<br>
    Data Halaman: {{ $paginate->perPage() }}<br>
    <br>
    {{ $paginate->links() }}
    </div>
@endsection