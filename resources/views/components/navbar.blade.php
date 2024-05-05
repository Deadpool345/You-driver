<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
        <div class="d-flex container-img">
            <a href="/" class="navbar-brand">
                <img src="{{ asset('img/logo.svg') }}" alt="logo" width="100" height="100">
            </a>
        </div>
        <button type="button" class="navbar-toggler bg-secondary" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <div class="navbar-nav mx-auto">
                <a href="{{ url('/') }}" class="nav-item nav-link text-secondary">Inicio</a>
                <a href="{{ url('/catalogo') }}"class="nav-item nav-link text-secondary">Catalogo</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link text-secondary">Sobre Nosotros</a>
                <a href="{{ url('/contact') }}" class="nav-item nav-link text-secondary ">Contacto</a>
            </div>
            <div class="navbar-nav ">
                @if(Auth::guard('clientes')->check())
                    <div class="nav-item dropdown bg-secondary p-1 rounded-4">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::guard('clientes')->user()->nombre }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end bg-secondary w-25" aria-labelledby="navbarDropdown">
                            <li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="dropdown-item bg-secondary text-center">
                                    @csrf
                                    <button type="submit" class="btn btn-link text-decoration-none">Cerrar Sesión</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ url('/register') }}" class="nav-item boton" style="margin-right:2rem;">Registrarse</a>
                @endif
            </div>
        </div>
    </div>
</nav>
    