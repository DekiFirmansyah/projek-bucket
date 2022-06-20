@extends('layouts.bucket')

@section('header')
<div id="wrap">
  <div class="header">
    <div class="logo"><a href="#"><img src="images/logo.png" alt="" border="0" /></a></div>
    <div id="menu">
      <ul>
        <li><a href="userHome">home</a></li>
        <li><a href="about">about us</a></li>
        <li><a href="category.html">Bouquet</a></li>
        <li><a href="details.html">Transaksi</a></li>
        <li><a href="contact.html">contact</a></li>
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
</div>
@endsection

@section('content')
<div id="wrap">
  <div class="center_content">
    <div class="left_content">
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Featured products</div>
      <div class="feat_prod_box">
        <div class="prod_img"><a href="#"><img src="images/prod1.gif" alt="" border="0" /></a></div>
        <div class="prod_det_box">
          <div class="box_top"></div>
          <div class="box_center">
            <div class="prod_title">Bucket Bunga</div>
            <p class="details">Pada Bucket bunga ini bisa minta request mau bunga jenis apa dan berapa jumlahnya serta harga nantinya disesuaikan.</p>
            <a href="#" class="more"></a>
            <div class="clear"></div>
          </div>
          <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="feat_prod_box">
        <div class="prod_img"><a href="#"><img src="images/prod2.gif" alt="" border="0" /></a></div>
        <div class="prod_det_box">
          <div class="box_top"></div>
          <div class="box_center">
            <div class="prod_title">Bucket Boneka</div>
            <p class="details">Pada buket boneka ini juga bisa request jenis boneka yang sudah tersedia dan buat setiap momen kerabat, pacar, teman anda semakin lebih berwarna dengan pemberian hadiah Anda.</p>
            <a href="#" class="more"></a>
            <div class="clear"></div>
          </div>
          <div class="box_bottom"></div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="title"><span class="title_icon"><img src="images/bullet2.gif" alt="" /></span>New products</div>
      <div class="new_products">
        <div class="new_prod_box"> <a href="#">Bucket Snack</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/new_icon.gif" alt="" /></span> <a href="#"><img src="images/thumb1.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">Bucket Uang</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/new_icon.gif" alt="" /></span> <a href="#"><img src="images/thumb2.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
        <div class="new_prod_box"> <a href="#">Bucket Jilbab</a>
          <div class="new_prod_bg"> <span class="new_icon"><img src="images/new_icon.gif" alt="" /></span> <a href="#"><img src="images/thumb3.gif" alt="" class="thumb" border="0" /></a> </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <!--end of left content-->
    <div class="right_content">
      <div class="cart">
        <div class="title"><span class="title_icon"><img src="images/cart.gif" alt="" /></span>My cart</div>
        <div class="home_cart_content"> 3 x items | <span class="red">TOTAL: 100$</span> </div>
        <a href="cart.html" class="view_cart">view cart</a> </div>
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
</div>
@endsection
  <!--end of center content-->
  



