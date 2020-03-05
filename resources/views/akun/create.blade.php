@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Tambah Akun</b></center></div>
{{--
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! --}}

                    <form action="{{route("akun.store")}}"method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">

                                <label>Masukan Nama</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="nama" required>
                            </div>
                            <div class="col-md-4">

                                <label>Masukan Email</label>
                            </div>
                            <div class="col-md-12">
                                <input type="date" name="tgl_lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="">Pilih Profil</label>
                                <select name="id_profil" class="form-control">
                                    @foreach ($data as $item)
                                        <option value=" {{$item->id}} ">
                                            {{ $item->alamat}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="alamat" required>
                            </div>
                            <div class="col-md-4">

                                <label>Masukan Telepon</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="no_tlp" required>
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
