@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="login-fade d-flex align-items-center justify-content-center text-center">
        <div class="container">
            <div class="login-page container col-xs-12 col-sm-8 col-md-5 col-lg-5 col-xl-5">
                @if (session('status'))
                    <div class="position-fixed bottom-0 end-0 p-3">
                        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header ps-4">
                                <span class="material-icons icon-notification">
                                    done
                                </span>
                                <strong class="me-auto fs-4">Registro Guardado</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                {{ session('status') }}
                            </div>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('login.post') }}">
                    @csrf
                    <p class="display-5 text-uppercase text-white">Iniciar Sesión</p>
                    <hr class="text-white">
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
                    <a class="text-muted" href="#">¿Has olvidado tu contraseña?</a>
                    <div class="contaiener mt-3">
                        <button class="btn-login" type="submit">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
