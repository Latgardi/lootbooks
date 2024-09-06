<div class="banner">
    <img class="section-heading img-fluid desktop-banner" src="{{ asset('assets/images/desktop_banner.svg') }}">
    <div class="col-md-12 desktop-banner">
        <div class="text-center">
            <h2>Как это работает?</h2>
        </div>
    </div>
    <img class="desktop-banner img-fluid" src="{{ asset('assets/images/literature.svg') }}">
    <section class="splide mobile-banner" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="{{ asset('assets/images/mobile_banner.png') }}">
                    <div class="col-md-12" style="margin-top: 20px;">
                        <div class="text-center">
                            <h4>Как это работает? <i class="fa-solid fa-circle-right" style="color: #f33f3f;"></i></h4>
                        </div>
                    </div>
                </li>
                <li class="splide__slide"><img src="{{ asset('assets/images/literature_1.svg') }}"></li>
                <li class="splide__slide"><img src="{{ asset('assets/images/literature_2.svg') }}"></li>
                <li class="splide__slide"><img src="{{ asset('assets/images/literature_3.svg') }}"></li>
                <li class="splide__slide"><img src="{{ asset('assets/images/literature_4.svg') }}"></li>
            </ul>
        </div>
    </section>
    @include('call_to_action')
</div>
