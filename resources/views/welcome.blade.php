<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bengkel Delta</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a87e9d7c5f.js" crossorigin="anonymous"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/main.css') !!}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet">
</head>

<body class="antialiased">
    <div class="limiter">
        <div class="container-login100" style="background-image: url(images/mobil.jpg);">
            <div class="container">
                <div class="row intro-text align-items-center justify-content-center">
                    <div class="col-md-10 animated tada">
                    <center><h1><strong class="d-block" style="color: white;"></strong></h1>
                        <h1><strong class="d-block" style="color: white;"></strong></h1>
                        <strong class="d-block text-white text-uppercase letter-spacing"></strong><br>
                        <div class="container-login100-form-btn2-center">
                            <a href="{{ route('login') }}">
                                <button class="login100-form-btn">Mulai</button>
                            </a>
                        </div>
                        <center>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>