@php
$webset = DB::table('web_setting')->orderby('id','desc')->limit(1)->get();
$visitor = DB::table('visitor')->count();
@endphp
@foreach($webset as $ws)
<div class="row pt-4 pl-5 pr-5 pb-3 text-white" style="background-color: #133251;">
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
</div>
@endforeach