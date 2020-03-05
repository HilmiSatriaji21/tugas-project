@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Tambah Group</b></center></div>
{{--
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! --}}

                    <form action="{{route("group.store")}}"method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label>Masukan Nama Group</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="nama_group" class="form-control" required>
                            </div>
                            <div class="col-md-4">

                                <label>Masukan Nama Anggota</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="anggota" class="form-control" required>
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
