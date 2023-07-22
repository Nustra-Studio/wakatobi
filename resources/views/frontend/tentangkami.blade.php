@extends('layouts/frontend/base')

@section('content')

<body>
    <!-- <nav aria-label="breadcrumb" style="padding-top: 4.6%;background:black;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav> -->
    <div class="container-fluid" style="padding-top: 5%;">
        <img src="{{asset('img/flat.jpeg')}}" class="img-fluid" alt="Responsive image" style="width:100%;height:500px;">
    </div>
    <div class="container-fluit" style="padding-right: 7%;padding-left: 7%;padding-top: 1%;">
        <div class="row" style="padding-bottom: 3%;margin-right: 3%;margin-left: 3%;">
            <div class="col-md-12 mt-2" align="center">
                <h2>Tentang Kami</h2>
            </div>
            @php
            $webset = DB::table('web_setting')->orderby('id','desc')->limit(1)->get();
            @endphp
            @foreach($webset as $ws)
            <div class="col-md-12" style="background-color:default;">
                <div class="container-fluid">
                    <div class="card-body" style="background-color:none;">
                        <h5 class="card-title">
                            {{$ws->deskripsi}}
                        </h5>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 mt-2 mb-3" align="center">
                            <h2>Motto Kami</h2>
                            <p>
                            {{$ws->moto}}
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 mt-2 mb-3" align="center">
                            <h2>Hubungi Kami</h2>
                        </div>
                        <div class="col-sm-6 col-md-4">

                            <div class="card" style="background-color: #133251; text-align:center; color:white;">
                                <div class="card-body">
                                    <i class="fab fa-instagram ml-2 fa-5x"></i>
                                    <p class="card-text" style="padding-top:5%;">With supporting text below as a natural
                                        lead-in to additional
                                        content.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="card" style="background-color: #133251; text-align:center; color:white;">
                                <div class="card-body">
                                    <i class="fab fa-facebook ml-2 fa-5x"></i>
                                    <p class="card-text" style="padding-top:5%;">With supporting text below as a natural
                                        lead-in to additional
                                        content.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="card" style="background-color: #133251; text-align:center; color:white;">
                                <div class="card-body">
                                    <i class="fab fa-youtube ml-2 fa-5x"></i>
                                    <p class="card-text" style="padding-top:5%;">With supporting text below as a natural
                                        lead-in to additional
                                        content.</p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-center text-uppercase text-secondary mb-0 mt-5">Lokasi Kami</h2>
                    <br>
                    <div class="row">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15811.040748701675!2d112.0699626!3d-7.8151904!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4f4428370fac379f!2sSuryantara+Cargo!5e0!3m2!1sid!2sid!4v1547396770588"
                            width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @include('layouts/frontend/footer')
    </div>

</body>
@endsection