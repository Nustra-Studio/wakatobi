@extends('layouts/base')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Perdagangan</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Import Data Perdagangan</h3>
                    </div>
                    <form method="POST" role="form" enctype="multipart/form-data" action="{{url('perdagangan-import')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Upload File</label>
                                    <input type="file" class="form-control" name="filenya"
                                        accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                                        required>
                                </div>
                                <br>
                                <a href="{{url('perdagangan-export')}}" class="btn btn-warning">Donwload Template</a>
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