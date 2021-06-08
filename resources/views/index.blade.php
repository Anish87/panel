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
    <body class="bg-cblack2 overflow-hidden" style="width: 100%;">
        <!-- Navigation Srt -->
        @include('comp/nav')
        <!-- Navigation End -->
        <div class="container-fluid">
            <div class="row text-light mt-3">
                <span class="mx-auto vfont bg-vyellow p-2 h1" style="color: #0a373a !important; padding-bottom: 0 !important;">About the server</span>
            </div>
            <div class="row text-light p-4 py-md-0">
                <p class="mx-auto fontfam-m">
                    <strong>Vintage Miami - Redifing the Legacy</strong>, is a VC:MP server based on the roleplay gamemode.
                    It mainly focuses on different sorts of jobs, through which players can earn money to buy houses, businesses and vehicles.
                    The server provides different sorts of GUI features, custom vehicles and houses from other GTA games.
                    <br>
                    This is an individual server development project led by <strong>Anish</strong>, in association with the <a class="text-ov" href="https://onevice.vcmp.net/">OneVice</a> team.
                </p>
            </div>
            <div class="row text-light mt-3">
                <span class="mx-auto vfont bg-vyellow p-2 h1" style="color: #0a373a !important; padding-bottom: 0 !important;">Quick Links</span>
            </div>
            <div class="row d-flex justify-content-center align-items-center">
                <div class="btn-group mx-2 ">
                    <button class="btn btn-primary forum-append d-flex justify-content-center align-items-center border-0"><i class="fas fa-comments fa-lg"></i></button>
                    <a href="discord" class="btn btn-primary border-0 forum-btn">
                        <span>Forums</span>
                    </a>
                </div>
                <div class="btn-group mx-2">
                    <button class="btn btn-blurple-alt blurple-append d-flex justify-content-center align-items-center border-0"><i class="fab fa-discord fa-lg"></i></button>
                    <a href="discord" class="btn btn-blurple-alt2 border-0">Discord</a>
                </div>
                <div class="btn-group mx-2">
                    <button class="btn btn-dark2-append d-flex justify-content-center align-items-center border-0">
                        <img src="https://gamepanel.vcmp.net/assets/images/logo-sm.png" height="22">
                    </button>
                    <a href="https://onevice.vcmp.net" class="btn btn-dark2 text-light border-0 font-heavitas">OneVice</a>
                </div>
                @if($sessionUser !== 'Panel Guest')
                <div class="btn-group mx-2 ">
                    <button class="btn btn-success profile-append d-flex justify-content-center align-items-center border-0"><i class="fas fa-user-circle fa-lg"></i></button>
                    <a href="discord" class="btn btn-success border-0 forum-btn">
                        <span>Profile</span>
                    </a>
                </div>
                <div class="btn-group mx-2 ">
                    <button class="btn btn-dark btn-dark-append d-flex justify-content-center align-items-center border-0"><i class="fas fa-cog fa-lg"></i></button>
                    <a href="discord" class="btn btn-dark2 text-light border-0 forum-btn">
                        <span>Settings</span>
                    </a>
                </div>
                @endif
            </div>
        </div>
        <!-- Footer -->
        @include('comp/footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
