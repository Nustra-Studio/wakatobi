

        <!DOCTYPE html>
        <html lang="id">

        <head>
            <title>Administrator - Masuk - Kabupaten Wakatobi</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="shortcut icon" href="https://www.wakatobikab.go.id/favicon.ico">
            <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css"
                href="https://www.wakatobikab.go.id/asset/plugin/simple-line-icons-webfont/simple-line-icons.css">
            <link rel="stylesheet" type="text/css"
                href="https://www.wakatobikab.go.id/asset/plugin/jquery-3.1.1/jquery.dataTables.min.css">
            <link rel="stylesheet" type="text/css" href="https://www.wakatobikab.go.id/asset/plugin/jquery-3.1.1/jquery-ui.css">
            <link rel="stylesheet" type="text/css" href="https://www.wakatobikab.go.id/asset/plugin/rvnm/jquery-rvnm.min.css">
            <link rel="stylesheet" type="text/css" href="https://www.wakatobikab.go.id/asset/plugin/select2/select2.min.css">
            <link rel="stylesheet" type="text/css"
                href="https://www.wakatobikab.go.id/asset/plugin/ion.rangeSlider/css/ion.rangeSlider.css">
            <link rel="stylesheet" type="text/css"
                href="https://www.wakatobikab.go.id/asset/plugin/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css"
                href="https://www.wakatobikab.go.id/asset/plugin/line-awesome/css/line-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="https://www.wakatobikab.go.id/asset/vendors/iconsax/style.css">
            <link rel="stylesheet" type="text/css" href="https://www.wakatobikab.go.id/asset/css/global.css">
            <link rel="stylesheet" type="text/css" href="https://www.wakatobikab.go.id/asset/css/layout.css">
            <link rel="stylesheet" type="text/css" href="https://www.wakatobikab.go.id/asset/css/page_signin.css">
            <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
            <style>  
            .signin_container {
                display: block;
                width: 520px;
                min-height: 520px;
                background-color: #fff;
                box-shadow: 0px 2px 30px #999;
                margin: auto;
                position: relative;
                z-index: 1;
                margin-top: 11%;
                overflow: hidden;
            }</style>
        </head>

        <body id="page">
            <div class="bg_one"></div>
            <div class="signin_container">
                <div class="signin_box"><a href="https://sipd.wakatobikab.go.id">
                        <div class="logo"></div>
                    </a>
                    <div id="signin_div">
                        <form action="{{ route('login') }}" method="post">
                            <div class="signin_head"><span id="headtitle">Masuk</span>
                                <div class="service_name">untuk mengakses panel <b>Wakatobi</b></div>
                            </div>
                            <div class="fieldcontainer">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="searchparent">
                                    <div class="textbox_div">
                                        @csrf
                                        <input placeholder="USERNAME" class="textbox" type="text"
                                        name="username" value="{{ old('username') }}" autocomplete="off">
                                    
                                            <input placeholder="PASSWORD" class="textbox"
                                            type="password" name="password" autocomplete="off">
                                        </div>
                                </div>
                            </div><button type="submit" class="btn" style="background-color: #0048af; color:white; ">MASUK</button>
                        </form>
                    </div>
                </div>
                <div class="rightside_box d-none">
                    
                </div>
            </div>
            <script src="https://www.wakatobikab.go.id/asset/plugin/jquery-3.1.1/jquery-3.1.1.min.js"></script>
            <script src="https://www.wakatobikab.go.id/asset/plugin/jquery-3.1.1/jquery-ui.js"></script>
            <script src="https://www.wakatobikab.go.id/asset/plugin/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
            <script src="https://www.wakatobikab.go.id/asset/plugin/amd-1.0/amd.min.js"></script>
            <script src="https://www.wakatobikab.go.id/asset/plugin/rvnm/rvnm.min.js"></script>
            <script src="https://www.wakatobikab.go.id/asset/plugin/select2/select2.min.js"></script>
            <script src="https://www.wakatobikab.go.id/asset/js/global.js"></script>
            <script src="https://www.wakatobikab.go.id/asset/js/layout.js"></script>
            <script src="https://www.wakatobikab.go.id/asset/plugin/feather/feather.min.js"></script>
            <script src="https://www.wakatobikab.go.id/asset/vendors/popper.js/js/popper.min.js"></script>
            <script src="https://www.wakatobikab.go.id/asset/vendors/bootstrap/js/bootstrap.min.js"></script>
            <script src="https://www.wakatobikab.go.id/asset/vendors/pace-progress/js/pace.min.js"></script>
            <script src="https://www.wakatobikab.go.id/asset/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
            <script src="https://www.wakatobikab.go.id/asset/vendors/@coreui/coreui/js/coreui.min.js"></script>
            <script src="https://www.wakatobikab.go.id/asset/vendors/chart.js/js/Chart.min.js"></script>
        </body>

        </html>