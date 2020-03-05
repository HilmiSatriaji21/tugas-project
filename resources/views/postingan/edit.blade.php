@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Tambah Postingan</b></center></div>
{{--
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! --}}

                    <form action="{{route('postingan.update',$postingan->id)}}"method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-8">

                                <label>Masukan Kategori</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="kategori" value="{{$postingan->kategori}}" required>
                            </div>
                            <div class="col-md-8">
                                <label>Masukan Deskripsi</label>
                            </div>
                            <div class="col-md-12">
                                <textarea name="deskripsi" id="" cols="30" rows="10" value="{{$postingan->kategori}}" required> </textarea>
                            </div>
                                <div class="form-group">
                                <label for="">Masukan Tag</label>
                                <select name="id_tag" class="form-control">
                                    @foreach ($tag as $item)
                                        <option value=" {{$item->id}} ">
                                            {{ $item->tag }}
                                        </option>
                                    @endforeach
                                </select>
                        </div>
                        <br>
                        <button class="btn btn-outline-primary" type="submit">Simpan</button>
                        <button class="btn btn-outline-warning" type="reset">Reset</button>
                        <button class="btn btn-outline-danger" type="" href="{{route("postingan.index")}}">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
