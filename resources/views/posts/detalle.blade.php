@extends('layouts.base')
@section('contenido')

@include('includes.breadcrumb', ['breadcrumbs' => ['Comentarios del post' => '' ]])

<div class="main">

    <div class="container">
        <div class="blog" id="posts">
            <h2 class="h2">Detalles del Post 2022 Ven y conoce mas de las ofertas.</h2>
            <div class="blog-card-group">
                <div class="blog-card-detalles">
                    @foreach ($post as $datos)
                        <div class="blog-card-banner">
                            <img src="/uploads/{{ $datos->imagen }}" alt="" width="250" class="blog-banner-img img-post">
                        </div>
                        <div class="blog-content-wrapper">
                            <h3><a style="text-decoration: none" class="h3">{{ $datos->titulo }}</a></h3>
                            <button href="#" class="h4 tag-alt">Tags: {{ $datos->tags }}</button>
                            <p class="blog-text-detalles">{{ $datos->contenido }}</p>
                            <div class="wrapper-flex">
                                <div class="profile-wrapper">
                                    <img src="/images/avatar.png" alt="" width="50">
                                </div>
                                <div class="wrapper">
                                    <button href="#" class="h4">Por: {{ $datos->email_redactor }}</button>
                                    <p class="text-sm">
                                        <ion-icon name="calendar"></ion-icon>
                                        <time datetime="2022-01-17">{{Str::limit($datos->created_at,10, '')}}</time>
                                        <span class="separator"></span>
                                        <ion-icon name="time-outline"></ion-icon>
                                        @php
                                            $hora = (Str::limit(Str::substr($datos->created_at,-8), 5, ''));
                                        @endphp
                                        <time datetime="PT3M">{{ $hora }}</time>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Seccion de comentarios -->
                <div class="blog-card-detalles">

                    <h2 class="h2">Comentarios</h2>

                    <div id="comentariosPost">

                    </div>

                    <br><br>

                    <h2 class="h2">Envía un comentario</h2>
                    <div class="newsletter-v2">
                        <form id="enviar-comentarios">
                            @csrf
                            <textarea name="texto" placeholder="Escribe tu comentario..." required></textarea>
                            <input type="hidden" name="id_post" value="{{ $datos->id }}">
                            @if (Auth::guest())
                                <div class="warning">
                                    <a class="btn_v3 btn-primary_v3" href="{{ url('/suscribirse') }}">Suscribirme</a>
                                    Suscribete al blog para poder comentar
                                </div>
                            @else
                                <input type="hidden" name="email_usuario" value="{{ auth()->user()->email }}">
                                <button type="button" id="btn-comentario" onClick="enviarComentario()" class="btn_v2 btn-primary_v2">Comentar</button>
                            @endif
                        </form>
                        <input type="hidden" name="_token" value="">
                    </div>

                </div>

            </div>
        </div>

        <div class="aside">
            <div class="tags">
                <h2 class="h2">Tags</h2>
                <div class="wrapper">
                    <button class="hashtag">#Futbol</button>
                    <button class="hashtag">#CruzAzul</button>
                    <button class="hashtag">#Tenis</button>
                    <button class="hashtag">#Basquetol</button>
                    <button class="hashtag">#BeisbolFinal</button>
                    <button class="hashtag">#Toluca</button>
                </div>
            </div>

            <div class="contact">
                <h2 class="h2">Contacto</h2>
                <div class="wrapper">
                    <p>Para saber más, escribenos por nuestros redes sociales.</p>
                    <ul class="social-link">
                        <li><a href="#" class="icon-box whatssapp"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
                        <li><a href="#" class="icon-box twitter"><ion-icon name="logo-twitter"></ion-icon></a></li>
                        <li><a href="#" class="icon-box facebook"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</div>

@include('includes.footer')

<script type="text/javascript">

    $(document).ready(function() {

        comentarios({{ $datos->id }});

        // setInterval(cargarRespuestas, 1000);

        // setInterval(CargarComentarios, 1000);

        setTimeout(function() {

            $("#success").html('');

        },4000);


    });

    function comentarios(id){

        $.ajax({
            type: 'POST',
            url: "{{route('comentarios.buscar')}}",
            data: {
                id: id,
                _token:$('input[name="_token"]').val()
            },

            dataType: 'json',

            success: function(value){

                console.log(value);

                var datos = '';

            $.each(value, function(index) {

                var datetime_post = value[index].created_at;

                var fecha = datetime_post.substr(-28,10);
                var hora = datetime_post.substr(-16,5);

                datos += `<div class="wrapper-flex">
                            <div class="profile-wrapper">
                                <img src="/images/avatar.png" alt="" width="50">
                            </div>
                            <div class="wrapper">
                                <button href="#" class="h4">Por: ` + value[index].email_usuario + `</button>
                                <p class="text-sm">
                                    <ion-icon name="calendar"></ion-icon>
                                    <time datetime="2022-01-17">` + fecha + `</time>
                                    <span class="separator"></span>
                                    <ion-icon name="time-outline"></ion-icon>
                                    <time datetime="PT3M">`+ hora + `</time>
                                </p>
                            </div>
                        </div>
                        <div  id="com">
                            <p class="text-sm text-sm-comentario">` + value[index].texto + `</p>
                            <div class="tags">
                                <div class="wrapper btn-comentario">
                                    <button onClick="responder(` + value[index].id + `)" class="hashtag"><i class="fa-solid fa-reply-all"></i> Responder</button>
                                </div>
                            </div>
                            <div id="responder`+ value[index].id +`"></div>
                            <h1 style="display: none">` + value[index].id + `</h1>
                            <div id="respuestas` + value[index].id + `"></div>
                        </div>`;

            });

                $("#comentariosPost").html(datos);

                cargarRespuestas();

            },
                error: function(err){
                console.log(err);
            }
        });

    }

    function CargarComentarios(){

        comentarios({{ $datos->id }});

    }

    function cerrarErrores(){

        $("#contenedor-errors").html('')

    }

    function cargarRespuestas(){

        $("#com h1").each(function(){

            var id = $(this).text();

            verRespuestas(id);
        });

    }

    function verRespuestas(id){

        $.ajax({

            type: 'POST',
            url: "{{route('respuesta.buscar')}}",
            data: {
                id: id,
                _token:$('input[name="_token"]').val()
            },

            dataType: 'json',

            success: function(value){

                console.log(value);

                var respuesta = '';

                $.each(value, function(index) {

                    var datetime_post = value[index].created_at;

                    var fecha = datetime_post.substr(-28,10);
                    var hora = datetime_post.substr(-16,5);

                    respuesta += `<div class="respuesta-comentario">
                                    <div class="wrapper-flex">
                                        <div class="profile-wrapper">
                                            <img src="/images/avatar.png" alt="" width="50">
                                        </div>
                                        <div class="wrapper">
                                            <button href="#" class="h4">Respondido Por: ` + value[index].email_usuario + `</button>
                                            <p class="text-sm">
                                                <ion-icon name="calendar"></ion-icon>
                                                <time datetime="2022-01-17">` + fecha + `</time>
                                                <span class="separator"></span>
                                                <ion-icon name="time-outline"></ion-icon>
                                                <time datetime="PT3M">`+ hora + `</time>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-sm text-sm-comentario">` + value[index].texto + `</p>
                                </div>`;


                    $("#respuestas" + value[index].id_comentario + "").html(respuesta);

                });
            },
            error: function(err){
                console.log(err);
            }
        });
    }

    function enviarComentario(){

        $.ajax({

            url: "{{route('post.comentarios')}}",
            type: 'post',
            data: $("#enviar-comentarios").serialize(),


            success: function (){

                $('#enviar-comentarios')[0].reset();

                CargarComentarios();

                cargarRespuestas();

            }

        })
    }

    function responder(id){

        let form = `<div class="newsletter-v2 margin-left-reply">
                        <form id="enviar-respuesta">
                            @csrf
                            <textarea name="texto" placeholder="Escribe tu respuesta..." required></textarea>
                            <input type="hidden" name="id_comentario" value="`+ id +`">
                            @if (Auth::guest())
                                <div class="warning">
                                    <a class="btn_v3 btn-primary_v3" href="{{ url('/login') }}">Suscribirme</a>
                                    Suscribete al blog para poder comentar
                                </div>
                            @else
                                <input type="hidden" name="email_usuario" value="{{ auth()->user()->email }}">
                                <button type="button" id="btn-comentario"  onClick="enviarRespuesta()" class="btn_v2 btn-primary_v2">Responder</button>
                            @endif
                        </form>
                        <input type="hidden" name="_token" value="">
                    </div>`;

        $("#responder"+ id + "").html(form);
    }

    function enviarRespuesta(){

        $.ajax({

            url: "{{route('post.respuesta')}}",
            type: 'post',
            data: $("#enviar-respuesta").serialize(),

            success: function (){

                $('#enviar-respuesta')[0].reset();

                CargarComentarios();

                cargarRespuestas();

            }

        })
    }


</script>
@endsection

