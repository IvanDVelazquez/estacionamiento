<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <nav style="padding-left: 10px; padding-right: 10px;" class="navbar bg-secondary navbar-expand-sm ">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto order-0 ">
                <li style="margin: 10px"><button style="padding:10px;" class="navbar-nav btn btn-success btn-lg"><a style="color: white;" href="{{route('garage.create')}}"">Crear cochera</a></button></li>
                <li style="margin: 10px"><button style="padding:10px;" class="navbar-nav btn btn-success btn-lg"><a style="color: white;" href="{{route('car.create')}}"">Crear auto</a></button></li>
                <li style="margin: 10px"><button style="padding:10px;" class="navbar-nav btn btn-primary btn-lg"><a style="color: white;" href="{{route('car.index')}}"">Ver autos</a></button></li>
                <li style="margin: 10px"><button style="padding:10px;" class="navbar-nav  btn btn-primary btn-lg"><a style="color: white;" href="{{route('garage.index')}}"">Ver cocheras</a></button></li>
            </ul>
        </div>
    </nav>
    <div style="background-color: lemonchiffon">
        @yield('content')
    </div>
</body>
</html>