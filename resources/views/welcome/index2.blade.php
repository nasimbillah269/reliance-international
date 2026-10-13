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


    <section class="container hero-card-wrapper">
        <div class="row g-3 align-items-center hero-card  justify-content-center">

            <div class="col-12  col-md-6 col-lg-4">
                <div class="serviceIconCart" data-aos="fade-up">
                    <div class="serviceIconImg"><img
                            src="{{ asset(assetLink() . '/images/worthy/imgpsh_fullsize_anim.png') }}" alt="Ocidental Peninsula GrupoOcidental Peninsula Grupo">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Quality Product</h4>
                        <p class="card-text">
                            Superior quality and innovation that exceed expectations</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="serviceIconCart" data-aos="fade-up" data-aos-delay="100">
                    <div class="serviceIconImg">
                        <img
                            src="{{ asset(assetLink() . '/images/worthy/imgpsh_fullsize_anim.png') }}" alt="Ocidental Peninsula Grupo">
                        </div>
                    <div class="card-body ">
                        <h4 class="card-title">Excellent Material</h4>
                        <p class="card-text">
                            Excellence in quality and innovation drives our progress forward</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="serviceIconCart" data-aos="fade-up" data-aos-delay="200">
                    <div class="serviceIconImg"><img
                            src="{{ asset(assetLink() . '/images/worthy/imgpsh_fullsize_anim.png') }}" alt="Ocidental Peninsula Grupo">
                            </div>
                    <div class="card-body ">
                        <h4 class="card-title">Trusted by Clients</h4>
                        <p class="card-text">
                            Building trust through reliable service and consistent results</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- our goal section start -->
    <div class="homeAbout">
        <section class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="homeAboutLeft" data-aos="fade-right" data-aos-delay="500">
                     <img class="aboutImg1" src="{{asset(assetLink().'/images/ocidental/about.webp')}}" alt="Ocidental Peninsula Grupo">
                    <div class="lineBorder"></div>
                    <img class="aboutImg2" src="{{asset(assetLink().'/images/ocidental/about1.webp')}}" alt="Ocidental Peninsula Grupo">
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="homeAboutRight" data-aos="fade-left" data-aos-delay="600">
                    <h2>About Us</h2>
                    
                    <p>
                        Ocidental Peninsula Grupo is a company based in Portugal, with its head office in Lisbon. The company operates in the Administrative Management, General
                        Management, Manufacturing, Agriculture, Industrial materials, Consumer products, Retail, Hospitality and Tourism industry.
                    </p>
                    <p>
                      Main Activities: Administrative Management, General Management, Manufacturing, Agriculture, Industrial materials,
                        Real Estate, Consumer products, Retail, Hospitality and Tourism industry.

                    </p>
                    <p>
                           Secondary Activities: Residential Building Construction | Non-residential Building Construction | Lessors of Real Estate | Electrical Contractors
                        and Other Wiring Installation Contractors | Plumbing, Heating, and Air-Conditioning Contractors | Other Building Equipment Contractors | 
                        Other Building Finishing Contractors | Other Miscellaneous Nondurable Goods Merchant Wholesalers | Electronic Shopping and Mail-Order Houses
                        | Engineering Services | All Other Support Services.
                    </p>
                    
           

                
                 
                    <a href="#" class="cta-button">MORE ABOUT US</a>
                </div>
               
            </div>
        </div>
    </section>
    </div>
    <!-- our goal section end -->
    
    <div class="ourServiceMain">
        <div class="container">
            <div class="ourServiceHead">
                <span>OUR SERVICE</span>
                <h2 data-aos="fade-up" data-aos-delay="100">Top Services We Have</h2>
                <p data-aos="fade-up" data-aos-delay="200">
                  Ocidental Peninsula Grupo is an independed an dynamic administrative Management, General Management, Manufacturing, Agriculture, Industrial materials,
                   Consumer products, Hospitality and Tourism, Retail services company. We are dedicated to providing excellence supporting by personnel to 
                   ensure all the client requirements are met with the best quality. Our team specializes in Project Management across various disciplines 
                   whether structural management for local and overseas projects.
                </p>
            </div>
            <div class="row">
                 @foreach($latestServices as $service)
                <div class="col-md-4">
                    @include(welcomeTheme().'services.includes.serviceGrid')
                </div>
                @endforeach
     
            </div>
        </div>
    </div>
    
    <div class="homeWhyChose">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="homeWhyChoseLeft" data-aos="fade-left" data-aos-delay="500">
                        <h5>Get More About Us</h5>
                        <h2>
                            Who We Are
                        </h2>
                        <p>
                          Ocidental Peninsula Grupo is an independed an dynamic administrative Management, General Management, Manufacturing, Real Estate,
                           Agriculture, Industrial materials, Consumer products, Hospitality and Tourism, Retail services company. 
                           We are dedicated to providing excellence supporting by personnel to ensure all the client requirements
                           are met with the best quality.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="homeWhyChoseRgit" data-aos="fade-right" data-aos-delay="500">
                         <img  src="{{asset(assetLink().'/images/ocidental/IMG-20250819-WA0008.jpg')}}" alt="Ocidental Peninsula Grupo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="desingStodioBanner">
        <div class="designStoBg" 
        style="background-image: url('{{ asset(assetLink() . '/images/ocidental/IMG-20250819-WA0015.jpg') }}'); 
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: center center;
        ">
            <div class="designStoOverly">
                <section class="py-5">
                  <div class="container">
                    <div class="row g-4 text-center">
                
                      <!-- Card 1 -->
                      <div class="col-6 col-md-3">
                        <div class="counter-card p-4 h-100 rounded-4 shadow-sm">
                          <div class="counter-number">
                            <span class="count" data-target="45">0</span><span>+</span>
                          </div>
                          <div class="counter-label mt-2">Active Work</div>
                        </div>
                      </div>
                
                      <!-- Card 2 -->
                      <div class="col-6 col-md-3">
                        <div class="counter-card p-4 h-100 rounded-4 shadow-sm">
                          <div class="counter-number">
                            <span class="count" data-target="20">0</span><span>+</span>
                          </div>
                          <div class="counter-label mt-2">Management</div>
                        </div>
                      </div>
                
                      <!-- Card 3 -->
                      <div class="col-6 col-md-3">
                        <div class="counter-card p-4 h-100 rounded-4 shadow-sm">
                          <div class="counter-number">
                            <span class="count" data-target="156">0</span><span>+</span>
                          </div>
                          <div class="counter-label mt-2">Best Perform</div>
                        </div>
                      </div>
                
                      <!-- Card 4 -->
                      <div class="col-6 col-md-3">
                        <div class="counter-card p-4 h-100 rounded-4 shadow-sm">
                          <div class="counter-number">
                            <span class="count" data-target="20">0</span><span>+</span>
                          </div>
                          <div class="counter-label mt-2">Award Achieved</div>
                        </div>
                      </div>
                
                    </div>
                  </div>
                </section>
            </div>
        </div>
    </div>
    
    <div class="cartificationMain">
        <div class="container">
               <div class="ourServiceHead">
                <span>What We Achievment</span>
                <h2>Our Achievment</h2>
                <p data-aos="fade-up" data-aos-delay="100">
                   Explore our diverse certifications showcasing excellence in quality, sustainability, 
                   and innovation, earned through years of dedication and expertise.
                </p>
            </div>
        </div>
        <div class="cartificateSlide" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="certificate-sldier">
                      <div class="slick-box">
                          <div class="cartificateBox">
                               <img  src="{{asset(assetLink().'/images/ocidental/ar/ar1.webp')}}" alt="Ocidental Peninsula Grupo">
                          </div>
                      </div>
                      <div class="slick-box">
                          <div class="cartificateBox">
                               <img  src="{{asset(assetLink().'/images/ocidental/ar/ar2.webp')}}" alt="Ocidental Peninsula Grupo">
                          </div>
                      </div>
                      <div class="slick-box">
                          <div class="cartificateBox">
                               <img  src="{{asset(assetLink().'/images/ocidental/ar/ar3.webp')}}" alt="Ocidental Peninsula Grupo">
                          </div>
                      </div>
                      <div class="slick-box">
                          <div class="cartificateBox">
                               <img  src="{{asset(assetLink().'/images/ocidental/ar/ar4.webp')}}" alt="Ocidental Peninsula Grupo">
                          </div>
                      </div>
                      <div class="slick-box">
                          <div class="cartificateBox">
                               <img  src="{{asset(assetLink().'/images/ocidental/ar/ar5.webp')}}" alt="Ocidental Peninsula Grupo">
                          </div>
                      </div>
                      <div class="slick-box">
                          <div class="cartificateBox">
                               <img  src="{{asset(assetLink().'/images/ocidental/ar/ar6.webp')}}" alt="Ocidental Peninsula Grupo">
                          </div>
                      </div>
                     <div class="slick-box">
                          <div class="cartificateBox">
                               <img  src="{{asset(assetLink().'/images/ocidental/ar/ar3.webp')}}" alt="Ocidental Peninsula Grupo">
                          </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="philochfyMain">
        <div class="philochfyBg"  
        style="background-image: url('{{ asset(assetLink() . '/images/worthy/BG-2.png') }}'); 
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: center center;
        ">
            <div class="philochfyOverly">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="philochofyLeft" >
                                <div class="philochofyList">
                                    <div class="philochofyIcon">
                                          <img  src="{{asset(assetLink().'/images/worthy/Step-1.png')}}" alt="Ocidental Peninsula Grupo">
                                    </div>
                                    <div class="philochofyInfo">
                                        <h4>A Complete Solution</h4>
                                        <p class="elementor-icon-box-description">
                                            ➢ Administrative  <br>
                                            ➢ Management  <br>
                                            ➢ General  <br>
                                            ➢ Industrial 					
                                        </p>
                                    </div>
                                </div>
                                <div class="philochofyList">
                                    <div class="philochofyIcon">
                                          <img  src="{{asset(assetLink().'/images/worthy/Icon-1.png')}}" alt="Ocidental Peninsula Grupo">
                                    </div>
                                    <div class="philochofyInfo">
                                        <h4>RESEARCH & DEVELOPMENT</h4>
                                        <p class="elementor-icon-box-description">
						                    ➢ Eynamic administrative Management,<br>
                                            ➢ General Management<br>
                                            ➢ Manufacturing,<br>
                                            ➢ Hospitality and Tourism <br>
                                            ➢ Retail services<br>
                                          					
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="philochofyRight">
                                <h6>PHILOSOPHY</h6>
                                <h2>
                                  Ocidental Peninsula Grupo <br> Philosophy
                                </h2>
                                <p>
                                  Ocidental Peninsula Grupo is an independed an dynamic administrative Management, General Management, Manufacturing, Real Estate, 
                                   Agriculture, Industrial materials, Consumer products, Hospitality and Tourism, Retail services company. We are dedicated 
                                   to providing excellence supporting by personnel to ensure all the client requirements are met with the best quality.
                                </p>
                                <a href="#" class="cta-button">NEED HELP?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

<!--news and blogs start-->
<div class="blogCompany">
    <div class="container">
       <h1>NEWS & MEDIA</h1>
        <div class="titleLine"></div>
        <div class="row">
            @foreach($latestPosts as $post)
            <div class="col-md-3">
                @include(welcomeTheme().'blogs.includes.blogGrid')
            </div>
            @endforeach
        </div>
        @if($page =pageTemplate('Latest Blog'))
        <div class="moreServices">
            <a href="{{route('pageView',$page->slug?:'')}}" class="btn"> <i class="fa fa-newspaper-o" aria-hidden="true"></i> MORE NEWS </a>
        </div>
        @endif
    </div>
</div>
<!--news and blogs end-->




@endsection @push('js') @endpush