@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{websiteTitle($service->seo_title?:$service->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{$service->seo_title?:$service->name.' | '.general()->title}}" />
<meta name="description" property="og:description" content="{!!$service->seo_desc?:$service->name.' '.general()->meta_description!!}" />
<meta name="keywords" content="{{$service->seo_keyword?:$service->name.' '.general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($service->image())}}" />
<meta name="url" property="og:url" content="{{route('serviceView',$service->slug?:Str::slug($service->name))}}" />
<link rel="canonical" href="{{route('serviceView',$service->slug?:Str::slug($service->name))}}">
@endsection 
@push('css')
<style>
.blogCompany {
    margin-bottom: 100px;
}
    .serviceContainer {
    box-shadow: 0px 13px 48px 0px rgba(255, 104, 26, 0.07);
    background: #f6f6f6;
    padding: 30px;
    margin-top: -50px;
}
.pageContent {
    padding-top: 20px;
}
</style>
@endpush

@section('contents')
@include(welcomeTheme().'layouts.pageHeader', ['title' => $service->name, 'banner' => $service->bannerFile ? $service->banner() : null, 'crumbs' => ['Services' => route('pageView','our-services')]])

<section class="blog-details section-space">
    <div class="container">
        <div class="row gutter-y-40">
            <div class="col-lg-8">
                <div class="blog-details__card">
                    @if($service->imageFile)
                    <div class="blog-details__card__image" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                        <img src="{{asset($service->image())}}" alt="{{$service->name}}" />
                    </div>
                    @endif
                    <div class="blog-details__card__content">
                        <h3 class="blog-details__card__title">{{$service->name}}</h3>
                        <div class="blog-details__card__description page-content">
                            {!!$service->description!!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="reline-sidebar">
                    <div class="reline-sidebar__item" style="background: var(--visanet-gray, #f4f4f4); border-radius: 20px; padding: 30px;">
                        <h3 class="reline-sidebar__title" style="font-size:22px;margin-bottom:20px;color:#fff;">Our Services</h3>
                        <ul class="list-unstyled">
                            @foreach(App\Models\Post::where('type',3)->where('status','active')->latest()->limit(10)->get(['id','name','slug']) as $item)
                            <li class="mb-2"><a href="{{route('serviceView',$item->slug?:'no-title')}}" style="color:#fff;{{$item->id == $service->id ? 'font-weight:700;text-decoration:underline;' : ''}}"><i class="icon-arrow-right-3"></i> {{$item->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="contact-one__phone mt-4" style="position:static;">
                        <span class="contact-one__phone__icon"><i class="icon-phone-call"></i></span>
                        <div>
                            <h4 class="contact-one__phone__title">Get Contact Now</h4>
                            <a href="tel:{{general()->mobile}}" class="contact-one__phone__number">{{general()->mobile}}</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
