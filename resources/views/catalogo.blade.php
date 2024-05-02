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
        <img src="{{ asset('img/fondos/honda.jpg') }}" alt="Hero Image" class="img-hero">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-secondary">Bienvenido a nuestro catálogo </h1>
                    <div class="d-flex justify-content-center align-items-center">
                        <p class="linea "/>
                    </div>
                    <h4 class="text-secondary">Aquí encontrarás tu auto ideal<h4>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container d-flex justify-content-center align-items-center mt-5 mb-5">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <select class="btn btn-secondary w-100"> 
                        <option disabled selected>Marca</option>
                        <option>Toyota</option>
                        <option>Honda</option>
                        <option>Nissan</option>
                        <option>Hyundai</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <select class="btn btn-secondary w-100"> 
                        <option disabled selected>Tipo de vehículo</option>
                        <option>Sedan</option>
                        <option>Camioneta</option>
                        <option>Pickup</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <select class="btn btn-secondary w-100"> 
                        <option disabled selected>Tipo de transmisión</option>
                        <option>Manual</option>
                        <option>Automático</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="container ">
            <div class="row ">
                <div class="col-md-4 mb-4 d-flex justify-content-center align-items-center">
                    <div class="card">
                        <h5 class="card-title text-center mt-5">Hilux</h5>
                        <img src="{{ asset('img/hailux.png') }}" class="rounded img-fluid">
                        <div class="card-body text-center">
                            <p class="card-text">Año:2022.</p>
                            <a href="#" class="btn btn-primary">Rentar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 d-flex justify-content-center align-items-center">
                    <div class="card">
                        <h5 class="card-title text-center mt-5">Nissan Versa</h5>
                        <img src="{{ asset('img/civic.png') }}" class="rounded img-fluid">
                        <div class="card-body text-center">
                            <p class="card-text">Año:2020</p>
                            <a href="#" class="btn btn-primary">Rentar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 d-flex justify-content-center align-items-center">
                    <div class="card">
                        <h5 class="card-title text-center mt-5">Honda Civic</h5>
                        <img src="{{ asset('img/civic.png') }}" class="rounded img-fluid">
                        <div class="card-body text-center">
                            <p class="card-text">Año: 2020</p>
                            <a href="#" class="btn btn-primary">Rentar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4 mb-4 d-flex justify-content-center align-items-center">
                    <div class="card">
                        <h5 class="card-title text-center mt-5">Hilux</h5>
                        <img src="{{ asset('img/hailux.png') }}" class="rounded img-fluid">
                        <div class="card-body text-center">
                            <p class="card-text">Año:2022.</p>
                            <a href="#" class="btn btn-primary">Rentar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 d-flex justify-content-center align-items-center">
                    <div class="card">
                        <h5 class="card-title text-center mt-5">Nissan Versa</h5>
                        <img src="{{ asset('img/civic.png') }}" class="rounded img-fluid">
                        <div class="card-body text-center">
                            <p class="card-text">Año:2020</p>
                            <a href="#" class="btn btn-primary">Rentar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 d-flex justify-content-center align-items-center">
                    <div class="card">
                        <h5 class="card-title text-center mt-5">Honda Civic</h5>
                        <img src="{{ asset('img/civic.png') }}" class="rounded img-fluid">
                        <div class="card-body text-center">
                            <p class="card-text">Año: 2020</p>
                            <a href="#" class="btn btn-primary">Rentar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4 mb-4 d-flex justify-content-center align-items-center">
                    <div class="card">
                        <h5 class="card-title text-center mt-5">Hilux</h5>
                        <img src="{{ asset('img/hailux.png') }}" class="rounded img-fluid">
                        <div class="card-body text-center">
                            <p class="card-text">Año:2022.</p>
                            <a href="#" class="btn btn-primary">Rentar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 d-flex justify-content-center align-items-center">
                    <div class="card">
                        <h5 class="card-title text-center mt-5">Nissan Versa</h5>
                        <img src="{{ asset('img/civic.png') }}" class="rounded img-fluid">
                        <div class="card-body text-center">
                            <p class="card-text">Año:2020</p>
                            <a href="#" class="btn btn-primary">Rentar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 d-flex justify-content-center align-items-center">
                    <div class="card">
                        <h5 class="card-title text-center mt-5">Honda Civic</h5>
                        <img src="{{ asset('img/civic.png') }}" class="rounded img-fluid">
                        <div class="card-body text-center">
                            <p class="card-text">Año: 2020</p>
                            <a href="#" class="btn btn-primary">Rentar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
</body>

</html>
