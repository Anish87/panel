<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Error 404 - Page not Found</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
        <link href="http://fonts.cdnfonts.com/css/bulletproof-bb" rel="stylesheet">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/jpg" href="favicon.png"/>
    </head>
    <body class="bg-cblack">
        <div class="banner d-flex justify-content-center align-items-center">
            <div class="text-center sr-only">
                <span class="text-light vfont">
                    <span class="h1">Vintage Miami</span>
                    <br>
                    <span class="h3">Redefining the Legacy</span>
                </span>
            </div>
        </div>
        <div class="my-5 text-center mx-auto">
            <h1 class="vfont-d text-danger">Unknown page!</h1>
            <h4 class="vfont h3">You seem to be lost, let's get you back home!
            <br>
            <a href="/" class="text-decoration-none text-light">Click here to go back</a>
            </h4>
        </div>
        <!-- Footer -->
        @include('comp/footer')
    <!-- Scripts -->
    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
