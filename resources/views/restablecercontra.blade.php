<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="shortcut icon" type="image/svg" href="{{ asset('img/logo-ico.svg') }}">

    <title>You Driver</title>
</head>
<body class="bg-primary">

    @include('components.navbar')

    <div class="bg-white">
    <div class="container mt-5 pt-5 pb-5">
        <div class="mb-5">
            <h3>Ingrese su correo para cambiar la contraseña</h3>
        </div>
        <form action="#">
        <div class="mb-3 d-flex justify-content-center align-items-center">
            <input type="email" class="form-control w-75" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico">
        </div>

        <div class="d-flex justify-content-end mt-5">
                <button type="submit" class="btn btn-primary text-secondary boton ">Enviar</button>
            </div>
        </form>
    </div>

    </div>

</body>
@include('components.footer')
</html>