@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Edit Data</b></center></div>
{{--
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! --}}

                    <form action="{{route('profil.update',$profil->id)}}"method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">

                                <label>Masukan Nama</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="nama" value="{{$profil->nama}}" required>
                            </div>
                            <div class="col-md-4">

                                <label>Masukan Tanggal lahir</label>
                            </div>
                            <div class="col-md-12">
                                <input type="date" name="tgl_lahir" value="{{$profil->tgl_lahir}}" required>
                            </div>
                            <div class="col-md-4">

                                <label>Masukan Alamat</label>
                            </div>
                            <div class="col-md-10">
                                <textarea name="alamat" id="" cols="30" rows="10"required>{{$profil->alamat}}</textarea>
                            </div>
                            <div class="col-md-4">

                                <label>Masukan Telepon</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="no_tlp" value="{{$profil->no_tlp}} "required>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-outline-primary" type="submit">Simpan</button>
                        <button class="btn btn-outline-warning" type="reset">Reset</button>
                        <button class="btn btn-outline-danger" type="" href="{{route("profil.index")}}">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
