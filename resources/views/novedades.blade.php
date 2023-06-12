@extends("themes/web/layout")

@section("title") NOVEDADES MICROSOFT @endsection

@section("link")
    <link type="text/css" href="{{ asset('assets_web/css/custom.css') }}" media="all" rel="stylesheet"/>
@endsection

@section("content")
<section class="cover imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
    <div class="container-okc-full">
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/novedades/nov/banner.png') }}" title="portada_novedades">
                <div class="tp-caption novedades">
                    <h5>Haz más sencillo tu día a día con Windows 11</h5>
                    <p>Descubre las novedades de Windows 11 para productividad, colaboración, seguridad y administración.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cover imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
    <div class="container-okc-full">
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/novedades/nov/banner_secundario.png') }}" title="portada_secundaria">
                <div class="tp-caption-novedades">
                    <h2 class="okc-title text-center">La versión de Windows más segura de la historia</h2>
                    <p>
                        Un SO preparado para la confianza cero para una protección desde el chip a la nube, como cifrado <br>
                        avanzado de datos y seguridad robusta entre aplicaciones, identidades de usuario y servicios en la nube.
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
                <img src="{{ asset('images/landing/novedades/nov/mejor_juntos.png') }}" title="portada_juntos">
                <div class="tp-caption novedades-secundario">
                    <h5>Mejor Juntos</h5>
                    <p>Descubre las experiencias de Windows 11, diseñadas para hacer que tus herramientas de Microsoft favoritas cobren vida.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cover imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
    <div class="container-okc-full">
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/novedades/nov/seccion_01.png') }}" title="seccion_01">
                <div class="tp-caption secciones left">
                    <h5>Microsoft Edge te ayuda <br> a proteger tus datos</h5>
                    <p>
                        La prevención del seguimiento te da control sobre <br>
                        cómo los sitios web rastrean tus datos. El generador <br>
                        de contraseña proporciona contraseñas difíciles de <br>
                        piratear. El modo infantil permite sesiones web para <br>
                        menores con filtros estrictos de contenido.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/novedades/nov/seccion_02.png') }}" title="seccion_02">
                <div class="tp-caption secciones right">
                    <h5>Tu vida digital.. <br> protegida</h5>
                    <p>
                        OneDirve conserva una copia de seguridad y <br>
                        protección de tus archivos con la detección de <br>
                        ransomware y opciones de recuperación de <br> archivos.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/novedades/nov/seccion_03.png') }}" title="seccion_03">
                <div class="tp-caption secciones left">
                    <h5>Microsoft Family Safety</h5>
                    <p>
                        La app Family Safety te ayudará a mantenerte <br>
                        conectado con tus seres queridos, desarrollar <br>
                        hábitos de seguridad más estrictos y crear un <br>
                        espacio online más seguro con la app Microsoft <br> Family Safety.
                    </p>
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
                                <img src="{{ asset('images/landing/office/nov/thinkbook_14s.png') }}" alt="thinkbook_14s">
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
                                <img src="{{ asset('images/landing/office/nov/ideacentre_AIO_Ai3.png') }}" alt="ideacentre_AIO_Ai3">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title"><a href="#" class="color-office fw-b600">IDEACENTRE AIO Ai3</a></h4>
                            <div class="blog-preview_desc">
                                <div class="text-left">
                                    Procesador Ci3-10100T <br>
                                    Memoria RAM 4GB <br>
                                    Disco 1TB HDD + 128 GB SSD <br>
                                    Tarjeta Intel UHD Graphics <br>
                                    Windows 10 Home <br>
                                    Pantalla 23.8''
                                </div>
                                <p class="office-price">S/ 2,859.00</p>
                                <button class="btn btn-office btn-office-lg">Reservar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="blog-preview-item-inner">
                        <div class="entry-thumb image-hover-okc">
                            <a href="#">
                                <img src="{{ asset('images/landing/office/nov/thinkpad_L14.png') }}" alt="thinkpad_L14">
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
                                <img src="{{ asset('images/landing/office/nov/m365_familia.png') }}" alt="microsoft_365_familia">
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
                                <img src="{{ asset('images/landing/office/nov/m365_personal.png') }}" alt="microsoft_365_personal">
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
                                <img src="{{ asset('images/landing/office/nov/office_pro.png') }}" alt="office_profesional">
                            </a>
                        </div>
                        <div class="blog-preview_info">
                            <h4 class="blog-preview_title"><a href="#" class="color-office fw-b600">Office Profesional 2021</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn btn-office btn-office-sm mt-4 mb-5">COMPRAR AHORA</button>
                    <h3 class="color-office fw-b700">OK COMPUTER RECOMIENDA WINDOWS 11</h3>
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