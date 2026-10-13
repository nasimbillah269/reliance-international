@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{websiteTitle($page->seo_title?:$page->name)}}</title>
@endsection @section('SEO')   
<meta name="title" property="og:title" content="{{websiteTitle($page->seo_title?:$page->name)}}" />
        <meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
        <meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
        <meta name="image" property="og:image" content="{{asset($page->image())}}" />
        <meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
        <link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}">
@endsection
 @push('css')
 <style>
.serviceContainer {
    box-shadow: 0px 13px 48px 0px rgba(255, 104, 26, 0.07);
    background: #f6f6f6;
    padding: 30px;
    margin-top: -50px;
}
 </style>
@endpush

@section('contents')
@include(welcomeTheme().'layouts.pageHeader', ['title' => $page->name, 'banner' => $page->bannerFile ? $page->banner() : null])

@push('css')
<style>
    .services-intro__box { background: var(--visanet-gray, #f4f4f4); border-radius: 20px; padding: 40px; height: 100%; }
    .services-intro__box, .services-intro__box p { color: #fff; }
    .services-intro__box p:last-child { margin-bottom: 0; }
    .recruit-process { background: var(--visanet-black3, #1d253a); }
    .recruit-process .sec-title__title, .recruit-process .sec-title__tagline { color: #fff; }
    .recruit-process__step { position: relative; height: 100%; background: rgba(255,255,255,.06); border: 1px solid rgba(255,255,255,.1); border-radius: 20px; padding: 35px 30px; transition: all .4s; }
    .recruit-process__step:hover { background: var(--visanet-base, #e50c37); border-color: var(--visanet-base, #e50c37); transform: translateY(-5px); }
    .recruit-process__number { font-size: 60px; font-weight: 800; line-height: 1; color: transparent; -webkit-text-stroke: 1px rgba(255,255,255,.4); display: block; margin-bottom: 15px; }
    .recruit-process__step h4 { color: #fff; font-size: 22px; margin-bottom: 10px; }
    .recruit-process__step p { color: rgba(255,255,255,.75); margin: 0; }
    .recruit-process__step:hover p { color: #fff; }
</style>
@endpush

<section class="services-intro section-space-t">
    <div class="container">
        <div class="row gutter-y-40 align-items-center">
            <div class="col-lg-6">
                <div class="sec-title">
                    <div class="sec-title__top" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                        <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                        <p class="sec-title__tagline">Our Services</p>
                    </div>
                    <h2 class="sec-title__title bw-split-in-right">Comprehensive International Recruitment And Workforce Solutions.</h2>
                </div>
                <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">At Reliance International, we provide end-to-end international recruitment and workforce solutions for reliable, skilled, semi-skilled, and general workers from Bangladesh. Our approach is built on professionalism, transparency, ethical recruitment, and long-term partnerships.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                <div class="services-intro__box">
                    <p>We work closely with employers to understand their workforce requirements and coordinate each stage of the recruitment process in accordance with applicable legal and regulatory requirements.</p>
                    <p>Whether you need skilled professionals, semi-skilled, or general workers, Reliance International is ready to support your workforce needs with a professional and ethical approach.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include(welcomeTheme().'sections.services')

<section class="recruit-process section-space">
    <div class="container">
        <div class="sec-title sec-title--center">
            <div class="sec-title__top" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                <p class="sec-title__tagline">Our Recruitment Process</p>
                <span class="sec-title__icon sec-title__icon--right"><i class="icon-airplane-2"></i></span>
            </div>
            <h2 class="sec-title__title bw-split-in-right">From Candidate Selection <br /> To Deployment.</h2>
        </div>
        <div class="row gutter-y-30">
            @foreach([
                ['Candidate Sourcing & Screening', 'We source and carefully screen candidates against your specific workforce requirements.'],
                ['Interview Coordination', 'We coordinate interviews so you can assess and select the right candidates.'],
                ['Documentation', 'We support the documentation process in line with applicable legal requirements.'],
                ['Deployment', 'We assist employers through deployment, keeping communication transparent at every stage.'],
            ] as $step)
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="{{($loop->index + 1) * 100}}">
                <div class="recruit-process__step">
                    <span class="recruit-process__number">{{str_pad($loop->iteration, 2, '0', STR_PAD_LEFT)}}</span>
                    <h4>{{$step[0]}}</h4>
                    <p>{{$step[1]}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@include(welcomeTheme().'sections.training')
@include(welcomeTheme().'sections.cta')
@endsection
