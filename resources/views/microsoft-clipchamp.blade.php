@extends("themes/web/layout")

@section("title") MICROSOFT CLIPCHAMP @endsection

@section("link")
    <link type="text/css" href="{{ asset('assets_web/css/custom.css') }}" media="all" rel="stylesheet"/>
@endsection

@section("content")
<section class="cover imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
    <div class="container-okc-full">
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/microsoft/2023/clipchamp/banner.png') }}" title="portada_microsoft">
                <div class="tp-caption clipchamp-head text-default">
                    <h5>Descubre lo que está <br> sucediendo con Microsoft 365</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-blog blog-office">
    <div class="container-okc">
        <div class="row">
            <div class="blog-inner" style="padding: 0;">
                <div class="text-center">
                    <img src="{{ asset('images/landing/microsoft/2023/clipchamp/icono.png') }}" alt="clipchamp_logo">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="okc-title">ClipChamp de Microsoft</h2>
                <p style="text-align: center; font-size: 13.5px;">Crea y edita videos de aspecto profesional de forma rápida <br> y sencilla con Clipchamp.</p>
            </div>
        </div>
    </div>
</section>

<section class="cover imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
    <div class="container-okc-full">
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/microsoft/2023/clipchamp/seccion_01.png') }}" title="seccion_01">
                <div class="tp-caption secciones left mt-3">
                    <h5 class="fs-34 text-default">Dale un impulso a tu creatividad</h5>
                    <p>Obtén un acceso sin límites a más de 1 millón de videos libres de regalías, pistas de audio y plantillas cuidadosamente diseñadas para contar historias que valga la pena</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office" style="padding: 40px;">
                <img src="{{ asset('images/landing/microsoft/2023/clipchamp/seccion_02.png') }}" title="seccion_02">
                <div class="tp-caption secciones right">
                    <div class="seccion-office">
                        <h5 class="fs-34 text-default">Conecta el contenido</h5>
                        <p>Tranfiere rápidamente videos o imágenes del teléfono a la PC para empezar a editarlos de inmediato. Agrega estilo a cualquier proyecto con filtros y efectos premium, transiciones fluidas y gráficos animados.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/microsoft/2023/clipchamp/seccion_03.png') }}" title="seccion_03">
                <div class="tp-caption secciones left mt-3">
                    <h5 class="fs-34 text-default">Comunícate de forma más eficaz</h5>
                    <p>Crea contenido atractivo para redes sociales, tutoriales detallados y videorreacciones con la grabadora de pantalla y cámara, una herramienta esencial para los creadores.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office" style="padding: 40px;">
                <img src="{{ asset('images/landing/microsoft/2023/clipchamp/seccion_04.png') }}" title="seccion_04">
                <div class="tp-caption secciones right">
                    <div class="seccion-office">
                        <h5 class="fs-34 text-default">Innova a través de la tecnología</h5>
                        <p>Convierte las palabras en voces en off con la tecnología de IA. Elige entre más de 70 idiomas, con 170 voces realistas y configuraciones de ritmo flexibles, para llegar mejor a un público global.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-blog blog-office">
    <div class="container-okc">
        <div class="row">
            <div class="col-md-12">
                <h2 class="okc-title">Mejorar las capacidades</h2>
            </div>
        </div>
        <div class="row mb-3">
            <div class="blog-inner">
                <div class="col-sm-6 col-lg-3">
                    <img src="{{ asset('images/landing/microsoft/2023/clipchamp/i1.png') }}" alt="word">
                    <h5 class="titulo-etiquetas">Arrastra y coloca</h5>
                    <p>Agrega transiciones y filtros con el editor de escala de tiempo.</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <img src="{{ asset('images/landing/microsoft/2023/clipchamp/i2.png') }}" alt="excel">
                    <h5 class="titulo-etiquetas">Trunca y corta</h5>
                    <p>Corta videos a la longitud perfecta con unos pocos clics y termina de editarlos rápido.</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <img src="{{ asset('images/landing/microsoft/2023/clipchamp/i3.png') }}" alt="power_point">
                    <h5 class="titulo-etiquetas">Comparte y guarda</h5>
                    <p>Comparte tus historias a través de tus canales de redes sociales, desde recuerdos mágicos hasta logros con amigos</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <img src="{{ asset('images/landing/microsoft/2023/clipchamp/i4.png') }}" alt="outlook">
                    <h5 class="titulo-etiquetas">Carga contenido de marca</h5>
                    <p>Configura las fuentes, los colores y los logotipos de tu marca y, luego aplícalos fácilmente a caulquier video.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cover imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
    <div class="container-okc-full">
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/microsoft/2023/clipchamp/banner_secundario.png') }}" title="portada_secundaria_ms">
                <div class="tp-caption-header tp-caption clipchamp">
                    <div class="okc-subtitle" style="margin-top: 100px !important; font-size: 30px;">
                        Empieza a crear videos
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
                                <img src="{{ asset('images/landing/microsoft/2023/clipchamp/thinkbook_14s.png') }}" alt="thinkbook_14s">
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
                                <img src="{{ asset('images/landing/microsoft/2023/clipchamp/latitude_5520.png') }}" alt="latitude_5520">
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
                                <img src="{{ asset('images/landing/microsoft/2023/clipchamp/thinkpad_L14.png') }}" alt="thinkpad_L14">
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
                                <img src="{{ asset('images/landing/microsoft/2023/clipchamp/m365_familia.png') }}" alt="microsoft_365_familia">
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
                                <img src="{{ asset('images/landing/microsoft/2023/clipchamp/m365_personal.png') }}" alt="microsoft_365_personal">
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
                                <img src="{{ asset('images/landing/microsoft/2023/clipchamp/office_pro.png') }}" alt="office_profesional">
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