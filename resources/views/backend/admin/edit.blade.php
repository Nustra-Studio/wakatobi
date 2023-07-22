@extends('layouts/base')

@section('customcss')
<link rel="stylesheet" href="{{asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Admin</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data</h3>
                    </div>
                    <form method="POST" onsubmit="return validasiinput();" role="form" enctype="multipart/form-data"
                        action="{{url('/admin/'.$data->id)}}">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$data->name}}" required
                                    autofocus>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control" name="username" value="{{$data->username}}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$data->email}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No. Telp</label>
                                <input type="text" class="form-control" name="telp" value="{{$data->telp}}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Level</label>
                                <select name="level" class="form-control">
                                    <option value="Admin" @if($data->level=="Admin") selected @endif>Admin</option>
                                    <option value="Super Admin" @if($data->level=="Super Admin") selected @endif>Super
                                        Admin</option>

                                    <option value="DISPENDIKBUD" @if($data->level=="DISPENDIKBUD") selected @endif>DISPENDIKBUD</option></option>
                                    <option value="DINKES" @if($data->level=="DINKES") selected @endif>DINKES</option>
                                    <option value="RSUD" @if($data->level=="RSUD") selected @endif>RSUD</option>
                                    <option value="DINAS PUPR" @if($data->level=="DINAS PUPR") selected @endif>DINAS PUPR</option>
                                    <option value="SATPOL PP & PMK" @if($data->level=="SATPOL PP & PMK") selected @endif>SATPOL PP & PMK</option>
                                    <option value="BPBD" @if($data->level=="BPBD") selected @endif>BPBD</option>
                                    <option value="BKBP" @if($data->level=="BKBP") selected @endif>BKBP</option>
                                    <option value="DPRKP" @if($data->level=="DPRKP") selected @endif>DPRKP</option>
                                    <option value="DINSOS" @if($data->level=="DINSOS") selected @endif>DINSOS</option>
                                    <option value="DINKOP UKM TK" @if($data->level=="DINKOP UKM TK") selected @endif>DINKOP UKM TK</option>
                                    <option value="DPPPAPMD" @if($data->level=="DPPPAPMD") selected @endif>DPPPAPMD</option>
                                    <option value="DKP" @if($data->level=="DKP") selected @endif>DKP</option>
                                    <option value="DISKOMINFO SP" @if($data->level=="DISKOMINFO SP") selected @endif>DISKOMINFO SP</option>
                                    <option value="DLH" @if($data->level=="DLH") selected @endif>DLH</option>
                                    <option value="DISPENDUK CAPIL" @if($data->level=="DISPENDUK CAPIL") selected @endif>DISPENDUK CAPIL</option>
                                    <option value="DPPKB" @if($data->level=="DPPKB") selected @endif>DPPKB</option>
                                    <option value="DISHUB" @if($data->level=="DISHUB") selected @endif>DISHUB</option>
                                    <option value="DPMPTSP" @if($data->level=="DPMPTSP") selected @endif>DPMPTSP</option>
                                    <option value="DISPORA" @if($data->level=="DISPORA") selected @endif>DISPORA</option>
                                    <option value="DISPUSIP" @if($data->level=="DISPUSIP") selected @endif>DISPUSIP</option>
                                    <option value="DISPAR" @if($data->level=="DISPAR") selected @endif>DISPAR</option>
                                    <option value="DISTAN" @if($data->level=="DISTAN") selected @endif>DISTAN</option>
                                    <option value="DISPERINDAG" @if($data->level=="DISPERINDAG") selected @endif>DISPERINDAG</option>
                                    <option value="BPPPD" @if($data->level=="BPPPD") selected @endif>BPPPD</option>
                                    <option value="BPKAD" @if($data->level=="BPKAD") selected @endif>BPKAD</option>
                                    <option value="BKPSDM" @if($data->level=="BKPSDM") selected @endif>BKPSDM</option>
                                    <option value="INSPEKTORAT" @if($data->level=="INSPEKTORAT") selected @endif>INSPEKTORAT</option>
                                    <option value="SEKDPRD" @if($data->level=="SEKDPRD") selected @endif>SEKDPRD</option>
                                    <option value="SEKDA" @if($data->level=="SEKDA") selected @endif>SEKDA</option>
                                    <option value="BPPRD" @if($data->level=="BPPRD") selected @endif>BPPRD</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <img src="{{asset('img/admin/'.$data->gambar)}}" alt="">
                                <br>
                                <label for="exampleInputFile">Gambar Baru*</label>
                                <input type="file" class="form-control" name="gambar" accept="image/*">
                                <input type="hidden" name="gambar_lama" value="{{$data->gambar}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password Baru*</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Konfirmasi Password Baru*</label>
                                <input type="password" class="form-control" id="kpassword">
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
<script src="{{asset('assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
@endsection

@section('customscripts')
<!-- <script src="{{asset('customjs/backend/admin_input.js')}}"></script> -->
@endsection