<nav class="navbar navbar-expand-lg navbar-dark bg-cblack">
    <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item {{ Request::is('/') ? 'active border-bottom border-vgreen' : '' }}">
                <a class="nav-link" href="/"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item {{ Request::is('tops') ? 'active border-bottom border-vgreen' : '' }}">
                <a class="nav-link" href="/tops"> <i class="fas fa-chart-bar fa-sm"></i> Top Charts</a>
            </li>
            @if($sessionUser !== 'Panel Guest')
            <li class="nav-item {{ Request::is('user/profile') ? 'active border-bottom border-vgreen' : '' }}">
                <a class="nav-link" href="/user/profile"> <i class="fas fa-user-circle"></i>&nbsp; Profile</a>
            </li>
            <li class="nav-item {{ Request::is('user/cp') ? 'active border-bottom border-vgreen' : '' }}">
                <a class="nav-link" href="/user/cp"> <i class="fas fa-cog fa-sm"></i> Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="/logout"> <i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
            @else
            <li class="nav-item {{ Request::is('login') ? 'active border-bottom border-vgreen' : '' }}">
                <a href="/login" class="nav-link"><i class="fas fa-user fa-sm"></i>&nbsp; Login</a>
            </li>
            @endif
        </ul>
    </div>
</nav>
<div class="banner d-flex justify-content-center align-items-center">
    <div class="text-center sr-only">
        <span class="text-light vfont">
            <span class="h1">Vintage Miami</span>
            <br>
            <span class="h3">Redefining the Legacy</span>
        </span>
    </div>
</div>