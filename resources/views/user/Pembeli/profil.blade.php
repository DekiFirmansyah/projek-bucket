@extends('layouts.user')

@section('content')
<div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>Profil Pembeli</div>
      
    <br><br><br>
      <div class="float-right my-2">
         <a class="btn btn-success" href="{{ route('user.create') }}"> Input Profil</a>
      </div>


@endsection