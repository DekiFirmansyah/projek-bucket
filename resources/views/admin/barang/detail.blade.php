@extends('layouts.admin')

@section('content')
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">Detail Barang</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Nama : </strong>{{$barang->nama}}</li>
                        <li class="list-group-item"><strong>Harga : </strong>{{$barang->harga}}</li>
                        <li class="list-group-item"><strong>Kategori : </strong>{{$barang->kategori}}</li>
                        <li class="list-group-item"><strong>Estimasi Pembuatan : </strong>{{$barang->estimasi_pembuatan}}</li>
                        <li class="list-group-item"><strong>Foto Barang: </strong><br><img style="width: 150px" src="{{ asset('./storage/'. $barang->foto) }}" alt=""></li>
                        <li class="list-group-item"><strong>Catatan : </strong>{{$barang->catatan}}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('barang.index') }}">Kembali</a>
            </div>
        </div>
    
@endsection