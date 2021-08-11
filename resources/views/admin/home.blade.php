@extends('admin.navbar')
@section('title', 'home')
@section('content')

<div class="row">
    <div class="col-md-12 fw-bold text-center display-5 mb-5">Dashboard</div>
</div>
<div class="row text-center">
    <div class="col-md-3">
        <div class="card bg-success mb-3">
            <div class="card-header">
                <span class="material-icons icon-dashboard">
                    check_circle
                </span>
            </div>
            <div class="card-body">
                <h5 class="card-title">Registros Aceptados</h5>
                <p class="card-text fs-2">{{ $totalAccepted }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-warning mb-3">
            <div class="card-header">
                <span class="material-icons icon-dashboard">
                    hourglass_top
                </span>
            </div>
            <div class="card-body">
                <h5 class="card-title">Registros Pendientes</h5>
                <p class="card-text fs-2">{{ $totalWaiting }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-danger mb-3">
            <div class="card-header">
                <span class="material-icons icon-dashboard">
                    cancel
                </span>
            </div>
            <div class="card-body p-2 pt-4">
                <h5 class="card-title">Registros Rechazados</h5>
                <p class="card-text fs-2">{{ $totalRejected }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-primary mb-3">
            <div class="card-header">
                <span class="material-icons icon-dashboard">
                    people_alt
                </span>
            </div>
            <div class="card-body">
                <h5 class="card-title mt-2">Usuarios</h5>
                <p class="card-text fs-2 mb-3">{{ $totalUsers }}</p>
            </div>
        </div>
    </div>

</div>

<div class="row text-center">
    <div class="card">
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                <p class="display-1 m-3 text-uppercase">Bienvenido</p>
            </div>
        </div>
    </div>
</div>
@endsection
