@extends('layouts.user')

@section('content')
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Products List</div>
      
      @foreach ($barang as $brg)
      <div class="feat_prod_box">
      
        <div class="prod_img"><a href="#">
            <img style="width:150px; overflow: hidden" class="img-thumbnail" 
            src="{{ asset('./storage/'. $brg->foto) }}" alt="" border="0" /></a>
        </div>
        <div class="prod_det_box">
          <div class="box_top"></div>
          <div class="box_center">
            <div class="prod_title">{{ $brg ->nama }}</div>
            <p class="details">Harga : {{ $brg ->harga }}</p>
            <p class="details">Kategori : {{ $brg ->kategori }}</p>
            <p class="details">Estimasi Pembuatan : {{ $brg ->estimasi_pembuatan }}</p>
            <p class="details">Catatan : <br> {{ $brg ->catatan }} </p>
            <a class="checkout" href="{{ route('transaksi.create') }}">Checkout</a>
            <div class="clear"></div>
          </div>
          <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
        
      </div>
      @endforeach
    
@endsection
  



