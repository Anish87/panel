@php
function RobberRank($skills) {
    if($skills <= 100) return 'Street Punk';
    if($skills >= 100 && $skills <= 500) return 'Thug';
    if($skills >= 500 && $skills <= 2000) return 'Gangster';
    if($skills >= 2000 && $skills <= 6000) return '';
    if($skills >= 6000 && $skills <= 10000) return 'Mafia';
}

function CopRank($skills) {
    if($skills <= 100) return 'Officer';
    if($skills >= 100 && $skills <= 500) return 'Captain';
    if($skills >= 500 && $skills <= 2000) return 'Sergeant';
    if($skills >= 2000 && $skills <= 6000) return 'Lieutenant';
    if($skills >= 6000 && $skills <= 10000) return 'General';
}
function TrimClanTag($strPlayer) {
    preg_match("([\[(=^<]+\w+[\])=^>]+)", $strPlayer, $dElim, PREG_UNMATCHED_AS_NULL);
    preg_match("(\w.+[*=]+)", $strPlayer, $sElim, PREG_UNMATCHED_AS_NULL);
    if($dElim != null) return $strPlayer = trim($strPlayer, $dElim[0]);
    else if($dElim != null) return $strPlayer = trim($strPlayer, $sElim[0]);
    else return $strPlayer;
}
@endphp
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
