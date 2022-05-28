<!DOCTYPE html>
<html lang="es-GT">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/stylesheets.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <p class="offcanvas-title" id="offcanvasExampleLabel">Bienvenido</p>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <hr class="dropdown-divider">
                <div class="offcanvas-body">
                    @if (auth()->check())
                        <li class="nav-item align-items-center mb-3">
                            <span class="material-icons icon-menu">
                                logout
                            </span>
                            <a class="nav-link" aria-current="page" href="{{ route('signout') }}">Cerrar
                                Sesión</a>
                        </li>
                        <hr class="dropdown-divider">
                    @else
                        <ul class="nav flex-column">
                            <li class="nav-item align-items-center">
                                <span class="material-icons icon-menu">
                                    home
                                </span>
                                <a class="nav-link" href="{{ route('home.index') }}">Registrar</a>
                            </li>
                            <hr class="dropdown-divider">
                            <li class="nav-item align-items-center">
                                <span class="material-icons icon-menu">
                                    app_registration
                                </span>
                                <a class="nav-link" href="{{ route('register.index') }}">Registrar</a>
                            </li>
                            <hr class="dropdown-divider">
                            <li class="nav-item align-items-center">
                                <span class="material-icons icon-menu">
                                    login
                                </span>
                                <a class="nav-link" aria-current="page" href="{{ route('login.index') }}">Login</a>
                            </li>
                            <hr class="dropdown-divider">
                    @endif
                    </ul>
                </div>
            </div>
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @if (auth()->check())
                        <div class="container">
                            <div class="d-flex justify-content-end">
                                <div class="dropdown">
                                    <div class="nav-link text-white m-0 dropdown-toggle" type="button"
                                        id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ auth()->user()->firstName }} {{ auth()->user()->firstLastName }}
                                    </div>
                                    <ul class="dropdown-menu dropdown-menu-dark m-0 p-1"
                                        aria-labelledby="dropdownMenuButton2">
                                        <li class="d-flex align-items-center">
                                            <span class="material-icons">
                                                logout
                                            </span>
                                            <a class="dropdown-item" aria-current="page"
                                                href="{{ route('signout') }}">Cerrar
                                                Sesión</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @else
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('home.index') }}">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register.index') }}">Registrar</a>
                            </li>
                            <li class="nav-item">
                                <p class="nav-link">{{ \Request::ip() }}</p> 
                            </li>
                        </ul>
                        <form class="d-flex">
                            <p class="nav-item m-0">
                                <a class="nav-link text-white" aria-current="page"
                                    href="{{ route('login.index') }}">Iniciar
                                    Sesión</a>
                            </p>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
