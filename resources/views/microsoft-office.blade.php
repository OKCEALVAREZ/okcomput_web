@extends("themes/web/layout")

@section("title") MICROSOFT 365 @endsection

@section("link")
    <link type="text/css" href="{{ asset('assets_web/css/custom.css') }}" media="all" rel="stylesheet"/>
@endsection

@section("content")
<section class="cover imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
    <div class="container-okc-full">
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/office/dic/banner.png') }}" title="portada_office365">
                <div class="tp-caption office365">
                    <h5>Descubre <br> el nuevo <br> Microsoft 365</h5>
                    <p>
                        La nueva Microsoft 365 te permite crear, compartir y colaborar en un solo lugar con sus aplicaciones favoritas
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
                <img src="{{ asset('images/landing/office/dic/banner_secundario.png') }}" title="portada_secundaria">
                <div class="tp-caption-header">
                    <h2 class="okc-title text-center">Las mejores herramientas <br> Su mejor equipo. El mundo al alcance de su mano.</h2>
                    <p>
                        Microsoft 365 permite a los empleados realizar su mejor trabajo desde cualquier lugar del mundo, juntos en un solo lugar.
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
                <img src="{{ asset('images/landing/office/dic/seccion_01.png') }}" title="seccion_01">
                <div class="tp-caption secciones left mt-3">
                    <h5>Cree en cualquier lugar, en cualquier momento y con cualquier aplicación</h5>
                    <p>
                        Cualquier persona de su organización podrá crear rápidamente documentos, presentaciones y hojas de cálculo dentro de una experiencia única y unificada de Microsoft 365
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/office/dic/seccion_02.png') }}" title="seccion_02">
                <div class="tp-caption secciones office-right">
                    <div class="seccion-office">
                        <h5>Su contenido, <br> Su Microsoft 365</h5>
                        <p>
                            Microsoft 365 permite a su organización organizar y almacenar archivos de forma segura en OneDrive con herramientas organizativas intuitivas y sencillas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/office/dic/seccion_03.png') }}" title="seccion_03">
                <div class="tp-caption secciones left mt-3">
                    <h5>Trabaje juntos <br> y mejor</h5>
                    <p>
                        Mantenga su negocio conectado desde cualquier lugar con herramientas de chat y colaboración en la nube
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/office/dic/seccion_04.png') }}" title="seccion_04">
                <div class="tp-caption secciones office-right">
                    <div class="seccion-office">
                        <h5>Continúe donde <br> lo dejó</h5>
                        <p>
                            Microsoft 365 realiza un seguimiento sin problemas de actualizaciones, tareas y comentarios en todos los archivos para que pueda continuar justo donde lo dejó.
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
                                <img src="{{ asset('images/landing/office/dic/thinkbook_14s.png') }}" alt="thinkbook_14s">
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
                                <img src="{{ asset('images/landing/office/dic/ideacentre_AIO_Ai3.png') }}" alt="ideacentre_AIO_Ai3">
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
                                <img src="{{ asset('images/landing/office/dic/thinkpad_L14.png') }}" alt="thinkpad_L14">
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