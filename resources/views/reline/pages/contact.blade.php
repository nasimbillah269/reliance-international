@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:websiteTitle($page->name)}}" />
<meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
<meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($page->imageFile?$page->image():general()->favicon())}}" />
<meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
<link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}">
@endsection

@push('css')
<style>
    .office-card { position: relative; height: 100%; background: #fff; border-radius: 12px; padding: 40px 30px 32px; box-shadow: 0 10px 30px rgba(29, 37, 58, .06); border-top: 4px solid var(--visanet-base, #e50c37); transition: transform .3s, box-shadow .3s; display: flex; flex-direction: column; }
    .office-card:hover { transform: translateY(-6px); box-shadow: 0 18px 40px rgba(29, 37, 58, .12); }
    .office-card__badge { position: absolute; top: 20px; right: 20px; font-size: 12px; font-weight: 600; letter-spacing: .5px; text-transform: uppercase; color: var(--visanet-base, #e50c37); background: rgba(var(--visanet-base-rgb, 229, 12, 55), .08); padding: 4px 12px; border-radius: 20px; }
    .office-card__icon { width: 64px; height: 64px; border-radius: 50%; background: var(--visanet-base, #e50c37); color: #fff; display: inline-flex; align-items: center; justify-content: center; font-size: 26px; margin-bottom: 22px; transition: background .3s; }
    .office-card:hover .office-card__icon { background: var(--visanet-black3, #1d253a); }
    .office-card__title { font-size: 22px; font-weight: 700; color: var(--visanet-black3, #1d253a); margin: 0 0 4px; }
    .office-card__country { font-size: 14px; color: var(--visanet-gray, #92918f); margin: 0 0 20px; }
    .office-card__row { display: flex; gap: 14px; align-items: flex-start; margin-bottom: 16px; color: var(--visanet-text, #636363); font-size: 15px; line-height: 1.7; }
    .office-card__row:last-child { margin-bottom: 0; }
    .office-card__row i { flex: 0 0 auto; width: 34px; height: 34px; border-radius: 50%; background: rgba(var(--visanet-base-rgb, 229, 12, 55), .08); color: var(--visanet-base, #e50c37); display: inline-flex; align-items: center; justify-content: center; font-size: 14px; margin-top: 2px; }
    .office-card__row a { color: var(--visanet-black3, #1d253a); font-weight: 600; transition: color .3s; }
    .office-card__row a:hover { color: var(--visanet-base, #e50c37); }
    .office-card__body { flex: 1 1 auto; }
    .office-card__phone { margin-top: auto; padding-top: 18px; border-top: 1px dashed rgba(29, 37, 58, .12); }
</style>
@endpush

@section('contents')
@include(welcomeTheme().'layouts.pageHeader', ['title' => $page->name, 'banner' => $page->bannerFile ? $page->banner() : null])

@php
$offices = [
    [
        'title' => 'Corporate Office',
        'badge' => 'Head Office',
        'country' => 'Dhaka, Bangladesh',
        'icon' => 'fas fa-building',
        'address' => 'Landmark Tower, 10th Floor, Gulshan Circle, Gulshan-2, Dhaka-1212, Dhaka, Bangladesh',
        'phone' => '+88-0134786589',
    ],
    [
        'title' => 'Dubai Branch',
        'badge' => 'UAE',
        'country' => 'Dubai, United Arab Emirates',
        'icon' => 'fas fa-city',
        'address' => 'Al Ghurair Centre - Room 640, 6th Floor - Office Tower - 4 Entrance 3 - Deira - Dubai - United Arab Emirates',
        'phone' => '+971 58 298 6516',
    ],
    [
        'title' => 'Bengaluru Branch',
        'badge' => 'India',
        'country' => 'Karnataka, India',
        'icon' => 'fas fa-landmark',
        'address' => 'No. 25, 1st Floor, Ashok Building, 1st Main Road, 1st Cross, Nelagadaranahalli, Bengaluru Urban, Bengaluru, Karnataka - 560073',
        'phone' => '+91-9774168058',
    ],
];
@endphp

<section class="office-list section-space">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sec-title__top justify-content-center" data-aos="fade-up" data-aos-duration="1300">
                <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                <p class="sec-title__tagline">Our Offices</p>
            </div>
            <h2 class="sec-title__title">Visit Us Around The World</h2>
        </div>
        <div class="row gutter-y-30">
            @foreach($offices as $i => $office)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="{{($i + 1) * 100}}">
                <div class="office-card">
                    <span class="office-card__badge">{{$office['badge']}}</span>
                    <div class="office-card__icon"><i class="{{$office['icon']}}"></i></div>
                    <h3 class="office-card__title">{{$office['title']}}</h3>
                    <p class="office-card__country">{{$office['country']}}</p>
                    <div class="office-card__body">
                        <div class="office-card__row">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>{{$office['address']}}</span>
                        </div>
                    </div>
                    <div class="office-card__row office-card__phone">
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:{{preg_replace('/[^0-9+]/', '', $office['phone'])}}">{{$office['phone']}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- /.office-list -->

<div class="contact-one section-space-b">
    <div class="container">
        <div class="contact-one__content">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="contact-one__form">
                        <div class="sec-title">
                            <div class="sec-title__top" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                                <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                                <p class="sec-title__tagline">Contact Us</p>
                            </div>
                            <h2 class="sec-title__title bw-split-in-right">Get In Touch With Us</h2>
                        </div>
                        @if($page->description)
                        <div class="contact-one__text page-content">{!! $page->description !!}</div>
                        @endif

                        @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{Session::get('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <form action="{{route('contactMail')}}" method="post" id="contactForm" class="form-one">
                            @csrf
                            <div class="form-one__group">
                                <div class="form-one__control">
                                    <input type="text" name="name" value="{{old('name')}}" placeholder="Your Name *" required />
                                    @if($errors->has('name'))<p class="form-error">{{$errors->first('name')}}</p>@endif
                                </div>
                                <div class="form-one__control">
                                    <input type="tel" name="phone" value="{{old('phone')}}" placeholder="Your Phone *" required />
                                    @if($errors->has('phone'))<p class="form-error">{{$errors->first('phone')}}</p>@endif
                                </div>
                                <div class="form-one__control">
                                    <input type="email" name="email" value="{{old('email')}}" placeholder="Your Email *" required />
                                    @if($errors->has('email'))<p class="form-error">{{$errors->first('email')}}</p>@endif
                                </div>
                                <div class="form-one__control">
                                    <input type="text" name="subject" value="{{old('subject')}}" placeholder="Subject *" required />
                                    @if($errors->has('subject'))<p class="form-error">{{$errors->first('subject')}}</p>@endif
                                </div>
                                <div class="form-one__control form-one__control--full">
                                    <textarea name="message" placeholder="Your Message *" required>{{old('message')}}</textarea>
                                    @if($errors->has('message'))<p class="form-error">{{$errors->first('message')}}</p>@endif
                                </div>
                                <div class="form-one__control form-one__control--full">
                                    <button type="submit" class="visanet-btn-two">
                                        SEND MESSAGE <span class="visanet-btn-two__icon"><i class="icon-arrow-right-3"></i></span>
                                    </button>
                                </div>
                            </div>
                        </form><!-- /.form-one -->
                    </div><!-- /.contact-one__form -->
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-one__image" style="background-image: url({{asset($page->imageFile ? $page->image() : assetLink().'/assets/images/resources/contact-1-1.jpg')}});" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                        <div class="contact-one__phone">
                            <span class="contact-one__phone__icon"><i class="icon-phone-call"></i></span>
                            <div>
                                <h4 class="contact-one__phone__title">Get Contact Now</h4>
                                <a href="tel:{{general()->mobile}}" class="contact-one__phone__number">{{general()->mobile}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.contact-one -->

@if(general()->address_one)
<div class="google-map google-map__contact">
    <iframe title="google map" src="https://maps.google.com/maps?q={{urlencode(general()->address_one)}}&output=embed" class="map__contact" allowfullscreen="" loading="lazy"></iframe>
</div>
@endif
@endsection
