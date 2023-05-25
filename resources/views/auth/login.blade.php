@extends('layout.plantilla')
@section('titulo','login')
@section('contenido')

<div class="container my-5">
    <div class="row  justify-content-center">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-body">
                    {{-- {{ route('logear') }} --}}
                    <form action="" method="post">
                        @csrf
                        @method('POST')
                        <div class="profile-container text-center pb-3">
                            <img src="https://static.vecteezy.com/system/resources/previews/009/734/564/original/default-avatar-profile-icon-of-social-media-user-vector.jpg" alt="profile"
                             class=" profile rounded-circle shadow" width="241" height="241">
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control  rounded-pill" id="name" name="name" placeholder="Usuario">
                            <label for="user" class="form-label"><i class="fa-solid fa-user"></i> Usuario</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control  rounded-pill" id="password" name="password" placeholder="Contraseña">
                            <label for="password" class="form-label"><i class="fa-solid fa-lock"></i> Contraseña</label>  
                        </div>
                        <div class="form-check form-switch mb-5 mx-2">
                            <input class="form-check-input" type="checkbox" role="switch" id="show_hide_password">
                            <label class="form-check-label" for="show_hide_password" id="text_show_hide_password">Mostrar contraseña</label>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <button class="btn btn-success rounded-pill w-100"><i class="fa-solid fa-right-to-bracket"></i> Ingresar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src={{asset('bootstrap/js/signin.js')}}></script>