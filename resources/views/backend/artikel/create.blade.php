@extends('layouts/base')

@section('customcss')
<link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote-bs4.css')}}">
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Artikel</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Artikel</h3>
                    </div>
                    <form method="POST" role="form" enctype="multipart/form-data"
                        action="{{url('artikel')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul</label>
                                <input type="text" class="form-control" name="judul" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kategori</label>
                                <select name="kategori" class="form-control">
                                    @foreach($kategori as $kat)
                                    <option value="{{$kat->id}}">{{$kat->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Isi</label>
                                <textarea name="isi" class="form-control textarea"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Gambar</label>
                                <input type="file" class="form-control" name="gambar" accept="image/*" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="reset" onclick="history.go(-1)" class="btn btn-danger">Kembali</button>
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('customjs')
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
@endsection

@section('customscripts')

<script>
$(function() {
    $('.textarea').summernote({
        height: 200,
    });
})
</script>
@endsection