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
                            <h3 class="card-title">List Data Perikanan dan Kelautan</h3>
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
                                            $gettahun = DB::table('data_perikanan')
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
                                        DB::table('input_perikanan')->where('header_satu',$row->header_satu)->groupBy('header_dua')->orderby('id','asc')->get();
                                        @endphp
                                        @foreach($headdua as $rowdua)
                                        @if($rowdua->header_dua != $rowdua->header_tiga)
                                        <tr>
                                            <td class="pl-4" colspan="@php echo 4+count($gettahun) @endphp">
                                                <h5>{{$isatu-1}}.{{$idua++}} {{$rowdua->header_dua}}</h5>
                                            </td>
                                        </tr>
                                        @else
                                        @php
                                        $lastdata = DB::table('data_perikanan')
                                        ->where('kode',$rowdua->id)
                                        ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                        ->orderby('id','desc')
                                        ->limit(1)
                                        ->get();

                                        $alldata = DB::table('data_perikanan')
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
                                        $headtiga =
                                        DB::table('input_perikanan')->where([['header_satu',$row->header_satu],['header_dua',$rowdua->header_dua]])->groupBy('header_tiga')->orderby('id','asc')->get();
                                        @endphp
                                        @foreach($headtiga as $rowtiga)
                                        @if($rowtiga->header_tiga!=$rowtiga->header_dua)
                                        @if($rowtiga->header_tiga != $rowtiga->input)
                                        <tr>
                                            <td colspan="@php echo 4+count($gettahun) @endphp">
                                                <span class="ml-5">{{$isatu-1}}.{{$idua-1}}.{{$itiga++}} -
                                                    {{$rowtiga->header_tiga}}</span>
                                            </td>
                                        </tr>
                                        @else
                                        @php
                                        $lastdata = DB::table('data_perikanan')
                                        ->where('kode',$rowtiga->id)
                                        ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                        ->orderby('id','desc')
                                        ->limit(1)
                                        ->get();

                                        $alldata = DB::table('data_perikanan')
                                        ->where('kode',$rowtiga->id)
                                        ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                        ->orderby('id','asc')
                                        ->get();
                                        @endphp
                                        <tr>
                                            <td>
                                                <span class="ml-5">{{$isatu-1}}.{{$idua-1}}.{{$itiga++}} -
                                                    {{$rowtiga->header_tiga}}</span>
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
                                        DB::table('input_perikanan')->where([['header_satu',$row->header_satu],['header_dua',$rowdua->header_dua],['header_tiga',$rowtiga->header_tiga]])->orderby('id','asc')->get();

                                        @endphp
                                        @foreach($headempat as $rowempat)
                                        @if($rowempat->input != $rowempat->header_tiga)

                                        @php
                                        $exinput = explode('#',$rowempat->input,-1);
                                        $lastdata = DB::table('data_perikanan')
                                        ->where('kode',$rowempat->id)
                                        ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                        ->orderby('id','desc')
                                        ->limit(1)
                                        ->get();

                                        $alldata = DB::table('data_perikanan')
                                        ->where('kode',$rowempat->id)
                                        ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                        ->orderby('id','asc')
                                        ->get();
                                        if ($exinput) {
                                        $newexinput = explode('#',$rowempat->input);
                                        @endphp
                                        @if($newexinput[1]=='Wangi-Wangi')
                                        <tr>
                                            <td class="pl-4" colspan="@php echo 4+count($gettahun) @endphp">
                                                <span class="ml-5">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat++}} -
                                                    {{$newexinput[0]}}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pl-5">
                                                <span class="ml-5"><b>
                                                        {{$newexinput[1]}}</b></span>
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
                                            <td class="pl-5"><span class="ml-5"><b>
                                                        {{$newexinput[1]}}</b></span>
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
                                                <span class="ml-5">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat++}} -
                                                    {{$rowempat->input}}</span>
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

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    </div>

</body>
@endsection