@extends('layouts.admin')

@section('content')
  <div class="row">
        <div class="col-lg-12 margin-tb">
          <br>
            <div class="pull-left mt-2">
                <h2>DATA BARANG</h2>
            </div>
            <br>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('barang.create') }}"> Input Barang</a>
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

    <div class="feat_prod_box_details">
<<<<<<< HEAD
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
          
=======
    <table class="cart_table">
        <tr class="cart_title">
            <th width="220px" >Nama</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Estimasi Pembuatan</th>
            <th>Foto</th>
            <th>Catatan</th>
            <th width="220px">Action</th>
        </tr>

>>>>>>> 91a98ad3f1180e4b1be4f0cf1a9af2ea731a80e4
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
<<<<<<< HEAD
</div>
</div>
</div>
=======
    
>>>>>>> 91a98ad3f1180e4b1be4f0cf1a9af2ea731a80e4
    Current Page: {{ $paginate->currentPage() }}<br>
    Jumlah Data: {{ $paginate->total() }}<br>
    Data Halaman: {{ $paginate->perPage() }}<br>
    <br>
    {{ $paginate->links() }}
<<<<<<< HEAD


=======
    </div>
>>>>>>> 91a98ad3f1180e4b1be4f0cf1a9af2ea731a80e4
@endsection