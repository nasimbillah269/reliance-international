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
@endpush @section('contents')

<div class="breadcrumb-area" @if($page->
    bannerFile) style="background-image:url({{asset($page->banner())}});background-repeat: no-repeat; background-size: cover;padding: 50px 0;" @endif >
    <div class="container">
        <div class="title">
            <h1>{{$page->name}}</h1>
            <ul>
                <li><a href="{{route('index')}}">Home</a></li>
                <li>{{$page->name}}</li>
            </ul>
        </div>
    </div>
</div>

     <div class="ourServiceMain">
        <div class="container">
            <div class="ourServiceHead">
                <span>OUR SERVICE</span>
                <h2>A Complete Vertical Textile Solution</h2>
                <p>
                    Discover a complete vertical textile solution, streamlining every 
                    stage from fabric creation to <br> final product, ensuring top quality and efficiency
                </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="ourServiceGridBox">
                         <img  src="{{asset(assetLink().'/images/worthy/service/service1.webp')}}" alt="">
                        <div class="ourServiceGridBoxInfo">
                            <h4>Spining</h4>
                            <p>
                                Spinning is the process of converting fibers into a 
                                continuous strand of yarn by drawing out, twisting,
                                and winding them together.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ourServiceGridBox">
                         <img  src="{{asset(assetLink().'/images/worthy/service/service2.webp')}}" alt="">
                        <div class="ourServiceGridBoxInfo">
                            <h4>Weaving</h4>
                            <p>
                               Weaving is the art of interlacing threads
                               to create beautiful fabrics and pattern
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ourServiceGridBox">
                         <img  src="{{asset(assetLink().'/images/worthy/service/service5.webp')}}" alt="">
                        <div class="ourServiceGridBoxInfo">
                            <h4>Woven Dyeing</h4>
                            <p>
                               Woven dyeing transforms fabrics with vibrant,
                               lasting colors using advanced techniques.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ourServiceGridBox">
                        
                          <img  src="{{asset(assetLink().'/images/worthy/service/service3.webp')}}" alt="">
                        <div class="ourServiceGridBoxInfo">
                            <h4>Printing</h4>
                            <p>
                                Printing adds intricate designs to fabrics,
                                enhancing beauty with precision techniques
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ourServiceGridBox">
                        
                          <img  src="{{asset(assetLink().'/images/worthy/service/service4.webp')}}" alt="">
                        <div class="ourServiceGridBoxInfo">
                            <h4>Fabrics Dyeing</h4>
                            <p>
                               Fabric dyeing infuses textiles with rich,
                               lasting colors using advanced dyeing methods
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ourServiceGridBox">
                         <img  src="{{asset(assetLink().'/images/worthy/service/service6.webp')}}" alt="">
                        <div class="ourServiceGridBoxInfo">
                            <h4>Fabric Finishing</h4>
                            <p>
                               Fabric finishing enhances texture,
                               durability, and quality for a perfect final touch
                            </p>
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
                            <div class="philochofyLeft">
                                <div class="philochofyList">
                                    <div class="philochofyIcon">
                                          <img  src="{{asset(assetLink().'/images/worthy/Step-1.png')}}" alt="">
                                    </div>
                                    <div class="philochofyInfo">
                                        <h4>A Complete Vertical Textile Solution</h4>
                                        <p class="elementor-icon-box-description">
                                            ➢ SPINNING <br>
                                            ➢ WEAVING  <br>
                                            ➢ PROCESSING <br>
                                            ➢ FINISHING					
                                        </p>
                                    </div>
                                </div>
                                <div class="philochofyList">
                                    <div class="philochofyIcon">
                                          <img  src="{{asset(assetLink().'/images/worthy/Icon-1.png')}}" alt="">
                                    </div>
                                    <div class="philochofyInfo">
                                        <h4>RESEARCH & DEVELOPMENT</h4>
                                        <p class="elementor-icon-box-description">
						                    ➢ Experienced R&amp;D &amp; Design Team <br>
                                            ➢ Auto Sample Looms<br>
                                            ➢ Sample Warper <br>
                                            ➢ Sample Printing  <br>
                                            ➢ Washing Unit <br>
                                            ➢ Pilot Plant for Dyeing <br>					
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="philochofyRight">
                                <h6>PHILOSOPHY</h6>
                                <h2>
                                    CSR the Worthy Textile Mills Ltd <br> Philosophy
                                </h2>
                                <p>
                                    At Sadia we believe that Corporate Social Responsibility is a continuous evolving philosophy. Following all
                                    local laws and being legally compliant is prerequisite. Going beyond, we foster all human rights and
                                    protect environment not leaving it with the government itself, being fair to our stakeholders, be it
                                    employees, suppliers or customers
                                </p>
                                <a href="#" class="cta-button">NEED HELP?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 

@endsection @push('js') @endpush