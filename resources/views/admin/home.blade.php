<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vintage Miami - Reliving the 80s</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/jpg" href="favicon.png"/>
    </head>
    <body class="bg-cblack">
        <!-- Navigation Srt -->
        @include('comp/staffNav')
        <!-- Navigation End -->

        <!-- Main -->
        <div class="container-fluid">
        </div>

        <!-- Footer -->
        @include('comp/footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
