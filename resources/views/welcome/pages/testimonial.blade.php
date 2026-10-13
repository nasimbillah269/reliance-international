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


<section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up">
            <div class="testimonial-item">
          <!--    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">-->
              <h3>Mr. Arzu</h3>
              <p>G.M(merchandising), Islam Garments</p> <br>
               
             <!-- <h4>Ceo &amp; Founder</h4>-->
              <p>
               <i class="fa fa-quote-left" aria-hidden="true"></i>
               Worthy Textile is an absolutely wonderful source of information for the textile industry. You have reason to be very proud of its quality.
               <i class="fa fa-quote-right" aria-hidden="true"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item mt-4 mt-lg-0">
             <!-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">-->
              <h3>Sayem Ferdous</h3>
              <p>A.G.M(merchandising), TNZ Group of Company</p> <br>
            <!--  <h4>Designer</h4>-->
              <p>
                 <i class="fa fa-quote-left" aria-hidden="true"></i>
               Inspite of the present economic meltdown, the bold and the pragmatic industry leaders are expected to choose their 
               next steps forward on the basis of such meaningful support. I wish you and your company all the success in this endeavor.
                <i class="fa fa-quote-right" aria-hidden="true"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-item mt-4">
              <!--<img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">-->
              <h3>Mr. Nazmul Hossain</h3>
                <p>G.M(merchandising), Islam Garments</p> <br>
            <!--  <h4>Store Owner</h4>-->
              <p>
                 <i class="fa fa-quote-left" aria-hidden="true"></i>
               I am very delighted with the kind of promotional activity done by Frabics.
                 <i class="fa fa-quote-right" aria-hidden="true"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-item mt-4">
              <!--<img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">-->
              <h3>Mr. Masnad Ahmed</h3>
                <p>Manager (Material), Dada (Dhaka) Ltd</p> <br>
             <!-- <h4>Freelancer</h4>-->
              <p>
                 <i class="fa fa-quote-left" aria-hidden="true"></i>
                They have given us the proper channel to source the customers we need. Their platform is very user-friendly. 
                The service team is excellent and is always prompt in communicating with us for any queries.
                <i class="fa fa-quote-right" aria-hidden="true"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-item mt-4">
             <!-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">-->
              <h3>Mr.Sazzad Naim</h3>
                <p>G.M(merchandising), New Asia Group</p> <br>
             <!-- <h4>Entrepreneur</h4>-->
              <p>
               <i class="fa fa-quote-left" aria-hidden="true"></i>
               I am quite pleased with the Worthy Textile Team in providing valuable
               leads and hand holding the entire process.
                 <i class="fa fa-quote-right" aria-hidden="true"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
            <div class="testimonial-item mt-4">
             <!-- <img src="assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">-->
              <h3>Mr. Tofayel Ahmed</h3>
                <p>G.M(merchandising), KL Design</p> <br>
           <!--   <h4>Store Owner</h4>-->
              <p>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              Worthy Textile is the best. They helped take my vision and mission 
              me into the process of development and manufacturing.
                <i class="fa fa-quote-right" aria-hidden="true"></i>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>




@endsection @push('js') @endpush