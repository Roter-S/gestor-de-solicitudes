@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="login-fade d-flex align-items-center justify-content-center text-center">
        <div class="container">
            <div class="login-page container col-xs-12 col-sm-8 col-md-5 col-lg-5 col-xl-5">
                <form>
                    <p class="display-4 text-uppercase text-white">Iniciar Sesión</p>
                    <p class="text-muted"> ¡Por favor, introduce tu usuario y contraseña!</p>
                    <input class="text" type="email" name="" placeholder="Usuario" required />
                    <input class="text" type="password" name="" placeholder="Contraeeña" required />
                    <a class="text-muted" href="#">¿Has olvidado tu contraseña?</a>
                    <button class="btn-login" type="submit" name="" href="#">Entrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
