@extends('adminlte::page')
@section('title', 'miblog')
@section('content_header')
    <h1>Sport Siglo XXI</h1> 
@stop
@section('content')
<h2>Error 401 - Acceso denegado.</h2>
<h3>Puede que el administrador no te ha otorgado el acceso al sistema, para continuar con la peticion acude con el gerente... Por favor.</h3>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>
@stop