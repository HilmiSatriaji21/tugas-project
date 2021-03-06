@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Tambah Hobi Profil</b></center></div>
{{--
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! --}}

                    <form action="{{route("profil.store")}}"method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">

                                <label>Masukan Nama</label>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="nama" required>
                            </div>
                            <div class="col-md-4">
                                <label>Masukan Tanggal lahir</label>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="date" name="tgl_lahir" required>
                            </div>
                            <div class="col-md-4">
                                <label>Masukan Alamat</label>
                            </div>
                            <div class="col-md-10">
                            <textarea name="alamat" class="form-control"></textarea>
                            </div>
                            <div class="col-md-4">
                                <label>Masukan Telepon</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="no_tlp" required>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-outline-danger" type="submit">Simpan</button>
                        <button class="btn btn-outline-success" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
