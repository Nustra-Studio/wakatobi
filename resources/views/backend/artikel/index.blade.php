@extends('layouts/base')

@section('token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('customcss')
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
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
        @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Info!</h4>
            {{ session('status') }}
        </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Data Artikel</h3>
                        <div class="card-tools">
                            <a href="{{url('/artikel/create')}}">
                                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-plus"></i> Tambah
                                    Data
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="list-data" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Pembuat</th>
                                        <th>Tangal Buat</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $id=1; @endphp
                                    @foreach($data as $row)
                                    <tr>
                                        <td>{{$id++}}</td>
                                        <td>{{$row->judul}}</td>
                                        <td>{{$row->namakategori}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->created_at}}</td>
                                        <td class="text-center">
                                            <form action="{{url('artikel/'.$row->id)}}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete">
                                                <a href="{{url('artikel/'.$row->id.'/edit')}}"
                                                    class="btn btn-success">Edit</a>
                                                <button type="submit" onclick="return confirm('Hapus Data ?')"
                                                    class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
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
@endsection

@section('customscripts')
<script>
$(function() {
    $('#list-data').DataTable();
});
</script>
@endsection