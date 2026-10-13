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
.sitemap {
    margin-top: 50px;
}
</style>
@endpush 

@section('contents')
{{--<div class="breadcrumb-area"
@if($page->bannerFile)
style="background-image:url({{asset($page->banner())}});background-repeat: no-repeat;
    background-size: cover;padding: 50px 0;"
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
	  Contact box Area Start
	==============================-->
   <section class="space contact-box_wrapper">
     <div class="outer-wrap">
       <div class="container">
         <div class="row">
           <div class="col-lg-8">
             <div class="contact-box">
               <div class="contact-box_icon">
                 <i class="fas fa-map-marked-alt"></i>
               </div>
               <h3 class="contact-box__title h5">Address </h3>
               <h6>Corporate Head Office:</h6>
               <p class="contact-box__text">
               {{general()->address_one}}
               </p>
               <h6 class="mt-3">West Bengal Branch:</h6>
               <p class="contact-box__text">
               {{general()->address_two}}
               </p>
             </div>
           </div>
           <div class="col-lg-4">
             <div class="contact-box">
               <div class="contact-box_icon">
                 <i class="fas fa-address-card"></i>
               </div>
               <h3 class="contact-box__title h5">Contact </h3>
               <ul class="contact-box_list">
                 <li>Phone:  <a href="#">{{general()->mobile}} </a></li>
                 <li>Email:  <a href="#">{{general()->email}} </a></li>
                 <li>Web:  <a href="#">{{general()->website}} </a></li>
                 <li>GST:  <a href="#"> 29NMHPK5181E1ZK </a></li>
                 <li>Registration No: <a href="#"> -0917P180024135496 </a></li>
               
               </ul>
             </div>
           </div>
          
         </div>
       </div>
     </div>
   </section>
   <!--==============================
	  Contact box Area End
	==============================-->

   <!--==============================
	  Contact Form Area End
	==============================-->
   <div class="space bg-light">
     <div class="container">
       <div class="row justify-content-center text-center">
         <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
           <div class="title-area">
             <span class="sec-subtitle">Contact Us </span>
             <h2 class="sec-title h1">Get In Touch </h2>
             
           </div>
         </div>
       </div>
      
       
       <div class="form-info-new">
                       
                        @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <strong>Success! </strong> {{Session::get('success')}}.
                        </div>
                        @endif
                        <form action="{{route('contactMail')}}" id="contactForm" method="post">
                            
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group form-group-section">
                                @if ($errors->has('name'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('name') }}</p>
                                @endif
                                <input type="name" name="name" value="" class="form-control control-section" placeholder="Enter Name" required="" />
                            </div>
                                </div>
                                <div class="col-md-6">
                                     <!-- <span class="required">This field is required</span> -->
                            <div class="form-group form-group-section">
                                @if ($errors->has('email'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('email') }}</p>
                                @endif
                                <input type="email" name="email" value="" class="form-control control-section" placeholder="Email Address" required="" />
                            </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-section">
                                @if ($errors->has('phone'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('phone') }}</p>
                                @endif
                                <input type="phone" name="phone" value="" class="form-control control-section" placeholder="Phone Number" required="" />
                            </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="form-group form-group-section">
                                @if ($errors->has('subject'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('subject') }}</p>
                                @endif
                                <input type="subject" name="subject" value="" class="form-control control-section" placeholder="Subject" required="" />
                            </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-section">
                                @if ($errors->has('message'))
                                <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('message') }}</p>
                                @endif
                                <textarea name="message" rows="5" value="" class="form-control control-section" placeholder="Write Your Massege" required=""></textarea>
                            </div> 
                                </div>
                            </div>
                            
                           
                            <div>

                                <button class=" btn submitbutton ctbtn" 
                                type="submit"
                                >
                                    Submit
                                </button>
                            </div>
                           
                    
                            
                        </form>
                    </div>
       
       <p class="form-messages text-center mb-0 mt-3" />
     </div>
   </div>
   <!--==============================
	  Contact Form Area End
	==============================-->





@endsection 

@push('js') 
 <script src="https://www.google.com/recaptcha/api.js"></script>
 
  <script>
   function onSubmit(token) {
       var recaptchaInput = document.createElement('input');
        recaptchaInput.type = 'hidden';
        recaptchaInput.name = 'recaptchaToken';
        recaptchaInput.value = token;
        document.getElementById("contactForm").appendChild(recaptchaInput);
     document.getElementById("contactForm").submit();
   }
 </script>
 
@endpush


