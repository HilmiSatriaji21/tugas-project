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

                    <form action="{{route("postingan.store")}}"method="POST">
                        @csrf
                            <div class="col-md-8">
                                <label>Masukan Deskripsi</label>
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="deskripsi" id="" cols="30" rows="10"> </textarea>
                            </div>
                            <div class="row">
                            <div class="col-md-8">
                                <label>Masukan Kategori</label>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="kategori" required>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                <label for="">Masukan Tag</label>
                                </div>
                                <select class="form-control pilih-tag" multiple name="tag[]" name="id_tag">
                                    @foreach ($tag as $item)
                                        <option value=" {{$item->id}} ">
                                            {{ $item->tag }}
                                        </option>
                                    @endforeach
                                </select>
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

@push('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('.pilih-tag').select2();
    });
</script>
@endpush
