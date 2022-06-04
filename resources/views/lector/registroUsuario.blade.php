@extends('layouts.base')
@section('contenido')
@include('includes.breadcrumb', ['breadcrumbs' => ['Registro usuario' => '']])

<div class="main">
    <div class="container-register">
        <div class="aside">
            <div class="newsletter">
                <div class="wrapper-register">
                    @if (count($errors) > 0)
                        <ul class="errors-li">
                            @foreach ($errors->all() as $error)
                                <li> -> {!!$error!!}</li>
                            @endforeach
                        </ul>
                    @endif
                    <h2 class="h2 h2-white">Registra tus datos</h2>
                    <form action="{{ route("usuario.registro") }}" method="POST">
                        @csrf
                        <p class="h2-white">Nombre Completo* y Apellidos*:</p>
                        <input type="text" name="nombre" placeholder="Escribe tu Nombre Completo:" required pattern="[A-Za-z ]{2,100}" title="Solo se aceptan letras.">
                        <p class="h2-white">Correo Electronico*:</p>
                        <input type="email" name="email" placeholder="Ejemp: gomezjero98@gmail.com" required autocomplete="off">
                        <input type="hidden" name="tipo" value="LECTOR">
                        <p class="h2-white">Contraseña*:</p>
                        <input type="password" name="password" placeholder="Ejemp: jero.21laselva#DGYS" required autocomplete="new-password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!#$%^&*_=+-]).{8,200}$" title="Minino 8 caracteres">
                        <button type="submit" class="btn btn-primary">Suscribirme</button>
                        <center><a href="{{ url("/login") }}" class="link-login-register">Ya tengo Cuenta</a></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function cerrarErrores(){

        $("#contenedor-errors").html('')

    }
</script>

@include('includes.footer')
@endsection




