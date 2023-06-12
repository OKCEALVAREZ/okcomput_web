@extends("themes/web/layout")

@section("title") CATALOGO @endsection

@section("content")
<section class="latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="blog-inner blog-data-contact">
                    <div class="col-lg-12 col-md-12 col-sm-12 blog-preview_item">
                        <div class="blog-preview-item-inner">
                            <div class="entry-thumb image-hover2">
                                <img alt="Blog" src="{{ asset('images/contacto.png') }}">
                            </div>
                            <div class="blog-preview_info">
                                <h4 class="blog-preview_title">Ejecutivo de Ventas</h4>
                                <hr>
                                <div class="post-date-okc">
                                    <a href="https://wa.link/bl6lq8" target="_blank">
                                        <i class="fa fa-whatsapp"></i> WhatsApp: +51 944 225 293
                                    </a>
                                </div>
                                <div class="post-date-okc">
                                    <a href="mailto:atencion@okcomputer.com.pe" target="_blank">
                                        <i class="fa fa-envelope-o"></i> Correo: atencion@okcomputer.com.pe 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="row">
                    <div class="blog-inner">
                        <div class="col-lg-6 col-md-6 col-sm-12 blog-preview_item">
                            <div class="blog-model">
                                @foreach ($catweb as $itemDig)
                                <div class="blog-preview-item-inner">
                                    <div class="entry-thumb image-hover2">
                                        <img alt="Blog" src="{{ asset('images/catalogo') }}/{{ $itemDig->name }}">
                                    </div>
                                    <div class="blog-preview_info">
                                        <h4 class="blog-preview_title"><a href="{{ $itemDig->path }}">Catálogo Digital OK COMPUTER</a></h4>
                                        <div class="blog-preview_desc">{{ $itemDig->title }}</div>
                                        <a class="blog-preview_btn" href="{{ $itemDig->path }}" target="_blank">Descargar catálogo</a>
                                        <div class="post-date"><i class="icon-calendar"></i> {{ date('d/m/Y') }}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 blog-preview_item">
                            <div class="blog-model">
                                @foreach ($catliq as $itemLiq)
                                <div class="blog-preview-item-inner">
                                    <div class="entry-thumb image-hover2">
                                        <img alt="Blog" src="{{ asset('images/catalogo') }}/{{ $itemLiq->name }}">
                                    </div>
                                    <div class="blog-preview_info">
                                        <h4 class="blog-preview_title"><a href="{{ $itemLiq->path }}">Catálogo de Liquidación</a></h4>
                                        <div class="blog-preview_desc">Catálogo de liquidación mes de Julio</div>
                                        <a class="blog-preview_btn" href="{{ $itemLiq->path }}">Descargar catálogo</a>
                                        <div class="post-date"><i class="icon-calendar"></i> {{ date('d/m/Y') }}</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
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