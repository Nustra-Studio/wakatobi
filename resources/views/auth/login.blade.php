{{-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Login</b>Page</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('login') }}" method="post">
                @csrf
                    <div class="input-group mb-3">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                            name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="input-group mb-3">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">


                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>

                <!-- <div class="social-auth-links text-center mb-3">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div> -->
                <!-- <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p> -->
            </div>
        </div>
    </div>
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>

</body>

</html> --}}

        <!DOCTYPE html>
        <html lang="id">

        <head>
            <title>Administrator - Masuk - Kabupaten Wakatobi</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            <style></style>
        </head>

        <body id="page">
            <div class="bg_one"></div>
            <div class="signin_container">
                <div class="signin_box"><a href="https://sipd.wakatobikab.go.id">
                        <div class="logo"></div>
                    </a>
                    <div id="signin_div">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
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