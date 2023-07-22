@extends('layouts/frontend/base')

@section('content')

<body>
    <div class="container-fluid" style="padding-right: 7%;padding-left: 7%;padding-top: 1%;">
        <div class="row" style="padding-bottom: 3%;margin-right: 3%;margin-left: 3%;padding-top:4%;">
            <div class="col-md-12 mt-5 pt-4">
                <h1 style="text-align:center;">Semua Artikel</h1>
                <hr>
            </div>
            @foreach($dataartikel as $semuaartikel)
            <div class="col-md-3">
                <a href="{{ url('/detail-artikel/'.$semuaartikel->slug) }}">
                    <img src="{{asset('images/artikel/'.$semuaartikel->gambar)}}"
                        class="card-img-top img-thumnail imgcustom" alt="..." style="border: solid #E6E9E8 4px;">
                    <div class="card-body pt-2 text-dark" style="background-color:none;">
                        <h4 class="mb-0" style="padding-bottom:2%;">{{$semuaartikel->judul}}</h4>
                        {!!substr($semuaartikel->isi,0 , 100)!!}... <br>
                        <span class="text-info"><i class="fa fa-tag"></i> {{$semuaartikel->katartikel}}</span>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="col-md-12">
                {{ $dataartikel->links() }}
            </div>
        </div>
    </div>

    @include('layouts/frontend/footer')
    </div>

</body>
@endsection