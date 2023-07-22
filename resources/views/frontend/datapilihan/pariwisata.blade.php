@extends('layouts/frontend/base')

@section('content')

<body>
    <!-- <div class="container-fluit" style="padding-top: 4.5%;">
    <img src="{{asset('img/Pantai Lakota (1332 px x 694 px).jpg')}}" class="img-fluid" alt="Responsive image" style="width:100%;height:500px;">
  </div> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div class="container" style="padding-top:10%">
        <div class="row">

            @include('layouts/frontend/navleft')
            <div class="col-md-8 col-sm-10">
                <link href="{{asset('assets/select2user.css')}}" rel="stylesheet">
                <section class="text-center mb-0" style="padding-bottom:15%;">
                    <div class="container">
                        <form method="get" action="{{url('pariwisata/cari')}}">
                        {{csrf_field()}}
                            <h1 style="text-align:center;">Cari Data Pariwisata</h1>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6 col-sm-offset-1">
                                    <div class="form-group">
                                        <label>Tahun Mulai<small> :</small></label>

                                        <select id="tahun_akhir" class="select2 form-control" name="taaw">
                                            <option></option>
                                            @foreach($data as $view)
                                            <option value="{{$view->tahun}}">{{$view->tahun}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-sm-offset-1">
                                    <div class="form-group">
                                        <label>Tahun Akhir<small> :</small></label>
                                        <select id="tahun_awal" class="select2 form-control" name="taak">
                                            <option></option>
                                            @foreach($data as $view)
                                            <option value="{{$view->tahun}}">{{$view->tahun}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <!-- <button type="reset" class="btn btn-success">Reset</button> -->
                                <button type="submit" class="btn btn-info">Tampilkan</button>
                                <a onclick="window.history.go(-1);"><button type="button"
                                        class="btn btn-danger">Kembali</button></a>
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