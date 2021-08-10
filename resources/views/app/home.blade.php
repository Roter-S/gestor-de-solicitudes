@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="home-page d-flex align-items-center justify-content-center text-center text-white">
    <div class="container p-4 shadow-lg">
        <div class="row">
            <div class="col-sm-6">
                <div class="card bg-diffuse">
                    <div class="card-body">
                        <p class="card-title display-6">Conoce el estado de tu registro</p>
                        <hr class="dropdown-divider">
                        <p class="card-text">Para esto tienes que <strong class="fs-6">iniciar sesión</strong>, a travez
                            de tu usuario y contraseña. Estos datos se generan una vez hayas llenado el registro, y se
                            envían a tu correo electronico.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card bg-diffuse">
                    <div class="card-body">
                        <h5 class="card-title display-6">Si no puedes acceder a una cuenta.</h5>
                        <hr class="dropdown-divider">
                        <p class="card-text">Puedes <strong class="fs-6">registrarte</strong>, llenado el formulario con
                            los datos que se listan. Al registrarte se generara la solicitud de tu registro y podras ver
                            el estado de tu registro.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
