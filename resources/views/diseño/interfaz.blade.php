<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>TecStore - @yield('title')</title>
</head>
<body>
<!--Navbar-->
<div class="topnav">
        <a class="active" href="#TecStore">TecStore</a>
        <a href="./registros">Registrate</a>
        <a href="#contact">Contacto</a>
        <a href="#about">Acerca de</a>
        <div class="login-container">   
          <form action="{{ url('/perfil_Usuario') }}" method="GET">
            <input type="text" placeholder="Username" name="Username">
            <input type="password" placeholder="Password" name="Password">
            <button>Iniciar</button>
          </form>
        </div>
</div>   
<!--Navbar-->

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/pooper.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</body>
</html>