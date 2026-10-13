@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{$page->seo_title?:websiteTitle($page->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{$page->seo_title?:websiteTitle($page->name)}}" />
        <meta name="description" property="og:description" content="{!!$page->seo_description?:general()->meta_description!!}" />
        <meta name="keywords" content="{{$page->seo_keyword?:general()->meta_keyword}}" />
        <meta name="image" property="og:image" content="{{asset($page->imageFile?$page->image():general()->favicon())}}" />
        <meta name="url" property="og:url" content="{{route('pageView',$page->slug?:'no-title')}}" />
        <link rel="canonical" href="{{route('pageView',$page->slug?:'no-title')}}">
@endsection
@section('contents')
@include(welcomeTheme().'layouts.pageHeader', ['title' => $page->name, 'banner' => $page->bannerFile ? $page->banner() : null])

<section class="gallery-page section-space">
    <div class="container">
        @if($page->description)
        <div class="page-content mb-5">{!! $page->description !!}</div>
        @endif
        <div class="row gutter-y-30 masonry-layout">
            @foreach($page->postTags as $tag)
            @if($gallery = $tag->gallery)
            @foreach($gallery->galleryImages as $img)
            <div class="col-xl-4 col-md-6">
                <div class="gallery-page__card">
                    @if($img->file_type == 5)
                    <video controls preload="metadata" style="width:100%;display:block;">
                        <source src="{{asset($img->file_url)}}" type="video/mp4">
                    </video>
                    @else
                    <img src="{{asset($img->image())}}" alt="{{$img->alt_text ?: $gallery->name}}" />
                    <div class="gallery-page__card__hover">
                        <a href="{{asset($img->image())}}" class="img-popup">
                            <span class="gallery-page__card__icon"></span>
                        </a>
                    </div>
                    @endif
                </div><!-- /.gallery-page__card -->
            </div>
            @endforeach
            @endif
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.gallery-page -->
@endsection
