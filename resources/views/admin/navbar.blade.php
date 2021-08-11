<?php
use App\Models\User;

if (Session::has('user')) {
    $user = User::where('email', Session::get('user'))->first();
    $userRol = $user->role_id;
}

?>
<!DOCTYPE html>
<html lang="es-GT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/stylesheets.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <p class="navbar-brand fw-bold m-0">Menu</p>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ms-auto">
                    <div class="dropdown">
                        <button class="btn text-white dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ session('user') }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end text-center dropdown-menu-dark"
                            aria-labelledby="dropdownMenuButton1">
                            <li class="d-flex">
                                <span class="material-icons px-2">
                                    logout
                                </span>
                                <a class="text-white px-2" href="{{ route('signoutAdmin') }}">Cerrar Sesión</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-body">
            <nav class="navbar-dark bg-dark">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link px-3 d-flex" href="{{ route('admin.index') }}">
                            <span class="material-icons">
                                dashboard
                            </span>
                            <span class="px-2">Dashboard</span>
                        </a>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="nav-link px-3 d-flex" href="{{ route('request-status.index') }}">
                            <span class="material-icons">
                                article
                            </span>
                            <span class="px-2">Solicitudes</span>
                        </a>
                        <hr class="dropdown-divider">
                    </li>
                    @if($userRol == 1)
                    <li>
                        <a class="nav-link px-3 d-flex" href="{{ route('user.index') }}">
                            <span class="material-icons">
                                manage_accounts
                            </span>
                            <span class="px-2">Usuarios</span>
                        </a>
                        <hr class="dropdown-divider">
                    </li>
                    @endif

                </ul>
            </nav>
        </div>
    </div>

    <main class="mt-5 pt-3">
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>

    {{-- -------- scripts --------- --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
