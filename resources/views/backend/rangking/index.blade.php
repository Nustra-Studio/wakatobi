@extends('layouts/base')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Rangking</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Cari Data Berdasarkan Tahun</h3>
                    </div>
                    <form method="GET" role="form" enctype="multipart/form-data"
                        action="{{url('rangking/tampil')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tahun</label>
                                <select name="tahun" class="form-control">
                                @foreach($data as $row)
                                <option value="{{$row->tahun}}">{{$row->tahun}}</option>
                                @endforeach
                                </select>
                                
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="reset" onclick="history.go(-1)" class="btn btn-danger">Kembali</button>
                            <button type="submit" class="btn btn-primary float-right">Tampilkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection