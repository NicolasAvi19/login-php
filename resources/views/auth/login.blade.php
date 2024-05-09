<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="Nombre" content="Nicolas, Steven, Aviles, Navarrete">
    <meta name="Fecha" content="29-abril-2024">
    <meta name="Semestre" content="4">
    <meta name="Programa" content="Tec desarrollo de software">
    <meta name="Profesor" content="Mario Porras">
    <!-- Metadatos básicos -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
    <!-- Estilos de Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <!-- Scripts de Bootstrap y jQuery -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    
    <!-- Estilos CSS personalizados -->
    <style>
        /* Fondo oscuro para la página */
        body {
            background: #000 !important;
        }

        /* Estilos de la tarjeta de login */
        .card {
            border: 1px solid #28a745; /* Borde de la tarjeta (verde) */
        }

        /* Estilos específicos de la tarjeta de login */
        .card-login {
            margin-top: 130px; /* Margen superior */
            padding: 18px; /* Espaciado interno */
            max-width: 30rem; /* Ancho máximo */
        }

        /* Estilos del encabezado de la tarjeta */
        .card-header {
            color: #fff; /* Color del texto */
            font-family: sans-serif; /* Fuente del texto */
            font-size: 24px; /* Tamaño del texto */
            font-weight: 600 !important; /* Peso de la fuente */
            margin-top: 10px; /* Margen superior */
            border-bottom: 0; /* Borde inferior */
        }

        /* Estilos para los iconos del formulario */
        .input-group-prepend span {
            width: 50px; /* Ancho del icono */
            background-color: #cf0c0c; /* Color de fondo del icono (rojo) */
            color: #fff; /* Color del ícono */
            border: 0 !important; /* Sin borde */
        }

        /* Estilos para el efecto de enfoque en los campos de entrada */
        input:focus {
            outline: 0 0 0 0 !important; /* Sin contorno al enfocar */
            box-shadow: 0 0 0 0 !important; /* Sin sombra al enfocar */
        }

        /* Estilos para el botón de login */
        .login_btn {
            width: 130px; /* Ancho del botón */
        }

        /* Estilos para el botón de login al pasar el mouse sobre él */
        .login_btn:hover {
            color: #fff; /* Color del texto al pasar el mouse */
            background-color: #28a745; /* Color de fondo al pasar el mouse (verde) */
        }

        /* Estilos para el botón de login (contorno) */
        .btn-outline-danger {
            color: #fff; /* Color del texto */
            font-size: 18px; /* Tamaño del texto */
            background-color: #28a745; /* Color de fondo */
            background-image: none; /* Sin imagen de fondo */
            border-color: #28a745; /* Color del borde */
        }

        /* Estilos para los campos de entrada */
        .form-control {
            display: block; /* Mostrar como bloque */
            width: 100%; /* Ancho completo */
            height: calc(2.25rem + 2px); /* Altura del campo */
            padding: 0.375rem 0.75rem; /* Espaciado interno */
            font-size: 1.2rem; /* Tamaño del texto */
            line-height: 1.6; /* Altura de línea */
            color: #28a745; /* Color del texto */
            background-color: transparent; /* Fondo transparente */
            background-clip: padding-box; /* Fondo delimitado por el relleno */
            border: 1px solid #28a745; /* Borde del campo (verde) */
            border-radius: 0; /* Sin bordes redondeados */
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; /* Transiciones */
        }

        /* Estilos para los elementos de texto del grupo de entrada */
        .input-group-text {
            display: -ms-flexbox; /* Mostrar como caja flexible (para compatibilidad con IE) */
            display: flex; /* Mostrar como caja flexible */
            -ms-flex-align: center; /* Alinear verticalmente (para compatibilidad con IE) */
            align-items: center; /* Alinear verticalmente */
            padding: 0.375rem 0.75rem; /* Espaciado interno */
            margin-bottom: 0; /* Sin margen inferior */
            font-size: 1.5rem; /* Tamaño del texto */
            font-weight: 700; /* Peso de la fuente */
            line-height: 1.6; /* Altura de línea */
            color: #495057; /* Color del texto */
            text-align: center; /* Alineación del texto */
            white-space: nowrap; /* Sin saltos de línea */
            background-color: #e9ecef; /* Color de fondo */
            border: 1px solid #ced4da; /* Borde del elemento */
            border-radius: 0; /* Sin bordes redondeados */
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card card-login mx-auto text-center bg-dark">
        <div class="card-header mx-auto bg-dark">
            <span class="logo_title mt-5"> Login Laravel </span> <!-- Cambiado a "Login Laravel" -->
        </div>
        <div class="card-body">
            <form action="{{ route('auth.authenticate') }}" method="POST">
                @csrf
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="email" class="form-control" placeholder="Username">
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <input type="submit" name="btn" value="Login" class="btn btn-outline-danger float-right login_btn">
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>




