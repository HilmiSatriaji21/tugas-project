@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Show Postingan</b></center></div>
{{--
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! --}}
                    <div class="row">
                            <div class="col-md-4">

                                <label>Masukan Deskripsi</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="deskripsi" value="{{$postingan->deskripsi}}" readonly>
                            </div>
                            <div class="col-md-4">

                                <label>Masukan Foto</label>
                            </div>
                            <div class="col-md-12">
                                <input type="image" name="foto" value="{{$postingan->foto}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Tag</label>
                                <select name="id_tag" class="form-control">
                                    @foreach ($tag as $item)
                                        <option value=" {{$item->id}}"readonly>
                                            {{ $item->tag }}
                                        </option>
                                    @endforeach
                                </select>
                        </div>
                        </div>
                        <br>
                        <br>
                        <a href="{{route("postingan.index")}}" class="btn btn-outline-dark float-right">
                                Back
                            </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
