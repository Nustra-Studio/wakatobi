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
                    <h1 class="m-0 text-dark">Menu</h1>
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
                        <h3 class="card-title">Data Menu</h3>
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
                                        <th>Nama</th>
                                        <th>Status</th>
                                        <th>Halaman</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1; @endphp
                                    @foreach($data as $row)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$row->nama}}</td>
                                        <td>{{$row->status}}</td>
                                        <td>
                                            @if($row->namahalaman =='')
                                            -
                                            @else
                                            {{$row->namahalaman}}
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <form action="{{url('menu/'.$row->id)}}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete">
                                                <button type="button" class="btn btn-success" data-toggle="modal"
                                                    data-target="#modal-edit{{$row->id}}">
                                                    Edit
                                                </button>
                                                <button type="submit" onclick="return confirm('Hapus Data ?')"
                                                    class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Status</th>
                                        <th>Halaman</th>
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
            <form action="{{url('menu')}}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Status</label>
                        <select name="status" class="form-control">
                            <option value="Parent">Parent</option>
                            <option value="Halaman">Halaman</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Halaman</label>
                        <select name="halaman" class="form-control">
                            @foreach($halaman as $row)
                            <option value="{{$row->id}}">{{$row->nama}}</option>
                            @endforeach
                        </select>
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
                <h4 class="modal-title">Edit Data Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{url('menu/'.$row->id)}}" method="POST">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="nama" value="{{$row->nama}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Status</label>
                        <select name="status" class="form-control">
                            <option value="Parent" @if($row->status=='Parent') selected @endif>Parent</option>
                            <option value="Halaman" @if($row->status=='Halaman') selected @endif>Halaman</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Halaman</label>
                        <select name="halaman" class="form-control">
                            @foreach($halaman as $row2)
                            <option value="{{$row2->id}}" @if($row->halaman_id==$row2->id) selected
                                @endif>{{$row2->nama}}</option>
                            @endforeach
                        </select>
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
<!-- <script src="{{asset('customjs/backend/admin.js')}}"></script> datatable plugin -->
@endsection