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

                    <form action="{{route('group.update',$group->id)}}"method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">

                                <label>Masukan Nama Group</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="nama_group" value="{{$group->nama_group}}" required>
                            </div>
                            <div class="col-md-4">

                                <label>Masukan Nama Anggota</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="anggota" value="{{$group->anggota}}" required>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-outline-primary" type="submit">Simpan</button>
                        <button class="btn btn-outline-warning" type="reset">Reset</button>
                        <button class="btn btn-outline-danger" type="" href="{{route("group.index")}}">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
