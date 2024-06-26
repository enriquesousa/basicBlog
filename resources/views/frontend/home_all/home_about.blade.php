
@php

    $aboutPage = App\Models\About::find(1);
        if ($aboutPage == null) {
            $display = 'no';
        }else {
            $display = 'yes';
        }

    $allMultiImage = App\Models\MultiImage::all();
    

@endphp

<!-- 01 - About me - about-area -->
 <section id="aboutSection" class="about">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">
                <ul class="about__icons__wrap">

                    @foreach ($allMultiImage as $item)
                        <li>
                            <img class="light" src="{{ asset($item->multi_image) }}" alt="XD">
                        </li>
                    @endforeach
                    
                </ul>
            </div>

            <div class="col-lg-6">

                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">01 - About me</span>
                        <h2 class="title">{{ $aboutPage->title }}</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                        </div>
                        <div class="about__exp__content">
                            <p>{{ $aboutPage->short_title }}</p>
                        </div>
                    </div>
                    <p class="desc">{{ $aboutPage->short_description }}</p>
                    <a href="about.html" class="btn">Download my resume</a>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- about-area-end -->