@php($slideWords = ['Recruitment', 'Skilled Workers', 'Construction', 'Manufacturing', 'Hospitality', 'Logistics', 'Training', 'Compliance', 'Ethical Hiring', 'Global Workforce'])
<section class="slide-text">
    <div class="container-fluid bw-img-anim-left">
        <h1 class="slide-text__scroll">
            @foreach(array_merge($slideWords, $slideWords) as $word)
            <span class="slide-text__group">
                <span class="slide-text__shape">
                    <img src="{{asset(assetLink().'/assets/images/shapes/slide-text-shape.png')}}" alt="shape" />
                    <img src="{{asset(assetLink().'/assets/images/shapes/slide-text-shape-hover.png')}}" alt="shape" />
                </span>
                {{$word}}
            </span>
            @endforeach
        </h1>
    </div>
</section><!-- /.slide-text -->
