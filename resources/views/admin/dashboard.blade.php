{{-- @extends('layout.plantilla')
@section('titulo',$titulo)
@section('contenido')

<h1>{{@session('perfil')}}</h1>
<h2>{{@session('nombre_usuario')}}</h2>
@endsection
     --}}

@extends('layout.scaffold')
    <link rel="stylesheet" href={{asset('bootstrap/css/scaffold.css')}}>
    <link rel="stylesheet" href={{asset('bootstrap/css/admin.css')}}>
    <div class="container">
        <div class="row">
            <div class="col">
                @section('user')
                    <img src="https://images.pexels.com/photos/2726111/pexels-photo-2726111.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Profile" class="rounded-circle shadow-lg my-4" width="150" height="150">
                    <h2 class="fs-5 fw-light mb-0">Usuario</h2>
                    <small class="text-muted">{{@session('nombre_usuario')}}</small>
                @endsection
                @section('menu')
                    <li class="mb-2 w-100 mt-3">
                        <a href="#" class="btn btn-light rounded-pill text-start w-100"><i class="fa-solid fa-layer-group me-2"></i>Mis creditos</a>
                    </li>
                    <li class="mb-2 w-100">
                        <a href="#" class="btn btn-light rounded-pill text-start w-100"><i class="fa-solid fa-clock me-2"></i>Registrar horas</a>
                    </li>
                    <li class="mb-2 w-100">
                        <a href="#" class="btn btn-light rounded-pill text-start w-100"><i class="fa-solid fa-user me-2"></i>Agregar usuario</a>
                    </li>
                @endsection
                @section('main')
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <h2 class="text-center">Bienvenido</h2>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-4 mt-4">
                                <a href="#" class="btn btn-success badge-container  d-flex align-items-center justify-content-center mx-auto">
                                    <i class="fa-solid fa-basketball fa-5x icon-deportivo"></i>
                                </a>
                                <div class="my-2">
                                    <h5 class="text-center">Credito Deportivo</h5>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <a href="#" class="btn btn-success badge-container d-flex align-items-center justify-content-center mx-auto">
                                    <i class="fa-solid fa-book-open-reader fa-5x icon-deportivo"></i>
                                </a>
                                <div class="my-2">
                                    <h5 class="text-center">Credito Cultural</h5>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <a href="#" class="btn btn-success badge-container d-flex align-items-center justify-content-center mx-auto">
                                    <i class="fa-solid fa-flag fa-5x icon-deportivo"></i>
                                </a>
                                <div class="my-2">
                                    <h5 class="text-center">Credito Civico</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mt-5">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Agregar Carpeta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection
            </div>
        </div>
    </div>