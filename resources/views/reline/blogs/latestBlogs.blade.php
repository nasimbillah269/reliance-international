@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:websiteTitle($page->name)}}" />
        <meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
        <meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
        <meta name="image" property="og:image" content="{{asset($page->image())}}" />
        <meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
        <link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}">
@endsection @push('css')
<style>
.blogCompany {
    margin-bottom: 50px;
}

</style>
@endpush 

@section('contents')
@include(welcomeTheme().'blogs.includes.listBody', ['title' => $page->name, 'banner' => $page->bannerFile ? $page->banner() : null, 'introView' => welcomeTheme().'sections.newsIntro'])
@endsection
