@extends('layouts.BaseAdmin')
@section('contenido')
<main>
    <div class="main">
        <div class="container">
            <!-- seccion donde se muestra los posts -->
            <div class="blog" id="posts">

                <div class="flex">
                    <h2 class="h2" id="categoria-tittle"></h2>
                    <div class="newsletter_v2 input-search">
                        <form action="">
                            @csrf
                            <input type="hidden" name="_token">
                            <input type="search" placeholder="Buscar..." id="Buscador" />
                        </form>
                    </div>
                </div>

                <div class="blog-card-group" id="categorias-posts"></div>

            </div>
            <!-- Fin de la seccion de posts -->

            <div class="aside">

                <div class="topics">
                    <h2 class="h2">Categorias</h2>
                    <a href="#" class="topic-btn" id="posts-futbol">
                        <div class="icon-box">
                            <ion-icon name="football"></ion-icon>
                        </div>
                        <p>Partidos de Futbol</p>
                    </a>
                    <a href="#" class="topic-btn" id="posts-basquetbol">
                        <div class="icon-box">
                            <ion-icon name="basketball"></ion-icon>
                        </div>
                        <p>Partidos de Basquetbol</p>
                    </a>
                    <a href="#" class="topic-btn" id="posts-beisbol">
                        <div class="icon-box">
                            <ion-icon name="baseball"></ion-icon>
                        </div>
                        <p>Partidos de Béisbol</p>
                    </a>
                    <a href="#" class="topic-btn" id="posts-tenis">
                        <div class="icon-box">
                            <ion-icon name="tennisball"></ion-icon>
                        </div>
                        <p>Partidos de Tenis</p>
                    </a>
                </div>

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
                        <p>Nuestros medios de comunicación...</p>
                        <ul class="social-link">
                            <li><a href="#" class="icon-box whatssapp"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
                            <li><a href="#" class="icon-box twitter"><ion-icon name="logo-twitter"></ion-icon></a></li>
                            <li><a href="#" class="icon-box facebook"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        </ul>
                    </div>
                </div>

                <div class="newsletter" id="alert-container-delete">

                </div>

            </div>
        </div>
    </div>
</main>
<!-- #FOOTER -->
@include('includes.footerAdmin')

<script type="text/javascript">

    $(document).ready(function() {

        verCategoria('futbol');

        $('#posts-futbol').on('click', function (e){
            e.preventDefault();
            verCategoria('futbol');
        })

        $('#posts-basquetbol').on('click', function (e){
            e.preventDefault();
            verCategoria('basquetbol');
        })

        $('#posts-beisbol').on('click', function (e){
            e.preventDefault();
            verCategoria('beisbol');
        })

        $('#posts-tenis').on('click', function (e){
            e.preventDefault();
            verCategoria('tenis');
        })

    });

    function verCategoria(categoria){

        // $(function() {
        //     $("#texto-post").empty ();
        // });

        $.ajax({
            type: 'POST',
            url: "{{route('posts.buscar')}}",
            data: {
                categoria: categoria,
                _token:$('input[name="_token"]').val()
            },

            dataType: 'json',

            success: function(value){

                var datos_html = '';

                $.each(value, function(index) {

                    console.log(index);

                    var datetime_post = value[index].created_at;

                    var fecha = datetime_post.substr(-28,10);
                    var hora = datetime_post.substr(-16,5);

                    var categoria = "Administra los Posts de "+ value[index].categoria;

                    datos_html += `<div class="blog-card">
                                        <div class="blog-card-banner">
                                            <img src="/uploads/`+ value[index].imagen +`" alt="" width="250" class="blog-banner-img img-post">
                                        </div>
                                        <div class="blog-content-wrapper">
                                            <h3><a href="{{ url('/post_detalle_admin/` + value[index].id + `') }}" class="h3">`+ value[index].titulo +`</a></h3>
                                            <p class="blog-text">`+ value[index].contenido +`</p>
                                            <div class="wrapper-flex">
                                                <div class="wrapper">
                                                    <button class="h4">Por: `+ value[index].email_redactor +`</button>
                                                    <p class="text-sm">
                                                        <ion-icon name="calendar"></ion-icon>
                                                        <time datetime="2022-01-17">`+ fecha +`</time>
                                                        <span class="separator"></span>
                                                        <ion-icon name="time-outline"></ion-icon>
                                                        <time datetime="PT3M">`+ hora +`</time>
                                                    </p>
                                                    <p class="text-sm">
                                                        <button  onClick="EliminarPost(`+ value[index].id +`,'`+ value[index].categoria +`')" class="blog-topic-delete text-tiny">Eliminar</button>
                                                        <a  href="{{ url('/post_detalle_admin/` + value[index].id + `') }}" class="blog-topic-detalles text-tiny">Comentarios</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`;

                    $("#categoria-tittle").html(categoria);
                    $("#categorias-posts").html(datos_html);

                });
            },
            error: function(err){
                console.log(err);
            }
        });

    }

    function EliminarPost(id, categoria){

        if (confirm("¿Desea eliminar este POST?") == true) {

            $.ajax({
                type: 'POST',
                url: "{{route('posts.eliminar')}}",
                data: {
                    id: id,
                    _token:$('input[name="_token"]').val()
                },

                success: function(message){

                    var notificacion = `<div class="wrapper"><div class="alert-delete alert-delete-success">` +message + `</div></div>`;

                    $("#alert-container-delete").html(notificacion);

                    verCategoria(categoria);

                    borrarNotificación();

                },
                error: function(err){
                    console.log(err);
                }
            });

        } else {
            return false;
        }
    }

    function borrarNotificación(){

        setTimeout(function() {

            $("#alert-container-delete").html('')

        },4000);
    }

</script>

@endsection
