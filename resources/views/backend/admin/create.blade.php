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
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data</h3>
                    </div>
                    <form method="POST" onsubmit="return validasiinput();" role="form" enctype="multipart/form-data"
                        action="{{url('/admin')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control" name="nama" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No. Telp</label>
                                <input type="text" class="form-control" name="telp" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Level</label>
                                <select name="level" class="form-control">
                                    <option value="Admin">Admin</option>
                                    <option value="Super Admin">Super Admin</option>
                                    <option value="DISPENDIKBUD">DISPENDIKBUD</option></option>
                                    <option value="DINKES">DINKES</option>
                                    <option value="RSUD">RSUD</option>
                                    <option value="DINAS PUPR">DINAS PUPR</option>
                                    <option value="SATPOL PP & PMK">SATPOL PP & PMK</option>
                                    <option value="BPBD">BPBD</option>
                                    <option value="BKBP">BKBP</option>
                                    <option value="DPRKP">DPRKP</option>
                                    <option value="DINSOS">DINSOS</option>
                                    <option value="DINKOP UKM TK">DINKOP UKM TK</option>
                                    <option value="DPPPAPMD">DPPPAPMD</option>
                                    <option value="DKP">DKP</option>
                                    <option value="DISKOMINFO SP">DISKOMINFO SP</option>
                                    <option value="DLH">DLH</option>
                                    <option value="DISPENDUK CAPI">DISPENDUK CAPIL</option>
                                    <option value="DPPKB">DPPKB</option>
                                    <option value="DISHUB">DISHUB</option>
                                    <option value="DPMPTSP">DPMPTSP</option>
                                    <option value="DISPORA">DISPORA</option>
                                    <option value="DISPUSIP">DISPUSIP</option>
                                    <option value="DISPAR">DISPAR</option>
                                    <option value="DISTAN">DISTAN</option>
                                    <option value="DISPERINDAG">DISPERINDAG</option>
                                    <option value="BPPPD">BPPPD</option>
                                    <option value="BPKAD">BPKAD</option>
                                    <option value="BKPSDM">BKPSDM</option>
                                    <option value="INSPEKTORAT">INSPEKTORAT</option>
                                    <option value="SEKDPRD">SEKDPRD</option>
                                    <option value="SEKDA">SEKDA</option>
                                    <option value="BPPRD">BPPRD</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Gambar</label>
                                <input type="file" class="form-control" name="gambar" accept="image/*" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="kpassword" required>
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
<script src="{{asset('customjs/backend/admin_input.js')}}"></script>
@endsection