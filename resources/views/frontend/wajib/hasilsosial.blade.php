@extends('layouts/frontend/base')

@section('content')

<body>
    <link href="{{asset('assets/select2user.css')}}" rel="stylesheet">
    <section class="text-center mb-0" style="padding-bottom:15%;">
        <div class="container text-left">
            <div class="rows" style="padding-top:10%;">
                <div class="col-12">
                <h1>Data Sosial Tahun {{$tahunawal}} - {{$tahunakhir}}</h1>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">List Data Sosial</h3>
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
                                        $gettahun = DB::table('data_sosial')
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
                                        <th>Grafik</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $isatu=1;
                                    @endphp
                                    @foreach($data as $row)
                                    <tr>
                                        <td colspan="@php echo 5+count($gettahun) @endphp">
                                            <span>{{$isatu++}}. {{$row->header_satu}}</span>
                                        </td>
                                    </tr>
                                    @php
                                    $idua=1;
                                    $headdua =
                                    DB::table('input_sosial')->where('header_satu',$row->header_satu)->groupBy('header_dua')->orderby('id','asc')->get();
                                    @endphp
                                    @foreach($headdua as $rowdua)
                                    @if($rowdua->header_dua!=$rowdua->header_tiga)
                                    <tr>
                                        <td class="pl-4" colspan="@php echo 5+count($gettahun) @endphp">
                                            <span>{{$isatu-1}}.{{$idua++}} {{$rowdua->header_dua}}</span>
                                        </td>
                                    </tr>
                                    @else
                                    @php
                                    $lastdata = DB::table('data_sosial')
                                    ->where('kode',$rowdua->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_sosial')
                                    ->where('kode',$rowdua->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
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
                                        <td>
                                            <button type="button" class="btn btn-sm btn-primary"
                                                onclick="tampilgrafik({{$rowdua->id}},{{$tahunawal}},{{$tahunakhir}})">
                                                <i class="fas fa-chart-bar"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endif
                                    @php
                                    $itiga=1;
                                    $headtiga =
                                    DB::table('input_sosial')->where([['header_satu',$row->header_satu],['header_dua',$rowdua->header_dua]])->groupBy('header_tiga')->orderby('id','asc')->get();
                                    @endphp
                                    @foreach($headtiga as $rowtiga)
                                    @if($rowtiga->header_tiga!=$rowtiga->header_dua)
                                    @if($rowtiga->header_tiga!=$rowtiga->input)
                                    <tr>
                                        <td class="pl-5" colspan="@php echo 5+count($gettahun) @endphp">
                                            <span class="ml-2">{{$isatu-1}}.{{$idua-1}}.{{$itiga++}} {{$rowtiga->header_tiga}}</span>
                                        </td>
                                    </tr>
                                    @else
                                    @php
                                    $lastdata = DB::table('data_sosial')
                                    ->where('kode',$rowtiga->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_sosial')
                                    ->where('kode',$rowtiga->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
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
                                        <td>
                                            <button type="button" class="btn btn-sm btn-primary"
                                                onclick="tampilgrafik({{$rowtiga->id}},{{$tahunawal}},{{$tahunakhir}})">
                                                <i class="fas fa-chart-bar"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endif
                                    @endif
                                    @php
                                    $iempat=1;
                                    $headempat =
                                    DB::table('input_sosial')->where([['header_satu',$row->header_satu],['header_dua',$rowdua->header_dua],['header_tiga',$rowtiga->header_tiga]])->orderby('id','asc')->get();
                                    @endphp
                                    @foreach($headempat as $rowempat)
                                    @if($rowempat->input!=$rowempat->header_tiga)
                                    @php
                                    $lastdata = DB::table('data_sosial')
                                    ->where('kode',$rowempat->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_sosial')
                                    ->where('kode',$rowempat->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','asc')
                                    ->get();
                                    @endphp
                                    <tr>
                                        <td class="pl-5">
                                            <span class="ml-5">{{$isatu-1}}.{{$idua-1}}.{{$itiga-1}}.{{$iempat++}} {{$rowempat->input}}</span>
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
                                        <td>
                                            <button type="button" class="btn btn-sm btn-primary"
                                                onclick="tampilgrafik({{$rowempat->id}},{{$tahunawal}},{{$tahunakhir}})">
                                                <i class="fas fa-chart-bar"></i>
                                            </button>
                                        </td>
                                    </tr>
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

        </div>
    </section>
    </div>
    <div class="modal fade" id="modalgrafik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                <h5 class="text-muted mt-5" id="loadingtext"> <i class="fa fa-hourglass"></i> Loading...</h5>
                    <div id="chartContainer" style="height: 360px; width: 100%;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>      
</body>
@endsection
@section('customjs')
<script src="{{asset('assets/canvasjs/canvasjs.min.js')}}"></script>
@endsection
@section('customscripts')
<script>
function tampilgrafik(kode, tahunawal, tahunakhir) {
    $('#loadingtext').show();
    var datanya = [];
    var chart = new CanvasJS.Chart("chartContainer", {
		exportEnabled: true,
        theme: "light2",
        animationEnabled: true,
        data: [{
            type: "column",
            indexLabelFontSize: 15,
            dataPoints: datanya
        }]
    });
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: '/sosial/cari-grafik/' + kode + '/' + tahunawal + '/' + tahunakhir,
        success: function(data) {
            $.each(data, function(key, value) {
                datanya.push({
                    label: value.tahun,
                    y: parseInt(value.jumlah),
                    indexLabel: String(value.jumlah)
                });
            });

        }
    });

    $('#modalgrafik').on('shown.bs.modal', function() {
        chart.render();
    $('#loadingtext').hide();
    });
    $('#modalgrafik').modal('toggle');
    
}
</script>
@endsection