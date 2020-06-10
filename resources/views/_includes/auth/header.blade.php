<nav class="mainmenu mobile-menu">
    <ul>
        <li class="active">
            <a href="{{ route('home') }}"><i class="fas fa-home"></i> SHOP (auth)</a>
        </li>
        <li>
            <a href="#"><i class="fas fa-ellipsis-v"></i>
                Category
            </a>
            <ul class="dropdown px-2 py-3">
                <li><a href="#">Solde</a></li>
                <li><a href="#">Homme</a></li>
                <li><a href="#">Femme</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="fas fa-chalkboard-teacher"></i>
                DASHBOARD
            </a>
            <ul class="dropdown">
                 <li>
                     <p class="px-2">Accéder à l'administration des produits.</p>
                 </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-shopping-cart"></i>
                <span class="badge badge-pill badge-danger">0</span>
            </a>
            <ul class="dropdown px-2 py-2">
                <li>
                    <div class="d-flex">
                        <div class="avatar image_selected img-text-shop set-bg" @if(isset($product->image)) data-setbg="/images/storage/products/{{ $product->user_id }}/{{ $product->image }}" @endif></div>
                        <div class="user-infos ml-3">
                            <small>Product Name</small>
                            <p class="text-danger">29,99 €</p>
                        </div>
                    </div>
                </li>
            </ul>
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