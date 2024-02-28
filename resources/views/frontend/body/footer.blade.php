@php
    $dataFooter = App\Models\Footer::find(1);
@endphp

<!-- Footer-area -->
<footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Contactarnos</h5>
                        <h4 class="title">{{ $dataFooter->number }}</h4>
                    </div>
                    <div class="footer__widget__text">
                        <p>{{ $dataFooter->short_description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">mi dirección</h5>
                        <h4 class="title">Tijuana BC</h4>
                    </div>
                    <div class="footer__widget__address">
                        {{-- <p>Level 13, 2 Elizabeth Steereyt set <br> Melbourne, Victoria 3000</p> --}}
                        <p>{{ $dataFooter->address }}</p>
                        <a href="mailto:noreply@envato.com" class="mail">{{ $dataFooter->email }}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Sígueme en</h5>
                        <h4 class="title">redes sociales</h4>
                    </div>
                    <div class="footer__widget__social">
                        <p>Lorem ipsum dolor sit amet enim. <br> Etiam ullamcorper.</p>
                        <ul class="footer__social__list">

                            <li><a href="{{ $dataFooter->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $dataFooter->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrap">
            <div class="row">
                <div class="col-12">
                    <div class="copyright__text text-center">
                        <p>{{ $dataFooter->copyright }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer-area-end -->