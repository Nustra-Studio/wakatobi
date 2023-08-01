@extends('layouts/frontend/base')

@section('content')

<body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div class="container" style="padding-top:10%">
        <div class="row">

            @include('layouts/frontend/navleft')
            <div class="col-md-8 col-sm-10">
                <link href="{{asset('assets/select2user.css')}}" rel="stylesheet">
                <section class="text-center mb-0" style="padding-bottom:15%;">
                    <div class="container">
                        <form method="get" action="{{url('kesehatan/cari')}}">
                        {{csrf_field()}}
                            <h1 style="text-align:center;"><i class="fa fa-search"></i> Cari Data Kesehatan</h1>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-1">
                                    <div class="form-group">
                                        <label>Tahun Mulai<small> :</small></label>

                                        <select id="tahun_akhir" class="select2 form-control" name="taaw">
                                            @foreach($data as $tahun)
                                            <option value="{{$tahun->tahun}}">{{$tahun->tahun}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-sm-offset-1">
                                    <div class="form-group">
                                        <label>Tahun Akhir<small> :</small></label>
                                        <select id="tahun_awal" class="select2 form-control" name="taak">
                                            @foreach($data as $tahun)
                                            <option value="{{$tahun->tahun}}">{{$tahun->tahun}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-3 text-white">
                                <!-- <button type="reset" class="btn btn-success">Reset</button> -->
                                <button type="submit" class="btn btn-md btn-info mx-2">Tampilkan</button>
                                <a onclick="window.history.go(-1);"><button type="button"
                                        class="btn btn-md btn-danger mx-2">Kembali</button></a>
                            </div>
                        </form>

                    </div>

                </section>
            </div>
        </div>
    </div>

    @include('layouts/frontend/footer')
    </div>

</body>
@endsection