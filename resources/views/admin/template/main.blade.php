<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <title>@yield('title','Pekxel')| Panel de Administración</title>  
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>    
    <h1>Gestor de Empleados</h1>
    @include('flash::message')
    @yield('content','ok')
    <br>
    <br>
    <br>
    <br>
    <footer class="blockquote-footer">
        Gerardo Medellín
    </footer>
    <script src="{{asset('plugins/jquery/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>