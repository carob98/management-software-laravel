<nav class="navbar navbar-expand {{ $align ?? 'justify-content-end' }} align-items-center px-4 py-3">
    @guest
        <div class="d-flex align-items-center justify-content-between w-50">
            {{ $slot }}
            <span class="nav-logo">{{ env('APP_NAME') }}</span>
        </div>
    @endguest
    <ul class="navbar-nav gap-2 justify-content-between align-items-center {{ $width ?? '' }}">
        @guest
            <li class="nav-item"><a class="nav-btn2" href="{{ route('register') }}">Registrati</a></li>
            <li class="nav-item"><a class="nav-btn1" href="{{ route('login') }}">Accedi</a></li>
        @else
            {{ $icon ?? '' }}
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-btn2">Logout</button>
                </form>
            </li>


        @endguest
    </ul>
</nav>
