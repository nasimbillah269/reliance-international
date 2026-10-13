@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{websiteTitle($tag->seo_title?:$tag->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{websiteTitle($tag->seo_title?:$tag->name)}}" />
<meta name="description" property="og:description" content="{!!$tag->seo_description?:general()->meta_description!!}" />
<meta name="keywords" content="{{$tag->seo_keyword?:general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($tag->image())}}" />
<meta name="url" property="og:url" content="{{route('blogTag',$tag->slug?:'no-title')}}" />
<link rel="canonical" href="{{route('blogTag',$tag->slug?:'no-title')}}">
@endsection @push('css')
<style>

</style>
@endpush 

@section('contents')
@include(welcomeTheme().'blogs.includes.listBody', ['title' => $tag->name, 'banner' => $tag->bannerFile ? $tag->banner() : null, 'withSidebar' => true])
@endsection
