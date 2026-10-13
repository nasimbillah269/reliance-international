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
         <section class="about-one section-space">
             <div class="container">
                 <div class="row gutter-y-50 align-items-center">
                     <div class="col-xl-6 col-lg-5 order-1 order-lg-0" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                         <div class="about-one__experience">
                             <div class="about-one__experience__inner">
                                 <h2 class="about-one__experience__year"><span style="background-image: url({{asset(assetLink().'/assets/images/about/about-1-1.jpg')}});">27+</span></h2>
                             </div>
                             <h3 class="about-one__experience__title">Countries <br /> We Serve</h3>
                         </div><!-- /.about-one__experience -->
                     </div><!-- /.col-xl-6 -->
                     <div class="col-xl-6 col-lg-7 order-0 order-lg-1">
                         <div class="about-one__content">
                             <div class="sec-title">
                                 <div class="sec-title__top" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                                     <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                                     <p class="sec-title__tagline">About Reliance International</p>
                                 </div><!-- /.sec-title__top -->
                                 <h2 class="sec-title__title bw-split-in-right">Building Global Workforce Connections.</h2><!-- /.sec-title__title -->
                             </div><!-- /.sec-title -->
                             <p class="about-one__text" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">Reliance International is a Bangladesh-based recruitment and workforce solutions company dedicated to connecting international employers with skilled, semi-skilled, and general workers from Bangladesh.</p>
                         </div><!-- /.about-one__content -->
                     </div><!-- /.col-xl-6 -->
                 </div><!-- /.row -->
                 <div class="about-one__feature">
                     <div class="about-one__feature__image">
                         <div class="about-one__feature__image__inner bw-img-anim-left" style="background-image: url({{asset(assetLink().'/assets/images/about/about-1-2.jpg')}});"></div>
                     </div><!-- /.about-one__feature__image -->
                     <div class="about-one__feature__box">
                         <div class="about-one__feature__item" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="100">
                             <div class="about-one__feature__bg"></div>
                             <div class="about-one__feature__icon-box"><span class="about-one__feature__icon"><i class="icon-completed-task"></i></span></div>
                             <div class="about-one__feature__content">
                                 <h3 class="about-one__feature__title"><a href="{{route('pageView','about-us')}}">Ethical & Transparent</a></h3>
                                 <p class="about-one__feature__text">We deliver ethical, transparent, and professional recruitment services that help businesses build reliable and productive workforces.</p>
                             </div>
                         </div><!-- /.about-one__feature__item -->
                         <div class="about-one__feature__item" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="200">
                             <div class="about-one__feature__bg"></div>
                             <div class="about-one__feature__icon-box"><span class="about-one__feature__icon"><i class="icon-brainstorming"></i></span></div>
                             <div class="about-one__feature__content">
                                 <h3 class="about-one__feature__title"><a href="{{route('pageView','about-us')}}">Tailored Solutions</a></h3>
                                 <p class="about-one__feature__text">We understand each client’s unique hiring requirements and provide workforce solutions that support long-term business growth.</p>
                             </div>
                         </div><!-- /.about-one__feature__item -->
                         <div class="about-one__feature__item" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="300">
                             <div class="about-one__feature__bg"></div>
                             <div class="about-one__feature__icon-box"><span class="about-one__feature__icon"><i class="icon-support"></i></span></div>
                             <div class="about-one__feature__content">
                                 <h3 class="about-one__feature__title"><a href="{{route('pageView','about-us')}}">Every Industry</a></h3>
                                 <p class="about-one__feature__text">Construction, manufacturing, hospitality, or logistics — we simplify your recruitment while maintaining the highest standards of professionalism and compliance.</p>
                             </div>
                         </div><!-- /.about-one__feature__item -->
                     </div><!-- /.about-one__feature__box -->
                 </div><!-- /.about-one__feature -->
             </div><!-- /.container -->
         </section><!-- /.about-one -->

@include(welcomeTheme().'sections.missionVision')

@include(welcomeTheme().'sections.whyChoose')

@include(welcomeTheme().'sections.quality')



@include(welcomeTheme().'sections.slideText')

@include(welcomeTheme().'sections.countries')
@include(welcomeTheme().'sections.cta')
@endsection
