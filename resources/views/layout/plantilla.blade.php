<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>


    <title>@yield('tituloPagina')</title>


</head>
<body>

<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Enlace desplegable
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route("transportes.indext") }}">Transportes</a></li>
                            <li><a class="dropdown-item" href="{{ route("camiones.indexc") }}">Camiones</a></li>
                            <li><a class="dropdown-item" href="{{ route("personas.index") }}">Personas</a></li>
                            <li><a class="dropdown-item" href="{{ route("predios.indexp") }}">Predios</a></li>
                            <li><a class="dropdown-item" href="{{ route("tmercancias.indextm") }}">Tipo_mercancia</a></li>
                            <li><a class="dropdown-item" href="{{ route("mercancias.indexm") }}">Mercancia</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>



<div>
    <a href="{{ route("transportes.indext") }}" class="btn btn-primary">
        <span class="fa-solid fa-truck"></span>Transportes
    </a>

    <a href="{{ route("camiones.indexc") }}" class="btn btn-primary">
        <span class="fa-solid fa-truck"></span>Camiones
{{--        <span class="fa-sharp fa-light fa-truck-container"></span>  Camiones--}}
    </a>

    <a href="{{ route("personas.index") }}" class="btn btn-primary">
        <span class="fas fa-user-plus"></span>Piloto
    </a>

    <a href="{{ route("predios.indexp") }}" class="btn btn-primary">
        <span class="fas fa-user-plus"></span>Predio
    </a>

    <a href="{{ route("tmercancias.indextm") }}" class="btn btn-primary">
        <span class="fas fa-user-plus"></span>Tipo_mercancia
    </a>

    <a href="{{ route("mercancias.indexm") }}" class="btn btn-primary">
        <span class="fas fa-user-plus"></span>Mercancia
    </a>



    </a>

{{--    <a href="{{ route("layout/plantilla") }}" class="btn btn-info">--}}
{{--        <span class="fas fa-undo-alt"></span> Regresar--}}
{{--    </a>--}}


    <div class="container">
        <br><br>
    @yield('contenido')
    </div>

    <div class="container">
        <br>
        @yield('contenidot')
    </div>

    <div class="container">
        <br>
        @yield('contenidoc')
    </div>

    <div class="container">
        <br>
        @yield('contenidop')
    </div>

    <div class="container">
        <br>
        @yield('contenidotm')
    </div>

    <div class="container">
        <br>
        @yield('contenidom')
    </div>



    </div>

{{--<h1>Hello, world!</h1>--}}

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
