<nav class="mainmenu mobile-menu">
    <ul>
        <li class="active">
            <a href="{{ route('home') }}"><i class="fas fa-home"></i> SHOP (admin)</a>
        </li>
        <li>
            <a class="nav-link" href="#">
            <img class="avatar-profile border-rounded rounded-circle" src="https://uploads-ssl.webflow.com/5bddf05642686caf6d17eb58/5dc2fd00c29f7abeadd7c332_gPZwCbdS.jpg" />
            </a>
            <ul class="dropdown">
                <li>
                    <div class="d-flex justify-content-between py-3 px-3">
                        <div class="user-infos">
                            <p>{{ Auth::user()->name }}</p>
                            <small>{{ Auth::user()->email }}</small>
                        </div>
                    </div>
                </li>
                <div class="dropdown-divider"></div>
                <li><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
            </ul>
        </li>
    </ul>
</nav>