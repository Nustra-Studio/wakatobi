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
                            <h3 class="card-title">List Data Pertanahan</h3>
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
                                        $gettahun = DB::table('data_pertanahan')
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
                                    DB::table('input_pertanahan')->where('header_satu',$row->header_satu)->orderby('id','asc')->get();
                                    @endphp
                                    @foreach($headdua as $rowdua)
                                    @php
                                    $exinput = explode('#',$rowdua->input,-1);
                                    $lastdata = DB::table('data_pertanahan')
                                    ->where('kode',$rowdua->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','desc')
                                    ->limit(1)
                                    ->get();

                                    $alldata = DB::table('data_pertanahan')
                                    ->where('kode',$rowdua->id)
                                    ->where([['tahun','>=',$tahunawal],['tahun','<=',$tahunakhir]])
                                    ->orderby('id','asc')
                                    ->get();
                                    if($exinput) {
                                    $newexinput = explode('#',$rowdua->input);
                                    @endphp
                                    @if($newexinput[1]=='Jumlah Kasus Sengketa Tanah Selesai'
                                    ||$newexinput[1]=='Jumlah Tanah Ulayat Bersertifikat'
                                    ||$newexinput[1]=='Jumlah ')
                                    <tr>
                                        <td class="pl-4" colspan="@php echo 4+count($gettahun) @endphp">
                                            <span>{{$isatu-1}}.{{$idua++}} {{$newexinput[0]}}</span>
                                        </td>
                                        </tr>
                                    <tr>
                                        <td class="pl-5">
                                            <span class="ml-2"><b>{{$newexinput[1]}}</b></span>
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
                                            <span class="ml-2"><b>{{$newexinput[1]}}</b></span>
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
                                        <td class="pl-4">
                                            <h5>{{$isatu-1}}.{{$idua++}} {{$rowdua->input}}</h5>
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