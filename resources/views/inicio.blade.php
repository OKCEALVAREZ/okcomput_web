@extends("themes/web/layout")

@section("title") PORTAL WEB @endsection

@section("content")
<section class="cover height-70 imagebg text-center slider slider--ken-burns mt-box-slider" data-arrows="true" data-paging="true">
    <div class="container-fluid">
        <div class="row">
            <div class="home-slider5">
                <div class="bxslider">
                    @foreach ($banner as $ban)
                        <div><img src="{{ $ruta_ban}}{{ $ban->name }}"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-blog">
    <div class="container-okc">
        <div class="row">
            <div class="blog-inner">
                <div class="col-sm-3 blog-preview_item">
                    <div class="blog-preview-item-inner">
                        <div class="entry-thumb image-hover2">
                            <a href="{{ route('catalogo') }}">
                                <img src="{{ asset('images/mini/visual1.png') }}" alt="catalogo_laptops">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title text-center"><a href="{{ route('catalogo') }}">Laptops</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 blog-preview_item">
                    <div class="blog-preview-item-inner">
                        <div class="entry-thumb image-hover2">
                            <a href="{{ route('catalogo') }}">
                                <img src="{{ asset('images/mini/visual2.png') }}" alt="catalogo_audifono">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title text-center"><a href="{{ route('catalogo') }}">Audífonos</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 blog-preview_item">
                    <div class="blog-preview-item-inner">
                        <div class="entry-thumb image-hover2">
                            <a href="{{ route('catalogo') }}">
                                <img src="{{ asset('images/mini/visual3.png') }}" alt="catalogo_all_one">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title text-center"><a href="{{ route('catalogo') }}">All In One</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 blog-preview_item">
                    <div class="blog-preview-item-inner">
                        <div class="entry-thumb image-hover2">
                            <a href="{{ route('catalogo') }}">
                                <img src="{{ asset('images/mini/visual4.png') }}" alt="catalogo_mochila">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title text-center"><a href="{{ route('catalogo') }}">Mochilas</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-services preload">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="clearfix">
                    <li class="item04 slide_item active_slide" style="width: 528px;">
                        <div class="wrap">
                            <span class="icon"></span>
                            <span class="infor">Nuestra <br> empresa</span>
                        </div>
                        <div class="txt">
                            OK COMPUTER EIRL, es una empresa integradora de tecnología de la información con más de 10 años de experiencia, nos especializamos en brindar soluciones integrales de hardware, software y servicios.
                            Nos identificamos como el socio que las empresas buscan para ser apoyadas en sus estrategias de negocios por medio de la tecnología.
                            Para ello contamos con alianzas y la representación de importantes marcas del rubro de la tecnología reconocidas a nivel mundial.
                        </div>
                        <div class="shadow"></div>
                        <div class="line"></div>
                    </li>
                    <li class="item03 slide_item" style="">
                        <div class="wrap">
                            <span class="icon"></span>
                            <span class="infor">Misión</span>
                        </div>
                        <div class="txt" style="margin-top: 80px;">
                            Ser una organización en constante transformación, enfocada en la sostenibilidad de nuestro crecimiento y participación en el mercado, 
                            mejorando la calidad de las soluciones proporcionadas a nuestros clientes, dentro de un ecosistema empresarial sostenible.
                        </div>
                        <div class="shadow" style=""></div>
                        <div class="line"></div>
                    </li>
                    <li class="item01 slide_item" style="">
                        <div class="wrap">
                            <span class="icon"></span>
                            <span class="infor">Visión</span>
                        </div>
                        <div class="txt">
                            Ser un referente en el mercado nacional de comercialización de equipos informáticos y ejecución de proyectos tecnológicos con un elevado valor añadido en innovación y calidad, 
                            desarrollando talentos y habilidades en un excelente ambiente laboral, motivados por buscar y satisfacer continuamente las necesidades de nuestros clientes, 
                            contribuyendo con responsabilidad social y cuidado del medio ambiente.
                        </div>
                        <div class="shadow" style=""></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="latest-blog">
    <div class="container-okc">
        <div class="section-title-okc">
            <h2 class="section-title">Nuestros Servicios</h2>
        </div>
        <div class="row">
            <div class="blog-inner">
                <div class="col-sm-4 mb-3 blog-preview_item">
                    <div class="blog-preview-item-inner">
                        <div class="entry-thumb image-hover2">
                            <a href="{{ route('catalogo') }}">
                                <img src="{{ asset('images/servicio/service4.jpg') }}" alt="soluciones_interactivas">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title text-center"><a href="{{ route('catalogo') }}">Soluciones interactivas</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 blog-preview_item mb-3">
                    <div class="blog-preview-item-inner">
                        <div class="entry-thumb image-hover2">
                            <a href="{{ route('catalogo') }}">
                                <img src="{{ asset('images/servicio/service5.jpg') }}" alt="telefonia_telemedicina">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title text-center"><a href="{{ route('catalogo') }}">Telefonía - Telemedicina</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 blog-preview_item mb-3">
                    <div class="blog-preview-item-inner">
                        <div class="entry-thumb image-hover2">
                            <a href="{{ route('catalogo') }}">
                                <img src="{{ asset('images/servicio/service6.jpg') }}" alt="consultoria_asesoramiento">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title text-center"><a href="{{ route('catalogo') }}">Consultoría y asesoramiento</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 blog-preview_item mb-3">
                    <div class="blog-preview-item-inner">
                        <div class="entry-thumb image-hover2">
                            <a href="{{ route('catalogo') }}">
                                <img src="{{ asset('images/servicio/service7.jpg') }}" alt="videovigilancia">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title text-center"><a href="{{ route('catalogo') }}">Videovigilancia</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 blog-preview_item mb-3">
                    <div class="blog-preview-item-inner">
                        <div class="entry-thumb image-hover2">
                            <a href="{{ route('catalogo') }}">
                                <img src="{{ asset('images/servicio/service8.jpg') }}" alt="virtualizacion">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title text-center"><a href="{{ route('catalogo') }}">Virtualización</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 blog-preview_item mb-3">
                    <div class="blog-preview-item-inner">
                        <div class="entry-thumb image-hover2">
                            <a href="{{ route('catalogo') }}">
                                <img src="{{ asset('images/servicio/service9.jpg') }}" alt="cableado_estructurado">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title text-center"><a href="{{ route('catalogo') }}">Cableado estructurado</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trending-products unpad tp-ok">
    <div class="container-okc">
        <div class="row mb-3">
            <div class="section-title-okc">
                <h2 class="section-title">Categoría de Productos</h2>
            </div>
            <div class="col-md-3">
                <div class="hot-banner">
                    <a href="{{ route('windows') }}">
                        <img alt="banner" src="{{ $ruta_ban}}{{ $mic_ver->name }}">
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row product-okc mb-3">
                    <div class="col-md-4 mb-3">
                        <div class="mgk-pro-hover">
                            <a href="{{ route('catalogo') }}" title="Laptops" class="product-image">
                                <img class="img-responsive" src="{{ asset('images/categoria/cate00.png') }}" alt="Laptops">
                            </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="mgk-pro-hover">
                            <a href="{{ route('catalogo') }}" title="All In One" class="product-image">
                                <img class="img-responsive" src="{{ asset('images/categoria/cate01.png') }}" alt="All In One">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="mgk-pro-hover">
                            <a href="{{ route('catalogo') }}" title="Audifonos" class="product-image">
                                <img class="img-responsive" src="{{ asset('images/categoria/cate02.png') }}" alt="Audifonos">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="mgk-pro-hover">
                            <a href="{{ route('catalogo') }}" title="Audifonos Deportivos" class="product-image">
                                <img class="img-responsive" src="{{ asset('images/categoria/cate03.png') }}" alt="Audifonos Deportivos">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="mgk-pro-hover">
                            <a href="{{ route('catalogo') }}" title="Bio Seguridad" class="product-image">
                                <img class="img-responsive" src="{{ asset('images/categoria/cate04.png') }}" alt="Bio Seguridad">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="mgk-pro-hover">
                            <a href="{{ route('catalogo') }}" title="Camara Web" class="product-image">
                                <img class="img-responsive" src="{{ asset('images/categoria/cate05.png') }}" alt="Camara Web">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="mgk-pro-hover">
                            <a href="{{ route('catalogo') }}" title="Computadoras" class="product-image">
                                <img class="img-responsive" src="{{ asset('images/categoria/cate06.png') }}" alt="Computadoras">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="mgk-pro-hover">
                            <a href="{{ route('catalogo') }}" title="Impresoras" class="product-image">
                                <img class="img-responsive" src="{{ asset('images/categoria/cate07.png') }}" alt="Impresoras">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="mgk-pro-hover">
                            <a href="{{ route('catalogo') }}" title="Licencias" class="product-image">
                                <img class="img-responsive" src="{{ asset('images/categoria/cate08.png') }}" alt="Licencias">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="mgk-pro-hover">
                            <a href="{{ route('catalogo') }}" title="Monitores" class="product-image">
                                <img class="img-responsive" src="{{ asset('images/categoria/cate09.png') }}" alt="Monitores">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="mgk-pro-hover">
                            <a href="{{ route('catalogo') }}" title="Tablets" class="product-image">
                                <img class="img-responsive" src="{{ asset('images/categoria/cate10.png') }}" alt="Tablets">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="mgk-pro-hover">
                            <a href="{{ route('catalogo') }}" title="Mochilas" class="product-image">
                                <img class="img-responsive" src="{{ asset('images/categoria/cate11.png') }}" alt="Mochilas">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="hot-banner">
                            <a href="{{ route('microsoft365') }}">
                                <img alt="banner" src="{{ $ruta_ban}}{{ $mic_hor->name }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="hot-banner">
                    <a href="{{ route('eventos.dell.formulario') }}">
                        <img alt="banner" src="{{ asset('images/evento-dell/banner.png') }}">
                    </a>
                </div>
            </div>
        </div> -->
    </div>
</section>

<section class="brand-logo wow bounceInUp animated">
    <div class="container">
        <div class="row">
            <div class="section-title-okc">
                <h2 class="section-title">NUESTROS CLIENTES</h2>
            </div>
            <div class="slider-items-products">
                <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col6">
                        <div class="item">
                            <a href="javascript:void(0);"><img src="{{ asset('images/cliente/cliente1.jpg') }}"></a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);"><img src="{{ asset('images/cliente/cliente2.jpg') }}"></a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);"><img src="{{ asset('images/cliente/cliente3.jpg') }}"></a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);"><img src="{{ asset('images/cliente/cliente4.jpg') }}"></a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);"><img src="{{ asset('images/cliente/cliente5.jpg') }}"></a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);"><img src="{{ asset('images/cliente/cliente6.jpg') }}"></a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);"><img src="{{ asset('images/cliente/cliente7.jpg') }}"></a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);"><img src="{{ asset('images/cliente/cliente8.jpg') }}"></a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);"><img src="{{ asset('images/cliente/cliente9.jpg') }}"></a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0);"><img src="{{ asset('images/cliente/cliente10.jpg') }}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section("scripts")
    <script type="text/javascript">
        jQuery(document).ready(function () {

        });
    </script>
@endsection