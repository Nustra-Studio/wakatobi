@section('css')
    <style>
        .small-text{
            font-size: 10px !important;
        }
    </style>
@endsection
@php
    $thn=DB::table($ld)->whereBetween('tahun',[$t1,$t2])->groupBy('tahun')->get();
@endphp
<div class="card-style">
    {{-- <div class="table-responsive"> --}}
        <table class="table table-bordered table-striped" id="tbl">
            <tr>
                <th id="jdltbl" colspan="{{count($thn)+5}}">DATA {{$kat}} Tahun {{$t1}} sampai {{$t2}}</th>
            </tr>
            <tr>
                <th rowspan="2">Data</th>
                {{-- <th rowspan="2">Jumlah</th> --}}
                <th rowspan="2">Bentuk</th>
                <th rowspan="2">Sumber Data</th>
                <th rowspan="2">Tanggal Update</th>
                <th colspan="{{count($thn)}}">Tahun</th>
                <th>Grafik</th>
                <tr>
                    @foreach ($thn as $key=>$ith)
                        <th>
                            {{$ith->tahun}}
                        </th>
                    @endforeach
                </tr>
            </tr>
            @php
                $no=1;
            @endphp
            @foreach ($data as $item)
                <tr>
                    <td align="left" colspan="7">  {{  $no++ .'. '.$item->header_satu}}</td>
                    <div id="container_sub"></div>
                    @php
                    $nor=1;
                        $rinci=DB::table($lnk)->where('header_satu',$item->header_satu)->get();
                        $kbn=[];
                        foreach ($rinci as $key) {
                            $kbn[]=$key->id;
                        }
                        $dba=DB::table($lnk)
                            ->join($ld,$ld.'.kode','=',$lnk.'.id')
                            ->whereIn('kode',$kbn)
                            ->whereBetween('tahun',[$t1,$t2])
                            ->groupBy('tahun')
                            ->get();
                    @endphp
                    @foreach ($dba as $itg)
                        <tr>
                            @if ($lnk=="input_kesehatan"||$lnk=="input_pendidikan")
                                <td align="left"><ul>{!! '<li>'.$itg->header_dua .' ( '. $itg->header_tiga .' )</li> '.'<ul><li>'.$itg->header_empat.'-'.$itg->input.'</li></ul>' !!}</ul></td>
                            @elseif($lnk=="input_kepegawaian"||$lnk=="input_keuangan"||$lnk=="input_sosial"||$lnk=="input_keamanan_ketertiban"|| $lnk=="input_pekerjaan_umum"|| $lnk=="input_perumahan_rakyat"||$lnk=="input_tenagakerja"||$lnk=="input_perindustrian"||$lnk=='input_perdagangan'||$lnk=="input_perikanan"||$lnk=="input_energi_sumberdaya")
                                <td align="left"><ul> {!! '<li>'.$itg->header_dua .' ( '. $itg->header_tiga .' ) </li> '.'<ul><li>'.$itg->input.'</li></ul>' !!}</ul></td>
                            @elseif($lnk=="input_pangan"||$lnk=="input_geografis" || $lnk=='input_indikator_data_strategis'||$lnk=="input_pertanian"||$lnk=="input_kehutanan")
                                <td align="left"><ul>{!! '<li>'.$itg->header_dua .'</li> '.'<ul><li>'.$itg->input.'</li></ul>' !!}</ul></td>
                            @elseif($lnk=="input_pemberdayaan_perempuan")
                            <td align="left"><ul>{!! '<li>'.$itg->header_dua .' ( '. $itg->header_tiga .' ) </li> <ul><li>'.$itg->header_empat.'-'.$itg->header_lima.'</li><ul>'.$itg->header_enam.'('.$itg->input.')</li></ul></ul></li>' !!}</ul></td>
                            @else
                                <td align="left"><ul> {!!'<li>'.$itg->input.'</li>'!!}</ul></td>
                            @endif
                            @php
                                $cthn=DB::table($ld)->whereBetween('tahun',[$t1,$t2])->where('kode',$itg->kode)->get();
                            @endphp
                            {{-- <td>{{$itg->jumlah}}</td> --}}
                            <td>{{$itg->bentuk}}</td>
                            <td>{{$itg->sumber}}</td>
                            {{-- <td>{{$itg->tahun}}</td> --}}
                            <td>{{$itg->tanggal}}</td>
                            @foreach ($cthn as $icth)
                            <td>{{$icth->jumlah}}</td>
                            @endforeach
                            <td>
                                <button onclick="tampilgrafik('{{$ld}}','{{$itg->kode}}','{{$t1}}','{{$t2}}')" class="btn btn-outline-primary btn-sm"><i class="fa fa-chart-bar"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tr>
            @endforeach
        </table>
    {{-- </div> --}}
</div>
{{-- modal --}}
<div class="modal fade" id="modalgrafik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body pt-3 text-center">
                <h5 class="text-muted mt-5" id="loadingtext"> <i class="fa fa-hourglass"></i> Loading...</h5>
                    <div id="chartContainer" style="height: 360px; width: 100%;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
</div>

