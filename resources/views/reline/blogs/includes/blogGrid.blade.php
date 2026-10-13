<div class="blog-card">
    <div class="blog-card__image">
        <img src="{{asset($post->image())}}" alt="{{$post->name}}" />
        <a href="{{route('blogView',$post->slug?:'no-title')}}" class="blog-card__image__link"><span class="sr-only">{{$post->name}}</span></a>
    </div><!-- /.blog-card__image -->
    <div class="blog-card__content">
        <div class="blog-card__meta">
            <div class="blog-card__date">
                <span class="blog-card__date__day">{{$post->created_at->format('d')}}</span>
                <span class="blog-card__date__year">{{strtoupper($post->created_at->format('M-Y'))}}</span>
            </div><!-- /.blog-card__date -->
            <ul class="blog-card__meta__list list-unstyled">
                <li>
                    <span class="blog-card__meta__icon"><i class="icon-user"></i></span>
                    <span>By: {{$post->user?$post->user->name:'Admin'}}</span>
                </li>
            </ul><!-- /.blog-card__meta__list -->
        </div><!-- /.blog-card__meta -->
        <div class="blog-card__content__inner">
            <h3 class="blog-card__title"><a href="{{route('blogView',$post->slug?:'no-title')}}">{{$post->name}}</a></h3>
            <a href="{{route('blogView',$post->slug?:'no-title')}}" class="visanet-btn visanet-btn--black">
                <span class="visanet-btn__icon-box">
                    <span class="visanet-btn__icon"><span><i class="icon-arrow-right-3"></i></span></span>
                </span>
                <span class="visanet-btn__text">Read More</span>
            </a><!-- /.visanet-btn -->
        </div><!-- /.blog-card__content__inner -->
        <img src="{{asset(assetLink().'/assets/images/shapes/blog-card-shape-1-1.png')}}" alt="shape" class="blog-card__shape" />
        <img src="{{asset(assetLink().'/assets/images/shapes/blog-card-shape-1-1-hover.png')}}" alt="shape" class="blog-card__shape blog-card__shape--hover" />
    </div><!-- /.blog-card__content -->
</div><!-- /.blog-card -->
