@extends('layouts/frontend/base')

@section('content')

<body>
    <div class="container-fluit" style="padding-right: 7%;padding-left: 7%;padding-top: 1%;">
        <div class="row" style="padding-bottom: 3%;margin-right: 3%;margin-left: 3%;padding-top:4%;">
            <div class="col-md-12 mt-5 pt-4">
                <h1 style="text-align:center;">Galeri</h1>
                <hr>
            </div>
            @foreach($datagaleri as $semuagambar)
            <div class="col-md-3">
                <a href="#" data-toggle="modal" data-target="#galeri{{$semuagambar->id}}">
                    <img src="{{asset('images/galeri/'.$semuagambar->gambar)}}" class="card-img-top img-thumnail imgcustom"
                        alt="..." style="border: solid #E6E9E8 4px;">
                    <div class="card-body text-center" style="background-color:none;">
                        {{$semuagambar->judul}}
                    </div>
                </a>
                <div class="modal fade" id="galeri{{$semuagambar->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{$semuagambar->judul}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="{{asset('images/galeri/'.$semuagambar->gambar)}}"
                                    class="card-img-top img-thumnail imgcustom" alt="..."
                                    style="border: solid #E6E9E8 4px;">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12">
            {{ $datagaleri->links() }}
            </div>
        </div>
    </div>

    @include('layouts/frontend/footer')
    </div>
</body>

@endsection