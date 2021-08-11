@extends('admin.navbar')
@section('title', 'home')
@section('content')
<div class="content container mt-5">
    <section class="text-center">
        <div class="card">
            <div class="card-header">
                <p class="display-5">Panel de administración</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <div class="col-lg-5 m-1 shadow">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="bg-warning col-md-4 d-flex justify-content-center align-items-center">
                                        <span class="material-icons icon-dashboard">
                                            people
                                        </span>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body text-center">
                                            <h5 class="card-title fs-3">Usuarios</h5>
                                            <p class="fs-2">5</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 m-1 shadow">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="bg-success col-md-4 d-flex justify-content-center align-items-center">
                                        <span class="material-icons icon-dashboard">
                                            people
                                        </span>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body text-center">
                                            <h5 class="card-title fs-3">Solicitudes</h5>
                                            <p class="fs-2">5</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-success h-100 mt-5" role="alert">
                    <p class="fs-1">Bienvenido</p>
                </div>
            </div>
        </div>
</div>
@endsection
