@extends('layouts.BaseAdmin')
@section('contenido')
@include('includes.breadcrumbAdmin', ['breadcrumbs' => ['Usuarios Registrados' => '']])

<div class="main" style="display: flex">
    <div class="container-register-table">
        <div class="aside" id="usuarios">
            <h2 class="h2-white h2-inline">Usuarios Registrados</h2>
            <a  href="{{ url('/registro/admin') }}" class="blog-topic-detalles text-tiny btn-nuevo-users"><h3>Nuevo +</h3></a>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre Completo</th>
                        <th>Email</th>
                        <th>Tipo de Usuario</th>
                        <th>Fecha de Registro</th>
                        <th class="text-center">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $datos)
                        <tr>
                            @if ($datos->id == 1)
                                <td class="admin-fila">{{ $datos->id }}</td>
                                <td class="admin-fila">{{ $datos->name }}</td>
                                <td class="admin-fila">{{ $datos->email }}</td>
                                <td class="text-center admin-fila">{{ $datos->tipo }}</td>
                                <td class="text-center admin-fila">{{Str::limit($datos->created_at,10, '')}}</td>
                                <td class="admin-fila"><div class="blog-topic-admin text-tiny">--------</div></td>
                            @else
                                <td>{{ $datos->id }}</td>
                                <td>{{ $datos->name }}</td>
                                <td>{{ $datos->email }}</td>
                                <td class="text-center">{{ $datos->tipo }}</td>
                                <td class="text-center">{{Str::limit($datos->created_at,10, '')}}</td>
                                <td><button onClick="eliminarUsuario({{ $datos->id }})" class="blog-topic-delete-comentario text-tiny">Eliminar</button></td>
                            @endif
                        </tr>
                    @endforeach
                    @csrf
                    <input type="hidden" name="_token" value="">
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('includes.footerAdmin')

<script>
    function eliminarUsuario(id) {

        if (confirm("¿Está seguro de eliminar a este Usuario?") == true) {

            $.ajax({
                type: 'POST',
                url: "{{route('eliminar.usuario')}}",
                data: {
                    id: id,
                    _token:$('input[name="_token"]').val()
                },

                success: function(success){

                    $("#usuarios").load(location.href + " #usuarios");

                },
                error: function(err){
                    console.log(err);
                }
            });

        } else {

            return false;

        }

    }
</script>

@endsection




