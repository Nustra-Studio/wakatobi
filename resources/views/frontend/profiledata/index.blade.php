@extends('layouts/frontend/base')
@section('css')
<style>
    .card-style{
        font-size: 12px !important;
    }
    .card-header{
        font-size: 12px !important;
    }
    ul{
        list-style-type:none;
    }
    .center_div{
        margin: 0 auto;
        width:80% /* value of your choice which suits your alignment */
    }
</style>
    <link rel="stylesheet" href="{{asset('yearpicker/css/yearpicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/sweetalert2/sweetalert2.min.css')}}">
@endsection
@section('content')
<body>
    <!-- <div class="container-fluit" style="padding-top: 4.5%;">
    <img src="{{asset('img/Pantai Lakota (1332 px x 694 px).jpg')}}" class="img-fluid" alt="Responsive image" style="width:100%;height:500px;">
  </div> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .vl {
        border-right: 1px solid #CED4DA;
        height: auto;
    }
    </style>
    <div class="container" style="padding-top:7%">
        <div class="row">
            @include('layouts/frontend/navleft')
            <div class="col-md-10 col-lg-10">
                <link href="{{asset('assets/select2user.css')}}" rel="stylesheet">
                <section class="text-center mb-0" style="padding-bottom:15%;">
                    <div class="container">
                       {{-- <div class="card">
                           <div class="card-header">
                               <div class="card-tools"> --}}
                                   <div class="text-center"><h4>{{$kat}}</h4></div>
                                   <br>
                                <form action="{{route('lpertahun')}}" method="get" class="form-inline center_div">
                                    @csrf
                                    <input type="hidden" name="kat" value="{{$kat}}">
                                    <input type="hidden" name="lnk" value="{{$lnk}}">
                                    <input type="hidden" name="ld" value="{{$ld}}">
                                    <div class="form-group mr-2 mb-3">
                                        <label for=""class="mr-2">Tahun </label>
                                        <input type="text" name="t1" value="{{$t1}}" readonly class="form-control yp" id="y1">
                                    </div>
                                    <div class="form-group mr-2 mb-3">
                                        <label for="" class="mr-2">S/D</label>
                                        <input type="text" name="t2" value="{{$t2}}" readonly class="form-control yp" id="y2">
                                    </div>
                                    <div class="form-group mr-2 mb-3">
                                        <button type="submit" class="btn btn-outline-primary btn-sm">Tampilkan</button>
                                    </div>
                                    <div class="form-group mr-2 mb-3">
                                        {{-- <button type="button" onclick="printd()" class="btn btn-success btn-sm"><i class="fa fa-file-excel"></i> Download</button> --}}
                                    </div>
                                </form>
                               {{-- </div> --}}
                           {{-- </div> --}}
                           {{-- <div class="card-body"> --}}
                               <div id="tag_container">
                                @if ($kl=="0")
                                    @include('frontend.profiledata.data')
                                @endif

                               </div>
                           {{-- </div> --}}
                       {{-- </div> --}}
                    </div>
                </section>
            </div>
        </div>
    </div>
    @include('layouts/frontend/footer')
    </div>

</body>
@endsection
@section('customjs')
    {{-- <script src="{{asset('')}}"></script> --}}
    <script src="{{asset('assets/canvasjs/canvasjs.min.js')}}"></script>
    <script src="{{asset('yearpicker/js/yearpicker.js')}}"></script>
    <script src="{{asset('loading/tableExport.js')}}"></script>
    <script src="{{asset('loading/jquery.loading.js')}}"></script>
    <script src="{{asset('assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
@endsection
@push('customscripts')
    <script>
        // getData('geografis');

        $('.yp').yearpicker();

        // function getData($link) {
        //     $y1=$('#y1').val();
        //     $y2=$('#y2').val();
        //     $('#tag_container').loading({
        //             stoppable: true,
        //             message: "Please wait .....",
        //             theme: "dark"
        //             });
        //     $.ajax({
        //         url:'data-list/'+$link+'/'+y1+'/'+y2,
        //         type:'get',
        //         dataType:'html',
        //     }).done(function(data,dba){
        //         $('#tag_container').empty().html(data);
        //         $('#container_sub').append(dba);
        //         console.log(dba);
        //         $('#tag_container').loading('stop');
        //     }).fail(function(jqXHR, ajaxOptions, thrownError){
        //         $('#tag_container').loading('stop');
        //     });
        // }
        function printd() {
            var jdl=$('#jdltbl').text();
             // get data table
             $('#tbl').tableExport({
               format:'xls',
               filename:'report-'+jdl,
            });
        }
        function tampilgrafik(ld,kode, tahunawal, tahunakhir) {
            $('#loadingtext').show();
            var datanya = [];

            var chart = new CanvasJS.Chart("chartContainer", {
                exportEnabled: true,
                axisY:{
                minimum: 0
                },
                theme: "light2",
                animationEnabled: true,
                data: [{
                    indexLabelFontSize: 15,
                    type: "column",
                    dataPoints: datanya
                }]
            });

            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/profile-data/graph-data/'+ ld + '/' + kode + '/' + tahunawal + '/' + tahunakhir,
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
@endpush
