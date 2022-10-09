@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">Tambah Barang</div>
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
                    <form method="post" action="{{ route('barang.store') }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" ariadescribedby="nama" >
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" aria-describedby="harga" >
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" name="kategori" class="form-control" id="kategori" ariadescribedby="kategori" >
                        </div>
                        <div class="form-group">
                            <label for="estimasi pembuatan">Estimasi Pembuatan</label>
                            <input type="text" name="estimasi_pembuatan" class="form-control" id="estimasi_pembuatan" ariadescribedby="estimasi_pembuatan" >
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Barang</label>
                            <input type="file" name="foto" class="form-control" id="foto" ariadescribedby="foto" >
                        </div>
                        <div class="form-group">
                            <label for="catatan">Catatan</label>
                            <input type="text" name="catatan" class="form-control" id="catatan" ariadescribedby="catatan">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection