@if(slider('Front Page Slider'))
<div id="wowslider-container1">
    <div class="ws_images">
        <ul>
            @foreach(slider('Front Page Slider')->subSliders as $i=>$slider)
            <li class="{{$i==0?'active':''}}">
                <img src="{{asset($slider->image())}}" alt="Ocidental Peninsula" title="Ocidental Peninsula" id="wows1_0" />

                <!--<div class="ws_caption">-->
                <!--    <h2>{{ $slider->name ?? 'Slide Title' }}</h2>-->
                <!--    <p>{!!$slider->description ?? 'Slide description goes here.' !!}</p>-->

                <!--    @if(!empty($slider->button_text) && !empty($slider->button_link))-->
                <!--    <a href="{{ $slider->button_link }}" class="slider-btn">-->
                <!--        {{ $slider->button_text }}-->
                <!--    </a>-->
                <!--    @endif-->
                <!--</div>-->
                
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endif


<!--@if($slider =slider('Front Page Slider'))-->

<!--<div id="homeSlider" class="carousel slide" data-ride="carousel">-->
<!--  <div class="carousel-inner">-->
<!--  	@foreach($slider->subSliders as $i=>$slider)-->
<!--    <div class="carousel-item {{$i==0?'active':''}}">-->
<!--	    <img style="width:100%;" src="{{asset($slider->image())}}" alt="{{$slider->name}}" title="{{$slider->name}}" />-->
<!--        <div class="carousel-caption d-none d-md-block">-->
<!--         @if($slider->name)  -->
<!--          <h1>{!!$slider->name!!}</h1>-->
<!--          @endif-->
<!--          @if($slider->description)-->
<!--          <p>{!!$slider->description!!}</p>-->
<!--          @endif-->
       
<!--          @if($slider->seo_title && $slider->seo_description)-->
<!--          <a href="{{$slider->seo_description}}" class="btn btn-sm btn-success">{!!$slider->seo_title!!}</a>-->
<!--          @endif-->
<!--        </div>-->
<!--    </div>-->
<!--	@endforeach-->
<!--	<div class="sliderLink">-->
<!--	    <a href="#">Whatsapp Now</a>-->
<!--	    <a href="#" style="background-color: #fff; color: #000">Call Now</a>-->
<!--	</div>-->
<!--  </div>-->
<!--  <a class="carousel-control-prev" href="#homeSlider" role="button" data-slide="prev">-->
<!--    <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Previous</span>-->
<!--  </a>-->
<!--  <a class="carousel-control-next" href="#homeSlider" role="button" data-slide="next">-->
<!--    <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Next</span>-->
<!--  </a>-->
<!--</div>-->

<!--@endif-->



   <!--<section class="hero-section">-->
   <!--     <div class="swiper mySwiper">-->
   <!--         <div class=" swiper-wrapper">-->
   <!--              Slide 1 -->
   <!--             <div class="carousel-bg swiper-slide" style="background-image: url('{{ asset(assetLink() . '/images/worthy/hero1.jpg') }}');">-->
   <!--             <div class="carousel-bg swiper-slide" style="background-image: url('{{ asset(assetLink() . '/images/worthy/slide-1.jpg') }}');">-->
   <!--                 <div class="container">-->
   <!--                 <div class="hero-textbox">-->
   <!--                     <p class="heading">Welcome to Worthy Textile Mills Ltd</p>-->
   <!--                     <p>-->
   <!--                         Worthy Textil Mills Ltd Establishment year 2018. Production Capacity 4,50,000 yards per-->
   <!--                         monthly. Worthy-->
   <!--                         Textile Utilized Capacity 90% approximately. Factory Space 50,000 sq feet.-->
   <!--                     </p>-->
   <!--                     <button class="cta-button">DISCOVER MORE</button>-->
   <!--                 </div>-->
   <!--                 </div>-->
   <!--             </div>-->

   <!--              Slide 2 -->
   <!--             <div class="carousel-bg swiper-slide"-->
   <!--                 style="background-image: url('{{ asset(assetLink() . '/images/worthy/hero1.jpg') }}');">-->
   <!--             <div class="carousel-bg swiper-slide"-->
   <!--                 style="background-image: url('{{ asset(assetLink() . '/images/worthy/slide-3.jpg') }}');">-->
   <!--                  <div class="container">-->
   <!--                 <div class="hero-textbox">-->
   <!--                     <p class="heading">Our Vision and Mission</p>-->
   <!--                     <p>-->
   <!--                         Our Vision: We envision ourselves as a leading company known for its values, good business-->
   <!--                         practices and optimum quality standards in diversified products & services with sustained-->
   <!--                         growth.-->

   <!--                     </p>-->
   <!--                     <button class="cta-button">DISCOVER MORE</button>-->
   <!--                 </div>-->
   <!--                  </div>-->
   <!--             </div>-->

   <!--              Slide 3 -->
   <!--             <div class="carousel-bg swiper-slide" style="background-image: url('{{ asset(assetLink() . '/images/worthy/hero1.jpg') }}');">-->
   <!--             <div class="carousel-bg swiper-slide" style="background-image: url('{{ asset(assetLink() . '/images/worthy/slide-2.jpg') }}');">-->
   <!--                   <div class="container">-->
   <!--                     <div class="hero-textbox">-->
   <!--                         <p class="heading">Why Choose Us?</p>-->
   <!--                         <p>-->
   <!--                             We don’t just make fabrics or dye them, we also contributing to the socio-environmental-->
   <!--                             development. We do not only just manufacture fabrics, we Design and Develop on trend fashion-->
   <!--                             for the high-street.-->
   <!--                         </p>-->
   <!--                         <button class="cta-button">DISCOVER MORE</button>-->
   <!--                     </div>-->
   <!--                    </div>-->
   <!--             </div>-->
   <!--         </div>-->
   <!--     </div>-->
   <!-- </section>-->