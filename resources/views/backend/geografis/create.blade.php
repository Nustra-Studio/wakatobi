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
                    <h1 class="m-0 text-dark">Data Geografis</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Geografis</h3>
                    </div>
                    <form method="POST" role="form" enctype="multipart/form-data" action="{{url('artikel')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tahun</label>
                                <select name="tahun" class="form-control">
                                    @for ($tahun = 2015; $tahun < 2055; $tahun++) <option value="{{ $tahun }}">
                                        {{ $tahun }}</option>
                                        @endfor
                                </select>
                            </div>
                            @foreach($datainput as $row)
                            <h3>{{$row->header_satu}}</h3>
                            @php
                            $headdua =
                            DB::table('input_geografis')->where('header_satu',$row->header_satu)->groupBy('header_dua')->orderby('id','asc')->get();
                            @endphp
                            @foreach($headdua as $rowdua)
                            <hr>
                            <h5>{{$rowdua->header_dua}}</h5><br>
                            @php
                            $headtiga = DB::table('input_geografis')->where('header_dua',$rowdua->header_dua)->get();
                            @endphp
                            @foreach($headtiga as $rowtiga)

                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">{{$rowtiga->input}}</label>
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <span>Bentuk</span>
                                        <input type="text" class="form-control" name="bentuk[]" required>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <span>Jumlah</span>
                                        <input type="number" class="form-control" name="jumlah[]" min="0" required>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <span>Sumber Data</span>
                                        <input type="text" class="form-control" name="sumber">
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            @endforeach
                            @endforeach
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