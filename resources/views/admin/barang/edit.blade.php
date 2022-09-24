@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">Edit Barang</div>
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
                    <form method="post" action="{{ route('barang.update', $barang->id) }}" id="myForm" enctype="multipart/form-data">
                        @method('PUT')    
                        @csrf
                        
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="{{ $barang->nama }}" aria-describedby="nama" >
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" value="{{ $barang->harga }}" aria-describedby="harga">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" name="kategori" class="form-control" id="kategori" value="{{ $barang->kategori }}" aria-describedby="kategori">
                        </div>
                        <div class="form-group">
                            <label for="estimasi pembuatan">Estimasi Pembuatan</label>
                            <input type="text" name="estimasi_pembuatan" class="form-control" id="estimasi_pembuatan" value="{{ $barang->estimasi_pembuatan }}" aria-describedby="estimasi_pembuatan">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Barang</label>
                            <input type="file" name="foto" class="form-control" value="{{ $barang->foto }}" id="foto" ariadescribedby="foto" >
                            <img style="width: 100px" src="{{ asset('./storage/'. $barang->foto) }}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <input type="text" name="catatan" class="form-control" id="catatan" value="{{ $barang->catatan }}" ariadescribedby="catatan" >
                        </div> 
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection