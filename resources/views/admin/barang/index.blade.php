@extends('layouts.admin')

@section('content')
  <div class="row">
        <div class="col-lg-12 margin-tb">
          <br>
            <div class="pull-left mt-2">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Daftar Barang</div>
            </div>
            <br>
            <div class="float-right my-2">
                <a href="{{ route('barang.create') }}" class="btn btn-success"> Input Mahasiswa</a> 
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

    <div class="center_content">
    <div class="left_content">
    <div class="feat_prod_box_details">
        <table class="cart_table">
          <tr class="cart_title">
            <th width="350px" >Nama</th>
            <th width="300">Harga</th>
            <th width="350px">Kategori</th>
            <th width="350px">Estimasi Pembuatan</th>
            <th width="450px">Foto</th>
            <th width="400px">Catatan</th>
            <th width="500px">Action</th>
          </tr>
          
        @foreach ($paginate as $brg)
        <tr>
            <td>{{ $brg ->nama }}</td>
            <td>{{ $brg ->harga }}</td>
            <td>{{ $brg ->kategori }}</td>
            <td>{{ $brg ->estimasi_pembuatan }}</td>
            <td><img style="width: 50px; overflow: hidden" class="rounded-circle" src="{{ asset('./storage/'. $brg->foto) }}" alt=""></td>
            <td>{{ $brg ->catatan }}</td>
            <td>
                <form action="{{ route('barang.destroy',['barang'=>$brg->id]) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('barang.show',$brg->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('barang.edit',$brg->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
</div>
    Current Page: {{ $paginate->currentPage() }}<br>
    Jumlah Data: {{ $paginate->total() }}<br>
    <!--Data Halaman: {{ $paginate->perPage() }}<br>-->
    <br>
    {{ $paginate->links() }}


@endsection