@extends('layouts.bucket')

@section('header')
<div id="wrap">
  <div class="header">
    <div class="logo"><a href="#"><img src="images/logo.png" alt="" border="0" /></a></div>
    <div id="menu">
      <ul>
      <li><a href="admin-home">home</a></li>
        <li><a href="{{ route('barang.index') }}">Data Barang</a></li>
        <li><a href="{{ route('transaksi.index') }}">Data Transaksi</a></li>
        <li><a href="{{ route('user.index') }}">Data User</a></li>
        <li><a href="contact.html">contact</a></li>
        <li>
          

          
            <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          
        </li>                
      </ul>
    </div>
  </div>
</div>
@endsection

@section('content')

@endsection