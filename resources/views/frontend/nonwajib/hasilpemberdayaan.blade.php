@extends('layouts/frontend/base')

@section('content')

<body>
    <!-- <div class="container-fluit" style="padding-top: 4.5%;">
    <img src="{{asset('img/Pantai Lakota (1332 px x 694 px).jpg')}}" class="img-fluid" alt="Responsive image" style="width:100%;height:500px;">
  </div> -->
    <link href="{{asset('assets/select2user.css')}}" rel="stylesheet">
    <section class="text-center mb-0" style="padding-bottom:15%;">
        <div class="container text-left">
            <div class="rows" style="padding-top:10%;">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">List Data Pemberdayaan Perempuan dan Perlindungan Anak</h3>
                            <div class="card-tools">
                                <a onclick="window.history.go(-1);" class="btn btn-danger">Kembali
                                </a>
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
                                        ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
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
                                            <h3>{{$isatu++}}. {{$row->header_satu}}</h3>
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
                                            <h5>{{$isatu-1}}.{{$idua++}} {{$rowdua->header_dua}}</h5>
                                        </td>
                                    </tr>
                                    @else
                                    @php
                                    $lastdata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowdua->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowdua->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','asc')
                                    ->get();
                                    @endphp
                                    <tr>
                                        <td class="pl-4">
                                            <h5>{{$isatu-1}}.{{$idua++}} {{$rowdua->header_dua}}</h5>
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
                                            <h5 class="ml-1">{{$isatu-1}}.{{$idua-1}}.{{$itiga++}} {{$rowtiga->header_tiga}}</h5>
                                        </td>
                                    </tr>
                                    @else
                                    @php
                                    $lastdata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowtiga->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowtiga->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','asc')
                                    ->get();
                                    @endphp
                                    <tr>
                                        <td class="pl-5">
                                            <h5 class="ml-1">{{$isatu-1}}.{{$idua-1}}.{{$itiga++}} {{$rowtiga->header_tiga}}</h5>
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
                                            <h5 class="ml-3">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat++}} {{$rowempat->header_empat}}</h5>
                                        </td>
                                    </tr>
                                    @else
                                    @php
                                    $lastdata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowempat->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowempat->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','asc')
                                    ->get();
                                    @endphp
                                    <tr>
                                        <td class="pl-5">
                                            <h5 class="ml-3">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat++}} {{$rowempat->header_empat}}</h5>
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
                                            <h5 class="ml-5">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat-1}}.{{$ilima++}} {{$rowlima->header_lima}}</h5>
                                        </td>
                                    </tr>
                                    @else
                                    @php
                                    $lastdata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowlima->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowlima->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','asc')
                                    ->get();
                                    @endphp
                                    <tr>
                                        <td class="pl-5">
                                            <h5 class="ml-5">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat-1}}.{{$ilima++}} {{$rowlima->header_lima}}</h5>
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
                                            <h5 style="margin-left:80px;">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat-1}}.{{$ilima-1}}.{{$ienam++}} {{$rowenam->header_enam}}</h5>
                                        </td>
                                    </tr>
                                    @else
                                    @php
                                    $lastdata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowenam->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowenam->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','asc')
                                    ->get();
                                    @endphp
                                    <tr>
                                        <td class="pl-5">
                                            <h5 style="margin-left:80px;">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat-1}}.{{$ilima-1}}.{{$ienam++}} {{$rowenam->header_enam}}</h5>
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
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pemberdayaan_perempuan')
                                    ->where('kode',$rowtujuh->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
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
        </div>

        </div>
    </section>

    <div class="row pt-4 pl-5 pr-5 pb-5 text-white" style="background-color: #133251;">
        <div class="col-md-4 mb-2 text-center">
            <h1>LOKASI KAMI</h1>
            <hr style="border: solid 2px;color: white;">
            <p>Some quick example text to build on the card title and make up the bulk of the card's
                content</p>
        </div>
        <div class="col-md-4 mb-2 text-center">
            <h1>DATA GEORAPHIC</h1>
            <hr style="border: solid 2px;color: white;">
            <p>Some quick example text to build on the card title and make up the bulk of the card's
                content</p>
        </div>
        <div class="col-md-4 mb-2 text-center">
            <h1>PENGUNJUNG</h1>
            <hr style="border: solid 2px;color: white;">
            <p>Some quick example text to build on the card title and make up the bulk of the card's
                content</p>
        </div>
    </div>
    </div>

</body>
@endsection