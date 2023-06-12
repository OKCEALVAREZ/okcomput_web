@extends("themes/web/layout")

@section("title") MICROSOFT 2021 @endsection

@section("link")
    <link type="text/css" href="{{ asset('assets_web/css/custom.css') }}" media="all" rel="stylesheet"/>
@endsection

@section("content")
<section class="cover imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
    <div class="container-okc-full">
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/office/2023/mayo/banner.png') }}" title="portada_office365">
                <div class="tp-caption office2021">
                    <h5>Conoce lo que ofrece <br> Office 2021</h5>
                    <p>
                        Herramientas definiticas para potenciar tu trabajo
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cover imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
    <div class="container-okc-full">
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/office/2023/mayo/banner_secundario.png') }}" title="portada_secundaria">
                <div class="tp-caption-header tp-caption-header-office2021">
                    <div class="okc-subtitle">
                        Crea contenido, mantente organizado y trabaja en equipo <br> con versiones de Word, Excel, PowerPoint y otras aplicaciones actualizadas de Office 2021
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cover imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
    <div class="container-okc-full">
        <div class="row">
            <div class="banner-office icono-office">
                <img src="{{ asset('images/landing/office/2023/mayo/seccion_01.png') }}" title="seccion_01">
                <div class="tp-caption secciones txt-office2021 left mt-3">
                    <h5>Crear con confianza</h5>
                    <p>
                        Crea atractivos documentos y presentaciones con objetos visuales nuevos y modernos, y encuentra rápidamente lo que necesitas con características de navegación y funciones de búsqueda mejoradas.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office" style="padding: 40px;">
                <img src="{{ asset('images/landing/office/2023/mayo/seccion_02.png') }}" title="seccion_02">
                <div class="tp-caption secciones txt-office2021 office-right">
                    <div class="seccion-office">
                        <h5>Organizar el trabajo y la vida</h5>
                        <p>
                            Administra de forma eficiente los mensajes, las citas, los contactos y las tareas en un solo lugar. Mantente al día fácilmente sobre las reuniones de trabajo y los plazos, además del tiempo con la familia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office icono-office">
                <img src="{{ asset('images/landing/office/2023/mayo/seccion_03.png') }}" title="seccion_03">
                <div class="tp-caption secciones txt-office2021 left mt-3">
                    <h5>Realizar un seguimiento y organizar sin esfuerzo</h5>
                    <p>
                        Usa menos fórmulas y más sólidas para crear rápidamente hojas de cálculo que se actualicen a medida que cambia la información. Encuentra los datos rápidamente gracias a las características de navegación y funciones de búsqueda mejoradas.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office" style="padding: 40px;">
                <img src="{{ asset('images/landing/office/2023/mayo/seccion_04.png') }}" title="seccion_04">
                <div class="tp-caption secciones txt-office2021 office-right">
                    <div class="seccion-office">
                        <h5>Trabajar en equipo sin problemas</h5>
                        <p>
                            Comparte fácilmente archivos y recibe notificaciones cuando otras personas realicen cambios o te mencionen en comentarios, y ponte al día de los cambios cada vez que abras un documento.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-blog icono-office office-product">
    <div class="container-okc">
        <div class="row">
            <div class="blog-inner">
                <div class="col-md-12 mb-3">
                    <h3 class="fw-b600">Laptops con Windows 10 Pro recomendadas</h3>
                </div>
                <div class="col-sm-4">
                    <div class="blog-preview-item-inner">
                        <div class="entry-thumb image-hover-okc">
                            <a href="#">
                                <img src="{{ asset('images/landing/office/2023/mayo/thinkbook_14s.png') }}" alt="thinkbook_14s">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title"><a href="#" class="color-office fw-b600">THINKBOOK 14S</a></h4>
                            <div class="blog-preview_desc">
                                <div class="text-left">
                                    Procesador Ci5-10210U <br>
                                    Memoria RAM 8GB <br>
                                    Disco 256GB SSD <br>
                                    Intel UHD Graphics <br>
                                    Windows 10 Pro <br>
                                    Pantalla 14'' FHD
                                </div>
                                <p class="office-price">S/ 3,304.00</p>
                                <button class="btn btn-office btn-office-lg">Reservar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="blog-preview-item-inner">
                        <div class="entry-thumb image-hover-okc">
                            <a href="#">
                                <img src="{{ asset('images/landing/office/2023/mayo/latitude_5520.png') }}" alt="latitude_5520">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title"><a href="#" class="color-office fw-b600">LATITUDE 5520</a></h4>
                            <div class="blog-preview_desc">
                                <div class="text-left">
                                    Procesador Ci7-1185G7 <br>
                                    Memoria RAM 16GB <br>
                                    Disco 512 GB SSD <br>
                                    Tarjeta de video 2GB <br>
                                    Windows 10 Home <br>
                                    Pantalla 15.6'' FHD
                                </div>
                                <p class="office-price">S/ 5,859.00</p>
                                <button class="btn btn-office btn-office-lg">Reservar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="blog-preview-item-inner">
                        <div class="entry-thumb image-hover-okc">
                            <a href="#">
                                <img src="{{ asset('images/landing/office/2023/mayo/thinkpad_L14.png') }}" alt="thinkpad_L14">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title"><a href="#" class="color-office fw-b600">THINKPAD L14</a></h4>
                            <div class="blog-preview_desc">
                                <div>
                                    Procesador Ci7-10510U <br>
                                    Memoria RAM 8GB <br>
                                    Disco 1TB 7200 RPM <br>
                                    Tarjeta de video 2 GB <br>
                                    Windows 10 Pro <br>
                                    Pantalla 14'' HD
                                </div>
                                <p class="office-price">S/ 4,552.00</p>
                                <button class="btn btn-office btn-office-lg">Reservar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-blog product-office blog-contact-okc">
    <div class="container-okc">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h3 class="fw-b600">Frecuentemente comprado juntos</h3>
            </div>
            <div class="blog-inner">
                <div class="col-sm-4">
                    <div class="blog-preview-item-inner element-okc">
                        <div class="entry-thumb image-hover-okc">
                            <a href="#">
                                <img src="{{ asset('images/landing/office/dic/m365_familia.png') }}" alt="microsoft_365_familia">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title"><a href="#" class="color-office fw-b600">Microsoft 365 Familia</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="blog-preview-item-inner element-okc">
                        <div class="entry-thumb image-hover-okc">
                            <a href="#">
                                <img src="{{ asset('images/landing/office/dic/m365_personal.png') }}" alt="microsoft_365_personal">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title"><a href="#" class="color-office fw-b600">Microsoft 365 Personal</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="blog-preview-item-inner element-okc">
                        <div class="entry-thumb image-hover-okc">
                            <a href="#">
                                <img src="{{ asset('images/landing/office/dic/office_pro.png') }}" alt="office_profesional">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title"><a href="#" class="color-office fw-b600">Office Profesional 2021</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn btn-office btn-office-sm mt-4 mb-5">COMPRAR AHORA</button>
                    <h3 class="color-office fw-b700">OK COMPUTER RECOMIENDA OFFICE 2021</h3>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="img-logo-okc mb-4">
                    <img src="{{ asset('images/okc_logo.png') }}" alt="Logo_OKC">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-11 col-sm-12 col-lg-offset-1">
                <div class="row mt-4 contact-element">
                    <div class="col-sm-12 col-md-3 col-element">
                        <div class="contact-element-text">Helen Ayma Valle</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-element">
                        <div class="contact-element-text">microsoft@okcomputer.com.pe</div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-element">
                        <div class="contact-element-text">954 691 407</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection