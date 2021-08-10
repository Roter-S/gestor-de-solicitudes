<!DOCTYPE html>
<html lang="es-GT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/stylesheets.css') }}" rel="stylesheet">
    <title>Admin</title>
</head>

<body>
    <div class="vw-100 vh-100 bg-body d-flex align-items-center justify-content-center text-center">
        <div class="container">
            <div class="shadow-lg container border border rounded col-xs-12 col-sm-9 col-md-7 col-lg-7 col-xl-5 p-5">
                <form method="POST" action="{{ route('admin.post') }}">
                    @csrf
                    <p class="display-5 text-uppercase">Administrador</p>
                    <hr>
                    <p class="text-muted"> ¡Por favor, introduce tu usuario y contraseña!</p>
                    @if (Session::get('success'))
                        <div class="alert text-danger" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <input class="text" type="email" name="email" placeholder="Usuario" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <input class="text" type="password" name="password" placeholder="Contraseña"
                        value="{{ old('password') }}">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span><br>
                    @endif
                    <div class="contaiener mt-3">
                        <button class="btn-bluegray" type="submit">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
