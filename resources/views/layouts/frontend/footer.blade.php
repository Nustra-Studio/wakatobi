@php
$webset = DB::table('web_setting')->orderby('id','desc')->limit(1)->get();
$visitor_bulan = DB::table('visitor')->whereMonth('date', date('m'))->count();
$visitor_hari = DB::table('visitor')->whereDay('date', date('d'))->count();
$visitor_kemarin = DB::table('visitor')->whereDay('date', date('d', strtotime('-1 days')))->count();
$visitor_minggu = DB::table('visitor')->whereBetween('date', [date('Y-m-d', strtotime('-7 days')), date('Y-m-d')])->count();
$visitor = DB::table('visitor')->count();
@endphp
@foreach($webset as $ws)
{{-- <div class="row pt-4 pl-5 pr-5 pb-3 text-white" style="background-color: #133251;">
    <div class="col-md-4 mb-3 text-center">
        <h3>KONTAK</h3>
        <hr style="border: solid 2px;color: white;">
        <i class="fa fa-phone"></i> {{$ws->telp_satu}}
        <i class="fa fa-phone ml-2"></i> {{$ws->telp_dua}} <br>
    </div>
    <div class="col-md-4 mb-3 text-center">
        <h3>LINKS</h3>
        <hr style="border: solid 2px;color: white;">
        <i class="fab fa-instagram ml-2"></i> <a href="{{$ws->link_ig}}" target="blank()"
            style="color:white">Instagram</a>
        <i class="fab fa-facebook ml-2"></i> <a href="{{$ws->link_fb}}" target="blank()"
            style="color:white">Facebook</a>
        <i class="fab fa-youtube ml-2"></i> <a href="{{$ws->link_youtube}}" target="blank()"
            style="color:white">Youtube</a> <br>
    </div>
    <div class="col-md-4 mb-3 text-center">
        <h3>PENGUNJUNG</h3>
        <hr style="border: solid 2px;color: white;">
        <h3><i class="fa fa-users"></i> {{$visitor}} Orang</h3>

    </div>
</div> --}}
<footer>
        <div class="container">
        <div class="row d-flex ">
        <div class="col-lg-6 text-white">
            <div class=" d-flex align-items-center">
                <img src="/img/Frame5.png" alt=""> 
                <h3>Kabupaten Wakatobi</h3>
            </div>
            <div class="footer-item">
                <span>Jl. Merdeka No. 1, Sulawesi Tenggara, Indonesia</span>
                <span>Telp 1 :{{$ws->telp_satu}}</span>
                <span>Faks : {{$ws->telp_dua}}</span>
                <span>Email : wakatobi@info.id</span>
            </div>

            </div>  
            <div class="col-lg-3 text-white partnership">
            <h3>Partnership</h3>
            <div class="footer-item">
            <span><a href="">Pemda Wakatobi</a></span>
            <span><a href="">BPS Kab. Wakatobii</a></span>
            <span><a href="">SIPD</a></span>
            </div>
            </div>
            <div class="col-lg-3 text-white socialMedia">
            <h3>Social Media</h3>
            <div class="link footer-item">
                <a href="{{$ws->link_fb}}"><img src="img/facebook.png" alt=""></a>
                <a href="{{$ws->link_ig}}"><img src="img/instagram_icon.png" alt=""></a>
                <a href=""><img src="img/twitter.png" alt=""></a>
                <a href="{{$ws->link_youtube}}"><img src="img/youtube.png" alt=""></a>
            </div> 
            </div>
        </div>
        <p class="text-white pengunjung">Pengunjung hari ini : {{$visitor_hari}} Kemarin : {{$visitor_kemarin}} Minggu ini : {{$visitor_minggu}} </br>
            Bulan ini : {{$visitor_bulan}} Total : {{$visitor}} </p>
            <div class="garis"></div>
            <p class=" d-flex text-white justify-content-center mt-5">
                @php
                $tahun = date('Y');
                @endphp
            <span class="me-2">&#169</span>{{$tahun}}{{ }}Dinas Komunikasi, Informatika dan Statistik Kabupaten Wakatobi</p>
        </div>
    
</footer>
@endforeach