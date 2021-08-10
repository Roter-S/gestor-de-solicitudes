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

<body id="admin-body">
    <div class="d-flex">
        <div class="slidebar-container bg-dark">
            <div class="sildebar-title">
                <p class="fs-3 fw-bold text-center">Menu</p>
            </div>
            <hr class="dropdown-divider">
            <div class="sildebar-menu">
                <div class="d-flex align-items-center">
                    <span class="material-icons">
                        dashboard
                    </span>
                    <a class="nav-a px-1" aria-current="page" href=" {{ route('admin.index') }} ">Dashboard</a>
                </div>
                <hr class="dropdown-divider">
                <div class="d-flex align-items-center">
                    <span class="material-icons">
                        article
                    </span>
                    <a class="nav-a px-1" aria-current="page" href=" {{route('request-status.index')}} ">Solicitudes</a>
                </div>
                <hr class="dropdown-divider">
                <div class="d-flex align-items-center">
                    <span class="material-icons">
                        manage_accounts
                    </span>
                    <a class="nav-a px-1" aria-current="page" href="#">Usuarios</a>
                </div>
                <hr class="dropdown-divider">
            </div>
        </div>

        <div class="w-100">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" href="#offcanvasExample" data-bs-toggle="offcanvas"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="container">
                            <div class="d-flex justify-content-end">
                                <ul class="navbar-nav ml-auto ">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            {{session('user')}}
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                                            <li class="d-flex justify-item-center">
                                                <span class="material-icons px-2">
                                                    logout
                                                </span>
                                                <a class="dropdown-item p-0" href="{{ route('signoutAdmin') }}">Cerrar
                                                    Sesión</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">{{session('user')}}</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <hr class="dropdown-divider">
                <div class="offcanvas-body">
                    <div class="d-flex align-items">
                        <span class="material-icons">
                            dashboard
                        </span>
                        <a class="nav-a px-1" aria-current="page" href="{{ route('admin.index') }} ">Dashboard</a>
                    </div>
                    <hr class="dropdown-divider">
                    <div class="d-flex align-items-center">
                        <span class="material-icons">
                            article
                        </span>
                        <a class="nav-a px-1" aria-current="page" href="#">Solicitudes</a>
                    </div>
                    <hr class="dropdown-divider">
                    <div class="d-flex align-items-center">
                        <span class="material-icons">
                            manage_accounts
                        </span>
                        <a class="nav-a px-1" aria-current="page" href="#">Usuarios</a>
                    </div>
                    <hr class="dropdown-divider">
                    <div class="d-flex align-items-center">
                        <span class="material-icons">
                            logout
                        </span>
                        <a class="nav-a px-1" aria-current="page" href="{{ route('signoutAdmin') }}">Cerrar Sesión</a>
                    </div>
                    <hr class="dropdown-divider">
                </div>
            </div>

            @yield('content')
            </section>
        </div>
    </div>
    </div>

    {{-- -------- scripts --------- --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
