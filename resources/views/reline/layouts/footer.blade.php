<style>
    .main-footer .footer-widget__title { font-size: 19px; white-space: nowrap; margin-bottom: 26px; }
    .footer-widget--contact { margin-top: 19px; }
    @media (min-width: 1200px) { .main-footer .footer-widget--links { padding-left: 30px; } }
    @media (max-width: 1199px) { .footer-widget--contact { margin-top: 0; } }
    .footer-office { position: relative; padding-left: 16px; border-left: 2px solid var(--visanet-base, #e50c37); }
    .footer-office + .footer-office { margin-top: 22px; }
    .footer-office__title { font-size: 15px; font-weight: 700; text-transform: uppercase; letter-spacing: .5px; color: #fff; margin: 0 0 8px; }
    .footer-office__row { display: flex; gap: 10px; align-items: flex-start; margin: 0 0 6px; font-size: 14px; line-height: 1.6; color: rgba(255, 255, 255, .8); }
    .footer-office__row:last-child { margin-bottom: 0; }
    .footer-office__row i { flex: 0 0 14px; margin-top: 5px; font-size: 13px; color: var(--visanet-base, #e50c37); }
    .footer-office__row a { color: #fff; font-weight: 600; transition: color .3s; }
    .footer-office__row a:hover { color: var(--visanet-base, #e50c37); }
</style>
<footer class="main-footer section-space-t">
    <div class="main-footer__bg" style="background-image: url({{asset(assetLink().'/assets/images/backgrounds/footer-bg.jpg')}});"></div>
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
            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="200">
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
            </div><!-- /.col-xl-2 -->
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
            <div class="col-xl-4 col-lg-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="400">
                <div class="footer-widget footer-widget--contact">
                    <h2 class="footer-widget__title">Contact Us</h2>
                    @foreach([
                        ['title' => 'Corporate Office', 'address' => 'Landmark Tower, 10th Floor, Gulshan Circle, Gulshan-2, Dhaka-1212, Bangladesh', 'phone' => '+88-0134786589'],
                        ['title' => 'Dubai, UAE Branch', 'address' => 'Al Ghurair Centre - Room 640, 6th Floor, Office Tower, Entrance 3, Deira, Dubai, UAE', 'phone' => '+971 58 298 6516'],
                        ['title' => 'Bengaluru, India Branch', 'address' => 'No. 25, 1st Floor, Ashok Building, 1st Main Road, 1st Cross, Nelagadaranahalli, Bengaluru, Karnataka - 560073', 'phone' => '+91-9774168058'],
                    ] as $footerOffice)
                    <div class="footer-office">
                        <h4 class="footer-office__title">{{$footerOffice['title']}}</h4>
                        <p class="footer-office__row"><i class="fas fa-map-marker-alt"></i><span>{{$footerOffice['address']}}</span></p>
                        <p class="footer-office__row"><i class="fas fa-phone-alt"></i><a href="tel:{{preg_replace('/[^0-9+]/', '', $footerOffice['phone'])}}">{{$footerOffice['phone']}}</a></p>
                    </div>
                    @endforeach
                </div>
            </div><!-- /.col-xl-4 -->
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
