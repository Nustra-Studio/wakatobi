<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  @php
  $webset = DB::table('web_setting')->orderby('id','desc')->limit(1)->get();
  @endphp
  @foreach($webset as $ws)
  <title>{{$ws->singkatan}}</title>
  @endforeach
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/dist/css/custom.css')}}">
  <style>
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
  </style>
</head>

<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #E6E9E8;padding:0px;">
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
</nav>

@yield('content')
<footer class="footer mt-auto py-3 bg-dark text-center" style="background-color: #801515;">
  <div class="container">
    <span class="text-white">Copyright © 2020 WAKATOBI</span>
  </div>
</footer>
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
@yield('customjs')
@yield('customscripts')
</html>