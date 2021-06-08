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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/jpg" href="favicon.png"/>
    </head>
    <body class="bg-cblack2">
        @include('comp/nav')
        <div class="container">
            @if($authErr ?? '')
            <div class="row d-flex justify-content-center mt-3">
                <div class="alert alert-danger border-danger bg-danger">
                    <strong class="text-black">Error!</strong> <span class="text-light">{{$authErr}}</span>
                </div>
            </div>
            @endif
            <div class="row mt-4 d-flex justify-content-center align-items-center">
                <div class="col-md-5 align-self-center">
                    <div class="card border-0">
                        <div class="card-header text-center h3 bg-vgreen text-light">LOGIN</div>
                        <div class="card-body bg-cblack">
                            <form action="login" method="POST" autocomplete="off">
                                @csrf
                                <div class="input-group my-2">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text bg-vgreen text-light border-0"><i class="fas fa-user"></i></div>
                                    </div>
                                    <input name="userName" type="text" class="form-control border-0 bg-cblack2 cblack-focus text-light" id="userName" placeholder="Username" oninvalid="this.setCustomValidity('Please enter a username!')" oninput="this.setCustomValidity('')" required>
                                </div>
                                <div class="input-group my-2">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text bg-vgreen text-light border-0"><i class="fas fa-lock"></i></div>
                                    </div>
                                    <input name="userPass" type="password" class="form-control border-0 bg-cblack2 cblack-focus text-light" id="userPass" placeholder="Password" required oninvalid="this.setCustomValidity('Please enter a password!')" oninput="this.setCustomValidity('')">
                                </div>
                                <div class="input-group mt-1 mb-n2">
                                    <div class="text-light">
                                        <small id="togglePass" class="cursor-pointer">SHOW PASSWORD</small>
                                    </div>
                                </div>
                                <div class="mt-3 mb-2">
                                    <button type="submit" class="form-control btn btn-outline-vgreen">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('comp/footer');
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
