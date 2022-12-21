<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- Scripts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <style>
            .bg-img {
                min-height: 400px;
                background-image: url('img/header-background.jpeg');
                background-size: cover;
                background-position: center;
            }
            [class*="h-"] {
                background-size: cover;
                background-position: center;
            }
            .h-700 {height: 700px}
            .h-600 {height: 600px}
            .h-500 {height: 500px}
            .h-400 {height: 400px}
            .h-300 {height: 300px}
            .h-250 {height: 250px}
            .overlay {
                background-color: rgba(255,255,255,0.1);
                height: 100%;
                min-height: 400px;
            }
            @media only screen and (min-width: 600px) {
                .bg-img, .overlay {
                    min-height: 700px;
                }
            }
        </style>
    </head>
    <body class="">
        @yield('content')    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
