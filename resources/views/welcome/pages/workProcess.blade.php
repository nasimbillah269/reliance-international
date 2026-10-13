@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:websiteTitle($page->name)}}" />
<meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
<meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($page->image())}}" />
<meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
<link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}" />
@endsection @push('css')
<style></style>
@endpush @section('contents')

<div class="breadcrumb-area" @if($page->
    bannerFile) style="background-image:url({{asset($page->banner())}});background-repeat: no-repeat; background-size: cover;padding: 50px 0;" @endif >
    <div class="container">
        <div class="title">
            <h1>{{$page->name}}</h1>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li>{{$page->name}}</li>
            </ul>
        </div>
    </div>
</div>


 <section class="timeline-section py-5">
  <div class="container">
    <h2 class="text-center mb-5">📦 Work Process</h2>
    <div class="row timeline">
      <div class="col-md-2 step">
        <div class="circle">1</div>
        <p>Tech Pack</p>
      </div>
      <div class="col-md-2 step">
        <div class="circle">2</div>
        <p>Sampling</p>
      </div>
      <div class="col-md-2 step">
        <div class="circle">3</div>
        <p>Production</p>
      </div>
      <div class="col-md-2 step">
        <div class="circle">4</div>
        <p>QA</p>
      </div>
      <div class="col-md-2 step">
        <div class="circle">5</div>
        <p>Delivery</p>
      </div>
    </div>
  </div>
</section>





@endsection @push('js') @endpush