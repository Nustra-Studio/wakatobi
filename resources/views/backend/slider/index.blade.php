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
                    <h1 class="m-0 text-dark">Slider</h1>
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
                        <h3 class="card-title">Data Slider</h3>
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
                                        <th class="text-center">Gambar</th>
                                        <th>Judul</th>
                                        <th>Isi</th>
                                        <th>Link</th>
                                        <th>Link Text</th>
                                        <th>Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1; @endphp
                                    @foreach($data as $row)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>
                                            <img src="{{asset('images/slider/thumbnail/'.$row->gambar)}}" alt=""
                                                class="img-thumbnail">
                                        </td>
                                        <td>{{$row->judul}}</td>
                                        <td>{{$row->isi}}</td>
                                        <td>{{$row->link}}</td>
                                        <td>{{$row->link_text}}</td>
                                        <td>{{$row->status}}</td>
                                        <td class="text-center">
                                            <form action="{{url('slider/'.$row->id)}}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete">
                                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                                    data-target="#modal-edit{{$row->id}}">
                                                    <i class="fa fa-wrench"></i>
                                                </button>
                                                <button type="submit" onclick="return confirm('Hapus Data ?')"
                                                    class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Isi</th>
                                        <th>Link</th>
                                        <th>Link Text</th>
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
                <h4 class="modal-title">Tambah Data Slider</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{url('slider')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gambar</label>
                        <input type="file" class="form-control" name="gambar" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Isi</label>
                        <textarea name="isi" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Link</label>
                        <textarea name="link" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Link Text</label>
                        <input type="text" name="link_text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <select name="status" class="form-control">
                            <option value="Aktif">Aktif</option>
                            <option value="Non Aktif">Non Aktif</option>
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
                <h4 class="modal-title">Edit Data Slider</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{url('slider/'.$row->id)}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <img src="{{asset('images/slider/thumbnail/'.$row->gambar)}}" alt="" class="img-thumbnail"><br>
                        <label for="exampleInputEmail1">Gambar Baru*</label>
                        <input type="file" class="form-control" name="gambar" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" name="judul" value="{{$row->judul}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Isi</label>
                        <textarea name="isi" class="form-control">{{$row->isi}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Link</label>
                        <textarea name="link" class="form-control">{{$row->link}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Link Text</label>
                        <input type="text" name="link_text" value="{{$row->link_text}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <select name="status" class="form-control">
                            <option value="Aktif" @if($row->status=='Aktif') selected @endif>Aktif</option>
                            <option value="Non Aktif" @if($row->status=='Non Aktif') selected @endif>Non Aktif</option>
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
@endsection