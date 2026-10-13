@extends(welcomeTheme().'layouts.app') 
@section('title')
<title>{{websiteTitle()}}</title>
@endsection 
@section('SEO')
<meta name="title" property="og:title" content="{{general()->meta_title}}" />
<meta name="description" property="og:description" content="{!!general()->meta_description!!}" />
<meta name="keyword" property="og:keyword" content="{{general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset(general()->logo())}}" />
<meta name="url" property="og:url" content="{{route('index')}}" />
<link rel="canonical" href="{{route('index')}}">
@endsection 
@push('css')
<script type="application/ld+json">
    { 
    "@context": "https://schema.org", 
    "@type": "WebPage", 
    "url": "{{route('index')}}", 
    "name": "{{websiteTitle()}}",
    "author": {
        "@type": "Webpage",
        "name": "{{websiteTitle()}}"
    },
    "description": "{!!general()->meta_description!!}"
    }
</script>
@endpush 

@section('contents')
@php
$heroSlides = [
    ['bg' => 'hero-slider-bg-3-1.jpg', 'title' => 'Connecting Global Employers with Skilled Workforce', 'highlight' => 'from Bangladesh', 'text' => 'Professional Recruitment Solutions for International Employers.'],
    ['bg' => 'hero-slider-bg-3-2.jpg', 'title' => 'Professional Recruitment Solutions for International', 'highlight' => 'Employers', 'text' => 'Ethical, transparent, and reliable recruitment of skilled, semi-skilled, and general workers from Bangladesh.'],
    ['bg' => 'hero-slider-bg-3-3.jpg', 'title' => 'Your Trusted', 'highlight' => 'Recruitment Partner', 'text' => 'Quality talent for construction, manufacturing, hospitality, and logistics that supports your business growth.'],
];
@endphp
         <section class="hero-slider-three">
             <div class="hero-slider-three__carousel visanet-owl__carousel visanet-owl__carousel--counter visanet-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
        "items": 1,
        "margin": 0,
        "animateIn": "fadeIn",
        "animateOut": "fadeOut",
        "loop": true,
        "autoplay": true,
        "smartSpeed": 700,
        "nav": true,
        "dots": false,
        "navText": ["<i class=\"icon-arrow-left\"></i>","<i class=\"icon-arrow-right\"></i>"]
    }'>
                 @foreach($heroSlides as $slide)
                 <div class="hero-slider-three__item">
                     <div class="hero-slider-three__bg-box">
                         @for($i = 0; $i < 4; $i++)
                         <div class="hero-slider-three__bg">
                             <div class="hero-slider-three__bg__inner" style="background-image: url({{asset(assetLink().'/assets/images/backgrounds/'.$slide['bg'])}});"></div>
                         </div>
                         @endfor
                     </div><!-- /.hero-slider-three__bg-box -->
                     <div class="container">
                         <div class="row">
                             <div class="col-xxl-8 col-xl-9 col-lg-11">
                                 <div class="hero-slider-three__content">
                                     <div class="hero-slider-three__tagline">
                                         <span class="hero-slider-three__tagline__icon"><i class="icon-airplane"></i></span>
                                         <p class="hero-slider-three__tagline__text">Welcome to <span>Reliance International!</span></p>
                                     </div>
                                     <h2 class="hero-slider-three__title">{{$slide['title']}} <span class="hero-slider-three__title__highlight">{{$slide['highlight']}} <img src="{{asset(assetLink().'/assets/images/shapes/hero-slider-shape-3-3.png')}}" alt="hero title shape" class="hero-slider-three__title__shape" /></span></h2>
                                     <p class="hero-slider-three__text">{{$slide['text']}}</p>
                                     <div class="hero-slider-three__button">
                                         <div class="hero-slider-three__button__inner">
                                             <a href="{{route('pageView','about-us')}}" class="visanet-btn visanet-btn--white">
                                                 <span class="visanet-btn__icon-box">
                                                     <span class="visanet-btn__icon"><span><i class="icon-arrow-right-3"></i></span></span>
                                                 </span>
                                                 <span class="visanet-btn__text">Discover More</span>
                                             </a>
                                         </div>
                                         <div class="hero-slider-three__button__inner">
                                             <a href="{{route('pageView','contact-us')}}" class="visanet-btn">
                                                 <span class="visanet-btn__icon-box">
                                                     <span class="visanet-btn__icon"><span><i class="icon-arrow-right-3"></i></span></span>
                                                 </span>
                                                 <span class="visanet-btn__text">Hire Workers</span>
                                             </a>
                                         </div>
                                     </div>
                                 </div><!-- /.hero-slider-three__content -->
                             </div>
                         </div>
                     </div><!-- /.container -->
                     <img src="{{asset(assetLink().'/assets/images/shapes/hero-slider-shape-3-1.png')}}" alt="shape" class="hero-slider-three__shape-1" />
                     <img src="{{asset(assetLink().'/assets/images/shapes/hero-slider-shape-3-2.png')}}" alt="shape" class="hero-slider-three__shape-2" />
                 </div><!-- /.hero-slider-three__item -->
                 @endforeach
             </div><!-- /.hero-slider-three__carousel -->
         </section><!-- /.hero-slider-three -->

         <section class="about-three section-space">
             <div class="container">
                 <div class="about-three__wrapper">
                     <div class="row gutter-y-50">
                         <div class="col-xl-6">
                             <div class="about-three__image">
                                 <div class="about-three__image__one bw-img-anim-left">
                                     <img src="{{asset(assetLink().'/assets/images/about/about-3-1.jpg')}}" alt="about image" />
                                 </div><!-- /.about-three__image__one -->
                                 <div class="about-three__image__two" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                                     <img src="{{asset(assetLink().'/assets/images/about/about-3-2.jpg')}}" alt="about image" />
                                 </div><!-- /.about-three__image__otwo-->
                                 <img src="{{asset(assetLink().'/assets/images/shapes/about-shape-3-1.png')}}" alt="shape" class="about-three__image__shape" />
                             </div><!-- /.about-three__image -->
                         </div><!-- /.col-xl-6 -->
                         <div class="col-xl-6">
                             <div class="about-three__content">
                                 <div class="about-three__experience" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                                     <div class="about-three__experience__inner">
                                         <h2 class="about-three__experience__year"><span style="background-image: url({{asset(assetLink().'/assets/images/about/about-1-1.jpg')}});">27+</span></h2>
                                     </div>
                                     <h3 class="about-three__experience__title">Countries <br /> We Serve</h3>
                                 </div><!-- /.about-three__experience -->
                                 <div class="sec-title">
                                     <div class="sec-title__top" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                                         <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                                         <p class="sec-title__tagline">Welcome to Reliance International</p>
                                     </div><!-- /.sec-title__top -->
                                     <h2 class="sec-title__title bw-split-in-right">Your Trusted <span class='about-three__highlight-text'>Recruitment</span> Partner.</h2><!-- /.sec-title__title -->
                                 </div><!-- /.sec-title -->
                                 <div class="about-three__info" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                                     <img src="{{asset(assetLink().'/assets/images/about/about-3-3.jpg')}}" alt="about image" class="about-three__info__image" />
                                     <ul class="about-three__info__list list-unstyled">
                                         <li>
                                             <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="none">
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7639 9.62873V16.5338C15.7639 16.7813 15.5609 16.982 15.3119 16.982H2.18281C1.93324 16.982 1.73078 16.7813 1.73078 16.5338V3.42709C1.73078 3.18025 1.93324 2.97892 2.18281 2.97892H10.4468L11.4481 2.22986H2.22102C1.53438 2.22986 0.976562 2.78455 0.976562 3.46591V16.495C0.976562 17.1764 1.53438 17.7311 2.22102 17.7311H15.2737C15.9597 17.7311 16.5181 17.1764 16.5181 16.495V8.62595L15.7639 9.62873Z"></path>
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6438 2.22958C16.416 2.34118 16.1881 2.45286 15.9603 2.56446C15.4867 2.85216 15.0344 3.20982 14.6196 3.56915C12.9789 4.99064 11.9624 5.97829 10.659 7.75353C10.2198 8.35169 9.72596 8.89993 9.30514 9.52568C9.18686 9.6838 9.06854 9.842 8.95026 10.0001C8.93272 10.0048 8.91522 10.0094 8.89768 10.0141H8.88452C8.57011 8.94478 8.09944 7.87021 7.24155 7.37673C6.61667 7.01732 5.4696 7.59693 5.28311 8.06048C5.07198 8.58536 5.77936 9.51626 5.95346 9.8745C6.23221 10.4481 6.47292 11.0618 6.70268 11.6746C6.82671 12.0054 6.90557 12.5556 7.14956 12.763C7.39096 12.9682 7.71952 13.0004 8.06964 13.0979C8.37706 13.1834 8.95085 13.3262 9.26573 13.1397C9.62843 12.9249 10.2311 11.884 10.4881 11.4792C11.1529 10.4324 11.9582 9.50368 12.6831 8.52095C13.157 7.87853 13.8745 7.10021 14.4576 6.56735C15.3522 5.7497 15.4949 5.49044 16.4466 4.72732C16.9548 4.34126 17.4631 3.95513 17.9713 3.56911C18.2648 3.38771 18.5584 3.2063 18.8519 3.02489C18.932 2.95857 18.9472 2.82614 19.0228 2.75978C19.0036 2.2229 17.2724 2.21642 16.6438 2.22958Z"></path>
                                             </svg>
                                             <a href="{{route('pageView','our-services')}}">Construction & Manufacturing</a>
                                         </li>
                                         <li>
                                             <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="none">
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7639 9.62873V16.5338C15.7639 16.7813 15.5609 16.982 15.3119 16.982H2.18281C1.93324 16.982 1.73078 16.7813 1.73078 16.5338V3.42709C1.73078 3.18025 1.93324 2.97892 2.18281 2.97892H10.4468L11.4481 2.22986H2.22102C1.53438 2.22986 0.976562 2.78455 0.976562 3.46591V16.495C0.976562 17.1764 1.53438 17.7311 2.22102 17.7311H15.2737C15.9597 17.7311 16.5181 17.1764 16.5181 16.495V8.62595L15.7639 9.62873Z"></path>
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6438 2.22958C16.416 2.34118 16.1881 2.45286 15.9603 2.56446C15.4867 2.85216 15.0344 3.20982 14.6196 3.56915C12.9789 4.99064 11.9624 5.97829 10.659 7.75353C10.2198 8.35169 9.72596 8.89993 9.30514 9.52568C9.18686 9.6838 9.06854 9.842 8.95026 10.0001C8.93272 10.0048 8.91522 10.0094 8.89768 10.0141H8.88452C8.57011 8.94478 8.09944 7.87021 7.24155 7.37673C6.61667 7.01732 5.4696 7.59693 5.28311 8.06048C5.07198 8.58536 5.77936 9.51626 5.95346 9.8745C6.23221 10.4481 6.47292 11.0618 6.70268 11.6746C6.82671 12.0054 6.90557 12.5556 7.14956 12.763C7.39096 12.9682 7.71952 13.0004 8.06964 13.0979C8.37706 13.1834 8.95085 13.3262 9.26573 13.1397C9.62843 12.9249 10.2311 11.884 10.4881 11.4792C11.1529 10.4324 11.9582 9.50368 12.6831 8.52095C13.157 7.87853 13.8745 7.10021 14.4576 6.56735C15.3522 5.7497 15.4949 5.49044 16.4466 4.72732C16.9548 4.34126 17.4631 3.95513 17.9713 3.56911C18.2648 3.38771 18.5584 3.2063 18.8519 3.02489C18.932 2.95857 18.9472 2.82614 19.0228 2.75978C19.0036 2.2229 17.2724 2.21642 16.6438 2.22958Z"></path>
                                             </svg>
                                             <a href="{{route('pageView','our-services')}}">Hospitality & Logistics</a>
                                         </li>
                                         <li>
                                             <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="none">
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7639 9.62873V16.5338C15.7639 16.7813 15.5609 16.982 15.3119 16.982H2.18281C1.93324 16.982 1.73078 16.7813 1.73078 16.5338V3.42709C1.73078 3.18025 1.93324 2.97892 2.18281 2.97892H10.4468L11.4481 2.22986H2.22102C1.53438 2.22986 0.976562 2.78455 0.976562 3.46591V16.495C0.976562 17.1764 1.53438 17.7311 2.22102 17.7311H15.2737C15.9597 17.7311 16.5181 17.1764 16.5181 16.495V8.62595L15.7639 9.62873Z"></path>
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6438 2.22958C16.416 2.34118 16.1881 2.45286 15.9603 2.56446C15.4867 2.85216 15.0344 3.20982 14.6196 3.56915C12.9789 4.99064 11.9624 5.97829 10.659 7.75353C10.2198 8.35169 9.72596 8.89993 9.30514 9.52568C9.18686 9.6838 9.06854 9.842 8.95026 10.0001C8.93272 10.0048 8.91522 10.0094 8.89768 10.0141H8.88452C8.57011 8.94478 8.09944 7.87021 7.24155 7.37673C6.61667 7.01732 5.4696 7.59693 5.28311 8.06048C5.07198 8.58536 5.77936 9.51626 5.95346 9.8745C6.23221 10.4481 6.47292 11.0618 6.70268 11.6746C6.82671 12.0054 6.90557 12.5556 7.14956 12.763C7.39096 12.9682 7.71952 13.0004 8.06964 13.0979C8.37706 13.1834 8.95085 13.3262 9.26573 13.1397C9.62843 12.9249 10.2311 11.884 10.4881 11.4792C11.1529 10.4324 11.9582 9.50368 12.6831 8.52095C13.157 7.87853 13.8745 7.10021 14.4576 6.56735C15.3522 5.7497 15.4949 5.49044 16.4466 4.72732C16.9548 4.34126 17.4631 3.95513 17.9713 3.56911C18.2648 3.38771 18.5584 3.2063 18.8519 3.02489C18.932 2.95857 18.9472 2.82614 19.0228 2.75978C19.0036 2.2229 17.2724 2.21642 16.6438 2.22958Z"></path>
                                             </svg>
                                             <a href="{{route('pageView','our-services')}}">Skilled, Semi-Skilled & General Workers</a>
                                         </li>
                                     </ul>
                                 </div><!-- /.about-three__info -->
                                 <p class="about-three__text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">Finding the right workforce is essential for every successful business. At Reliance International, we help employers recruit reliable and qualified workers through a professional recruitment process tailored to your specific workforce requirements. From construction and manufacturing to hospitality and logistics, we strive to deliver quality talent that supports your business growth.</p>
                                 <p class="about-three__text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">Reliance International is committed to providing ethical, transparent, and reliable recruitment solutions by connecting international employers with skilled, semi-skilled, and general workers from Bangladesh.</p>
                                 <div class="about-two__button" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                                     <a href="{{route('pageView','about-us')}}" class="visanet-btn">
                                         <span class="visanet-btn__icon-box">
                                             <span class="visanet-btn__icon"><span><i class="icon-arrow-right-3"></i></span></span>
                                         </span>
                                         <span class="visanet-btn__text">About More</span>
                                     </a><!-- /.visanet-btn -->
                                 </div><!-- /.about-two__button -->
                             </div><!-- /.about-three__content -->
                         </div><!-- /.col-xl-6 -->
                     </div><!-- /.row -->
                 </div><!-- /.about-three__wrapper -->
             </div><!-- /.container -->
             <img src="{{asset(assetLink().'/assets/images/shapes/about-shape-3-2.png')}}" alt="shape" class="about-three__shape" />
         </section><!-- /.about-three -->

@include(welcomeTheme().'sections.slideText')

@include(welcomeTheme().'sections.services', ['home' => true])

@include(welcomeTheme().'sections.whyChoose')

@include(welcomeTheme().'sections.countries')

@include(welcomeTheme().'sections.training')


@include(welcomeTheme().'sections.cta')

         <section class="blog-three section-space">
             <div class="container">
                 <div class="sec-title sec-title--center">
                     <div class="sec-title__top" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                         <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                         <p class="sec-title__tagline">News & Blog</p>
                         <span class="sec-title__icon sec-title__icon--right"><i class="icon-airplane-2"></i></span>
                     </div><!-- /.sec-title__top -->
                     <h2 class="sec-title__title bw-split-in-right">Company Updates, Recruitment News <br /> & Industry Insights.</h2><!-- /.sec-title__title -->
                 </div><!-- /.sec-title -->
                 <p class="text-center mx-auto mb-5" style="max-width: 850px;" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">Stay informed about new recruitment opportunities, partnerships, training initiatives, and important updates in the global labor market.</p>
                 @if($latestPosts->count())
                 @php($firstPost = $latestPosts->first())
                 <div class="row gutter-y-30">
                     <div class="col-xl-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                         <div class="blog-three__image">
                             <a href="{{route('blogView',$firstPost->slug?:'no-title')}}"><img src="{{asset($firstPost->image())}}" alt="{{$firstPost->name}}" /></a>
                             @if($ctg = $firstPost->postCategories->first())
                             <span class="blog-three__image__category">{{$ctg->name}}</span>
                             @endif
                         </div><!-- /.blog-three__image -->
                     </div><!-- /.col-xl-6 -->
                     <div class="col-xl-6">
                         <div class="row gutter-y-30">
                             @foreach($latestPosts->take(3) as $post)
                             <div class="col-xl-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="100">
                                 <div class="blog-three__card">
                                     <div class="blog-three__card__bg"></div>
                                     <div class="blog-three__card__content">
                                         <div class="blog-three__card__date">
                                             <div class="blog-three__card__day">{{$post->created_at->format('d')}}</div>
                                             <div class="blog-three__card__year">{{strtoupper($post->created_at->format('M-Y'))}}</div>
                                         </div>
                                         <div class="blog-three__card__inner">
                                             <ul class="blog-three__card__meta list-unstyled">
                                                 <li>
                                                     <span class="blog-three__card__meta__icon"><i class="icon-user"></i></span>
                                                     <span>By: {{$post->user?$post->user->name:'Admin'}}</span>
                                                 </li>
                                             </ul>
                                             <h3 class="blog-three__card__title"><a href="{{route('blogView',$post->slug?:'no-title')}}">{{$post->name}}</a></h3>
                                             <a href="{{route('blogView',$post->slug?:'no-title')}}" class="visanet-btn-two">
                                                Read More  <span class="visanet-btn-two__icon"><i class="icon-arrow-right-up"></i></span>
                                             </a>
                                         </div>
                                     </div>
                                 </div><!-- /.blog-three__card -->
                             </div>
                             @endforeach
                         </div><!-- /.row -->
                     </div><!-- /.col-xl-6 -->
                 </div><!-- /.row -->
                 @endif
             </div><!-- /.container -->
         </section><!-- /.blog-three -->

@endsection
