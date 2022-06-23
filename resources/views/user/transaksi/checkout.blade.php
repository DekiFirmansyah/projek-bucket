@extends('layouts.user')

@section('content')
<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Checkout Product</div>
<div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">Checkout Product</div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        <form method="post" action="{{ route('transaksi.store') }}" id="myForm" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="pembeli"><strong>Nama Pembeli</strong></label>
            <select class="form-control" name="pembeli">
                @foreach($pembeli as $pbl)
                    <option value="{{$pbl->id}}">{{$pbl->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="toko"><strong>Nama Toko</strong></label>
            <select class="form-control" name="toko">
                @foreach($toko as $tk)
                    <option readonly value="{{$tk->id}}">{{$tk->nama_toko}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="barang"><strong>Nama Barang</strong></label>
            <select class="form-control" name="barang">
                @foreach($barang as $brg)
                    <option value="{{$brg->id}}">{{$brg->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
          <label for="catatan"><strong>Catatan</strong></label>
          <div class="col-md-6">
            <textarea row="5" cols="37" name="catatan" id="catatan" ariadescribedby="catatan"></textarea>
          </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      <a class="btn btn-success mt-3" href="{{ route('daftar_barang') }}">Kembali</a>
                        
                </div>
            </div>
        </div>
    </div>
    
      @endsection