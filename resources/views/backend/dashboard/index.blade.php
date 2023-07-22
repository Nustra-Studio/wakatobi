@extends('layouts/base')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Info!</h4>
            {{ session('status') }}
        </div>
        @endif
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <h5><i class="fa fa-smile"></i> Selamat Datang Kembali</h5>

                        <p>{{Auth::user()->level}} - {{Auth::user()->name}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                        @php
                            $jumlahberita =0;
                            $jumlahartikel=0;
                            $jumlahberita = DB::table('berita')->count();
                            $jumlahartikel = DB::table('artikel')->count();
                            @endphp
                            <h3>{{$jumlahberita+$jumlahartikel}}</h3>

                            <p>Artikel & Berita</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-newspaper"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            @php
                            $jumlahfoto =0;
                            $jumlahfoto = DB::table('galeri')->count();
                            @endphp
                            <h3>{{$jumlahfoto}}</h3>

                            <p>Foto Galeri</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-images"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            @php
                            $jumlahadm =0;
                            $jumlahadm = DB::table('users')->count();
                            @endphp
                            <h3>{{$jumlahadm}}</h3>

                            <p>Pengguna</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            @php
                            $jumlahpengunjung =0;
                            $jumlahpengunjung = DB::table('visitor')->count();
                            @endphp
                            <h3>{{$jumlahpengunjung}}</h3>

                            <p>Pengunjung</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection