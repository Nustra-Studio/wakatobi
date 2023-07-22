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
                            <h3 class="card-title">List Data Kehutanan</h3>
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
                                            $gettahun = DB::table('data_kehutanan')
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
                                    <!-- tutup head -->
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
                                        DB::table('input_kehutanan')->where('header_satu',$row->header_satu)->groupBy('header_dua')->orderby('id','asc')->get();
                                        @endphp
                                        @foreach($headdua as $rowdua)
                                        @if($rowdua->header_dua!=$rowdua->header_satu)
                                        @if($rowdua->header_dua!=$rowdua->input)
                                        <tr>
                                            <td class="pl-4" colspan="@php echo 4+count($gettahun) @endphp">
                                                <h5>{{$isatu-1}}.{{$idua++}} {{$rowdua->header_dua}}</h5>
                                            </td>
                                        </tr>
                                        @else
                                        @php
                                        $lastdata = DB::table('data_kehutanan')
                                        ->where('kode',$rowdua->id)
                                        ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]]) 
                                        ->orderby('id','desc')
                                        ->limit(1)
                                        ->get();

                                        $alldata = DB::table('data_kehutanan')
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
                                        @else
                                        @php
                                        $lastdata = DB::table('data_kehutanan')
                                        ->where('kode',$rowdua->id)
                                        ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]]) 
                                        ->orderby('id','desc')
                                        ->limit(1)
                                        ->get();

                                        $alldata = DB::table('data_kehutanan')
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
                                        DB::table('input_kehutanan')->where('header_dua',$rowdua->header_dua)->get();
                                        @endphp
                                        @foreach($headtiga as $rowtiga)
                                        @php
                                        $lastdata = DB::table('data_kehutanan')
                                        ->where('kode',$rowtiga->id)
                                        ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]]) 
                                        ->orderby('id','desc')
                                        ->limit(1)
                                        ->get();

                                        $alldata = DB::table('data_kehutanan')
                                        ->where('kode',$rowtiga->id)
                                        ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]]) 
                                        ->orderby('id','asc')
                                        ->get();
                                        @endphp

                                        @if($rowtiga->input!=$rowtiga->header_dua)
                                        <tr>
                                            <td>
                                                <span class="ml-5">{{$isatu-1}}.{{$idua-1}}.{{$itiga++}} -
                                                    {{$rowtiga->input}}</span>
                                            </td>
                                            <td>
                                                @foreach($lastdata as $last)
                                                {{$last->bentuk}}
                                                @endforeach
                                            </td>
                                            @foreach($lastdata as $ad)
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