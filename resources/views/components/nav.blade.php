<nav class="navbar navbar-expand px-4 py-3">
    {{-- @guest
        <span class="nav-logo">
            Gestionale
        </span>
    @endguest --}}
    <ul class="navbar-nav gap-2">
        @guest
            <li class="nav-item"><a class="nav-btn2" href="{{ route('register') }}">Registrati</a></li>
            <li class="nav-item"><a class="nav-btn1" href="{{ route('login') }}">Accedi</a></li>
        @else
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-btn2">Logout</button>
                </form>
            </li>
        @endguest
    </ul>
</nav>
