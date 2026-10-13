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

{{--<div class="breadcrumb-area"
@if($page->bannerFile)
style="background-image:url({{asset($page->banner())}});background-repeat: no-repeat;
    background-size: cover;padding: 50px 0;"
@endif
>
    <div class="container">
        <div class="title">
            <h1>{{$page->name}}</h1>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li>{{$page->name}}</li>
            </ul>
        </div>
    </div>
</div>--}}



   <div class="breadcumb-wrapper" data-bg-src="{{asset(assetLink().'/assets/img/bg/breadcumb-bg.jpg')}}">
     <div class="container z-index-common">
       <div class="breadcumb-content">
         <h1 class="breadcumb-title">{{$page->name}} </h1>
         <div class="breadcumb-menu-wrap">
           <ul class="breadcumb-menu">
             <li><a href="{{route('index')}}">Home </a></li>
             <li>{{$page->name}} </li>
           </ul>
         </div>
       </div>
     </div>
   </div>
   
   
   
   

<div class="serviceCompany">
    <div class="container">
        <div class="serviceContainer">
        <div class="row">
            @foreach($services as $service)
            <div class="col-md-3">
                @include(welcomeTheme().'services.includes.serviceGrid')
            </div>
            @endforeach
        </div>
        <!-- pagination -->
        {{$services->links('pagination')}}
        </div>
    </div>
</div>

@endsection 

@push('js') 

@endpush