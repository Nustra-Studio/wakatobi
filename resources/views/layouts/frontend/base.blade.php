<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @php
  $webset = DB::table('web_setting')->orderby('id','desc')->limit(1)->get();
  @endphp
  @foreach($webset as $ws)
  <title>{{$ws->singkatan}}</title>
  @endforeach
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/dist/css/custom.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('assets/style.css')}}">
  {{-- <style>
    .imgcustom {
      height: 250px;
      object-fit: cover;
    }

    .carousel-item {
      height: 670px;
    }

    .carousel-item img {
      height: 670px;
    }

    @media (max-width: 480px) {
      .container-fluit {
        padding: 0px;
        margin: 0px;
      }

      #card {
        display: none;
      }
    }

    @media screen and (min-width: 0px) and (max-width: 480px) {
      #mincard {
        display: block;
      }

      /* show it on small screens */
    }

    @media screen and (min-width: 481px) {
      #minicard {
        display: none;
      }

      /* hide it elsewhere */
    }
  </style> --}}
  <link href="{{asset('img/image1.png')}}" rel="shortcut Icon">
</head>

{{-- <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #E6E9E8;padding:0px;">
  <a class="navbar-brand ml-3" href="#" style="color: black;">
  @php
  $webset = DB::table('web_setting')->orderby('id','desc')->limit(1)->get();
  @endphp
  @foreach($webset as $ws)
  <img src="{{asset('images/setting/'.$ws->logo)}}" alt=""  width="55">
  <span id="textheader" style="font-size:20px;">{{$ws->nama}}</span>

  @endforeach
  </a>
  <button class="navbar-toggler mr-3" style="background-color: #133251;" type="button" data-toggle="collapse"
    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" style="height: 70px;" id="navbarCollapse">
    <ul class="navbar-nav ml-auto" style="height: 100%;">
      <li class="nav-item active pl-2">
        <a class="nav-link pt-3 text-dark" href="{{url('/')}}"><i class="fa fa-home fa-2x" style="color: #133251;"></i></a>
      </li>
      <li class="nav-item active pl-2">
        <a class="nav-link pt-4 text-dark" href="{{url('/profile-data')}}">PROFILE DATA</a>
      </li>

      <li class="nav-item active pl-2">
        <a class="nav-link pt-4 text-dark" href="{{url('semua-galeri')}}">GALERI</a>
      </li>
      <li class="nav-item active pl-2">
        <a class="nav-link pt-4 text-dark" href="{{url('semua-artikel')}}">ARTIKEL</a>
    
      <li class="nav-item active pl-2">
        <a class="nav-link pt-4 text-dark" href="{{url('semua-berita')}}">BERITA</a>
      </li>
      <li class="nav-item active pl-2">
        <a class="nav-link pt-4 text-dark" href="{{url('tentang-kami')}}">TENTANG KAMI</a>
      </li>
      <li class="nav-item active text-center pl-2 pr-2" style="background-color: #133251;">
        <a class="nav-link pt-4 pb-3" href="{{url('login')}}">
          <i class="fa fa-user-circle"></i> LOGIN</a>
      </li>
    </ul>
  </div>
</nav> --}}
<nav class="navbar bg-dark fixed-top navbar-expand-lg navbar-dark p-md-1">
  <div class="container">
    <a class="navbar-brand ml-3" href="{{url('/')}}">
      @php
      $webset = DB::table('web_setting')->orderby('id','desc')->limit(1)->get();
      @endphp
      @foreach($webset as $ws)
      <img src="{{asset('images/setting/'.$ws->logo)}}" alt=""  width="45">
      <span class="mx-2" id="textheader" style="font-size:18px;">{{$ws->nama}}</span>
    
      @endforeach
      </a>
      <button
      type="button"
      class="navbar-toggler"
      data-bs-target="#navbarNav"
      data-bs-toggle="collapse"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle Navbar">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
              <li class="nav-item dropdown me-4">
                  <a class="nav-link text-white" href="{{url('/profile-data')}}" >
                    Profile Data
                  </a>
                </li>
              <li class="nav-item me-4"><a href="#berita" class="nav-link text-white">Berita</a></li>
              <li class="nav-item me-4"><a href="#galeri" class="nav-link text-white">Galeri</a></li>
              <li class="nav-item me-4"><a href="#artikel" class="nav-link text-white">Artikel</a></li>
              <li class="nav-item me-4"><a href="#tentang-kami" class="nav-link text-white">Tentang Kami</a></li>
          </ul>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{url('login')}}" class=" btn button text-center mt-md-2 me-4">Login</a>
          </div>
      
      </div>
  </div>
</nav>
@yield('content')
{{-- <footer class="footer mt-auto py-3 bg-dark text-center" style="background-color: #801515;">
  <div class="container">
    @php
        $tahun = date('Y');
    @endphp
    <span class="text-white">Copyright ©{{$tahun}}  WAKATOBI</span>
  </div>
</footer> --}}
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
@yield('customjs')
@yield('customscripts')
</html>