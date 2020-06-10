<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="nav-menu">
            @if (Auth::check() && Request::is('admin/*'))
                @include('_includes.admin.header')
            @elseif(Auth::check())
                @include('_includes.auth.header')
            @else
                @include('_includes.ano.header')
            @endif
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->
