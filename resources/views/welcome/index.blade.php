@extends(welcomeTheme().'layouts.app') 
@section('title')
<title>{{websiteTitle()}}</title>
@endsection 
@section('SEO')
<meta name="title" property="og:title" content="{{general()->meta_title}}" />
<meta name="description" property="og:description" content="{!!general()->meta_description!!}" />
<meta name="keyword" property="og:keyword" content="{{general()->meta_keyword}}" />
<meta name="image" property="og:image" content="{{asset(general()->logo())}}" />
<meta name="url" property="og:url" content="{{route('index')}}" />
<link rel="canonical" href="{{route('index')}}">
@endsection 
@push('css')
<script type="application/ld+json">
    { 
    "@context": "https://schema.org", 
    "@type": "WebPage", 
    "url": "{{route('index')}}", 
    "name": "{{websiteTitle()}}",
    "author": {
        "@type": "Webpage",
        "name": "{{websiteTitle()}}"
    },
    "description": "{!!general()->meta_description!!}"
    }
</script>
@endpush 

@section('contents')

<!--Slider Part Include Start-->
@include(welcomeTheme().'layouts.slider')







 <!--==============================
    About Blog Area Start 
  ==============================-->
   <div class="space-top space-extra-bottom blog-wrapper1 shape-mockup-wrap">
     <div class="shape-mockup d-none d-xl-block spin z-index-negative" data-top="-5%" data-left="-5%">
       <img src="{{asset(assetLink().'/assets/img/shape/circle1.png')}}" alt="circle" />
     </div>
     <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-bottom="5%" data-right="5%">
       <img src="{{asset(assetLink().'/assets/img/shape/Dot.png')}}" alt="Dots" />
     </div>
     <div class="container">
       <div class="row justify-content-center text-center">
         <div class="col-xxl-6 col-xl-7 col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
           <div class="title-area">
             <span class="sec-subtitle">Travel Essentials Tips </span>
             <h2 class="sec-title h1">Awesome Tips That Makes Your Travel Beautiful</h2>
           </div>
         </div>
       </div>
       <div class="blog-style4">
         <div class="blog-image">
           <img src="{{asset(assetLink().'/assets/img/blog/5.jpg')}}" alt="blog image" />
           <div class="category-tag"><a href="#"><i class="fas fa-tag"></i> Tips </a></div>
         </div>
         <div class="blog-content" data-bg-src="{{asset(assetLink().'/assets/img/shape/blog-bg.png')}}">
           <a class="blog-date" href="https://smkhaninternational.com/about-us">  </a>
           <h3 class="blog-title"><a href="https://smkhaninternational.com/about-us">A Time to Travel And Find Breathtaking Landscapes For
              Relax </a></h3>
           <p class="blog-text">
               Step into a world of discovery where every destination offers new perspectives
            new emotions, and new memories to cherish.We guide your journey with care, creativity, and expertise, ensuring every trip feels truly exceptional.
                </p>
           <a class="vs-btn style4" href="https://smkhaninternational.com/about-us">Read More </a>
         </div>
       </div>
       <div class="blog-style4">
         <div class="blog-image">
           <img src="{{asset(assetLink().'/assets/img/blog/8.jpg')}}" alt="blog image" />
           <div class="category-tag"><a href="#"><i class="fas fa-tag"></i> Tips </a></div>
         </div>
         <div class="blog-content" data-bg-src="{{asset(assetLink().'/assets/img/shape/blog-bg.png')}}">
           <a class="blog-date" href="https://smkhaninternational.com/about-us">  </a>
           <h3 class="blog-title"><a href="https://smkhaninternational.com/about-us">Escape Into Nature and Find Peace in Majestic Landscapes</a></h3>
           <p class="blog-text">Open the door to endless travel possibilities where every destination
             feels like a new chapter in your adventure. Let us turn your travel dreams into beautifully crafted experiences filled with joy and discovery. </p>
           <a class="vs-btn style4" href="https://smkhaninternational.com/about-us">Read More </a>
         </div>
       </div>
     </div>
   </div>
   <!--==============================
    About Blog Area End 
  ==============================-->

   <!--==============================
      Tour Package Area Start 
    ==============================-->
   <section class="space bg-light shape-mockup-wrap" data-bg-src="{{asset(assetLink().'/assets/img/shape/Bg.png')}}">
     <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-bottom="20%" data-left="5%">
       <img src="{{asset(assetLink().'/assets/img/shape/Dot.png')}}" alt="Dots" />
     </div>
     <div class="shape-mockup d-none d-xl-block spin z-index-negative" data-bottom="-5%" data-right="-5%">
       <img src="{{asset(assetLink().'/assets/img/shape/circle1.png')}}" alt="Circle" />
     </div>
     <div class="shape-mockup d-none d-xl-block ripple-animation z-index-negative" data-top="10%" data-left="10%">
       <img src="{{asset(assetLink().'/assets/img/shape/Plane.png')}}" alt="plane" />
     </div>
     <div class="container ">
       <div class="row justify-content-center text-center">
         <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
           <div class="title-area">
             <span class="sec-subtitle">Awesome Tours With Us </span>
             <h2 class="sec-title h1">Our Services </h2>
             <p class="sec-text">We provide fast, reliable ticketing with real-time fares.
                 Choose from multiple airlines,     routes, and timings.
                Enjoy secure payment and instant confirmation. </p>
           </div>
         </div>
       </div>
       <div class="row vs-carousel" data-slide-show="4" data-arrows="false" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1">
           
            @foreach($latestServices as $service)
               <div class="col-xl-3 col-lg-6 col-sm-6">
                    @include(welcomeTheme().'services.includes.serviceGrid')
                </div>
                @endforeach
        
       </div>
       <div class="text-center pt-lg-2">
         <a href="https://smkhaninternational.com/our-services" class="vs-btn">View More </a>
       </div>
     </div>
   </section>
   <!--==============================
      Tour Package Area End 
    ==============================-->

   <!--==============================
      Gallery Area Start 
    ==============================-->
   <section class="space space-extra-bottom gallery-style1">
     <div class="container">
       <div class="row">
         <div class="col-xl-6">
           <div class="title-area">
             <span class="sec-subtitle">Go & Discover </span>
             <h2 class="sec-title h1">Your Time to Explore </h2>
             <p class="sec-text">Experience thrilling adventures across top destinations.
From scuba diving to trekking, we arrange it all.
Safe. </p>
           </div>
           <div class="row">
             <div class="col-xl-6 col-sm-6">
               <img class="gallery-image" src="{{asset(assetLink().'/assets/img/gallery/gallery-1-1.jpg')}}" alt="images" />
             </div>
             <div class="col-xl-6 col-sm-6">
               <img class="gallery-image" src="{{asset(assetLink().'/assets/img/gallery/gallery-1-2.jpg')}}" alt="images" />
             </div>
           </div>
         </div>
         <div class="col-xl-6">
           <div class="gallery-video">
             <img src="{{asset(assetLink().'/assets/img/gallery/gallery-1-3.jpg')}}" alt="gallery-image" />
             <!--<div class="gallery-btn">-->
             <!--  <span>Watch Video </span>-->
             <!--  <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>-->
             <!--</div>-->
           </div>
         </div>
       </div>
     </div>
   </section>
   <!--==============================
      Gallery Area End 
    ==============================-->

   <!--==============================
      Features Area Start 
    ==============================-->
   <section class="space-extra-bottom">
     <div class="container">
       <div class="row">
         <div class="col-xl-3 col-md-6 col-sm-6 col-12">
           <div class="features-style1">
             <div class="features-bg" data-bg-src="{{asset(assetLink().'/assets/img/shape/features.png')}}"></div>
             <div class="features-image">
               <img src="{{asset(assetLink().'/assets/img/features/features-1-1.png')}}" alt="image" />
             </div>
             <div class="features-content">
               <h3 class="features-title">Special Activities </h3>
               <p class="features-text">At SM Khan International, we organize and manage a range of special activities designed to meet the unique needs of our clients. </p>
             </div>
           </div>
         </div>
         <div class="col-xl-3 col-md-6 col-sm-6 col-12">
           <div class="features-style1">
             <div class="features-bg" data-bg-src="{{asset(assetLink().'/assets/img/shape/features.png')}}"></div>
             <div class="features-image">
               <img src="{{asset(assetLink().'/assets/img/features/features-1-2.png')}}" alt="image" />
             </div>
             <div class="features-content">
               <h3 class="features-title">Popper Guideline </h3>
               <p class="features-text">SM Khan International follows industry-standard guidelines to ensure all operations are carried out efficiently, safely, and with precision.</p>
             </div>
           </div>
         </div>
         <div class="col-xl-3 col-md-6 col-sm-6 col-12">
           <div class="features-style1">
             <div class="features-bg" data-bg-src="{{asset(assetLink().'/assets/img/shape/features.png')}}"></div>
             <div class="features-image">
               <img src="{{asset(assetLink().'/assets/img/features/features-1-3.png')}}" alt="image" />
             </div>
             <div class="features-content">
               <h3 class="features-title">Travel Arrangement  </h3>
               <p class="features-text"> Our company provides comprehensive travel arrangements, from planning itineraries to managing logistics.
               </p>
             </div>
           </div>
         </div>
         <div class="col-xl-3 col-md-6 col-sm-6 col-12">
           <div class="features-style1">
             <div class="features-bg" data-bg-src="{{asset(assetLink().'/assets/img/shape/features.png')}}"></div>
             <div class="features-image">
               <img src="{{asset(assetLink().'/assets/img/features/features-1-4.png')}}" alt="image" />
             </div>
             <div class="features-content">
               <h3 class="features-title">Location Manager </h3>
               <p class="features-text">
                   SM Khan International appoints dedicated location managers to oversee on-site operations, guaranteeing that every event or project runs smoothly .
                </p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!--==============================
      Features Area End 
    ==============================-->

   <!--==============================
      Special Offer Area Start 
    ==============================-->
   <section class="space position-relative" data-bg-src="{{asset(assetLink().'/assets/img/bg/offer-bg.jpg')}}">
     <div class="container">
       <div class="row align-items-center justify-content-between">
         <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
           <div class="title-area white-title mb-md-0">
             <span class="sec-subtitle">Go & Discover </span>
             <h2 class="sec-title h1">Get Special Offer </h2>
             <p class="sec-text">SM Khan International brings you exclusive special offers tailored to your needs. Enjoy exceptional deals and services designed to give you the best value and experience. </p>
             <a href="https://smkhaninternational.com/contact-us" class="vs-btn style2">View More </a>
           </div>
         </div>
         <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
           <div class="img-box1">
             <img class="img-1-1" src="{{asset(assetLink().'/assets/img/shape/offer-1-1.png')}}" alt="Offer image" />
             <div class="img-1-2 d-none d-xxl-block">
               <img src="{{asset(assetLink().'/assets/img/shape/bag.png')}}" alt="image" />
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!--==============================
      Special Offer Area End 
    ==============================-->



   <!--==============================
      Testimonial Area Start 
    ==============================-->
   <section class="space testimonial-style1" data-bg-src="{{asset(assetLink().'/assets/img/bg/testimonial-bg.jpg')}}">
     <div class="container">
       <div class="row justify-content-between align-items-center">
         <div class="col-xxl-5 col-xl-5">
           <div class="title-area">
             <span class="sec-subtitle">Go & Discover </span>
             <h2 class="sec-title h1">What’s Our Client’s Words </h2>
             <p class="sec-text">At SM Khan International, our clients’ feedback speaks for our quality and commitment. We value every opinion and continuously strive to exceed expectations with our services.</p>
             <a href="https://smkhaninternational.com/contact-us" class="vs-btn style3">View More </a>
           </div>
         </div>
         <div class="col-xxl-6 col-xl-7">
           <div class="testi-style1">
             <div class="testi-avaters vs-slider-tab" data-asnavfor="#testId">
               <button class="tab-btn active"><img src="{{asset(assetLink().'/assets/img/testimonial/avater-1-1.jpg')}}" alt="avater" /></button>
               <button class="tab-btn"><img src="{{asset(assetLink().'/assets/img/testimonial/avater-1-2.jpg')}}" alt="avater" /></button>
               <button class="tab-btn"><img src="{{asset(assetLink().'/assets/img/testimonial/avater-1-3.jpg')}}" alt="avater" /></button>
               <button class="tab-btn"><img src="{{asset(assetLink().'/assets/img/testimonial/avater-1-4.jpg')}}" alt="avater" /></button>
             </div>
             <div class="testi-shape">
             </div>
             <div class="vs-carousel" id="testId" data-slide-show="1" data-fade="true">
               <div class="position-relative z-index-common">
                 <div class="testi-quote">
                   <img src="{{asset(assetLink().'/assets/img/shape/quote1.png')}}" alt="quote" />
                 </div>
                 <div class="testi-rating">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="far fa-star"></i>
                   <i class="far fa-star"></i>
                 </div>
                 <p class="testi-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget
              consectetur sed, convgallis at tellus.</p>
                 <div class="testi-avater">
                   <img src="{{asset(assetLink().'/assets/img/testimonial/avater-1-1.jpg')}}" alt="customer image" />
                 </div>
                 <h3 class="testi-name">Lisa Smith </h3>
                 <span class="testi-degi">Developer </span>
               </div>
               <div class="position-relative z-index-common">
                 <div class="testi-quote">
                   <img src="{{asset(assetLink().'/assets/img/shape/quote1.png')}}" alt="quote" />
                 </div>
                 <div class="testi-rating">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="far fa-star"></i>
                 </div>
                 <p class="testi-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget
              consectetur sed, convgallis at tellus. </p>
                 <div class="testi-avater">
                   <img src="{{asset(assetLink().'/assets/img/testimonial/avater-1-2.jpg')}}" alt="customer image" />
                 </div>
                 <h3 class="testi-name">Rodja Heartmann </h3>
                 <span class="testi-degi">CEO, Vecuro </span>
               </div>
               <div class="position-relative z-index-common">
                 <div class="testi-quote">
                   <img src="{{asset(assetLink().'/assets/img/shape/quote1.png')}}" alt="quote" />
                 </div>
                 <div class="testi-rating">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="far fa-star"></i>
                   <i class="far fa-star"></i>
                 </div>
                 <p class="testi-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget
              consectetur sed, convgallis at tellus. </p>
                 <div class="testi-avater">
                   <img src="{{asset(assetLink().'/assets/img/testimonial/avater-1-3.jpg')}}" alt="customer image" />
                 </div>
                 <h3 class="testi-name">Rodja Heartmann </h3>
                 <span class="testi-degi">CEO, Vecuro </span>
               </div>
               <div class="position-relative z-index-common">
                 <div class="testi-quote">
                   <img src="{{asset(assetLink().'/assets/img/shape/quote1.png')}}" alt="quote" />
                 </div>
                 <div class="testi-rating">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                 </div>
                 <p class="testi-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget
              consectetur sed, convgallis at tellus. </p>
                 <div class="testi-avater">
                   <img src="{{asset(assetLink().'/assets/img/testimonial/avater-1-4.jpg')}}" alt="customer image" />
                 </div>
                 <h3 class="testi-name">Rodja Heartmann </h3>
                 <span class="testi-degi">CEO, Vecuro </span>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!--==============================
    Testimonial Area End 
  ==============================-->

   <!--==============================
      Blogs Area Start 
  ==============================-->
   <section class="space space-extra-bottom blog-wrapper">
     <div class="container">
       <div class="row justify-content-center text-center">
         <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
           <div class="title-area">
             <span class="sec-subtitle">Blog & News </span>
             <h2 class="sec-title h1">Our Latest Blog </h2>
             
           </div>
         </div>
       </div>
       <div class="row vs-carousel" data-slide-show="3" data-arrows="false" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" adaptiveheight="true">
            @foreach($latestPosts as $post)
            <div class="col-xl-4">
                @include(welcomeTheme().'blogs.includes.blogGrid')
            </div>
            @endforeach
       
         
       </div>
       <div class="text-center mb-30 wow fadeInUp pt-lg-2" data-wow-delay="0.7s">
         <a href="https://smkhaninternational.com/news-media" class="vs-btn">View More </a>
       </div>
     </div>
   </section>
   <!--==============================
      Blogs Area End 
  ==============================-->







@endsection @push('js') @endpush