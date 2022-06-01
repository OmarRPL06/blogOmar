@extends('layouts.base')
@section('contenido')

<div class="page-holder bg-light">
    @include('includes.breadcrumb', ['breadcrumbs' => ['Nuevos Posts' => '/posts', 'Detalles Del Producto' => '' ]])
    <div class="container cont-margin">

        @foreach ($post as $datos)

        <div class="row mb-5">
            <div class="col-lg-6">
                <!-- IMAGEN DEL PRODUCTO -->
                <div class="row m-sm-0">
                    <div class="col-sm-10 order-1 order-sm-2">
                        <div class="swiper product-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide h-auto">
                                    <img class="img-fluid size-img" src="/uploads/{{ $datos->imagen }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DETALLES DEL PRODUCTO-->
            <div class="col-lg-6">
                <h2 class="text-uppercase">{{ $datos->titulo }}</h2>
                <p class="text-muted lead">$250</p>
                <p class="font-weight-normal mb-4 text-justify">{{ $datos->contenido }}</p>
                <div class="row align-items-stretch mb-4">
                    <div class="col-sm-5 pr-sm-0">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white"><span class="small text-uppercase text-gray mr-4 no-select">Cantidad:</span>
                            <div class="quantity">
                                <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 pl-sm-0"><a class="button btn-sm h-100 d-flex align-items-center justify-content-center px-0" href="#">Agregar al Carrito</a></div>
                </div><a class="text-dark p-0 mb-4 d-inline-block" href="#"><i class="far fa-heart me-2"></i>Agregar a mis favoritos</a><br>
                <ul class="list-unstyled small d-inline-block">
                    <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase font-arial">Clave:</strong><span class="ms-2 text-muted" id="id_post">{{ $datos->id }}</span></li>
                    <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark font-arial">Categoria:</strong><a class="reset-anchor ms-2 text-decoration-none" href="#">{{ $datos->categoria }}</a></li>
                    <li class="px-3 py-2 mb-1 bg-white text-muted"><strong class="text-uppercase text-dark font-arial">Tags:</strong><a class="reset-anchor ms-2 text-decoration-none" href="#">{{ $datos->tags }}</a></li>
                </ul>
            </div>
        </div>

        @endforeach

        <!-- DETAILS TABS-->
        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item bg-white nav-link text-uppercase font-arial-size">Comentarios</li>
        </ul>
        <div class="p-4 p-lg-5 bg-white" id="comentariosPost">

        </div>
        <hr>
        <div class="p-4 p-lg-5 bg-white">
            <div class="row">
                <div class="ms-3 flex-shrink-1">

                    @if(session('success'))
                        <div id="success">
                            <div class="alert alert-success">{{session('success')}}</div>
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div id="contenedor-errors">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="cerrarErrores()"></button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{!!$error!!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('post.comentarios') }}" method="POST">

                        @csrf
                        <textarea rows="2" class="form-control margin-buttom" name="texto" id="" placeholder="Escribe tu Comentario..." autofocus required title="Escribe algo, no puedes enviar el campo vacio"></textarea>
                        <input type="hidden" name="id_post" value="{{ $datos->id }}">

                        @if (Auth::guest())
                            <div class="alert alert-warning" role="alert">
                                <a class="btn btn-primary btn-danger" href="{{ url('/suscribirme') }}">Suscribirme</a>
                                Suscribete al blog para poder comentar
                            </div>
                        @else
                            <input type="hidden" name="email_usuario" value="{{ auth()->user()->email }}">
                            <input type="submit" class="btn btn-primary btn-sm" value="Comentar">
                        @endif

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@csrf
<input type="hidden" name="_token" value="">
@include('includes.footer')

<script type="text/javascript">

    $(document).ready(function() {

        comentarios({{ $datos->id }});

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

                    var datos_html = '';

                    $.each(value, function(index) {

                        var datetime_post = value[index].created_at;

                        var fecha = datetime_post.substr(-28,10);
                        var hora = datetime_post.substr(-16,5);

                        datos_html += ` <div class="row">
                                            <div class="col-lg-8">
                                                <div class="d-flex mb-3">
                                                    <div class="ms-3 flex-shrink-1">
                                                        <h6 class="mb-0">` + value[index].email_usuario + `</h6>
                                                        <p class="text-sm mb-0 text-muted">` + fecha + ` a las `+ hora +` horas</p>
                                                        <p class="small text-muted mb-0">` + value[index].texto + `</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`;

                        $("#comentariosPost").html(datos_html);

                    });
                },
                error: function(err){
                    console.log(err);
                }
            });

        }

        setTimeout(function() {

            $("#success").html('')

        },4000);
    });

    function cerrarErrores(){

    $("#contenedor-errors").html('')

    }

</script>

@endsection

