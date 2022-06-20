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
        <li class="nav-item dropdown">
          
            <a class="" href="{{ route('logout') }}"
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
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DATA PEMBELI</h2>
            </div>
            <div class="float-right my-2">
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

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Foto</th>
            <th width="320px">Action</th>
        </tr>

        @foreach ($paginate as $pbl)
        <tr>
            <td>{{ $pbl ->id }}</td>
            <td>{{ $pbl ->user->name }}</td>
            <td>{{ $pbl ->user->email }}</td>
            <td>{{ $pbl ->jenis_kelamin }}</td>
            <td>{{ $pbl ->alamat }}</td>
            <td>{{ $pbl ->no_telp }}</td>
            <td><img style="width: 50px; overflow: hidden" class="rounded-circle" src="{{ asset('./storage/'. $mhs->foto) }}" alt=""></td>
            <td>
                <form action="{{ route('user.destroy',['user'=>$pbl->id]) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('user.show',$pbl->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('user.edit',$pbl->id) }}">Edit</a>
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
    <!--Data Halaman: {{ $paginate->perPage() }}<br>-->
    <br>
    {{ $paginate->links() }}
  </div>
</div>
@endsection