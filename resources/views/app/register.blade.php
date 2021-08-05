@extends('layouts.app')
@section('title', 'Registro')
@section('content')
    <div class="bg-fade d-flex align-items-center justify-content-center text-center">
        <div class="container">
            <div class="registro-page container col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                <p class="display-4 text-uppercase text-white">Registro</p>
                <form class="row needs-validation" novalidate>
                    <div class="col-md-6">
                        <input class="text" type="text" name="" placeholder="Primer nommbre" required />
                        <input class="text" type="text" name="" placeholder="Segundo nommbre" required />
                        <input class="text" type="text" name="" placeholder="Primer apellido" required />
                        <input class="text" type="text" name="" placeholder="Segundo apellido" required />
                        <input class="text" type="text" name="" placeholder="Apellido de casad@" />
                        <input class="text" type="date" name="" placeholder="Fecha de nacimiento" required />
                    </div>
                    <div class="col-md-6">
                        <input class="text" type="text" name="" placeholder="Documento de indentificación" required />
                        <input class="text" type="text" name="" placeholder="Profesión" required />
                        <div class="file-select" id="src-file1">
                            <input type="file" name="src-file1" aria-label="Archivo">
                        </div>
                        <input class="text" type="text" name="" placeholder="Años laborando" required />
                        <input class="text" type="number" name="" placeholder="Salario" required />
                        <input class="text" type="email" name="" placeholder="Correo electrónico" required />
                    </div>
                </form>
                <button class="btn-registro" type="submit" name="">Registrar</button>
            </div>
        </div>
    </div>
@endsection
