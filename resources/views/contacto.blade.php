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
    <!--navbar-->
    <!--EL NAVBAR Y EL FOOTER SE MANDAN A LLAMAR, YA QUE SON COMPONENTES-->
    @include('components.navbar')
    <h2 class="text-secondary text-center mt-5 ">Contactanos</h2>
        <div class="d-flex justify-content-center align-items-center">
            <p class="linea3 "/>
        </div>
        <p class="text-secondary text-center">Ponte en contactoncon nosotros 24/7</p>
        <div class="w-75 container bg-light rounded-5">
        <form class="mt-5 pt-5 ms-5 me-5 pb-5 ">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label bg-light ">Nombre Completo:</label>
                <input type="email" class="form-control" id="exampleInputEmail1 " aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Correo electrónico:</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Asunto:</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="text_area" class="form-label">Mensaje:</label>
                <textarea class="form-control" id="text_area" rows="5"></textarea>
            </div>
            <div class="d-flex justify-content-end mt-5">
                <button type="submit" class="btn btn-primary text-secondary boton ">Enviar</button>
            </div>
        </form>
        </div>


    @include('components.footer')
</body>

</html>