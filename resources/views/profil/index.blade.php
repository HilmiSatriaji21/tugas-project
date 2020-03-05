@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('massage'))
                        <div class="alert alert-dark" role="alert">
                            {{ session('massage') }}
                        </div>
                    @endif
            <div class="card">
                <div class="card-header"><center><b>Data Profil</b></center></div>

                <div class="card-body">
                    <a href="{{route("profil.create")}}" class="btn btn-outline-danger float-right">
                            Tambah Data (+)
                        </a>
                        <br><br>

                    <table class="table">
                        <thead>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                                @foreach ($profil as $item)
                            <tr>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->tgl_lahir}}</td>
                                <td>{{$item->alamat}}</td>
                                <td>{{$item->no_tlp}}</td>
                                <td>
                                <form action="{{route('profil.destroy',$item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <a class=" btn btn-warning" href="{{route('profil.edit',$item->id)}}">Edit</a>
                                <a class=" btn btn-info" href="{{route('profil.show',$item->id)}}">Show</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
