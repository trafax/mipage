<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top border-bottom">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Pagina's
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="javascript:;" data-href="{{ route('page.index') }}">Paginaoverzicht</a></li>
                <li><a class="dropdown-item" href="javascript:;" data-href="{{ route('page.create') }}">Pagina toevoegen</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
</nav>
