@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">Detail Barang</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Nama : </b>{{$barang->nama}}</li>
                        <li class="list-group-item"><b>Harga : </b>{{$barang->harga}}</li>
                        <li class="list-group-item"><b>Kategori : </b>{{$barang->kategori}}</li>
                        <li class="list-group-item"><b>Estimasi Pembuatan : </b>{{$barang->estimasi_pembuatan}}</li>
                        <li class="list-group-item"><b>Foto Barang: </b><img style="width: 100%" src="{{ asset('./storage/'. $barang->foto) }}" alt=""></li>
                        <li class="list-group-item"><b>Catatan : </b>{{$barang->catatan}}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('barang.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection