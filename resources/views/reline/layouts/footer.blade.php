<footer class="main-footer section-space-t">
    <div class="main-footer__bg" style="background-image: url({{asset(assetLink().'/assets/images/backgrounds/footer-bg.jpg')}});"></div>
    <div class="main-footer__top">
        <div class="contact-info">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.contact-info -->
    </div><!-- /.main-footer__top -->
    <div class="container">
        <div class="row gutter-y-40">
            <div class="col-xl-3 col-lg-5 col-md-7" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="100">
                <div class="footer-widget footer-widget--about">
                    <a href="{{route('index')}}" class="footer-widget__logo logo-retina">
                        <img src="{{asset(general()->logo())}}" alt="{{general()->title}}" />
                    </a>
                    <p class="footer-widget__text">
                        Reliance International is committed to providing ethical, transparent, and reliable recruitment solutions by connecting international employers with skilled, semi-skilled, and general workers from Bangladesh.
                    </p>
                    @include(welcomeTheme().'layouts.social')
                </div>
            </div><!-- /.col-xl-3 -->
            <div class="col-lg-3 col-md-5 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="200">
                <div class="footer-widget footer-widget--links">
                    @if($footerMenu = menu('Footer Two'))
                    <h2 class="footer-widget__title">{{$footerMenu->name ?: 'Quick Link'}}</h2>
                    <ul class="list-unstyled footer-widget__links">
                        @foreach($footerMenu->subMenus as $item)
                        <li><a href="{{asset($item->menuLink())}}">{{$item->menuName()}}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div><!-- /.col-lg-3 -->
            <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="300">
                <div class="footer-widget footer-widget--blog">
                    <h2 class="footer-widget__title">Recent Blog</h2>
                    <ul class="footer-widget__blog list-unstyled">
                        @foreach(App\Models\Post::where('type',1)->where('status','active')->latest()->limit(2)->get(['id','name','slug','created_at']) as $footerPost)
                        <li>
                            <a href="{{route('blogView',$footerPost->slug?:'no-title')}}" class="footer-widget__blog__image">
                                <img src="{{asset($footerPost->image())}}" alt="{{$footerPost->name}}" style="width:80px;height:80px;object-fit:cover;" />
                            </a>
                            <div class="footer-widget__blog__content">
                                <span class="footer-widget__blog__date"><span class="footer-widget__blog__icon"><i class="icon-calendar"></i></span> {{$footerPost->created_at->format('d M Y')}}</span>
                                <h3 class="footer-widget__blog__title"><a href="{{route('blogView',$footerPost->slug?:'no-title')}}">{{Str::limit($footerPost->name, 45)}}</a></h3>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div><!-- /.col-xl-3 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="400">
                <div class="footer-widget footer-widget--links">
                    @if($serviceMenu = menu('Footer Three'))
                    <h2 class="footer-widget__title">{{$serviceMenu->name ?: 'Our Services'}}</h2>
                    <ul class="list-unstyled footer-widget__links">
                        @foreach($serviceMenu->subMenus as $item)
                        <li><a href="{{asset($item->menuLink())}}">{{$item->menuName()}}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div><!-- /.col-xl-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <p class="main-footer__copyright">
                    {!! general()->copyright_text ?: '&copy; Copyright '.date('Y').' by '.e(general()->title).'. All Rights Reserved.' !!}
                </p>
                <ul class="main-footer__page list-unstyled">
                    <li><a href="{{route('pageView','privacy-policy')}}">Privacy Policy</a></li>
                    <li><a href="{{route('pageView','terms-and-conditions')}}">Terms</a></li>
                    <li><a href="{{route('pageView','contact-us')}}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div><!-- /.main-footer__bottom -->
</footer><!-- /.main-footer -->
