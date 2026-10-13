@extends(welcomeTheme().'layouts.app') @section('title')
<title>{{websiteTitle($post->seo_title?:$post->name)}}</title>
@endsection @section('SEO')
<meta name="title" property="og:title" content="{{websiteTitle($post->seo_title?:$post->name)}}" />
<meta name="description" property="og:description" content="{!!$post->seo_description?:general()->meta_description!!}" />
<meta name="keywords" content="{{$post->seo_keyword?:general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset($post->image())}}" />
<meta name="url" property="og:url" content="{{route('blogView',$post->slug?:'no-title')}}" />
<link rel="canonical" href="{{route('blogView',$post->slug?:'no-title')}}">
@endsection

@section('contents')
@include(welcomeTheme().'layouts.pageHeader', ['title' => $post->name, 'banner' => $post->bannerFile ? $post->banner() : null, 'crumbs' => ['Blog' => route('pageView','news-media')]])

<section class="blog-details section-space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-details__content">
                    <div class="blog-details__card">
                        @if($post->imageFile)
                        <div class="blog-details__card__image" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                            <img src="{{asset($post->image())}}" alt="{{$post->name}}" />
                        </div>
                        @endif
                        <div class="blog-details__card__content">
                            <ul class="blog-details__card__meta list-unstyled">
                                @if($ctg = $post->postCategories->first())
                                <li>
                                    <a href="{{route('blogCategory',$ctg->slug?:'no-title')}}" class="blog-details__card__category"><span>{{$ctg->name}}</span></a>
                                </li>
                                @endif
                                <li>
                                    <div class="blog-details__card__comment">
                                        <span class="blog-details__card__comment__icon"><i class="icon-user"></i></span>
                                        <span class="blog-details__card__comment__text">{{$post->user?$post->user->name:'Admin'}}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-details__card__date">
                                        <span class="blog-details__card__date__icon"><i class="fas fa-calendar-alt"></i></span>
                                        <p class="blog-details__card__date__text">{{$post->created_at->format('d M Y')}}</p>
                                    </div>
                                </li>
                            </ul><!-- /.blog-details__card__meta -->
                            <h3 class="blog-details__card__title">{{$post->name}}</h3>
                            <div class="blog-details__card__description page-content">
                                {!!$post->description!!}
                            </div>
                        </div>
                    </div><!-- /.blog-details__card -->

                    @if($post->Tags->count() || $post->postCategories->count())
                    <div class="blog-details__meta">
                        @if($post->Tags->count())
                        <div class="blog-details__tags">
                            <h4 class="blog-details__meta__title">Tags:</h4>
                            <div class="blog-details__tags__box">
                                @foreach($post->Tags as $tag)
                                <a href="{{route('blogTag',$tag->slug?:'no-title')}}" class="blog-details__tags__btn visanet-btn-two">{{$tag->name}}</a>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        @if($post->postCategories->count())
                        <div class="blog-details__categories">
                            <h4 class="blog-details__meta__title">Categories:</h4>
                            <div class="blog-details__categories__box">
                                @foreach($post->postCategories as $ctg)
                                <a href="{{route('blogCategory',$ctg->slug?:'no-title')}}" class="blog-details__categories__btn visanet-btn-two">{{$ctg->name}}</a>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div><!-- /.blog-details__meta -->
                    @endif
                </div><!-- /.blog-details__content -->
            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4">
                @include(welcomeTheme().'blogs.includes.sideBar')
            </div>
        </div><!-- /.row -->

        @if(isset($relatedPosts) && $relatedPosts->count())
        <div class="sec-title mt-5 pt-4">
            <div class="sec-title__top">
                <span class="sec-title__icon sec-title__icon--left"><i class="icon-airplane"></i></span>
                <p class="sec-title__tagline">Related Posts</p>
            </div>
        </div>
        <div class="row gutter-y-30">
            @foreach($relatedPosts as $post)
            <div class="col-lg-4 col-md-6">
                @include(welcomeTheme().'blogs.includes.blogGrid')
            </div>
            @endforeach
        </div>
        @endif
    </div><!-- /.container -->
</section><!-- /.blog-details -->
@endsection
