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
 @push('css')
 <style>

 </style>
@endpush 

@section('contents')
{{--<div class="breadcrumb-area"
@if($page->bannerFile)
style="background-image:url({{asset($page->banner())}});background-repeat: no-repeat;
    background-size: cover;padding: 130px 0;"
@endif
>
    <div class="container">
        <div class="title">
            <h1>{{$page->name}}</h1>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li>{{$page->name}}</li>
            </ul>
        </div>
    </div>
</div>--}}


   <div class="breadcumb-wrapper" data-bg-src="{{asset(assetLink().'/assets/img/bg/breadcumb-bg.jpg')}}">
     <div class="container z-index-common">
       <div class="breadcumb-content">
         <h1 class="breadcumb-title">{{$page->name}} </h1>
         <div class="breadcumb-menu-wrap">
           <ul class="breadcumb-menu">
             <li><a href="{{route('index')}}">Home </a></li>
             <li>{{$page->name}} </li>
           </ul>
         </div>
       </div>
     </div>
   </div>


<!--==============================
    About Area Start 
  ==============================-->
   <section class="space">
     <div class="container">
       <div class="row align-items-center">
         <div class="col-lg-6">
           <div class="image-box1">
             <img class="img1" src="{{asset(assetLink().'/assets/img/about/img-2-1.jpg')}}" alt="image1" />
             <img class="img2" src="{{asset(assetLink().'/assets/img/about/img-2-2.jpg')}}" alt="image2" />
             <div class="media-box1">
               <span class="media-info">25 Years </span>
               <p class="media-text">Of Experience </p>
             </div>
             <div class="media-box2">
               <span class="media-info">20,000+ </span>
               <p class="media-text">Happy Clients </p>
             </div>
           </div>
         </div>
         <div class="col-lg-5">
           <div class="about-content">
             <div class="title-area">
               <span class="sec-subtitle">We are SM KHAN INTERNATIONAL </span>
               <h2 class="sec-title h1">We Are The Best For Your Travel  </h2>
               <p class="sec-text">
                   <b>SM KHAN INTERNATIONAL</b> is a trusted and customer-focused travel agency dedicated to making your travel dreams simple, safe, and enjoyable.
                   We provide complete travel solutions including air ticketing, visa assistance, tour packages, hotel bookings, and worldwide travel support.
                   Our goal is to deliver reliable service, transparent pricing, and a smooth travel experience for every customer.
               </p>
               <p class="sec-text">
                  With a team of experienced travel professionals, we guide travelers through every step of their journey—from planning and booking to travel
                  support and after-trip assistance. Whether you’re traveling for business, family trips, medical purposes, education, Hajj, 
                  Umrah, or holiday vacations, we offer customized travel packages to match your needs.
               </p>
             </div>
           
         
           </div>
         </div>
       </div>
     </div>
   </section>
   <!--==============================
    About Area End 
  ==============================-->

   <!--==============================
	  Histoy area Start
	==============================-->
   <section class="space bg-light">
     <div class="container" data-bg-src="{{asset(assetLink().'/assets/img/bg/map-bg.png')}}">
       <div class="row justify-content-center text-center">
         <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
           <div class="title-area">
             <span class="sec-subtitle">Road Map </span>
             <h2 class="sec-title h1">Our History </h2>
           </div>
         </div>
       </div>
       <div class="row mt-60 mb-70">
         <div class="col-lg-6 col-md-6 history-steped">
           <span class="divider"></span>
           <div class="vs-history">
             <div class="header-area">
               <h3 class="history-title">SM KHAN INTERNATIONAL </h3>
               <span class="history-date">2023 </span>
             </div>
             <p class="history-text">
                 SM KHAN INTERNATIONAL officially launched as a small travel service provider.
                Started with basic air ticketing and travel guidance.
                Focused on building trust and providing honest, customer-friendly service.
             </p>
           </div>
         </div>
         <div class="col-lg-6 col-md-6 history-steped">
           <span class="divider"></span>
           <div class="vs-history">
             <div class="header-area">
               <h3 class="history-title">SM KHAN INTERNATIONAL </h3>
               <span class="history-date">2022 </span>
             </div>
             <p class="history-text">
                 
                 Added visa processing support and hotel booking services.
                    Began partnering with major airlines and travel networks.
                    Increased customer base through reliable and quick service.
                  </p>
           </div>
         </div>
         <div class="col-lg-6 col-md-6 history-steped">
           <span class="divider"></span>
           <div class="vs-history">
             <div class="header-area">
               <h3 class="history-title">SM KHAN INTERNATIONAL </h3>
               <span class="history-date">2021 </span>
             </div>
             <p class="history-text">
                 Introduced customized tour packages for domestic and international destinations.
                    Improved office operations and strengthened the customer service team.
                    Earned strong reputation for transparency and affordable pricing.
                 
                  </p>
           </div>
         </div>
         <div class="col-lg-6 col-md-6 history-steped">
           <span class="divider"></span>
           <div class="vs-history">
             <div class="header-area">
               <h3 class="history-title">SM KHAN INTERNATIONAL </h3>
               <span class="history-date">2020 </span>
             </div>
             <p class="history-text">
                 Launched Hajj and Umrah travel support packages.
                    Integrated more digital tools for faster booking and customer communication.
                    Continued expanding partnerships with global travel providers.
                 
             </p>
           </div>
         </div>
         <div class="col-lg-6 col-md-6 history-steped">
           <span class="divider"></span>
           <div class="vs-history">
             <div class="header-area">
               <h3 class="history-title">SM KHAN INTERNATIONAL </h3>
               <span class="history-date">2019 </span>
             </div>
             <p class="history-text">
                 Expanded services to corporate clients and business travelers.
                Opened wider communication channels (online support, WhatsApp service, dedicated phone assistance).
                Achieved significant increase in yearly bookings and returning customer
                 
             </p>
           </div>
         </div>
         <div class="col-lg-6 col-md-6 history-steped">
           <span class="divider"></span>
           <div class="vs-history">
             <div class="header-area">
               <h3 class="history-title">SM KHAN INTERNATIONAL </h3>
               <span class="history-date">2018 </span>
             </div>
             <p class="history-text">
                 Became a well-recognized and dependable travel agency in the region.

                Delivered full travel solutions including ticketing, visa support, tours, hotel booking, and religious travel.
                
                Strengthened brand identity based on reliability, honesty, and quality service.
                
                Continued improving customer experience with modern, efficient travel management systems.
             </p>
           </div>
         </div>
       </div>
     </div>
   </section>
   <!--==============================
	  Histoy area End
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





@endsection 

@push('js') 

@endpush


