@extends('layouts.user')

@section('content')
  <div class="row">
        <div class="col-lg-12 margin-tb">
          <br>
            <div class="pull-left mt-2">
                <h2>Profil Pembeli</h2>
            </div>
            <br>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('transaksi.create') }}"> Pesan Barang</a>
            </div>
            <br>
            <div class="float-right my-2">
                <a class="btn btn-primary" href="{{ route('transaksi.show', 1) }}"> History Pembelian</a>
            </div>
        </div>
        </div>

@endsection