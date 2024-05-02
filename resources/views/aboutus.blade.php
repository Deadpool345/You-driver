<!DOCTYPE html>
<html lang="en">

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

<body class="bg-primary">

    @include('components.navbar')

    <div class="hero d-flex justify-content-center align-items-center min-vh-100">
        <img src="{{ asset('img/camionetalogin.jpeg') }}" alt="Hero Image" class="img-hero">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-secondary">Sobre Nosotros </h1>
                    <div class="d-flex justify-content-center align-items-center">
                        <p class="linea "/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container  w-75 mt-5">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="card">
                    <div class="card-body ">
                        <h2 class="card-title text-center mb-4">Sobre YouDriver</h2>
                        <p class="card-text">YouDriver es una empresa líder en el alquiler de autos, comprometida con la satisfacción del cliente y la excelencia en el servicio. Nos enorgullece ofrecer una amplia gama de vehículos de calidad y una experiencia de alquiler sin complicaciones para nuestros clientes.</p>
                        <h3 class="card-title">Nuestra Misión</h3>
                        <p class="card-text">Nuestra misión es proporcionar soluciones de movilidad flexibles y accesibles que satisfagan las necesidades individuales de cada cliente. Nos esforzamos por ofrecer un servicio excepcional, brindando comodidad y tranquilidad a nuestros usuarios en cada viaje.</p>
                        <h3 class="card-title">Nuestra Visión</h3>
                        <p class="card-text">Nuestra visión es ser reconocidos como el proveedor líder de servicios de alquiler de autos, destacándonos por nuestra calidad, confiabilidad y atención al cliente. Buscamos continuar creciendo y expandiendo nuestra presencia para satisfacer las necesidades de movilidad de una amplia audiencia.</p>
                        <h3 class="card-title">Nuestro Equipo</h3>
                        <p class="card-text">En YouDriver, contamos con un equipo dedicado de profesionales apasionados por brindar la mejor experiencia posible a nuestros clientes. Nuestro equipo está comprometido con los más altos estándares de calidad y se esfuerza por superar las expectativas en cada interacción.</p>
                        <h3 class="card-title">Contáctanos</h3>
                        <p class="card-text">¡Estamos aquí para ayudarte! Si tienes alguna pregunta, comentario o sugerencia, no dudes en ponerte en contacto con nuestro equipo de atención al cliente. Estamos disponibles las 24 horas del día, los 7 días de la semana para brindarte asistencia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('components.footer')
</body>

</html>
