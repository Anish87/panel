<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vintage Miami - Home</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/style.css">
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
        <div class="my-5 text-center mx-auto h1">
            <span class="vfont display-3">Coming Soon</span>
            <br>
            <span class="vfont">Stay tuned!</span>
        </div>
        <!-- Footer -->
        @include('comp/footer')
    <!-- Scripts -->
    <script src="js/app.js"></script>
    </body>
</html>
