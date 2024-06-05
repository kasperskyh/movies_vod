<nav class="navbar navbar-expand-lg fixed-top rounded w-75 mx-auto" style="background-color: rgb(1, 0, 14)">
    <div class="container">
            <a class="navbar-brand text-light btn" href="{{ route('welcome') }}">Movies VOD</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    @auth
                        @if (auth()->user()->isAdmin())
                            <a class="nav-link text-secondary" href="{{ route('users') }}">Uzytkownicy</a>
                        @endif
                    @endauth
                    @if (Auth::check())
                        <a class="nav-link text-secondary" href="{{ route('orders') }}">Zamowienia</a>
                    @endif
                    @if (Auth::check())
                    <a class="nav-link text-secondary" href="{{ route('customers') }}">Klienci</a>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link text-secondary btn" href="{{ route('categories') }}">Kategorie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary btn" href="{{ route('movies') }}">Filmy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary btn" href="{{ route('orders.create')}}">Wypożycz</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link text-secondary btn" href="{{ route('logout') }}">{{ Auth::user()->name }}, Wyloguj się </a>
                        </li>
                    @else
                        <li class="nav-item">
                             <a class="nav-link text-secondary btn" href="{{ route('login') }}">Zaloguj się</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

