@extends('admin.navbar')
@section('title', 'Editar')
@section('content')

<div class="card text-center">
    <div class="card-header">
        <p class="fs-2">Editar usuario</p>
    </div>
    <div class="card-body">
        <div class="bg-dark rounded col-xl-12">
            <hr class="text-white">
            <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-md-6">
                        <input class="text type=" text" name="firstName" placeholder="Primer nombre"
                            value="{{ $user->firstName }}">
                        @error('firstName')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="text" name="secondName" placeholder="Segundo nombre"
                            value="{{ $user->secondName }}">
                        @error('secondName')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="text" name="firstLastName" placeholder="Primer apellido"
                            value="{{ $user->firstLastName }}">
                        @error('firstLastName')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="text" name="secondLastName" placeholder="Segundo apellido"
                            value="{{ $user->secondLastName }}">
                        @error('secondLastName')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="text" name="marriedLastName" placeholder="Apellido de casad@"
                            value="{{ $user->marriedLastName }}">
                        @error('marriedLastName')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="date" name="birthDate" value="{{ $user->birthDate }}">
                        @error('birthDate')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="number" name="dpi" placeholder="Documento de indentificación"
                            value="{{ $user->dpi }}">
                        @error('dpi')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <input class="text" type="text" name="profession" placeholder="Profesión"
                            value="{{ $user->profession }}">
                        @error('profession')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <div class="file-select" id="src-file1">
                            <input type="file" name="photo" aria-label="Archivo" value="{{ $user->photo }}">
                        </div>
                        @error('photo')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="number" name="yearsWorking" placeholder="Años laborando"
                            value="{{ $user->yearsWorking }}">
                        @error('yearsWorking')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="number" name="salary" placeholder="Salario"
                            value="{{ $user->salary }}">
                        @error('salary')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="email" name="email" placeholder="Correo electrónico"
                            value="{{ $user->email }}">
                        @error('email')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="text" name="password" placeholder="Contraseña"
                            value="{{ $user->password }}">
                        @error('password')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror

                        <input class="text" type="number" name="role_id" placeholder="Rol"
                            value="{{ $user->role_id }}">
                        @error('role_id')
                            <div class="alert text-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="container">
                    <button class="btn-registro col-3 mt-2 mb-4" type="submit">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
