<div class="visa-card">
    <div class="visa-card__image bw-img-anim-left">
        <img src="{{asset($service->image())}}" alt="{{$service->name}}" />
        <div class="visa-card__icon-box">
            <span class="visa-card__icon"><i class="{{['icon-business-visa','icon-immigration-visa','icon-family-visa','icon-students-visa','icon-travel-visa'][($loop->index ?? 0) % 5]}}"></i></span>
        </div>
    </div><!-- /.visa-card__image -->
    <div class="visa-card__content">
        <h2 class="visa-card__title"><a href="{{route('serviceView',$service->slug?:'no-title')}}">{{$service->name}}</a></h2>
        <p class="visa-card__text">{!!Str::limit(strip_tags($service->short_description),120)!!}</p>
    </div><!-- /.visa-card__content -->
    <a href="{{route('serviceView',$service->slug?:'no-title')}}" class="visa-card__btn">
        Read More <span class="visa-card__btn__icon"><i class="icon-arrow-right-up"></i></span>
    </a>
</div><!-- /.visa-card -->
