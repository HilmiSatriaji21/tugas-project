@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Tambah Tag Siswa</b></center></div>
{{--
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! --}}

                    <form action="{{route('tag.update',$tag->id)}}"method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4"></div>

                                <label>Masukan tag</label>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="tag" value="{{$tag->tag}}" required>
                            </div>
                        <br>
                        <button class="btn btn-outline-primary" type="submit">Simpan</button>
                        <button class="btn btn-outline-warning" type="reset">Reset</button>
                        <button class="btn btn-outline-danger" type="" href="{{route("tag.index")}}">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
