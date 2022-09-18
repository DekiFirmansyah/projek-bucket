@extends('layouts.admin')

@section('content')
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
        <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Data Pembeli</div>
        <br>    
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
        <caption>Tabel Pembeli</caption>
        <tr class="cart_title">
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Foto</th>
            <th style="width: 170px;">Action</th>
        </tr>

        @foreach ($paginate as $pbl)
        <tr>
            <td>{{ $pbl ->id }}</td>
            <td>{{ $pbl ->user->name }}</td>
            <td>{{ $pbl ->user->email }}</td>
            <td>{{ $pbl ->jenis_kelamin }}</td>
            <td>{{ $pbl ->alamat }}</td>
            <td>{{ $pbl ->no_telp }}</td>
            <td><img style="width: 50px; overflow: hidden" class="rounded-circle" src="{{ asset('./storage/'. $pbl->foto) }}" alt=""></td>
            <td>
                <form action="{{ route('user.destroy',['user'=>$pbl->id]) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('user.show',$pbl->id) }}">Show</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    Current Page: {{ $paginate->currentPage() }}<br>
    Jumlah Data: {{ $paginate->total() }}<br>
    Data Halaman: {{ $paginate->perPage() }}<br>
    <br>
    {{ $paginate->links() }}
  </div>
@endsection