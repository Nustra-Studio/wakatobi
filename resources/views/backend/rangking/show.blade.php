@extends('layouts/base')

@section('token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('customcss')
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Rangking Data Tahun {{$_GET['tahun']}}</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="alert alert-warning alert-dismissible">
            <h4>Info!</h4>
            Data yang belum tampil di list ini, berati belum di input sama sekali ke dalam sistem.
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">List Data Rangking</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="list-data" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama File</th>
                                        <th>Penanggun Jawab</th>
                                        <th>Total Data</th>
                                        <th>Terisi</th>
                                        <th class="text-center">Presentase</th>
                                        <th>Last Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $id=1; @endphp
                                    @foreach($data as $row)
                                    <tr>
                                        <td>{{$id++}}</td>
                                        <td>{{$row->nama_file}}</td>
                                        <td>{{$row->pj}}</td>
                                        <td>{{$row->total}} Data</td>
                                        <td>{{$row->diisi}} Data</td>
                                        <td class="text-center">{{$row->presentase}} %</td>
                                        <td>{{$row->tanggal}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('customjs')
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
@endsection

@section('customscripts')
<script>
$(function() {
    $('#list-data').DataTable();
});
</script>
@endsection