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
    <!--navbar-->
    <!--EL NAVBAR Y EL FOOTER SE MANDAN A LLAMAR, YA QUE SON COMPONENTES-->
    @include('components.navbar')
<br>
<br>
<br>
    <section class="vh-100">
        <div class="text-center" >
      
        <div class="container bg-white">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              <div class="px-5 ms-xl-4">
                
                <br>
                <br>
                <span class="h1 fw-bold mb-0"> Bienvenido de vuelta!</span>
              </div>
      
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
                <form style="width: 70rem;">
      
                  <div class="form-outline mb-4">
                    <input type="email"  class="form-control form-control-lg" class="form-control ml-3" placeholder="Correo">

                  </div>
      
                  <div class="form-outline mb-4">
                    <input type="password"  class="form-control form-control-lg"   placeholder="Contraseña">

                  </div>
      
                 
      
                  <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!"> Olvidaste la contraseña?</a></p>
                  <p>No tienes cuenta? <a href="#!" class="link-info">Registrate Aca!</a></p>
      
                  <div class="pt-1 mb-4">
                    <button type="button" class="btn btn-secondary btn-lg">Login</button>
                  </div>

                </form>
              
              </div>
      
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="https://img.freepik.com/foto-gratis/camioneta-verde-gmc-sierra-conduciendo-camino-tierra-montanas-al-fondo_1340-32497.jpg"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover;">
            </div>
          </div>
        </div>
        </div>
    
      </section>
</body>
@include('components.footer')
</html>