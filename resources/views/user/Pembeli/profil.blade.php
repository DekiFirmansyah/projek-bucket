@extends('layouts.user')

@section('content')
  <div class="row">
        <div class="col-lg-12 margin-tb">
          <br>
            <div class="pull-left mt-2">
                <h2>Profil Pembeli</h2>
            </div>
            <br>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('user.create') }}"> Input Profil</a>
            </div>
        </div>
        </div>

@endsection