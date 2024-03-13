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
    <!--navbar-->
    <!--EL NAVBAR Y EL FOOTER SE MANDAN A LLAMAR, YA QUE SON COMPONENTES-->
    @include('components.navbar')
<br>
<br>
<br>
<div class="bg-white">
    <form>
        <div class="mb-3">
            <br>
         <h3>Ingrese su correo electronico para restablecer su contraseña</h3>
        </div>
        <br>
        <div class="mb-3">
            <br>
          <label class="form-label">CORREO ELECTRONICO</label>
          <br>
          <input type="emailr" class="form-control" placeholder="correo@gmail.com">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <br>
        <img src="https://www.lavanguardia.com/files/content_image_mobile_filter/uploads/2018/01/22/5f16082f23594.jpeg" alt="">
      </form>
      <br>
</div>

</body>
@include('components.footer')
</html>