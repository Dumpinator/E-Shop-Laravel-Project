<nav class="mainmenu mobile-menu">
    <ul>
        <li class="active">
            <a href="{{ route('home') }}">
                <i class="fas fa-home"></i> 
                SHOP (not auth)
            </a>
        </li>
        @if(Route::is('home'))
            <li>
                <a href="#">
                    <i class="fas fa-ellipsis-v"></i>
                    Catégorie
                </a>
                <ul class="dropdown px-2 py-3">
                    <li><a href="{{ route('home.discount') }}">Solde</a></li>
                    <li><a href="{{ route('home.men') }}">Homme</a></li>
                    <li><a href="{{ route('home.women') }}">Femme</a></li>
                </ul>
            </li>
        @endif
    </ul>
</nav>
@if(!Route::is('login'))
    <a href="{{ route('login') }}" class="primary-btn top-btn"><i class="fas fa-user"></i> Connexion</a>
@else
    <a href="{{ route('register') }}" class="primary-btn top-btn"><i class="fas fa-user"></i> Register</a>
@endif