@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>Halaman Show</b></center></div>
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

                                <label>Masukan tag</label>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="tag" value="{{$tag->tag}}" readonly>
                                </div>
                            </div>
                        <br>
                        <a href="{{route("tag.index")}}" class="btn btn-outline-dark float-right">
                                Back
                            </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
