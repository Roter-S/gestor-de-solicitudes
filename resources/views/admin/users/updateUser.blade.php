@extends('admin.navbar')
@section('title', 'Usuarios')
@section('content')
<div class="container">
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
                    <td>{{ $user->dpi }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role_id }}</td>
                    <th><button class="btn btn-green">Editar</button></th>
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

@endsection
