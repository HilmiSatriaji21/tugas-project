@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('massage'))
                        <div class="alert alert-dark" role="alert">
                            {{ session('massage') }}
                        </div>
                    @endif
            <div class="card">
                <div class="card-header"><center><b>Data Postingan</b></center></div>

                <div class="card-body">
                    <a href="{{route("postingan.create")}}" class="btn btn-outline-danger float-right">
                            Tambah Data (+)
                        </a>
                        <br><br>

                    <table class="table">
                        <thead>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Tag</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                                @foreach ($postingan as $item)
                            <tr>
                                <td>{{$item->deskripsi}}</td>
                                <td>{{$item->kategori}}</td>
                                <td>
                                    @foreach ($item as $ikiq)
                                <li>{{$ikiq->id_tag}}</li>
                                    @endforeach
                                </td>
                                <td>
                                <form action="{{route('postingan.destroy',$item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <a class=" btn btn-warning" href="{{route('postingan.edit',$item->id)}}">Edit</a>
                                <a class=" btn btn-info" href="{{route('postingan.show',$item->id)}}">Show</a>
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
