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
@endpush

@section('contents')
@include(welcomeTheme().'layouts.pageHeader', ['title' => $page->name, 'banner' => $page->bannerFile ? $page->banner() : null])

<section class="section-space">
    <div class="container">
        <div class="page-content">
            @if($page->imageFile)
            <div class="row gutter-y-30 align-items-center">
                <div class="col-lg-6">
                    <img src="{{asset($page->image())}}" alt="{{$page->name}}" style="border-radius:20px;width:100%;" />
                </div>
                <div class="col-lg-6">
                    {!!$page->description!!}
                </div>
            </div>
            @else
            {!!$page->description!!}
            @endif
        </div>
    </div>
    @if($page->hasNitEditorContent->count() > 0)
        @include(welcomeTheme().'pages.nitEditor.primary',['datas'=>$page->hasNitEditorContent])
    @endif
</section>
@endsection
