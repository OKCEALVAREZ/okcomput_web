@extends("themes/web/layout")

@section("title") OFFICE 365 @endsection

@section("link")
    <link type="text/css" href="{{ asset('assets_web/css/custom.css') }}" media="all" rel="stylesheet"/>
@endsection

@section("content")
<section class="cover imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
    <div class="container-okc-full">
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/microsoft/2023/mayo/banner.png') }}" title="portada_microsofot">
                <div class="tp-caption tp-caption-right">
                    <h5>Desbloquea tu potencial con Microsoft 365</h5>
                    <p>Impulsa la productividad con Microsoft Teams, Word, Excel, PowerPoint y mucho más: todo en un solo lugar.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-blog blog-office">
    <div class="container-okc">
        <div class="row">
            <div class="col-md-12">
                <h2 class="okc-title">Aplicaciones premium para crear, conectar y <br> compartir a donde vayas</h2>
            </div>
        </div>
        <div class="row mb-3">
            <div class="blog-inner">
                <div class="col-md-1"></div>
                <div class="col-sm-6 col-lg-2">
                    <img src="{{ asset('images/landing/microsoft/2023/mayo/word.webp') }}" alt="word">
                    <p>Word</p>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <img src="{{ asset('images/landing/microsoft/2023/mayo/excel.webp') }}" alt="excel">
                    <p>Excel</p>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <img src="{{ asset('images/landing/microsoft/2023/mayo/point.webp') }}" alt="power_point">
                    <p>Power Point</p>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <img src="{{ asset('images/landing/microsoft/2023/mayo/outlook.webp') }}" alt="outlook">
                    <p>Outlook</p>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <img src="{{ asset('images/landing/microsoft/2023/mayo/teams.webp') }}" alt="teams">
                    <p>Teams</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cover imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
    <div class="container-okc-full">
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/microsoft/2023/mayo/banner_secundario.png') }}" title="portada_secundaria_microsofot">
                <div class="tp-caption-header">
                    <h2 class="okc-title text-center">Una solución para tus dispositivos</h2>
                    <p>Usa tus teléfonos, tabletas y ordenadores para ocuparte del trabajo, la escuela y la vida familiar con Microsoft 365.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cover imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
    <div class="container-okc-full">
        <div class="row">
            <div class="banner-office">
                <img src="{{ asset('images/landing/microsoft/2023/mayo/banner_03.png') }}" title="subportada_secundaria_microsofot">
                <div class="tp-caption-header-left">
                    <h2 class="okc-title">Crear grandes cosas en compañía</h2>
                    <p>Comparte tus documentos con otras personas y editalos al mismo tiempo que ellas en cualquier dispositivo con Microsoft 365.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bar bar-3 bar--sm home-special-office">
    <div class="container-okc">
        <div class="row">
            <div class="col-md-12">
                <div class="dflex-okc">
                    <img src="{{ asset('images/landing/microsoft/2023/mayo/imagen01.png') }}" alt="">
                    <div class="text-office">
                        <div class="dflex-table">
                            <div style="padding: 25px;">
                                Protección online fácil de usar para ti y tus dispositivos con la aplicación Microsoft Defender, ahora disponible con tu suscripción a Microsoft 365.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="dflex-okc">
                    <div class="text-office">
                        <div class="dflex-table">
                            <div style="padding: 25px;">
                                Guarda, comparte y edita tus fotos y archivos rápidamente con Microsoft 365 y 1 TB de almacenamiento en la nube de OneDrive.
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('images/landing/microsoft/2023/mayo/imagen02.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="dflex-okc">
                    <img src="{{ asset('images/landing/microsoft/2023/mayo/imagen03.png') }}" alt="">
                    <div class="text-office">
                        <div class="dflex-table">
                            <div style="padding: 25px;">
                                Desarrolla hábitos de seguridad más fuertes y protege a tus seres queridos con la ayuda de Microsoft Family Safety.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="dflex-okc">
                    <div class="text-office">
                        <div class="dflex-table">
                            <div style="padding: 25px;">
                                Obtén una capa de protección adicional para tus archivos más importantes con el almacén personal de OneDrive.
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('images/landing/microsoft/2023/mayo/imagen04.png') }}" alt="">
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
                                <img src="{{ asset('images/landing/microsoft/2023/mayo/thinkbook_14s.png') }}" alt="thinkbook_14s">
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
                                <img src="{{ asset('images/landing/microsoft/2023/mayo/latitude_5520.png') }}" alt="latitude_5520">
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
                                <img src="{{ asset('images/landing/microsoft/2023/mayo/thinkpad_L14.png') }}" alt="thinkpad_L14">
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