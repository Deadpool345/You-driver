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
    <title>You Driver</title>
</head>
<body class="bg-primary">
    @include('components.navbar')
    <div class="hero d-flex justify-content-center align-items-center min-vh-100">
        <img src="{{ asset('img/fondos/hyundai.jpg') }}" alt="Hero Image" class="img-hero">
        <div class="container">
            <div class="row">
            <div class="col text-center ">
                <h1 class="text-secondary">Encuentra el coche ideal para ti</h1>
                <div class="d-flex justify-content-center align-items-center">
                    <p class="linea "/>
                </div> 
                <h4 class="text-secondary">Tenemos más coches para que elijas.</h4>
            </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>