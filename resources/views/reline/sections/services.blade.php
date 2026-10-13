{{-- Core recruitment services. Pass 'home' => true for the homepage layout (intro column + 5 cards). --}}
@php
$home = $home ?? false;
$coreServices = [
    ['icon' => 'icon-immigration', 'img' => 'visa-3-1.jpg', 'title' => 'International Recruitment', 'text' => 'End-to-end recruitment of reliable skilled, semi-skilled, and general workers from Bangladesh for employers worldwide.'],
    ['icon' => 'icon-business-visa', 'img' => 'visa-3-3.jpg', 'title' => 'Skilled Workforce Supply', 'text' => 'Welders, electricians, plumbers, carpenters, steel fixers, masons, and machine operators.'],
    ['icon' => 'icon-family-visa', 'img' => 'visa-3-4.jpg', 'title' => 'Semi-Skilled & General Workforce', 'text' => 'Factory, warehouse, production, packaging, general labor, loaders, and cleaners.'],
    ['icon' => 'icon-travel-visa', 'img' => 'visa-3-5.jpg', 'title' => 'Hospitality Recruitment', 'text' => 'Hotel staff, housekeeping, waiters, kitchen helpers, cooks, and reception staff for hotels, restaurants, and resorts.'],
    ['icon' => 'icon-students-visa', 'img' => 'visa-3-6.jpg', 'title' => 'Manufacturing & Industrial', 'text' => 'Dependable workers for production lines and industrial operations.'],
    ['icon' => 'icon-supportive', 'img' => 'visa-3-2.jpg', 'title' => 'Recruitment Process Support', 'text' => 'Candidate sourcing and screening, interview coordination, documentation, and deployment support.'],
];
@endphp
<section class="visa-three section-space">
    <div class="container">
        @unless($home)
        <div class="sec-title sec-title--center">
            <div class="sec-title__top" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                <p class="sec-title__tagline">Our Core Services</p>
                <span class="sec-title__icon sec-title__icon--right"><i class="icon-airplane-2"></i></span>
            </div>
            <h2 class="sec-title__title bw-split-in-right">Workforce Solutions For <br /> Every Industry.</h2>
        </div>
        @endunless
        <div class="row gutter-y-30">
            @if($home)
            <div class="col-xl-4 col-md-6">
                <div class="visa-three__content">
                    <div class="sec-title">
                        <div class="sec-title__top" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                            <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                            <p class="sec-title__tagline">Our Services</p>
                            <span class="sec-title__icon sec-title__icon--right"><i class="icon-airplane-2"></i></span>
                        </div>
                        <h2 class="sec-title__title bw-split-in-right">Comprehensive International Recruitment And Workforce Solutions.</h2>
                    </div>
                    <p class="visa-three__text">We provide end-to-end international recruitment and workforce solutions built on professionalism, transparency, ethical recruitment, and long-term partnerships.</p>
                    <a href="{{route('pageView','our-services')}}" class="visanet-btn visanet-btn--black">
                        <span class="visanet-btn__icon-box">
                            <span class="visanet-btn__icon"><span><i class="icon-arrow-right-3"></i></span></span>
                        </span>
                        <span class="visanet-btn__text">Our Services</span>
                    </a>
                </div>
            </div>
            @endif
            @foreach($home ? array_slice($coreServices, 0, 5) : $coreServices as $item)
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="{{($loop->index % 3 + 1) * 100}}">
                <div class="visa-card-two">
                    <div class="visa-card-two__bg" style="background-image: url({{asset(assetLink().'/assets/images/visa/'.$item['img'])}});"></div>
                    <div class="visa-card-two__content">
                        <div class="visa-card-two__top">
                            <div class="visa-card-two__icon-box">
                                <span class="visa-card-two__icon"><i class="{{$item['icon']}}"></i></span>
                            </div>
                            <h2 class="visa-card-two__title"><a href="{{route('pageView','our-services')}}">{{$item['title']}}</a></h2>
                        </div>
                        <p class="visa-card-two__text">{{$item['text']}}</p>
                        <a href="{{route('pageView','contact-us')}}" class="visa-card-two__btn">
                            Hire Workers <span class="visa-card-two__btn__icon"><i class="icon-arrow-right-up"></i></span>
                        </a>
                    </div>
                    <img src="{{asset(assetLink().'/assets/images/shapes/visa-card-2-1.png')}}" alt="shape" class="visa-card-two__shape" />
                </div><!-- /.visa-card-two -->
            </div>
            @endforeach
        </div>
    </div>
</section><!-- /.visa-three -->
