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
        @include('comp/nav')
        <!-- Navigation End -->

        <!-- Main -->
        <div class="container-fluid">
            <div class="row vfont mt-5 mb-3">
                <h1 class="mx-auto bg-vgreen p-2 pb-md-0 rounded">Hi, {{$sessionUser}}</h1>
            </div>
        </div>
        <div class="row mx-5">
            @foreach ($playerStats as $pData)
            <div class="col-md-7">
                <div class="card border-top border-right-0 border-left-0 border-bottom-0 border-vgreen bg-cblack2">
                    <div class="card-title">
                        <div class="card-header h1 vfont text-center">Statistics</div>
                    </div>
                    <div class="card-body mt-n4">
                        <table class="table table-borderless text-light">
                            <thead class="h5">
                                <tr>
                                    <th>Stat</th>
                                    <th>Value</th>
                                    <th>Rank Tag</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td><strong>Robskills</strong></td><td>{{$pData['robs']}}</td><td>{{RobberRank($pData['robs'])}}</td></tr>
                                <tr><td><strong>Copskills</strong></td><td>{{$pData['cops']}}</td><td>{{CopRank($pData['cops'])}}</td></tr>
                                <tr><td><strong>Cash</strong></td><td class="text-success">$ {{$pData['cops']}}</td><td>N/A</td></tr>
                                <tr><td><strong>Bank</strong></td><td class="text-success">$ {{$pData['cops']}}</td><td>N/A</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card border-top border-right-0 border-left-0 border-bottom-0 border-vgreen bg-cblack2">
                    <div class="card-title">
                        <div class="card-header h2 vfont text-center">
                            Other Information
                        </div>
                    </div>
                    <div class="card-body text-center mt-n3">
                        <img src="https://avatars.dicebear.com/api/initials/{{substr(TrimClanTag($sessionUser), 0, 1)}}.svg?background=%230a2d3a" height="128" class="mb-4 rounded-circle">
                        @if($pData['rPlr'])
                            <div class="bg-vblue vfont text-center mx-auto col-md-8 p-1 pb-md-0 rounded">
                                <h5 class="text-light">Player</h5>
                            </div>
                        @endif
                        @if($pData['rDon'])
                            <div class="bg-vgreen vfont text-center p-1 pb-md-0 rounded">
                                <h5 class="text-light">Donator</h5>
                            </div>
                        @endif
                        @if($pData['rCon'])
                            <div class="bg-vgreen vfont text-center p-1 pb-md-0 rounded">
                                <h5 class="text-light">Contributor</h5>
                            </div>
                        @endif
                        @if($pData['pLvl'] > 1)
                        <div class="btn-group mt-2">
                            <button class="btn btn-primary forum-append d-flex justify-content-center align-items-center border-0"><i class="fas fa-user-cog fa-lg"></i></button>
                            <a href="/admin/staff" class="btn btn-dark2 text-light border-0 forum-btn">
                                <span>Staff Panel</span>
                            </a>
                        </div>
                        @endif
                        <table class="table table-borderless text-light text-left">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>In-game Status</strong></td>
                                    @if($pData['Online'])
                                    <td class="text-success">Online</td>
                                    @else
                                    <td class="text-danger">Offline</td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Footer -->
        @include('comp/footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
