@extends('admin.navbar')
@section('title', 'Usuarios')
@section('content')

@if (Session::has('status'))
    <div class="position-fixed bottom-0 end-0 p-3">
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header ps-4">
                <span class="material-icons icon-notification">
                    done
                </span>
                <strong class="me-auto mx-3 fs-4">{{ Session::get('status') }}</strong>
            </div>
        </div>
    </div>
@endif
<div class="card">
    <div class="card-header text-center fs-4">Usuarios</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-dark table-striped mt-3 text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">DPI</th>
                        <th scope="col">Correo electrónico</th>
                        <th scope="col">Rol del usuario</th>
                        <th scope="col">&nbsp;</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($users as $user)
                            <th scope="row"> {{ $numeration++ }} </th>
                            <td>{{ $user->firstName }}</td>
                            <td>{{ $user->firstLastName }}</td>
                           {{--  <td>
                                <img class="border border-light border-1" style="width:7vw"
                                    src="{{ asset('storage' . '/' . $user->photo) }}" alt="">
                            </td> --}}
                            <td>{{ $user->dpi }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @switch($user->role->typeRole)
                                    @case('administrator')
                                        Administrador
                                    @break
                                    @case('operator')
                                        Operador
                                    @break
                                    @default
                                        Solicitante
                                @endswitch()

                            </td>
                            <th>
                                <form action="{{ route('user.edit', $user->id) }}">
                                    <button class="btn btn-green" type="submit">Editar</button>
                                </form>
                            </th>
                            <th>
                                <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-red"
                                        onclick="return confirm('¿Desea eliminar...?')">Eliminar</button>
                                </form>
                            </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
