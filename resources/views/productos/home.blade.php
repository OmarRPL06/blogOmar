@extends('layouts.base')
@section('contenido')
<br>
<div class="page-holder">
    <!--  Modal -->
    <div class="modal fade" id="productView" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content overflow-hidden border-0">
                <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-0">
                    <div class="row align-items-stretch">
                        <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" style="background: url(images/productos/product-5.jpg)" href="images/productos/product-5.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="images/productos/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="images/productos/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
                        <div class="col-lg-6">
                            <div class="p-4 my-md-4">
                                <h2 class="h4">Red digital smartwatch</h2>
                                <p class="text-muted">$250</p>
                                <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                                <div class="row align-items-stretch mb-4 gx-0">
                                    <div class="col-sm-7">
                                        <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                            <div class="quantity">
                                                <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                                <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                                <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="#">Agregar al Carrito</a></div>
                                </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i class="far fa-heart me-2"></i>Add to wish list</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION-->
    <div class="container">
        <section class="hero pb-3 bg-cover bg-center d-flex align-items-center img-home" style="background: url(
            images/productos/pn.jpg)">
            <div class="container py-5">
                <div class="row px-4 px-lg-5">
                    <div class="col-lg-6">
                        <p class="text-muted small text-uppercase mb-2">Nuevos Productos del 2022</p>
                        <h1 class="h2 text-uppercase mb-3">Tienda Deportiva  Siglo XXI Online</h1><a class="button" href="{{ url('/posts') }}">Ver Nuevos Posts</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- CATEGORIES SECTION-->
        <section class="pt-5">
            <p class="small text-muted small text-uppercase mb-1">COLECCIONES CREADAS</p>
            <h2 class="h5 text-uppercase mb-4">Buscar Por Categorias</h2>
            <div class="row">
                <div class="col-md-4"><a class="category-item" href="#"><img class="img-fluid" src="images/productos/jn.jpeg" alt=""/><strong class="category-item-title">Ropa Deportiva </strong></a>
                </div>
                <div class="col-md-4"><a class="category-item mb-4" href="#"><img class="img-fluid" src="images/productos/correr.jpg" alt=""/><strong class="category-item-title">Calzados</strong></a><a class="category-item" href="#"><img class="img-fluid" src="images/productos/f.jpeg" alt=""/><strong class="category-item-title">Balones</strong></a>
                </div>
                <div class="col-md-4"><a class="category-item" href="#"><img class="img-fluid" src="images/productos/blue.jpg" alt=""/><strong class="category-item-title">Accesorios</strong></a>
                </div>
            </div>
        </section>
        <!-- TRENDING PRODUCTS-->
        <section class="py-5">
            <p class="small text-muted small text-uppercase mb-1">De una mejor manera</p>
            <h2 class="h5 text-uppercase mb-4">Los productos mas buscados</h2>
            <div class="row">
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="product text-center">
                        <div class="position-relative mb-3">
                            <div class="badge text-white bg-"></div><a class="d-block" href="#"><img class="img-fluid w-100" src="images/productos/1.jpg" alt="..."></a>
                            <div class="product-overlay">
                                <ul class="mb-0 list-inline">
                                    <li class="list-inline-item m-0 p-0"><a class="button" href="#">Agregar al Carrito</a></li>
                                </ul>
                            </div>
                        </div>
                        <h6> <a class="reset-anchor text-decoration-none" href="#">Tenis de Fútbol Nike Phantom GT2 Academy Dynamic Fit MG</a></h6>
                        <p class="small text-muted">$1200</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="product text-center">
                        <div class="position-relative mb-3">
                            <a class="d-block" href="#"><img class="img-fluid w-100" src="images/productos/product-2.jpg" alt="..."></a>
                            <div class="product-overlay">
                                <ul class="mb-0 list-inline">
                                    <li class="list-inline-item m-0 p-0"><a class="button" href="#">Agregar al Carrito</a></li>
                                </ul>
                            </div>
                        </div>
                        <h6> <a class="reset-anchor text-decoration-none" href="#">Air Jordan 12 rojo gimnasio</a></h6>
                        <p class="small text-muted">$300</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="product text-center">
                        <div class="position-relative mb-3">
                            <div class="badge text-white bg-"></div><a class="d-block" href="#"><img class="img-fluid w-100" src="images/productos/product-3.jpg" alt="..."></a>
                            <div class="product-overlay">
                                <ul class="mb-0 list-inline">
                                    <li class="list-inline-item m-0 p-0"><a class="button" href="#">Agregar al Carrito</a></li>
                                </ul>
                            </div>
                        </div>
                        <h6> <a class="reset-anchor text-decoration-none" href="#">Camiseta algodón cyan</a></h6>
                        <p class="small text-muted">$25</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="product text-center">
                        <div class="position-relative mb-3">
                            <div class="badge text-white bg-info">Nuevo</div><a class="d-block" href="#"><img class="img-fluid w-100" src="images/productos/product-4.jpg" alt="..."></a>
                            <div class="product-overlay">
                                <ul class="mb-0 list-inline">
                                    <li class="list-inline-item m-0 p-0"><a class="button" href="#">Agregar al Carrito</a></li>
                                </ul>
                            </div>
                        </div>
                        <h6> <a class="reset-anchor text-decoration-none" href="#">Timex Unisex Originales</a></h6>
                        <p class="small text-muted">$351</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="product text-center">
                        <div class="position-relative mb-3">
                            <div class="badge text-white bg-danger">Sold</div><a class="d-block" href="#"><img class="img-fluid w-100" src="images/productos/product-5.jpg" alt="..."></a>
                            <div class="product-overlay">
                                <ul class="mb-0 list-inline">
                                    <li class="list-inline-item m-0 p-0"><a class="button" href="#">Agregar al Carrito</a></li>
                                </ul>
                            </div>
                        </div>
                        <h6> <a class="reset-anchor text-decoration-none" href="#">Reloj inteligente digital rojo</a></h6>
                        <p class="small text-muted">$250</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="product text-center">
                        <div class="position-relative mb-3">
                            <div class="badge text-white bg-"></div><a class="d-block" href="#"><img class="img-fluid w-100" src="images/productos/product-6.jpg" alt="..."></a>
                            <div class="product-overlay">
                                <ul class="mb-0 list-inline">
                                    <li class="list-inline-item m-0 p-0"><a class="button" href="#">Agregar al Carrito</a></li>
                                </ul>
                            </div>
                        </div>
                        <h6> <a class="reset-anchor text-decoration-none" href="#">Nike air max 95</a></h6>
                        <p class="small text-muted">$300</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="product text-center">
                        <div class="position-relative mb-3">
                            <div class="badge text-white bg-"></div><a class="d-block" href="#"><img class="img-fluid w-100" src="images/productos/product-7.jpg" alt="..."></a>
                            <div class="product-overlay">
                                <ul class="mb-0 list-inline">
                                    <li class="list-inline-item m-0 p-0"><a class="button" href="#">Agregar al Carrito</a></li>
                                </ul>
                            </div>
                        </div>
                        <h6> <a class="reset-anchor text-decoration-none" href="#">Perfume para hombre</a></h6>
                        <p class="small text-muted">$25</p>
                    </div>
                </div>
                <!-- PRODUCT-->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="product text-center">
                        <div class="position-relative mb-3">
                            <div class="badge text-white bg-"></div><a class="d-block" href="#"><img class="img-fluid w-100" src="images/productos/product-8.jpg" alt="..."></a>
                            <div class="product-overlay">
                                <ul class="mb-0 list-inline">
                                    <li class="list-inline-item m-0 p-0"><a class="button" href="#">Agregar al Carrito</a></li>
                                </ul>
                            </div>
                        </div>
                        <h6> <a class="reset-anchor text-decoration-none" href="#">Reloj con tecnologia de Apple</a></h6>
                        <p class="small text-muted">$351</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@include('includes.footer')
@endsection

