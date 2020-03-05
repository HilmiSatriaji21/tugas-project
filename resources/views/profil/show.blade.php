@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Tambah Siswa</b></center></div>
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

                                <label>Masukan Nama</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="nama" value="{{$profil->nama}}" readonly>
                            </div>
                            <div class="col-md-4">

                                <label>Masukan Tanggal lahir</label>
                            </div>
                            <div class="col-md-12">
                                <input type="date" name="tgl_lahir" value="{{$profil->tgl_lahir}}" readonly>
                            </div>
                            <div class="col-md-4">

                                <label>Masukan Alamat</label>
                            </div>
                                <div class="col-md-10">
                                    <textarea name="alamat" id="" cols="30" rows="10">{{$profil->alamat}}</textarea>
                                </div>
                            <div class="col-md-4">
                                <label>Masukan Telepon</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="no_tlp" value="{{$profil->no_tlp}} "readonly>
                            </div>
                        </div>
                        <br>
                        <a href="{{route("profil.index")}}" class="btn btn-outline-dark float-right">
                                Back
                            </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
