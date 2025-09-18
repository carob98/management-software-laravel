<!-- sidebar -->
<nav id="sidebar">
    <div class="d-flex justify-content-between p-4">
        <div class="sidebar-logo">
            <a href="#">Gestionale</a>
        </div>
        <button class="toggle-btn border-0" type="button">
            <i id="icon" class="bx bx-menu"></i>
        </button>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="#" class="sidebar-link active" aria-current="page">
                <i class="bx bx-grid"></i>
                <span>Prodotti</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('products.create') }}" class="sidebar-link">
                <i class="bx bx-plus"></i>
                <span>Aggiungi prodotto</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="sidebar-link p-4"><i
                    class="bx bx-arrow-out-left-square-half"></i><span>Logout</span></button>
        </form>
    </div>
</nav>
