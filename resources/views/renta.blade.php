<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Agrega el enlace al archivo CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

     <!-- Scripts -->
     @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="shortcut icon" type="image/svg" href="{{ asset('img/logo-ico.svg') }}">

    <title>You Driver</title>

    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo de Bootstrap */
        }
    </style>
</head>
<body class="bg-primary">

    @include('components.navbar')

    <div class="container text-center mt-5">
        <div class="card mx-auto" style="max-width: 500px;">
        <h1 class="mb-5">Detalles del Auto</h1>
            <!-- Aquí agregamos la imagen -->
            <img src="{{ asset('img/fondos/honda.jpg') }}" class="card-img-top" alt="Imagen del automóvil">

            <div class="card-body">
                <p class="card-text">Marca: Honda</p>
                <p class="card-text">Modelo: Civic</p>
                <p class="card-text">Precio: $200 por día</p>
            </div>
        </div>
<br>
        <form action="" method="post" class="mx-auto" style="max-width: 500px;">
            @csrf
            <input type="hidden" name="auto_id" value="1">
            <div class="form-group card mx-auto max-width: 500px;">
            <h2 class="mt-5">Pago de la Renta</h2>
                <label for="metodo_pago">Seleccione un método de pago:</label>
                <select class="form-control" name="metodo_pago" id="metodo_pago">
                    <option value="tarjeta">Tarjeta de crédito/débito</option>
                    <option value="paypal">PayPal</option>
                    <!-- Añade más opciones según necesites -->
                </select>
            </div>
            <button type="button" class="btn btn-primary btn-block" onclick="simularCompra()">Pagar</button>
        </form>
    </div>

    <!-- Agrega el enlace al archivo JavaScript de Bootstrap (si lo necesitas) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Script para simular la compra mediante tarjeta de crédito -->
    <script>
        function simularCompra() {
            // Obtener los datos del formulario
            var autoId = document.querySelector('input[name="auto_id"]').value;
            var metodoPago = document.querySelector('#metodo_pago').value;

            // Simular la solicitud de pago al servidor
            realizarPago(autoId, metodoPago, function(respuesta) {
                if (respuesta === 'exitoso') {
                    alert('¡Pago realizado con éxito!');
                } else {
                    alert('Hubo un error al procesar el pago. Por favor, inténtalo de nuevo.');
                }
            });
        }

        function realizarPago(autoId, metodoPago, callback) {
            // Simular una solicitud al servidor para procesar el pago
            // Aquí puedes realizar una solicitud AJAX o llamar a una API
            // En este caso, simplemente simulamos una respuesta después de 1 segundo
            setTimeout(function() {
                // Simular una respuesta exitosa (cambia esto según tus necesidades)
                var pagoExitoso = Math.random() < 0.8; // Simulamos un 80% de éxito
                if (pagoExitoso) {
                    callback('exitoso');
                } else {
                    callback('error');
                }
            }, 1000); // Simulamos un tiempo de espera de 1 segundo
        }
    </script>
</body>
</html>
