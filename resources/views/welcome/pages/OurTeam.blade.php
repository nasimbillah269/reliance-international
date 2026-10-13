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

    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Team</strong></h2>
          <p>When a man is alone his power is limited. But when ten people work together in a corner, he is very strong and powerful.</p>
        </div>

        <div class="row">
            
              <div class="col-lg-3 col-md-6 ">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                 <img src="{{asset(assetLink().'/images/worthy/team/team-3.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                   <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Md. Mamun-Ur- Rashid</h4>
                <span>Chairman</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 ">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="{{asset(assetLink().'/images/worthy/team/team-1.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mohammad Akhlakur Rahman</h4>
                <span>Managing Director</span>
              </div>
            </div>
          </div>

         

        

          <div class="col-lg-3 col-md-6 ">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
               <img src="{{asset(assetLink().'/images/worthy/team/team-4.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Md.Nasimul Hasan Bhuiyan </h4>
                <span>Director</span>
              </div>
            </div>
          </div>
          
           <div class="col-lg-3 col-md-6">
            <div class="member " data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
               <!--<img src="{{asset(assetLink().'/images/worthy/team/team-2.jpg')}}" class="img-fluid" alt="">-->
               <img src="{{asset(assetLink().'/images/worthy/team/New Project.webp')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Md.Azahar Mia</h4>
                <!--<h4>Md. Monirul Islam</h4>-->
                <span>Director </span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>



@endsection @push('js') @endpush