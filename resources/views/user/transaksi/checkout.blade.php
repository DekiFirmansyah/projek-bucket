@extends('layouts.user')

@section('content')
<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Checkout Product</div>
          
    <form method="post" action="{{ route('transaksi.store') }}" id="myForm" enctype="multipart/form-data">
        @csrf

        <div class="form_row">
            <label for="pembeli"><strong>Nama Pembeli</strong></label>
            <select class="form-control" name="pembeli">
                @foreach($pembeli as $pbl)
                    <option value="{{$pbl->id}}">{{$pbl->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="form_row">
            <label for="toko"><strong>Nama Toko</strong></label>
            <select class="form-control" name="toko">
                @foreach($toko as $tk)
                    <option readonly value="{{$tk->id}}">{{$tk->nama_toko}}</option>
                @endforeach
            </select>
        </div>
        <div class="form_row">
            <label for="barang"><strong>Nama Barang</strong></label>
            <select class="form-control" name="barang">
                @foreach($barang as $brg)
                    <option value="{{$brg->id}}">{{$brg->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="form_row">
          <label for="catatan"><strong>Catatan</strong></label>
          <div class="col-md-6">
            <textarea row="5" cols="50" name="catatan" id="catatan" ariadescribedby="catatan"></textarea>
          </div>
        </div>

        <div class="form_row">
          <div class="col-md-6 offset-md-4">
            <input type="submit" class="checkout" value="checkout"/>
          </div>
        </div>
      </form>
      <a class="btn btn-success mt-3" href="{{ route('daftar_barang') }}">Kembali</a>
      @endsection