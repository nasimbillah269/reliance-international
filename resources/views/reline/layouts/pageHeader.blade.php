{{-- Usage: @include(welcomeTheme().'layouts.pageHeader', ['title' => ..., 'banner' => optional image path, 'crumbs' => optional [label => url]]) --}}
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ !empty($banner) ? asset($banner) : asset(assetLink().'/assets/images/backgrounds/page-header-bg.jpg') }});"></div>
    <div class="page-header__shape page-header__shape--1"></div>
    <div class="page-header__shape page-header__shape--2"></div>
    <div class="container">
        <div class="page-header__content">
            <h2 class="page-header__title" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">{{$title}}</h2>
            <ul class="visanet-breadcrumb list-unstyled" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="100">
                <li><a href="{{route('index')}}">Home</a></li>
                @foreach($crumbs ?? [] as $label => $url)
                <li><a href="{{$url}}">{{$label}}</a></li>
                @endforeach
                <li><span>{{$title}}</span></li>
            </ul>
        </div>
    </div>
</section><!-- /.page-header -->
