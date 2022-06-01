@extends('layouts.BaseAdmin')
@section('contenido')
@include('includes.breadcrumbAdmin', ['breadcrumbs' => ['Subir Posts' => '']])

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
                    <h2 class="h2 h2-white">Subir Nuevo Post</h2>
                    <form action="{{route('post.subir')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <p class="h2-white">Título:</p>
                        <input type="text" placeholder="Coloca el Título" name="titulo" required title="Coloque el titulo del post" pattern="{4,255}">
                        <input type="hidden" name="email" value="{{ auth()->user()->email }}" required>

                        <p class="h2-white">Categoria:</p>
                        <select class="form-control" name="categoria" required>
                            <option value="">Selecciona la categoria:</option>
                            <option value="futbol">Futbol</option>
                            <option value="basquetbol">Basquetbol</option>
                            <option value="beisbol">Beisbol</option>
                            <option value="tenis">Tenis</option>
                          </select>

                        <p class="h2-white">Tags:</p>
                        <input type="text" placeholder="Coloca Algun Tag(s)" name="tags" required>

                        <p class="h2-white">Imagen:</p>
                        <input type="file" class="form-control" name="img" required accept="image/*">

                        <p class="h2-white">Descripcion:</p>
                        <div class="newsletter-v2">
                            <textarea name="contenido" placeholder="Describe la publicación..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Publicar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@include('includes.footerAdmin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

    $(document).ready(function() {

        setTimeout(function() {

            $("#success").html('')

        },4000);

    });

    function cerrarErrores(){

        $("#contenedor-errors").html('')

    }

</script>

@endsection

