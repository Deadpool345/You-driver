<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido al Dashboard</h1>
    <p>Cliente autenticado: {{ auth('clientes')->user()->nombre }}</p>
    <!-- Aquí puedes imprimir otros detalles del usuario -->
</body>
</html>