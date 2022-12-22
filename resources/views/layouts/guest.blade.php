<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

        <style>
            .circle {
                height: 300px;
                width: 300px;
                border: 75px solid lightgrey;
                border-radius: 50%;
            }
            .bg-img {
                min-height: 400px;
                background-image: url('img/guest-bg.jpeg');
                background-size: cover;
                background-position: center;
            }
            .vh-125 {min-height: 125vh}
            .vh-100 {min-height: 100vh}
        </style>
    </head>
    <body>
        <nav class="navbar position-absolute top-0" style="z-index:1">
            <div class="container">
                <a class="navbar-brand" href="{{ route('dashboard') }}">{{ strtoupper(config('app.name')) }}</a>
            </div>
        </nav>
        <div class="row vh-100">
            <div class="col-lg bg-img d-none d-lg-block"></div>
            <div class="col-lg">
                <div class="bg-white vh-100 position-relative" style="margin-left: -38px; border-radius: 32px">
                    <div class="circle ms-5 mb-5"></div>
                    <div class="circle ms-auto me-lg-5"></div>
                    @yield('content')
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            let p = document.getElementById("password");
            let btnShow = document.getElementById("btnShow");
            let btnHide = document.getElementById("btnHide");
            btnHide.style.display = 'none';
            function showPassword() {
                p.type = 'text';
                btnShow.style.display = 'none';
                btnHide.style.display = 'block';
            }
            function hidePassword() {
                p.type = 'password';
                btnShow.style.display = 'block';
                btnHide.style.display = 'none';
            }
        </script>
    </body>
</html>
