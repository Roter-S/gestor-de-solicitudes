@extends('admin.navbar')
@section('title', 'Solicitudes')
@section('content')


@if (Session::get('success'))
    <div class="position-fixed bottom-0 end-0 p-3 " style="z-index:1">
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header ps-4">
                <span class="material-icons icon-notification">
                    done
                </span>
                <strong class="me-auto mx-3 fs-4">{{ Session::get('success') }}</strong>
            </div>
        </div>
    </div>
@endif
<div class="card boder">
    <div class="card-header text-center fs-4">Estado de registro</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table text-center table-dark table-striped mt-3 table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">DPI</th>
                        <th scope="col">Correo electrónico</th>
                        <th scope="col">Estado del registro</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requests as $request)
                        <tr>
                            <th scope="row"> {{ $numeration++ }} </th>
                            <td>{{ $request->user->firstName }}</td>
                            <td>{{ $request->user->firstLastName }}</td>
                            <td>{{ $request->user->dpi }}</td>
                            <td>{{ $request->user->email }}</td>
                            <form method="POST" action=" {{ route('request-status.update', $request) }} ">
                                <td>
                                    <input type="hidden" name="id" value="{{ $request->id }}">
                                    <select class="form-select" name="status">
                                        <option value="Aceptado" @if ($request->status == 'Aceptado') selected @endif>Aceptado</option>
                                        <option value="Pendiente" @if ($request->status == 'Pendiente') selected @endif>Pendiente</option>
                                        <option value="Rechazado" @if ($request->status == 'Rechazado') selected @endif>Rechazado</option>
                                    </select>
                                </td>
                                <td>
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-green" type="submit"
                                        onclick="return confirm('¿Desea actualizar el registro?')">Guardar</button>
                                </td>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
