@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Show Data</b></center></div>
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

                                <label>Masukan Nama Group</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="nama_group" value="{{$group->nama_group}}" readonly>
                            </div>
                            <div class="col-md-4">

                                <label>Masukan Nama Anggota</label>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="anggota" value="{{$group->anggota}}" readonly>
                            </div>
                        </div>
                        <br>
                        <br>
                        <a href="{{route("group.index")}}" class="btn btn-outline-dark float-right">
                                Back
                            </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
