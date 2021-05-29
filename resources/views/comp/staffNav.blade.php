<nav class="navbar navbar-expand-lg navbar-dark bg-cblack">
    <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            @if(session('userLvl') > 1)
            <li class="nav-item {{ Request::is('admin/home') ? 'active border-bottom border-vgreen' : '' }}">
                <a class="nav-link" href="/admin/home"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item {{ Request::is('admin/settings') ? 'active border-bottom border-vgreen' : '' }}">
                <a class="nav-link" href="/admin/settings"><i class="fas fa-cogs"></i> Server Settings</a>
            </li>
            <li class="nav-item {{ Request::is('admin/manager/settings') ? 'active border-bottom border-vgreen' : '' }}">
                <a class="nav-link" href="/admin/ban"><i class="fas fa-hammer"></i> Ban User</a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link text-danger" href="/logout"> <i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
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