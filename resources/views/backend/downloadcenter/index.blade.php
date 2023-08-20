@extends('layouts/base')
@section('customcss')
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<link href="{{asset('assets/loading.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Download Center</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row loading-div" id="pagesnya">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Pilih Data</h3>
                    </div>
                    <form method="POST" role="form" enctype="multipart/form-data" action="{{url('download-center')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">File</label>
                                <select name="namafile" class="form-control select2" id="namafile"
                                    onchange="gantifile()">
                                    <option selected disabled="disabled" class="text-muted">Pilih File</option>
                                    <optgroup label="Data Kecamatan">
                                        <option value="Wangi - Wangi">Data Kecamatan || Wangi - Wangi</option>
                                        <option value="Wangi - Wangi Selatan">Data Kecamatan || Wangi - Wangi Selatan
                                        </option>
                                        <option value="Kaledupa">Data Kecamatan || Kaledupa</option>
                                        <option value="Kaledupa Selatan">Data Kecamatan || Kaledupa Selatan</option>
                                        <option value="Tomia">Data Kecamatan || Tomia</option>
                                        <option value="Tomia Timur">Data Kecamatan || Tomia Timur</option>
                                        <option value="Binongko">Data Kecamatan || Binongko</option>
                                        <option value="Togo Binongko">Data Kecamatan || Togo Binongko</option>
                                    </optgroup>
                                    <optgroup label="Data Umum">
                                        <option value="Data Geografis">Data Umum || Geografis</option>
                                        <option value="Indikator Data Strategis">Data Umum || Indikator Data Strategis
                                        </option>
                                        <option value="Pajak & Retribusi Daerah">Data Umum || Pajak & Retribusi Daerah
                                        </option>
                                    </optgroup>
                                    <optgroup label="Data Wajib Dasar">
                                        <option value="Data Kesehatan">Data Wajib Dasar || Data Kesehatan</option>
                                        <option value="Data Pendidikan">Data Wajib Dasar || Data Pendidikan</option>
                                        <option value="Data Sosial">Data Wajib Dasar || Data Sosial</option>
                                        <option value="Data Ketentraman dan Ketertiban">Data Wajib Dasar || Ketentraman
                                            & Ketertiban</option>
                                        <option value="Data Pekerjaan Umum dan Penataan Ruang">Data Wajib Dasar ||
                                            Pekerjaan Umum & Penataan Ruang</option>
                                        <option value="Data Perumahan Rakyat dan Kawasan Pemukiman">Data Wajib Dasar ||
                                            Perumahan Rakyat & Kawasan Pemukiman</option>
                                    </optgroup>
                                    <optgroup label="Data Wajib Non Dasar">
                                        <option value="Data Tenaga Kerja">Data Wajib Non Dasar || Data Tenaga Kerja</option>
                                        <option value="Data Pangan">Data Wajib Non Dasar || Data Pangan</option>
                                        <option value="Data Pertanahan">Data Wajib Non Dasar || Data Pertanahan</option>
                                        <option value="Data Kebudayaan">Data Wajib Non Dasar || Data Kebudayaan</option>
                                        <option value="Data Perpustakaan">Data Wajib Non Dasar || Data Perpustakaan</option>
                                        <option value="Data Kearsipan">Data Wajib Non Dasar || Data Kearsipan</option>
                                        <option value="Data Koperasi">Data Wajib Non Dasar || Data Koperasi</option>
                                        <option value="Data Kominfo">Data Wajib Non Dasar || Data Kominfo</option>
                                        <option value="Data Olahraga">Data Wajib Non Dasar || Data Olahraga</option>
                                        <option value="Data Statistik">Data Wajib Non Dasar || Data Statistik</option>
                                        <option value="Data Persandian">Data Wajib Non Dasar || Data Persandian</option>
                                        <option value="Data Penanaman Modal">Data Wajib Non Dasar || Data Penanaman Modal</option>
                                        <option value="Data Perhubungan">Data Wajib Non Dasar || Data Perhubungan</option>
                                        <option value="Data Lingkungan Hidup">Data Wajib Non Dasar || Data Lingkungan Hidup</option>
                                        <option value="Data Pemberdayaan Perempuan dan Perlindungan Anak">Data Wajib Non Dasar || Data Pemberdayaan Perempuan dan Perlindungan Anak</option>
                                        <option value="Data Administrasi Kependudukan dan Pencatatan Sipil">Data Wajib Non Dasar || Data Administrasi Kependudukan dan Pencatatan Sipil</option>
                                        <option value="Data Pemberdayaan Masyarakat">Data Wajib Non Dasar || Data Pemberdayaan Masyarakat</option>
                                        <option value="Data Pengendalian Penduduk dan KB">Data Wajib Non Dasar || Data Pengendalian Penduduk dan KB</option>
                                    </optgroup>
                                    <optgroup label="Data Urusan Pilihan">
                                        <option value="Data Pariwisata">Data Urusan Pilihan || Data Pariwisata</option>
                                        <option value="Data Pertanian">Data Urusan Pilihan || Data Pertanian</option>
                                        <option value="Data Kehutanan">Data Urusan Pilihan || Data Kehutanan</option>
                                        <option value="Data Perindustrian">Data Urusan Pilihan || Data Perindustrian
                                        </option>
                                        <option value="Data Perdagangan">Data Urusan Pilihan || Data Perdagangan
                                        </option>
                                        <option value="Data Perikanan">Data Urusan Pilihan || Data Perikanan & Kelautan
                                        </option>
                                        <option value="Data Energi">Data Urusan Pilihan || Data Energi dan Sumber Daya
                                            Mineral</option>
                                    </optgroup>
                                    <optgroup label="Data Urusan Penunjang">
                                        <option value="Data Perencanaan Pembangunan">Data Urusan Penunjang || Data
                                            Perencanaan Pembangunan</option>
                                        <option value="Data Keuangan">Data Urusan Penunjang || Data Keuangan</option>
                                        <option value="Data Kepegawaian">Data Urusan Penunjang || Data Kepegawaian</option>
                                        <option value="Data Penelitian dan Pengembangan">Data Urusan Penunjang || Data Penelitian & Pengembangan</option>
                                        <option value="Data Pengawasan">Data Urusan Penunjang || Data Pengawasan</option>
                                        <option value="Data Sekertariat Dewan">Data Urusan Penunjang || Data Sekertariat Dewan</option>
                                        <option value="Data Sekertariat Daerah">Data Urusan Penunjang || Data Sekertariat Daerah</option>
                                    </optgroup>
                                    <optgroup label="Program Unggulan">
                                        <option value="Program Unggulan Daerah">Program Unggulan Daerah</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tahun</label>
                                <select name="tahun" id="tahun" class="form-control" required></select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="reset" onclick="history.go(-1)" class="btn btn-danger">Kembali</button>
                            <button type="submit" class="btn btn-primary float-right">Download Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('customjs')
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/loading.js')}}"></script>
@endsection
@section('customscripts')
<script src="{{asset('customjs/backend/downloadcenter.js')}}"></script>
@endsection