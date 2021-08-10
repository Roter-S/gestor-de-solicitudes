@extends('layouts.app')
@section('title', 'Registro')
@section('content')
    <div class="bg-fade d-flex align-items-center justify-content-center text-center">
        <div class="container">
            <div class="registro-page bg-dark container col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                <p class="display-4 text-uppercase text-white">Registro</p>
                <hr class="text-white">
                <form class="row " method="POST" action="{{ route('register.store') }}"
                    enctype="multipart/form-data">
                    {{-- @if ($errors->any())+
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                - {{ $error }} <br>
                            @endforeach
                        </div>
                    @endif --}}
                    <div class="col-md-6">
                        <input class="text type="text" name="firstName" placeholder="Primer nombre"
                            value="{{ old('firstName') }}">
                        @error('firstName')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="text" name="secondName" placeholder="Segundo nombre"
                            value="{{ old('secondName') }}">
                        @error('secondName')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="text" name="firstLastName" placeholder="Primer apellido"
                            value="{{ old('firstLastName') }}">
                        @error('firstLastName')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="text" name="secondLastName" placeholder="Segundo apellido"
                            value="{{ old('secondLastName') }}">
                        @error('secondLastName')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="text" name="marriedLastName" placeholder="Apellido de casad@"
                            value="{{ old('marriedLastName') }}">
                        @error('marriedLastName')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="date" name="birthDate" value="{{ old('birthDate') }}">
                        @error('birthDate')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <input class="text" type="number" name="dpi" placeholder="Documento de indentificación"
                            value="{{ old('dpi') }}">
                        @error('dpi')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="text" name="profession" placeholder="Profesión"
                            value="{{ old('profession') }}">
                        @error('profession')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="file-select" id="src-file1">
                            <input type="file" name="photo" aria-label="Archivo" value="{{ old('photo') }}">
                        </div>
                        @error('photo')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="number" name="yearsWorking" placeholder="Años laborando"
                            value="{{ old('yearsWorking') }}">
                        @error('yearsWorking')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="number" name="salary" placeholder="Salario"
                            value="{{ old('salary') }}">
                        @error('salary')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="email" name="email" placeholder="Correo electrónico"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    @csrf
                    <div class="container">
                        <button class="btn-registro col-3" type="submit">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
