@extends('layouts.user')

@section('content')
<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Transaksi</div>
      
            <br><br><br>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('transaksi.create') }}"> Pesan Barang</a>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-primary" href="{{ route('transaksi.show', 1) }}"> History Pembelian</a>
            </div>

@endsection