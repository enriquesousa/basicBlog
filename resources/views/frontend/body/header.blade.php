<!-- header-area -->
<header>
    <div id="sticky-header" class="menu__area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu__wrap">
                        <nav class="menu__nav">
                            <div class="logo">
                                <a href="index.html" class="logo__black"><img src="{{ asset('frontend/assets/img/logo/logo_black.png') }}" alt=""></a>
                                <a href="index.html" class="logo__white"><img src="{{ asset('frontend/assets/img/logo/logo_white.png') }}" alt=""></a>
                            </div>
                            <div class="navbar__wrap main__menu d-none d-xl-flex">
                                <ul class="navigation">

                                    <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>

                                    <li class="{{ request()->routeIs('home.about') ? 'active' : '' }}"><a href="{{ route('home.about') }}">About</a></li>

                                    <li><a href="services-details.html">Services</a></li>

                                    {{-- <li class="menu-item-has-children"><a href="#">Portafolio</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('home.portfolio') }}">Portafolio</a></li>
                                            <li><a href="portfolio-details.html">Detalles</a></li>
                                        </ul>
                                    </li> --}}

                                    <li class="{{ request()->routeIs('home.portfolio') ? 'active' : '' }}"><a href="{{ route('home.portfolio') }}">Portafolio</a>
                                    </li>

                                    <li class="{{ request()->routeIs('home.blog') ? 'active' : '' }}"><a href="{{ route('home.blog') }}">Blogs</a>
                                    </li>

                                    <li class="{{ request()->routeIs('contact.form') ? 'active' : '' }}"><a href="{{ route('contact.form') }}">Contactarme</a></li>

                                </ul>
                            </div>
                            <div class="header__btn d-none d-md-block">
                                <a href="{{ url('/login') }}" class="btn">Iniciar Sesión</a>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile__menu">
                        <nav class="menu__box">
                            <div class="close__btn"><i class="fal fa-times"></i></div>
                            <div class="nav-logo">
                                <a href="index.html" class="logo__black"><img src="{{ asset('frontend/assets/img/logo/logo_black.png') }}" alt=""></a>
                                <a href="index.html" class="logo__white"><img src="{{ asset('frontend/assets/img/logo/logo_white.png') }}" alt=""></a>
                            </div>
                            <div class="menu__outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu__backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->