@extends('layouts/base')

@section('token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Data Pemberdayaan Perempuan & Perlindungan Anak</h1>
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
                        <h3 class="card-title">Data Pemberdayaan Perempuan & Perlindungan Anak</h3>
                        <div class="card-tools">
                            <a href="{{url('pemberdayaan-perempuan-import')}}">
                                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-upload"></i>
                                    Import
                                    Data
                                </button>
                            </a>
                            <button type="button" class="btn btn-default btn-sm" data-toggle="modal"
                                data-target="#modal-hapus"><i class="fas fa-trash"></i> Hapus
                                Data
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="list-data" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Data</th>
                                        <th>Bentuk</th>
                                        @php
                                        $gettahun = DB::table('data_pemberdayaan_perempuan')
                                        ->groupby('tahun')
                                        ->orderby('id','asc')
                                        ->get();
                                        @endphp
                                        @foreach($gettahun as $rowth)
                                        <th>{{$rowth->tahun}}</th>
                                        @endforeach
                                        <th>Tanggal Update</th>
                                        <th>Sumber Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $isatu=1;
                                    @endphp
                                    @foreach($data as $row)
                                    <tr>
                                        <td colspan="@php echo 4+count($gettahun) @endphp">
                                            <span>{{$isatu++}}. {{$row->header_satu}}</span>
                                        </td>
                                    </tr>
                                    @php
                                    $idua=1;
                                    $headdua =
                                    DB::table('input_pemberdayaan_perempuan')->where('header_satu',$row->header_satu)->groupBy('header_dua')->orderby('id','asc')->get();
                                    @endphp
                                    @foreach($headdua as $rowdua)
                                    @if($rowdua->header_dua!=$rowdua->input)
                                    <tr>
                                        <td class="pl-4" colspan="@php echo 4+count($gettahun) @endphp">
                                            <span>{{$isatu-1}}.{{$idua++}} {{$rowdua->header_dua}}</span>
                                        </td>
                                    </tr>
                                    @else
                                    @php
                                    $lastdata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowdua->id)
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowdua->id)
                                    ->orderby('id','asc')
                                    ->get();
                                    @endphp
                                    <tr>
                                        <td class="pl-4">
                                            <span>{{$isatu-1}}.{{$idua++}} {{$rowdua->header_dua}}</span>
                                        </td>
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->bentuk}}
                                            @endforeach
                                        </td>
                                        @foreach($alldata as $ad)
                                        <td>{{$ad->jumlah}}</td>
                                        @endforeach
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->tanggal}}
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->sumber}}
                                            @endforeach
                                        </td>
                                    </tr>
                                    @endif
                                    @php
                                    $itiga=1;
                                    $headtiga = DB::table('input_pemberdayaan_perempuan')->where([['header_satu',$row->header_satu],['header_dua',$rowdua->header_dua]])->groupBy('header_tiga')->orderby('id','asc')->get();
                                    @endphp
                                    @foreach($headtiga as $rowtiga)
                                    @if($rowtiga->header_tiga!=$rowtiga->header_dua)
                                    @if($rowtiga->header_tiga!=$rowtiga->input)
                                    <tr>
                                        <td class="pl-5" colspan="@php echo 4+count($gettahun) @endphp">
                                            <span class="ml-1">{{$isatu-1}}.{{$idua-1}}.{{$itiga++}} {{$rowtiga->header_tiga}}</span>
                                        </td>
                                    </tr>
                                    @else
                                    @php
                                    $lastdata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowtiga->id)
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowtiga->id)
                                    ->orderby('id','asc')
                                    ->get();
                                    @endphp
                                    <tr>
                                        <td class="pl-5">
                                            <span class="ml-1">{{$isatu-1}}.{{$idua-1}}.{{$itiga++}} {{$rowtiga->header_tiga}}</span>
                                        </td>
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->bentuk}}
                                            @endforeach
                                        </td>
                                        @foreach($alldata as $ad)
                                        <td>{{$ad->jumlah}}</td>
                                        @endforeach
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->tanggal}}
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->sumber}}
                                            @endforeach
                                        </td>
                                    </tr>
                                    @endif
                                    @endif
                                    @php
                                    $iempat=1;
                                    $headempat = DB::table('input_pemberdayaan_perempuan')->where([['header_satu',$row->header_satu],['header_dua',$rowdua->header_dua],['header_tiga',$rowtiga->header_tiga]])->groupBy('header_empat')->orderby('id','asc')->get();
                                    @endphp
                                    @foreach($headempat as $rowempat)
                                    @if($rowempat->header_empat!=$rowempat->header_tiga)
                                    @if($rowempat->header_empat!=$rowempat->input)
                                    <tr>
                                        <td class="pl-5" colspan="@php echo 4+count($gettahun) @endphp">
                                            <span class="ml-3">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat++}} {{$rowempat->header_empat}}</span>
                                        </td>
                                    </tr>
                                    @else
                                    @php
                                    $lastdata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowempat->id)
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowempat->id)
                                    ->orderby('id','asc')
                                    ->get();
                                    @endphp
                                    <tr>
                                        <td class="pl-5">
                                            <span class="ml-3">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat++}} {{$rowempat->header_empat}}</span>
                                        </td>
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->bentuk}}
                                            @endforeach
                                        </td>
                                        @foreach($alldata as $ad)
                                        <td>{{$ad->jumlah}}</td>
                                        @endforeach
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->tanggal}}
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->sumber}}
                                            @endforeach
                                        </td>
                                    </tr>
                                    @endif
                                    @endif
                                    @php
                                    $ilima=1;
                                    $headlima = DB::table('input_pemberdayaan_perempuan')->where([['header_satu',$row->header_satu],['header_dua',$rowdua->header_dua],['header_tiga',$rowtiga->header_tiga],['header_empat',$rowempat->header_empat]])->groupBy('header_lima')->orderby('id','asc')->get();
                                    @endphp
                                    @foreach($headlima as $rowlima)
                                    @if($rowlima->header_lima!=$rowlima->header_empat)
                                    @if($rowlima->header_lima!=$rowlima->input)
                                    <tr>
                                        <td class="pl-5" colspan="@php echo 4+count($gettahun) @endphp">
                                            <span class="ml-5">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat-1}}.{{$ilima++}} {{$rowlima->header_lima}}</span>
                                        </td>
                                    </tr>
                                    @else
                                    @php
                                    $lastdata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowlima->id)
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowlima->id)
                                    ->orderby('id','asc')
                                    ->get();
                                    @endphp
                                    <tr>
                                        <td class="pl-5">
                                            <span class="ml-5">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat-1}}.{{$ilima++}} {{$rowlima->header_lima}}</span>
                                        </td>
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->bentuk}}
                                            @endforeach
                                        </td>
                                        @foreach($alldata as $ad)
                                        <td>{{$ad->jumlah}}</td>
                                        @endforeach
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->tanggal}}
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->sumber}}
                                            @endforeach
                                        </td>
                                    </tr>
                                    @endif
                                    @endif
                                    @php
                                    $ienam=1;
                                    $headenam = DB::table('input_pemberdayaan_perempuan')->where([['header_satu',$row->header_satu],['header_dua',$rowdua->header_dua],['header_tiga',$rowtiga->header_tiga],['header_empat',$rowempat->header_empat],['header_lima',$rowlima->header_lima]])->groupBy('header_enam')->orderby('id','asc')->get();
                                    @endphp
                                    @foreach($headenam as $rowenam)
                                    @if($rowenam->header_enam!=$rowenam->header_lima)
                                    @if($rowenam->header_enam!=$rowenam->input)
                                    <tr>
                                        <td class="pl-5" colspan="@php echo 4+count($gettahun) @endphp">
                                            <span style="margin-left:80px;">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat-1}}.{{$ilima-1}}.{{$ienam++}} {{$rowenam->header_enam}}</span>
                                        </td>
                                    </tr>
                                    @else
                                    @php
                                    $lastdata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowenam->id)
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowenam->id)
                                    ->orderby('id','asc')
                                    ->get();
                                    @endphp
                                    <tr>
                                        <td class="pl-5">
                                            <span style="margin-left:80px;">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat-1}}.{{$ilima-1}}.{{$ienam++}} {{$rowenam->header_enam}}</span>
                                        </td>
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->bentuk}}
                                            @endforeach
                                        </td>
                                        @foreach($alldata as $ad)
                                        <td>{{$ad->jumlah}}</td>
                                        @endforeach
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->tanggal}}
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->sumber}}
                                            @endforeach
                                        </td>
                                    </tr>
                                    @endif
                                    @endif
                                    @php
                                    $itujuh=1;
                                    $headtujuh= DB::table('input_pemberdayaan_perempuan')->where([['header_satu',$row->header_satu],['header_dua',$rowdua->header_dua],['header_tiga',$rowtiga->header_tiga],['header_empat',$rowempat->header_empat],['header_lima',$rowlima->header_lima],['header_enam',$rowenam->header_enam]])->orderby('id','asc')->get();
                                    @endphp
                                    @foreach($headtujuh as $rowtujuh)
                                    @if($rowtujuh->input!=$rowtujuh->header_enam)
                                    @php
                                    $lastdata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowtujuh->id)
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowtujuh->id)
                                    ->orderby('id','asc')
                                    ->get();
                                    @endphp
                                    <tr>
                                        <td class="pl-5">
                                            <span style="margin-left:100px;">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat-1}}.{{$ilima-1}}.{{$ienam-1}}.{{$itujuh++}} {{$rowtujuh->input}}</span>
                                        </td>
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->bentuk}}
                                            @endforeach
                                        </td>
                                        @foreach($alldata as $ad)
                                        <td>{{$ad->jumlah}}</td>
                                        @endforeach
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->tanggal}}
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($lastdata as $last)
                                            {{$last->sumber}}
                                            @endforeach
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                    @endforeach
                                    @endforeach
                                    @endforeach
                                    @endforeach
                                    @endforeach
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
<div class="modal fade" id="modal-hapus" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Data Pemberdayaan Perempuan & Perlindungan Anak</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{url('/pemberdayaan-perempuan/hapus')}}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun</label>
                        <select name="tahun" class="form-control">
                            @foreach($gettahun as $rowth)
                            <option value="{{$rowth->tahun}}">{{$rowth->tahun}}</option>
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
@endsection