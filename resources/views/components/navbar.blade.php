
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
                <a href="{{ url('/register') }}" class="nav-item boton" style="margin-rigth:2rem;">Registrarse</a>
            </div>
        </div>
    </div>
</nav>

