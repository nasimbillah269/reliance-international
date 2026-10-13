<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{csrf_token()}}" />
    @yield('title')
    <link rel="shortcut icon" type="image/x-icon" href="{{asset(general()->favicon())}}" />
    @yield('SEO')

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset(assetLink().'/assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset(assetLink().'/assets/vendors/bootstrap-select/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset(assetLink().'/assets/vendors/aos/css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset(assetLink().'/assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset(assetLink().'/assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset(assetLink().'/assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset(assetLink().'/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset(assetLink().'/assets/vendors/visanet-icons/style.css')}}" />
    <link rel="stylesheet" href="{{asset(assetLink().'/assets/vendors/daterangepicker-master/daterangepicker.css')}}" />
    <link rel="stylesheet" href="{{asset(assetLink().'/assets/vendors/slick/slick.css')}}" />
    <link rel="stylesheet" href="{{asset(assetLink().'/assets/vendors/owl-carousel/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset(assetLink().'/assets/vendors/owl-carousel/css/owl.theme.default.min.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset(assetLink().'/assets/css/visanet.css')}}" />

    <style>
        .main-header__logo img, .footer-widget__logo img, .logo-box img, .sidebar-three__logo img { max-height: 110px; width: auto; }
        .main-header__extra { align-items: center; gap: 30px; }
        .main-header__extra .social-links { display: flex; gap: 10px; }
        .main-header__extra .social-links a { display: inline-flex; width: 38px; height: 38px; align-items: center; justify-content: center; border-radius: 50%; border: 1px solid rgba(255,255,255,.25); color: #fff; font-size: 14px; transition: all .3s; }
        .main-header__extra .social-links a:hover { background: var(--visanet-base, #e50c37); border-color: var(--visanet-base, #e50c37); }
        .main-header__extra .social-links .social-links__icon { background: none; width: auto; height: auto; color: inherit; }
        .main-header__phone { display: flex; align-items: center; gap: 12px; color: #fff; font-weight: 600; font-size: 17px; line-height: 1.2; padding-left: 30px; border-left: 1px solid rgba(255,255,255,.2); }
        .main-header__phone:hover { color: #fff; }
        .main-header__phone small { display: block; font-size: 13px; font-weight: 400; opacity: .75; }
        .main-header__phone__icon { width: 46px; height: 46px; border-radius: 50%; background: var(--visanet-base, #e50c37); display: inline-flex; align-items: center; justify-content: center; font-size: 20px; }
        .main-header--three .main-menu .main-menu__list > li > a { white-space: nowrap; }
        .main-header__extra .social-links { flex-wrap: nowrap; }
        .main-header__phone__text { white-space: nowrap; }
        @media (max-width: 1599px) {
            .main-header__extra { gap: 20px; }
            .main-header__extra .social-links { display: none; }
            .main-header--three .main-menu .main-menu__list > li + li { margin-left: 28px; }
        }
        @media (max-width: 1399px) {
            .main-header__phone { padding-left: 20px; font-size: 15px; gap: 10px; }
            .main-header__phone__icon { width: 40px; height: 40px; font-size: 17px; }
            .main-header--three .main-menu .main-menu__list > li + li { margin-left: 22px; }
            .main-header--three .main-menu .main-menu__list > li > a { font-size: 15px; }
        }
        .main-header__logo a { -webkit-tap-highlight-color: transparent; }
        @media (max-width: 1199px) {
            .main-header--three .main-header__inner { padding: 0; }
            .main-header--three .main-header__logo { padding: 10px 0; }
            .main-header--three .main-header__logo::before { height: 100%; }
            .main-header--three .main-header__logo img { max-height: 80px; }
        }
        @media (max-width: 575px) {
            .main-header--three .main-header__logo::before { left: -15px; width: calc(100% + 70px); clip-path: polygon(100% 0, 86% 50%, 100% 100%, 0 100%, 0 0); }
            .main-header--three .main-header__logo img { max-height: 65px; }
        }
        .page-content img { max-width: 100%; height: auto; }
        .visanet-pagination { display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; list-style: none; padding: 0; margin: 40px 0 0; }
        .visanet-pagination li a, .visanet-pagination li span { display: inline-flex; align-items: center; justify-content: center; min-width: 46px; height: 46px; padding: 0 12px; border-radius: 50%; background: var(--visanet-gray, #f4f4f4); color: #fff; font-weight: 600; }
        .visanet-pagination li.active span, .visanet-pagination li a:hover { background: var(--visanet-base, #e10e3b); color: #fff; }
        .visanet-pagination li.disabled span { opacity: .5; }
        .form-error { color: #e10e3b; font-size: 13px; margin: 4px 0 0; }
    </style>
    @stack('css')
</head>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url({{asset(assetLink().'/assets/images/loader.png')}});"></div>
    </div>

    <div class="page-wrapper">
        @include(welcomeTheme().'layouts.header')

        @yield('contents')

        @include(welcomeTheme().'layouts.footer')
    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="icon-close"></i></span>
            <div class="logo-box">
                <a href="{{route('index')}}" aria-label="logo image">
                    <img src="{{asset(general()->logo())}}" alt="{{general()->title}}" />
                </a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                @if(general()->email)
                <li>
                    <span class="mobile-nav__contact__icon"><i class="fa fa-envelope"></i></span>
                    <a href="mailto:{{general()->email}}">{{general()->email}}</a>
                </li>
                @endif
                @if(general()->mobile)
                <li>
                    <span class="mobile-nav__contact__icon"><i class="fa fa-phone-alt"></i></span>
                    <a href="tel:{{general()->mobile}}">{{general()->mobile}}</a>
                </li>
                @endif
            </ul>
            @include(welcomeTheme().'layouts.social')
        </div>
    </div><!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="{{route('blogSearch')}}">
                <input type="text" name="search" value="{{request()->search}}" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit">
                    <i class="icon-search"></i>
                </button>
            </form>
        </div>
    </div><!-- /.search-popup -->

    <aside class="sidebar-three">
        <div class="sidebar-three__overlay sidebar-btn__toggler"></div>
        <div class="sidebar-three__content">
            <span class="sidebar-three__close sidebar-btn__toggler"><i class="icon-close"></i></span>
            <div class="sidebar-three__logo sidebar-three__item logo-retina">
                <a href="{{route('index')}}" aria-label="logo image">
                    <img src="{{asset(general()->logo())}}" alt="{{general()->title}}" />
                </a>
            </div>
            <div class="sidebar-three__about sidebar-three__item">
                <p class="sidebar-three__about__text">Reliance International is committed to providing ethical, transparent, and reliable recruitment solutions by connecting international employers with skilled, semi-skilled, and general workers from Bangladesh.</p>
            </div>
            <div class="sidebar-three__info sidebar-three__item">
                <h4 class="sidebar-three__title">Contact Us</h4>
                <ul class="sidebar-three__info__list">
                    @if(general()->address_one)
                    <li>
                        <span class="sidebar-three__info__icon"><i class="icon-location"></i></span>
                        <address>{{general()->address_one}}</address>
                    </li>
                    @endif
                    @if(general()->email)
                    <li>
                        <span class="sidebar-three__info__icon"><i class="icon-email"></i></span>
                        <a href="mailto:{{general()->email}}">{{general()->email}}</a>
                    </li>
                    @endif
                    @if(general()->mobile)
                    <li>
                        <span class="sidebar-three__info__icon"><i class="icon-phone-call"></i></span>
                        <a href="tel:{{general()->mobile}}">{{general()->mobile}}</a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="sidebar-three__social social-links sidebar-three__item">
                @include(welcomeTheme().'layouts.social', ['wrap' => false])
            </div>
            <div class="sidebar-three__newsletter sidebar-three__item">
                <label class="sidebar-three__title" for="subscribeEmail">Newsletter</label>
                <form id="subscirbeForm" data-url="{{route('subscribe')}}" class="sidebar-three__newsletter__inner">
                    <input type="email" name="email" id="subscribeEmail" class="sidebar-three__newsletter__input" placeholder="Email Address" />
                    <button type="submit" class="sidebar-three__newsletter__btn subsriberbtm"><span class="far fa-envelope" aria-hidden="true"></span></button>
                </form>
                <div id="subscribeemailMsg"></div>
            </div>
        </div>
    </aside><!-- /.sidebar-three -->

    <style>
        .reline-top { position: fixed; right: 30px; bottom: 30px; z-index: 99; width: 56px; height: 56px; border-radius: 50%; border: 0; padding: 0; cursor: pointer; background: var(--visanet-black3, #1d253a); color: #fff; box-shadow: 0 10px 30px rgba(0, 0, 0, .25); opacity: 0; visibility: hidden; transform: translateY(20px); transition: opacity .4s, visibility .4s, transform .4s, background .3s; }
        .reline-top.is-visible { opacity: 1; visibility: visible; transform: translateY(0); }
        .reline-top:hover { background: var(--visanet-base, #e50c37); }
        .reline-top::before { content: ""; position: absolute; inset: -7px; border-radius: 50%; border: 2px dashed var(--visanet-base, #e50c37); animation: reline-top-spin 8s linear infinite; }
        .reline-top:hover::before { border-color: var(--visanet-black3, #1d253a); }
        .reline-top__ring { position: absolute; inset: 0; width: 100%; height: 100%; transform: rotate(-90deg); }
        .reline-top__ring circle { fill: none; stroke-width: 3; }
        .reline-top__ring .track { stroke: rgba(255, 255, 255, .15); }
        .reline-top__ring .bar { stroke: var(--visanet-base, #e50c37); stroke-linecap: round; transition: stroke-dashoffset .1s linear; }
        .reline-top:hover .reline-top__ring .bar { stroke: #fff; }
        .reline-top__icon { position: relative; display: inline-flex; font-size: 18px; animation: reline-top-bounce 1.6s ease-in-out infinite; }
        @keyframes reline-top-spin { to { transform: rotate(360deg); } }
        @keyframes reline-top-bounce { 0%, 100% { transform: translateY(2px); } 50% { transform: translateY(-4px); } }
        @media (max-width: 575px) { .reline-top { right: 20px; bottom: 20px; width: 48px; height: 48px; } }
        @media (prefers-reduced-motion: reduce) { .reline-top::before, .reline-top__icon { animation: none; } }
    </style>
    <button type="button" class="reline-top" aria-label="Back to top">
        <svg class="reline-top__ring" viewBox="0 0 56 56" aria-hidden="true">
            <circle class="track" cx="28" cy="28" r="26" />
            <circle class="bar" cx="28" cy="28" r="26" />
        </svg>
        <span class="reline-top__icon"><i class="fas fa-arrow-up"></i></span>
    </button>

    <script src="{{asset(assetLink().'/assets/vendors/jquery/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/owl-carousel/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/aos/js/aos.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/imagesloaded/imagesloaded.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/isotope/isotope.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/slick/slick.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/daterangepicker-master/moment.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/daterangepicker-master/daterangepicker.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/gsap/gsap.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/gsap/scrolltrigger.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/gsap/splittext.min.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/vendors/gsap/visanet-split.js')}}"></script>
    <script src="{{asset(assetLink().'/assets/js/visanet.js')}}"></script>

    <script>
        (function () {
            var btn = document.querySelector('.reline-top');
            var bar = btn.querySelector('.bar');
            var length = 2 * Math.PI * 26;
            bar.style.strokeDasharray = length;
            bar.style.strokeDashoffset = length;

            function update() {
                var max = document.documentElement.scrollHeight - window.innerHeight;
                var progress = max > 0 ? window.scrollY / max : 0;
                bar.style.strokeDashoffset = length * (1 - progress);
                btn.classList.toggle('is-visible', window.scrollY > 300);
            }

            window.addEventListener('scroll', update, { passive: true });
            update();
            btn.addEventListener('click', function () {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        })();

        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

        $(document).on('click', '.subsriberbtm', function (e) {
            e.preventDefault();
            var url = $('#subscirbeForm').data('url');
            $.ajax({ url: url, type: 'POST', dataType: 'json', data: { email: $('#subscribeEmail').val() }, cache: false })
                .done(function (data) {
                    var color = data.success ? '#009688' : '#ff9800';
                    $('#subscribeemailMsg').html("<p style='color:#fff;background:" + color + ";margin:5px 0;padding:4px 5px;border-radius:4px;font-size:12px;'>" + data.message + "</p>");
                    if (data.success) { $('#subscirbeForm')[0].reset(); }
                });
        });

        $("#division").on("change", function () {
            var id = $(this).val();
            if (id == '') {
                $('#district').empty().append('<option value="">No District</option>');
                $('#city').empty().append('<option value="">No City</option>');
            }
            $.get('{{url('geo/filter')}}/' + id, function (data) {
                $('#district').empty().append(data.geoData);
                $('#city').empty().append('<option value="">No City</option>');
            });
        });

        $("#district").on("change", function () {
            var id = $(this).val();
            if (id == '') {
                $('#city').empty().append('<option value="">No City</option>');
            }
            $.get('{{url('geo/filter')}}/' + id, function (data) {
                $('#city').empty().append(data.geoData);
            });
        });
    </script>
    @stack('js')
</body>
</html>
