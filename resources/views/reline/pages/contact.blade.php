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

@section('contents')
@include(welcomeTheme().'layouts.pageHeader', ['title' => $page->name, 'banner' => $page->bannerFile ? $page->banner() : null])

<section class="contact-info contact-info--contact section-space">
    <div class="container">
        <div class="row gutter-y-30">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="100">
                <div class="contact-info__card">
                    <div class="contact-info__card__icon">
                        <i class="icon-phone-call"></i>
                    </div>
                    <div class="contact-info__card__content">
                        <h3 class="contact-info__card__title">Get Contact Phone</h3>
                        <a href="tel:{{general()->mobile}}" class="contact-info__card__link">{{general()->mobile}}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="200">
                <div class="contact-info__card">
                    <div class="contact-info__card__icon">
                        <i class="icon-email-2"></i>
                    </div>
                    <div class="contact-info__card__content">
                        <h3 class="contact-info__card__title">Your Email Address</h3>
                        <a href="mailto:{{general()->email}}" class="contact-info__card__link">{{general()->email}}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="300">
                <div class="contact-info__card">
                    <div class="contact-info__card__icon">
                        <i class="icon-location-2"></i>
                    </div>
                    <div class="contact-info__card__content">
                        <h3 class="contact-info__card__title">Our Location</h3>
                        <span class="contact-info__card__link">{{general()->address_one}}</span>
                        @if(general()->address_two)
                        <span class="contact-info__card__link d-block mt-2">{{general()->address_two}}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.contact-info -->

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
