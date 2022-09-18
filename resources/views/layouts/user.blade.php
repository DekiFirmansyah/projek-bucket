<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Bucket Shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div id="wrap">
  <div class="header">
    <div class="logo"><a href="#"><img src="images/logo.png" alt="" border="0" /></a></div>
    <div id="menu">
      <ul>
        <li><a href="home">Home</a></li>
        <li><a href="about">About Us</a></li>
        <li><a href="{{ route('daftar_barang') }}">Bouquet</a></li>
        <li><a href="{{ route('pesanan') }}">Transaksi</a></li>
        <li><a href="{{ route('profil') }}">Profil</a></li>
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>                
      </ul>
    </div>
  </div>

<div class="center_content">
    <div class="left_content">
      @yield('content')
    </div>
    <!--end of left content-->
    <div class="right_content">
      <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" /></span>About Our Shop</div>
      <div class="about">
        <p> <img src="images/about.gif" alt="" class="right" /> D2 BOUQUET adalah salah satu online shop berbasis website dimana disini menyediakan berbagai jenis bouquet yang tertera pada website serta dapat memesan buket sesuai request pembeli. </p>
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet4.gif" alt="" /></span>Produk terbaik</div>
        <div class="new_prod_box"> <a href="#"></a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/promo_icon.gif" alt="" /></span> <a href="#"><img src="images/thumb1.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#"></a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/promo_icon.gif" alt="" /></span> <a href="#"><img src="images/prod2.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#"></a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/promo_icon.gif" alt="" /></span> <a href="#"><img src="images/prod1.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
      </div>
      <div class="right_box">
        <div class="title"><span class="title_icon"><img src="images/bullet5.gif" alt="" /></span>Nama Produk</div>
        <ul class="list">
          <li><a href="#">Bucket Bunga</a></li>
          <li><a href="#">Bucket Boneka</a></li>
          <li><a href="#">Bucket snack</a></li>
          <li><a href="#">Bucket uang</a></li>
          <li><a href="#">Bucket jilbab atau barang lainnya</a></li>
        </ul>
      </div>
    </div>
    <!--end of right content-->
    <div class="clear"></div>
  </div>

<div class="footer">
    <div class="left_footer"><img src="{{ asset('images/footer_logo.gif') }}" alt="" /><br />
      <a href="http://csscreme.com"><img src="{{ asset('images/csscreme.gif') }}" alt="" border="0" /></a></div>
    <div class="right_footer"> <a href="#">home</a> <a href="#">about us</a> <a href="#">services</a> <a href="#">privacy policy</a> <a href="#">contact us</a> </div>
  </div>
</div>
</body>
</html>