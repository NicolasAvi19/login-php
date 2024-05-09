<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <div>
        <h1>Bienvenido al Dashboard</h1>
        <p>Hola, {{ Auth::user()->name }}. ¡Has iniciado sesión correctamente!</p>
        <!-- Otro contenido del dashboard -->
    </div>
</body>
</html>