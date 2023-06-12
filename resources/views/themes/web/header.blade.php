<header class="pixxett-header1">
    <div class="header-container">
        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 logo-block">
                        <div class="logo">
                            <a title="e-commerce" href="{{ url('/') }}"><img alt="e-commerce" src="{{ asset('images/logo_transparente.png') }}"></a>
                        </div>
                        <!-- Navbar -->
                        <div class="mm-toggle-wrap hidden-lg hidden-md">
                            <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span></div>
                        </div>
                        <div class="nav-inner">
                            <ul id="nav" class="hidden-xs">
                                <li class="level0 parent drop-menu"><a href="{{ route('catalogo') }}"><span>Catálogo</span></a></li>
                                <li class="level0 parent drop-menu"><a href="javascript: void(0);"><span>Microsoft</span>
                                    <ul class="level1">
                                        <li class="level1 first parent"><a href="{{ route('microsoft365') }}"><span>Microsoft 365</span></a></li>
                                        <li class="level1 first parent"><a href="{{ route('office2021') }}"><span>Office 2021</span></a></li>
                                        <li class="level1 first parent"><a href="{{ route('microsoft') }}"><span>Microsoft</span></a></li>
                                        <li class="level1 first parent"><a href="{{ route('commercial-office') }}"><span>Commercial Office</span></a></li>
                                    </ul>
                                </li>
                                <li class="level0 parent drop-menu"><a href="{{ route('contacto') }}"><span>Contacto</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>