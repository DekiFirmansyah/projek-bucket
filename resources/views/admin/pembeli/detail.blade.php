@extends('layouts.admin')

@section('content')
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">Detail Pembeli</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>ID : </b>{{$pembeli->id}}</li>
                        <li class="list-group-item"><b>Nama : </b>{{$pembeli->user->name}}</li>
                        <li class="list-group-item"><b>Email : </b>{{$pembeli->user->email}}</li>
                        <li class="list-group-item"><b>Jenis Kelamin : </b>{{$pembeli->jenis_kelamin}}</li>
                        <li class="list-group-item"><b>Alamat : </b>{{$pembeli->alamat}}</li>
                        <li class="list-group-item"><b>Foto Profil : </b><br><img style="width: 150px" src="{{ asset('./storage/'. $pembeli->foto) }}" alt=""></li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('user.index') }}">Kembali</a>
            </div>
        </div>
    
@endsection