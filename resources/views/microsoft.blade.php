@extends("themes/web/layout")

@section("title") MICROSOFT @endsection

@section("link")
    <link type="text/css" href="{{ asset('assets_web/css/custom.css') }}" media="all" rel="stylesheet"/>
@endsection

@section("content")
<section class="cover imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
    <div class="container-okc-full">
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/microsoft/2023/version2/banner.png') }}" title="portada_microsoft">
                <div class="tp-caption office2021">
                    <h5>Obtén lo mejor <br> de Office</h5>
                    <p>
                        Sé todo un profesional con este paquete pensado para tu empresa.
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
                <img src="{{ asset('images/landing/microsoft/2023/version2/banner_secundario.png') }}" title="portada_secundaria_ms">
                <div class="tp-caption-header tp-caption-header-office2021">
                    <div class="okc-subtitle" style="margin-top: 100px !important; font-size: 30px;">
                        Tu nube de productividad en el trabajo y en la vida
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
                <img src="{{ asset('images/landing/microsoft/2023/version2/seccion_01.png') }}" title="seccion_01">
                <div class="tp-caption secciones left mt-3">
                    <div style="text-align: left;">
                        <img style="width: 90px;" src="{{ asset('images/landing/microsoft/2023/version2/iconos/outlook_icono.png') }}" title="outlook">
                    </div>
                    <h5 class="fs-34 text-outlook">Lo nuevo en Outlook</h5>
                    <div class="base-listas">
                        <ul>
                            <li>Añade un contacto utilizando el símbolo “@” seguido de su nombre en un correo, reunión o calendario.</li>
                            <li>Tarjeta de contacto actualizada; grupos.</li>
                            <li>Bandeja de entrada prioritaria, que separa tu bandeja en dos pestañas: “prioritario” y “otros”.</li>
                            <li>Verifica tus reservas de viaje con facilidad.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office" style="padding: 40px;">
                <img src="{{ asset('images/landing/microsoft/2023/version2/seccion_02.png') }}" title="seccion_02">
                <div class="tp-caption secciones right">
                    <div class="seccion-office">
                        <div style="text-align: left;">
                            <img style="width: 90px;" src="{{ asset('images/landing/microsoft/2023/version2/iconos/word_icono.png') }}" title="word">
                        </div>
                        <h5 class="fs-34 text-word">Lo nuevo en Word</h5>
                        <div class="base-listas">
                            <ul>
                                <li>Características de aprendizaje adicionales.</li>
                                <li>Traductor de Word.</li>
                                <li>Modo “foco”.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office icono-office">
                <img src="{{ asset('images/landing/microsoft/2023/version2/seccion_03.png') }}" title="seccion_03">
                <div class="tp-caption secciones left mt-3">
                    <div style="text-align: left;">
                        <img style="width: 90px;" src="{{ asset('images/landing/microsoft/2023/version2/iconos/power_point_icono.png') }}" title="power_point">
                    </div>
                    <h5 class="fs-34 text-power-point">Lo nuevo en PowerPoint</h5>
                    <div class="base-listas">
                        <ul>
                            <li>Morph/Zoom/3D (sólo disponible para PCs).</li>
                            <li>Íconos, SVG.</li>
                            <li>Estuche de lápiz itinerante.</li>
                            <li>Mueve diapositivas y objetos con lápiz (sólo disponible para PCs).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office" style="padding: 40px;">
                <img src="{{ asset('images/landing/microsoft/2023/version2/seccion_04.png') }}" title="seccion_04">
                <div class="tp-caption secciones right">
                    <div class="seccion-office">
                        <div style="text-align: left;">
                            <img style="width: 90px;" src="{{ asset('images/landing/microsoft/2023/version2/iconos/access_icono.png') }}" title="access">
                        </div>
                        <h5 class="fs-34 text-access">Lo nuevo en Access</h5>
                        <div class="base-listas">
                            <ul>
                                <li>Software de base de datos fácil de utilizar por particulares y empresas.</li>
                                <li>Almacena, consulta, informa y manipula datos.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office icono-office">
                <img src="{{ asset('images/landing/microsoft/2023/version2/seccion_05.png') }}" title="seccion_05">
                <div class="tp-caption secciones left mt-3">
                    <div style="text-align: left;">
                        <img style="width: 90px;" src="{{ asset('images/landing/microsoft/2023/version2/iconos/excel_icono.png') }}" title="excel">
                    </div>
                    <h5 class="fs-34 text-excel">Lo nuevo en Excel</h5>
                    <div class="base-listas">
                        <ul>
                            <li>Gráficos de embudo y mapas en 2D (sólo para PCs).</li>
                            <li>Línea de tiempo.</li>
                            <li>Nuevos tipos de gráficos.</li>
                            <li> Integración de Microsoft Power BI (requiere suscripción a Power BI y está disponible sólo en Office 2021 para Windows): genera informes
                                y paneles interactivos, y visualiza datos jerárquicos, financieros y geoespaciales con nuevos gráficos.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner-office" style="padding: 40px;">
                <img src="{{ asset('images/landing/microsoft/2023/version2/seccion_06.png') }}" title="seccion_06">
                <div class="tp-caption secciones right">
                    <div class="seccion-office">
                        <div style="text-align: left;">
                            <img style="width: 90px;" src="{{ asset('images/landing/microsoft/2023/version2/iconos/publisher_icono.png') }}" title="publisher">
                        </div>
                        <h5 class="fs-34 text-publisher">Lo nuevo en Publisher</h5>
                        <div class="base-listas">
                            <ul>
                                <li>Crea publicaciones profesionales para correos electrónicos, PDF, XPS o impresiones de alta calidad.</li>
                            </ul>
                        </div>
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
                                <img src="{{ asset('images/landing/office/2023/version2/thinkbook_14s.png') }}" alt="thinkbook_14s">
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
                                <img src="{{ asset('images/landing/office/2023/version2/latitude_5520.png') }}" alt="latitude_5520">
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
                                <img src="{{ asset('images/landing/office/2023/version2/thinkpad_L14.png') }}" alt="thinkpad_L14">
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