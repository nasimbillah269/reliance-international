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

<div class="missionVissionLear">
    <div class="container">
        <h2>Purpose & value of the elitara global directory</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="missionVissionLeftSide">
                   
                    <p>
                       The Elitara Global Directory serves as a trusted sourcing companion for
                       international buyers seeking reliable, high-quality manufacturers. Carefully 
                       curated and verified by industry professionals, this directory connects buyers 
                       directly with compliant, ethically-operated factories across key manufacturing hubs.

                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="missionVissionRightSide">
                     <img src="{{asset(assetLink().'/images/asmara/Picture2.jpg')}}" alt="about company">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="missionVissionRightSide">
                     <img src="{{asset(assetLink().'/images/asmara/Picture3.png')}}" alt="about company">
                </div>
            </div>
            <div class="col-md-6">
                <div class="missionVissionLeftSide">
                    <p>
                      By eliminating guesswork and streamlining vendor selection, it empowers buyers to make faster, 
                      smarter sourcing decisions. Whether you're looking for apparel, home textiles, or industrial goods,
                      this guide ensures access to transparent, trustworthy partnerships, saving time, reducing risk, and 
                      enhancing overall procurement efficiency.

                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection @push('js') @endpush