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
                    <h1 class="m-0 text-dark">Komentar Artikel</h1>
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
                        <h3 class="card-title">Data Komentar</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-default btn-sm" data-toggle="modal"
                                data-target="#modal-tambah"><i class="fas fa-plus"></i> Tambah
                                Data
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="list-data" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Artikel</th>
                                        <th>Email</th>
                                        <th>Komentar</th>
                                        <th>Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1; @endphp
                                    @foreach($data as $row)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$row->judul}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->isi}}</td>
                                        <td>{{$row->status}}</td>
                                        <td class="text-center">
                                            <form action="{{url('komentar/'.$row->id)}}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete">
                                                @if($row->status=='Aktif')
                                                <a href="{{url('komentar/'.$row->id.'/edit')}}" class="btn btn-warning" onclick="return confirm('Non aktifkan komentar ini ?')">
                                                    <i class="fa fa-eye-slash"></i>
                                                </a>
                                                @else
                                                <a href="{{url('komentar/'.$row->id.'/edit')}}" class="btn btn-success" onclick="return confirm('Aktifkan komentar ini ?')">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                @endif
                                                <button type="submit" onclick="return confirm('Hapus Data ?')"
                                                    class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Artikel</th>
                                        <th>Email</th>
                                        <th>Komentar</th>
                                        <th>Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="modal-tambah" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{url('komentar')}}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Artikel</label>
                        <select name="artikel" class="form-control">
                            @foreach($artikel as $art)
                            <option value="{{$art->id}}">{{$art->judul}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Isi</label>
                        <textarea name="isi" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@foreach($data as $row)
<div class="modal fade" id="modal-edit{{$row->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{url('kategori-artikel/'.$row->id)}}" method="POST">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="_method" value="put">

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
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