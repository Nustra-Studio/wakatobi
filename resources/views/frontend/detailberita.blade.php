@extends('layouts/frontend/base')

@section('content')

<body>
    <div class="container-fluit" style="background-color: #E9EEEF;padding-right: 7%;padding-left: 7%;padding-top: 6%;">
        <div class="row" style="background-color: #E9EEEF;padding-bottom: 3%;margin-right: 3%;margin-left: 3%;">
            @foreach($data as $detail)
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="display-5"><b>{{$detail->judul}}</b></h3>
                        <hr>
                        <img src="{{asset('images/berita/'.$detail->gambar)}}"
                            class="card-img-top img-thumnail imgcustom" alt="..." style="border: solid #E6E9E8 4px;">
                        <p class="lead" style="font-size:17px;">{!!$detail->isi!!}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="display-5"><b>Berita Lainnya</b></h5>
                        <ul type="none">

                            @foreach($databerita as $populer)
                            <a href="{{ url('/detail-berita/'.$populer->slug) }}">
                                <li style="color:black;"><i class="fa fa-newspaper text-info"></i> {{$populer->judul}}</li>
                            </a>
                            <hr>
                            @endforeach
                        </ul>
                        <p class="lead"></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="display-5"><b>Artikel Terbaru</b></h5>
                        <ul type="none">
                            @foreach($dataartikel as $newartikel)
                            <a href="{{ url('/detail-artikel/'.$newartikel->slug) }}">
                            <li style="color:black;"><i class="fa fa-tag text-info"></i> {{$newartikel->judul}}</li>
                            </a>
                            <hr>
                            @endforeach
                        </ul>
                        <p class="lead"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluit" style="padding-right: 7%;padding-left: 7%;padding-top: 1%;">
        <div class="row" style="padding-bottom: 3%;margin-right: 3%;margin-left: 3%;">
            <div class="col-md-12 mt-2">
                <h2>Berita terbaru</h2>
            </div>
            @foreach($databerita as $terbaru)
            <div class="col-md-3">
                <img src="{{asset('images/berita/'.$terbaru->gambar)}}" class="card-img-top img-thumnail imgcustom"
                    alt="..." style="border: solid #E6E9E8 4px;">
                <div class="card-body" style="background-color:none;">
                    <h5 class="card-title">{{$terbaru->judul}}</h5>
                    <p class="card-text">{!!substr($terbaru->isi,0 , 50)!!}...</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('layouts/frontend/footer')
    </div>
</body>
@endsection