@extends('layouts/base')

@section('token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Data Pendidikan</h1>
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
                        <h3 class="card-title">Data Pendidikan</h3>
                        <div class="card-tools">
                            <a href="{{url('pendidikan-import')}}">
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
                                        $gettahun = DB::table('data_pendidikan')
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
                                    DB::table('input_pendidikan')->where('header_satu',$row->header_satu)->groupBy('header_dua')->orderby('id','asc')->get();
                                    @endphp
                                    @foreach($headdua as $rowdua)
                                    @if($rowdua->header_dua!=$rowdua->header_tiga)
                                    <tr>
                                        <td class="pl-4" colspan="@php echo 4+count($gettahun) @endphp">
                                            <span>{{$isatu-1}}.{{$idua++}} {{$rowdua->header_dua}}</span>
                                        </td>
                                    </tr>
                                    @else
                                    @php
                                    $lastdata = DB::table('data_pendidikan')
                                    ->where('kode',$rowdua->id)
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pendidikan')
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
                                    $headtiga =
                                    DB::table('input_pendidikan')->where([['header_satu',$row->header_satu],['header_dua',$rowdua->header_dua]])->groupBy('header_tiga')->orderby('id','asc')->get();
                                    @endphp
                                    @foreach($headtiga as $rowtiga)
                                    @if($rowtiga->header_tiga!=$rowtiga->header_dua)
                                    @if($rowtiga->header_tiga!=$rowtiga->header_empat)
                                    <tr>
                                        <td class="pl-5" colspan="@php echo 4+count($gettahun) @endphp">
                                            <span class="ml-2">{{$isatu-1}}.{{$idua-1}}.{{$itiga++}} {{$rowtiga->header_tiga}}</span>
                                        </td>
                                    </tr>
                                    @else
                                    @php
                                    $lastdata = DB::table('data_pendidikan')
                                    ->where('kode',$rowtiga->id)
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pendidikan')
                                    ->where('kode',$rowtiga->id)
                                    ->orderby('id','asc')
                                    ->get();
                                    @endphp
                                    <tr>
                                        <td class="pl-5">
                                            <span class="ml-2">{{$isatu-1}}.{{$idua-1}}.{{$itiga++}} {{$rowtiga->header_tiga}}</span>
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
                                    $headempat =
                                    DB::table('input_pendidikan')->where([['header_satu',$row->header_satu],['header_dua',$rowdua->header_dua],['header_tiga',$rowtiga->header_tiga]])->groupBy('header_empat')->orderby('id','asc')->get();
                                    @endphp
                                    @foreach($headempat as $rowempat)
                                    @if($rowempat->header_empat!=$rowempat->header_tiga)
                                    @if($rowempat->header_empat!=$rowempat->input)
                                    <tr>
                                        <td class="pl-5" colspan="@php echo 4+count($gettahun) @endphp">
                                            <span class="ml-5">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat++}} {{$rowempat->header_empat}}</span>
                                        </td>
                                        
                                    </tr>
                                    @else
                                    @php
                                    $lastdata = DB::table('data_pendidikan')
                                    ->where('kode',$rowempat->id)
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pendidikan')
                                    ->where('kode',$rowempat->id)
                                    ->orderby('id','asc')
                                    ->get();
                                    @endphp
                                    <tr>
                                        <td class="pl-5">
                                            <span class="ml-5">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat++}} {{$rowempat->header_empat}}</span>
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
                                    $headelima =
                                    DB::table('input_pendidikan')->where([['header_satu',$row->header_satu],['header_dua',$rowdua->header_dua],['header_tiga',$rowtiga->header_tiga],['header_empat',$rowempat->header_empat]])->orderby('id','asc')->get();
                                    @endphp
                                    
                                    @foreach($headelima as $rowlima)
                                    @if($rowlima->input!=$rowlima->header_empat)
                                    @php
                                    $exinput = explode('#',$rowlima->input,-1);
                                    $lastdata = DB::table('data_pendidikan')
                                    ->where('kode',$rowlima->id)
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pendidikan')
                                    ->where('kode',$rowlima->id)
                                    ->orderby('id','asc')
                                    ->get();
                                    if($exinput) {
                                    $newexinput = explode('#',$rowlima->input);
                                    @endphp
                                    @if($newexinput[1]=='Wangi-wangi')
                                    <tr>
                                        <td class="pl-5">
                                            <span style="margin-left:80px;">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat-1}}.{{$ilima++}} {{$newexinput[0]}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pl-5">
                                            <span style="margin-left:100px;"><b>{{$newexinput[1]}}</b></span>
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
                                    @else
                                    <tr>
                                        <td class="pl-5">
                                            <span style="margin-left:100px;"><b>{{$newexinput[1]}}</b></span>
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
                                    }else{
                                    @endphp
                                    <tr>
                                        <td class="pl-5">
                                            <span style="margin-left:80px;">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat-1}}.{{$ilima++}} {{$rowlima->input}}</span>
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
                                    @php
                                    }
                                    @endphp
                                    @endif
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
                <h4 class="modal-title">Hapus Pendidikan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{url('/pendidikan/hapus')}}" method="POST" enctype="multipart/form-data">
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