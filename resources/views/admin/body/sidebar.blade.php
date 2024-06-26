{{-- Left Sidebar Start --}}
<div class="vertical-menu">
    <div data-simplebar class="h-100">

        {{-- Código para poder traer datos del usuario para desplegar foto de perfil y nombre de usuario --}}
        @php
            $id = Auth::user()->id;
            $adminData = App\Models\User::find($id);
        @endphp

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ (!empty($adminData->profile_image) ? url('upload/admin_images/'.$adminData->profile_image) : url('upload/no_image.jpg')) }}" alt=""
                    class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ $adminData->name }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                    En Linea</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <!-- * MENU -->
                <li class="menu-title">Menu</li>

                <!-- Dashboard -->
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span
                            class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Home Slide Setup -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-home-2-line"></i>
                        <span>Home Slide Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.slide') }}">Home Slide</a></li>
                    </ul>
                </li>

                <!-- About Page Setup -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class=" ri-user-2-line"></i>
                        <span>Config About</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('about.page') }}">About Page</a></li>
                        <li><a href="{{ route('about.multi.image') }}">Cargar Imágenes</a></li>
                        <li><a href="{{ route('all.multi.image') }}">Lista Imágenes</a></li>
                    </ul>
                </li>

                <!-- Portfolio Page Setup -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-suitcase-line"></i>
                        <span>Config Portafolio</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.portfolio') }}">Lista Portafolio</a></li>
                        <li><a href="{{ route('add.portfolio') }}">Agregar Portfolio</a></li>
                    </ul>
                </li>

                <!-- Setup Categorías -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-suitcase-line"></i>
                        <span>Config Categorías</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.blog.category') }}">Lista Categorías</a></li>
                        <li><a href="{{ route('add.blog.category') }}">Agregar Categorías</a></li>
                    </ul>
                </li>

                <!-- Config Pagina Blog -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-suitcase-line"></i>
                        <span>Config Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.blog') }}">Lista Blogs</a></li>
                        <li><a href="{{ route('add.blog') }}">Agregar Blog</a></li>
                    </ul>
                </li>

                <!-- Config Footer -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-suitcase-line"></i>
                        <span>Config Footer</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('footer.setup') }}">Config Footer</a></li>
                    </ul>
                </li>

                <!-- Leer Mensajes de Contact Form -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-suitcase-line"></i>
                        <span>Forma de Contacto</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.contact.message') }}">Leer Mensajes</a></li>
                    </ul>
                </li>


               

                <!-- * PAGES -->
                <li class="menu-title">Pages</li>

                <!-- Authentication -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login.html">Login</a></li>
                        <li><a href="auth-register.html">Register</a></li>
                        <li><a href="auth-recoverpw.html">Recover Password</a></li>
                        <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                    </ul>
                </li>

                <!-- Utility -->
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Utility</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.html">Starter Page</a></li>
                        <li><a href="pages-timeline.html">Timeline</a></li>
                        <li><a href="pages-directory.html">Directory</a></li>
                        <li><a href="pages-invoice.html">Invoice</a></li>
                        <li><a href="pages-404.html">Error 404</a></li>
                        <li><a href="pages-500.html">Error 500</a></li>
                    </ul>
                </li>


            </ul>

        </div>
        <!-- Sidebar -->

    </div>
</div>
<!-- Left Sidebar End -->

