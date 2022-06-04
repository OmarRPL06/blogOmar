@extends('layouts.BaseAdmin')
@section('contenido')
@include('includes.breadcrumbAdmin', ['breadcrumbs' => ['Usuarios Registrados' => '/usuarios/admin', 'Registro usuario' => '']])

<div class="main">
    <div class="container-register">
        <div class="aside">
            <div class="newsletter">
                <div class="wrapper-register">
                    @if(session('success'))
                        <div id="success">
                            <div class="card success-card">{{session('success')}}</div>
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <ul class="errors-li">
                            @foreach ($errors->all() as $error)
                                <li> -> {!!$error!!}</li>
                            @endforeach
                        </ul>
                    @endif
                    <h2 class="h2 h2-white">Registrar Nuevo Usuario</h2>
                    <form action="{{ route("usuario.registro") }}" method="POST">
                        @csrf
                        <p class="h2-white">Nombre Completo* y Apellidos*:</p>
                        <input type="text" name="nombre" placeholder="Escribe tu Nombre Completo:" required pattern="[A-Za-z ]{2,100}" title="Solo se aceptan letras y sin acentos.">
                        <p class="h2-white">Correo Electronico*:</p>
                        <input type="email" name="email" placeholder="Ejemp: gomezjero98@gmail.com" required autocomplete="off">
                        <p class="h2-white">Contraseña*:</p>
                        <input type="password" name="password" placeholder="Ejemp: jero.21laselva#DGYS" required autocomplete="new-password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!#$%^&*_=+-]).{8,200}$" title="Minino 8 caracteres">
                        <input type="hidden" name="root" required value="root">
                        <p class="h2-white">Tipo de Usuario*:</p>
                        <select name="tipo" id="" required title="Elige el tipo de usuario">
                            <option value=""></option>
                            <option value="ADMIN">ADMIN</option>
                            <option value="LECTOR">LECTOR</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        setTimeout(function() {

            $("#success").html('')

        },6000);

    });
</script>
@include('includes.footerAdmin')
@endsection




