@extends('layouts.admin')

@section('content')
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DATA PEMBELI</h2>
            </div>
            <div class="float-right my-2">
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

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Foto</th>
            <th width="320px">Action</th>
        </tr>

        @foreach ($paginate as $pbl)
        <tr>
            <td>{{ $pbl ->id }}</td>
            <td>{{ $pbl ->user->name }}</td>
            <td>{{ $pbl ->user->email }}</td>
            <td>{{ $pbl ->jenis_kelamin }}</td>
            <td>{{ $pbl ->alamat }}</td>
            <td>{{ $pbl ->no_telp }}</td>
            <td><img style="width: 50px; overflow: hidden" class="rounded-circle" src="{{ asset('./storage/'. $mhs->foto) }}" alt=""></td>
            <td>
                <form action="{{ route('user.destroy',['user'=>$pbl->id]) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('user.show',$pbl->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('user.edit',$pbl->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    Current Page: {{ $paginate->currentPage() }}<br>
    Jumlah Data: {{ $paginate->total() }}<br>
    <!--Data Halaman: {{ $paginate->perPage() }}<br>-->
    <br>
    {{ $paginate->links() }}
  </div>
@endsection