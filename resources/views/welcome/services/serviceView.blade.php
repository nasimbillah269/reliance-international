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

{{--<div class="breadcrumb-area">
    <div class="container">
        <div class="title">
            <h1>{{$service->name}}</h1>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li>{{$service->name}}</li>
            </ul>
        </div>
    </div>
</div>--}}


   <div class="breadcumb-wrapper" data-bg-src="{{asset(assetLink().'/assets/img/bg/breadcumb-bg.jpg')}}">
     <div class="container z-index-common">
       <div class="breadcumb-content">
         <h1 class="breadcumb-title">{{$service->name}}</h1>
         <div class="breadcumb-menu-wrap">
           <ul class="breadcumb-menu">
             <li><a href="{{route('index')}}">Home </a></li>
             <li>{{$service->name}} </li>
           </ul>
         </div>
       </div>
     </div>
   </div>

<div class="blogCompany">
    <div class="container">
        <div class="serviceContainer">
            <img src="{{asset($service->image())}}" alt="{{$service->name}}" />
        <div class="pageContent">
            <h2>{{$service->name}}</h2>
            <div>
                {!!$service->description!!}
            </div>
        </div>
        </div>
    </div>
</div>

@endsection 
@push('js')@endpush