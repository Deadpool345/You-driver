<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Fonts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="shortcut icon" type="image/svg" href="{{ asset('img/logo-ico.svg') }}">

    <title>You Driver</title>

</head>
<style>
    .navbar {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-size: 24px;
}

.nav-links a {
    color: #fff;
    text-decoration: none;
    margin-left: 20px;
}

.sidebar {
    background-color: #f4f4f4;
    width: 250px;
    padding: 20px;
    position: fixed;
    top: 60px;
    left: 0;
    height: 100%;
    overflow-y: auto;
}

.sidebar a {
    display: block;
    padding: 10px 0;
    color: #333;
    text-decoration: none;
}

.sidebar a:hover {
    background-color: #ddd;
}

.content {
    margin-left: 250px;
    padding: 20px;
}

/* Estilos responsivos */
@media (max-width: 768px) {
    .sidebar {
        width: 100%;
        position: static;
        height: auto;
    }

    .content {
        margin-left: 0;
    }
}

</style>
<body>
    <div class="navbar d-flex">
        <div class="logo">Panel de Administrador</div>
        <div class="nav-links">
            <a href="#">Inicio</a>
            <a href="#">vehiculos</a>
            <a href="#">Configuración</a>
            <!-- Agrega más enlaces según sea necesario -->
        </div>
    </div>
    <div class="sidebar  ">
        <a href="#">Ver vehiculos</a>
        <a href="#">Agregar Vehiculos</a>
        <a href="#">Configuración</a>
        <div class=" ">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class=" mt-auto bg-secondary text-center rounded-2 w-75">
                @csrf
                <button type="submit" class="btn btn-link text-decoration-none ">Cerrar Sesión</button>
            </form>
        </div>
    </div>
    
    <div class="content">
        <h2></h2>
        <!-- Aquí se mostrará el contenido específico de cada sección -->
    </div>

    
</body>
</html>
