<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta name="google-site-verification" content="3LFP8tpCZD3MHU0SVKY0o8VhnA3jYcK-TJWR9jYCnGs" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{csrf_token()}}" />
        @yield('title')
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset(general()->favicon())}}" />
        @yield('SEO')
        <!-- Google Font CDN-->
        <link href="https://fonts.googleapis.com/css?family=Source Code Pro" rel="stylesheet" />
        
      
        

          <!--==============================
            Google Fonts
          ============================== -->
           <link rel="preconnect" href="https://fonts.googleapis.com" />
           <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
           <link href="../../../fonts.googleapis.com/css2_4f154f5b.css" rel="stylesheet" />
        
           <!--==============================
                All CSS File
            ============================== -->
           <!-- Bootstrap -->
           <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
           <link rel="stylesheet" href="{{asset(assetLink().'/assets/css/bootstrap.min.css')}}" />
           <!-- Fontawesome Icon -->
           <link rel="stylesheet" href="{{asset(assetLink().'/assets/css/fontawesome.min.css')}}" />
           <!-- Magnific Popup -->
           <link rel="stylesheet" href="{{asset(assetLink().'/assets/css/magnific-popup.min.css')}}" />
           <!-- Slick Slider -->
           <link rel="stylesheet" href="{{asset(assetLink().'/assets/css/slick.min.css')}}" />
           <!-- Theme Custom CSS -->
           <link rel="stylesheet" href="{{asset(assetLink().'/assets/css/style.css')}}" />

        
        
        <style>
        
        /*new project app css start*/
        .vs-logo a img {
            width: 100px;
        }
        
        .history-title {
            font-size: 16px;
        }
        
        .footer-logo a img {
            width: 125px;
            height: 125px;
            border-radius: 50%;
        }
        p.sec-text {
            text-align: justify;
        }
        .widget.footer-widget h6 {
            color: #fff;
            margin: 0;
            margin-right: 10px;
        }
        .footerContactInof p {
            font-size: 12px;
            margin: 0;
        }
        .galleryMain {
            margin-bottom: 50px;
        }
          .widget-area {
            padding-bottom: 40px !important;
        }
        .contact-box h6 {
            margin: 0;
        }
        .footerContactInof p b {
            font-weight: bold;
            font-size: 15px;
        }
        .footerContactInof {
            display: flex;
            align-items: center;
        }
          .header-top {
                display: block;
            }
         /*new project app css end*/
        
        .menu {
            float: left !important;
        }
            .header-menu ul li a {
            padding: 45px 5px !important;
            font-size: 14px !important;
        }
            .nav-item-link a {
                color: #fff !important;
            }
            div#wowslider-container1 {
                    max-width: unset;
                    width: 100%!important; 
                }
                #wowslider-container1 .ws_images {
                    width: 100% !important;
                    max-width: 100%;
                    border: none;
                }
                
                .top-header {
                    background: #ba3428 !important;
                }
                
                .serviceIconCart {
                    background-color: #303389 !important;
                }
                .ourServiceGridBoxInfo a {
                    display: block;
                    color: #fff;
                }
                .ourServiceGridBoxInfo {
                    background-color: #bd3525 !important;
                }
                .breadcrumb-area {
                    background-image: linear-gradient(45deg, #8c2a1c, #f37632) !important;
                }
                .gallery a {
                    width: 280px  !important;
                }
                .footerWidgetArea {
                    background-color: #d1392a !important;
                }
                .cta-button {
                background-color: #cc3726 !important;
                }
                .languagePart {
                    margin-top: 35px;
                }
                .cory-right-section {
                    text-align: center !important;
                }
                .cartificateSlide {
                background-color: #b73225 !important;
                }
                .languagePart select.gt_selector.notranslate {
                background-color: #c53724 !important;
                }
                .whatsapp-button {
                    display: none !important;
                }
                #scrollTopBtn {
                        background-color: #c93827 !important;
                    }
                    
                .website-info {
                    background-color: #fff !important;
                    margin: 20px 0px !important;
                    color: #000;
                    box-shadow: 0px 0px 9px 1px #e2e2e2;
                    border-radius: 10px;
                    border-left: 2px solid #c53724;
                }
                .form-info-new {
                    padding-bottom: 50px;
                }
                .website-info h5 {
                    color: #000 !important;
                }
                .website-info p {
                    color: #000 !important;
                }
                .form-info-new button {
                    background-color: #c33728 !important;
                }
                .contactSoicalLink li a {
                    background-color: #faa125 !important;
                }
                .ourServiceGridBoxInfo h4 {
                    font-size: 20px;
                }
                .blog-content .btn {
                    border: 1px solid #c23728 !important;
                    background: #c23728 !important;
                }
                .moreServices a {
                    background: #cc3726 !important;
                }
                .ourServiceHead span {
                    color: #852e24 !important;
                }
                .homeWhyChoseLeft h5 {
                    color: #b33326;
                }
                
                .gt_switcher-popup {
                    display: inline-block;
                    width: 130px;
                    background-color: #ba3428;
                    color: #fff;
                    font-size: 13px;
                    font-weight: bold;
                    padding: 6px 0;
                    text-transform: uppercase;
                    text-align: center;
                    letter-spacing: 0.5px;
                    margin: 4px auto;
                    border-radius: 3px;
                    border: none;
                    outline: none;
                }
                .form-info-new button {
                        color: #fff !important;
                        width: unset !important;
                        padding: unset;
                        border-radius: unset;
                    }
                
                .form-info-new .ctbtn {
                    background-color: #c33728 !important;
                    color: #fff !important;
                    width: 100% !important;
                    padding: 20px 10px !important;
                    border-radius: 10px !important;
                }
                .alert button {
                    padding: 1px !important;
                }
                
                .mobileLa {
                        display: none !important;
                    }           
                                
                  .counter-card {  transition: transform .2s ease, box-shadow .2s ease; background-color: #b2322675;border-radius: 20px;}

                  .counter-card:hover { transform: translateY(-4px); box-shadow: 0 8px 24px rgba(0,0,0,.08); }
                  .counter-number { font-size: 2.25rem; line-height: 1; font-weight: 800; }
                  .counter-label { font-size: .95rem; font-weight: 600; color: #fff; }
                  @media (min-width: 768px) { .counter-number { font-size: 2.75rem; } }
                
                
                
                
                
                
                
                
                
             
                
                @media only screen and (max-width: 1400px) {
                       .top-right-header ul li a {
                            font-size: 13px !important;
                        }
                }
                
                
                @media only screen and (max-width: 1360px) {
                       .top-right-header ul li:last-child a {
                        font-size: 13px;
                    }
                    .header-menu ul li a {
                        padding: 45px 5px !important;
                        font-size: 13px !important;
                    }
                    .top-right-header ul li a {
                        font-size: 14px !important;
                    }
                }
                
                
                   @media (max-width: 768px) {
                       .header-top {
                            display: none;
                        }
                        .vs-logo img {
                            padding: 5px 0;
                        }
                    .logo a img {
                        width: 95% !important;
                        margin-top: 0 !important;
                    }
                    .languagePart {
                        margin-top: 0 !important;
                        display: none;
                    }
                    .mobileLa {
                        display: block !important;
                    }
                    .gt_switcher-popup {
                        display: inline-block;
                        width: 110px;
                    }
                    .mobileLa .gtranslate_wrapper {
                        margin-top: 10px;
                    }
                        header .toggle {
                            top: 5px !important;
                        }
                        
                }
             

        </style>
                
        @stack('css')
    </head>
    
    <body>
        
        
         <!--==============================
      Mobile Menu
    ============================== -->
   <div class="vs-menu-wrapper">
     <div class="vs-menu-area text-center">
       <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
       <div class="mobile-logo">
         <a href="{{route('index')}}"><img src="{{asset(general()->logo())}}" alt="neral()->title}}" /></a>
       </div>
       <div class="vs-mobile-menu">
              @if($menu = menu('Header Menus'))
                 <ul>
                   @foreach($menu->subMenus as $menu)
                   <li class="menu-item-has-children">
                     <a href="{{ asset($menu->menuLink()) }}">{{ $menu->menuName() }} </a>
                     @if($menu->subMenus->count())
                     <ul class="sub-menu">
                          @foreach($menu->subMenus as $submenu)
                       <li><a href="{{ asset($submenu->menuLink()) }}">{{ $submenu->menuName() }}</a></li>
                        @endforeach
                     </ul>
                     @endif
                   </li>
                   @endforeach
                 
                 </ul>
                 
                 @endif
       </div>
     </div>
   </div>
   
   
      <!-- Scroll To Top -->
   <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
        
        <!-- Scroll to Top Button -->
        <!--<button id="scrollTopBtn"><i class="fas fa-arrow-up"></i></button>-->
        
          <!--<div class="languagePart mobileLang">-->
          <!--              <div class="gtranslate_wrapper"></div>-->
                        
                        
                        
          <!--          </div>-->

        
        <!--<div id="myOverlay" class="overlay">-->
        <!--    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>-->
        <!--    <div class="overlay-content">-->
        <!--        <form action="{{route('blogSearch')}}">-->
        <!--            <input type="text" name="search" value="{{request()->search}}" placeholder="Search" title="Search for." />-->
        <!--            <button type="submit"><i class="fa fa-search"></i></button>-->
        <!--        </form>-->
        <!--    </div>-->
        <!--</div>-->
        
       
       <a href="https://wa.me/8801711664915" class="whatsapp-button" target="_blank" aria-label="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>
      
        
        <!--<body class="theme-default">-->
        <!--    <div id="container">-->
        <!--        <header>-->
        <!--            <div class="wrapper cf">-->
        <!--                @if(menu('Header Menus'))-->
        <!--                <nav id="main-nav">-->
        <!--                    <ul class="first-nav">-->
        <!--                        @foreach(menu('Header Menus')->subMenus as $menu)-->
        <!--                        <li class="devices">-->
                                    
        <!--                            @if($menu->subMenus->count() > 0)-->
        <!--                            <span>{{$menu->menuName()}}</span>-->
        <!--                            <ul>-->
        <!--                                @foreach($menu->subMenus as $menu)-->
        <!--                                <li class="mobile">-->
        <!--                                    <a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a>-->
                                            
        <!--                                    @if($menu->subMenus->count() > 0)-->
        <!--                                    <ul>-->
        <!--                                        @foreach($menu->subMenus as $menu)-->
        <!--                                        <li><a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a></li>-->
        <!--                                        @endforeach-->
        <!--                                    </ul>-->
        <!--                                    @endif-->
                                            
        <!--                                </li>-->
        <!--                                @endforeach-->
                                        
        <!--                            </ul>-->
        <!--                            @else-->
        <!--                            <a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a>-->
        <!--                            @endif-->
                                    
        <!--                        </li>-->
        <!--                        @endforeach-->
                                <!--<li class="devices"><span> <a href="{{asset(assetLink().'/images/asmara/profile.pdf')}}" target="_blank">Company Profile</a></span></li>-->
        <!--                    </ul>-->
        <!--                </nav>-->
        <!--                @endif-->
        <!--                <a class="toggle" href="#">-->
        <!--                    <span></span>-->
        <!--                </a>-->
        <!--            </div>-->
        <!--        </header>-->
        <!--    </div>-->
        <!--</body>-->
        
        <!--Header Part Include Start-->
        @include(welcomeTheme().'layouts.header')

        <!--Main Content Section Start-->
        <div class="main-content">
        @yield('contents')
        </div>
        <!--Main Content Section End-->
        
        <!--Footer Part Include Start-->
        @include(welcomeTheme().'layouts.footer')
        
        
       
        
        
        
        
           <!--==============================
          All Js File
        ============================== -->
       <!-- Jquery -->
       <script src="{{asset(assetLink().'/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
       <!-- Slick Slider -->
       <script src="{{asset(assetLink().'/assets/js/slick.min.js')}}"></script>
       <!-- Bootstrap -->
       <script src="{{asset(assetLink().'/assets/js/bootstrap.min.js')}}"></script>
       <!-- Magnific Popup -->
       <script src="{{asset(assetLink().'/assets/js/jquery.magnific-popup.min.js')}}"></script>
       <!-- jquery Ui -->
       <script src="{{asset(assetLink().'/assets/js/jquery-ui.min.js')}}"></script>
       <!-- Circle Progress -->
       <script src="{{asset(assetLink().'/assets/js/circle-progress.min.js')}}"></script>
       <!-- isotope -->
       <script src="{{asset(assetLink().'/assets/js/imagesLoaded.js')}}"></script>
       <script src="{{asset(assetLink().'/assets/js/isotope.js')}}"></script>
       <!-- Wow.js -->
       <script src="{{asset(assetLink().'/assets/js/wow.min.js')}}"></script>
       <!-- Main Js File -->
   <script src="{{asset(assetLink().'/assets/js/main.js')}}"></script>
        
        
        
    
    
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
             
         
         
      
       <script>
            // window.gtranslateSettings = {
            //   "default_language": "en",
            //   "load_language": "en",
            //   "detect_browser_language": true,
            //   "languages": ["en", "en"],
            //   "wrapper_selector": ".gtranslate_wrapper",
            //   "flag_size": 16,
            //   "flag_style": "3d"
            // };
        </script>
      <!--<script type="text/javascript" src="{{asset(assetLink().'/js/languageSwitcherGoogle.js')}}"></script>-->
        

        
<!--        @once-->
<!--<script>-->
<!--    window.gtranslateSettings = {-->
<!--        default_language: "bn",-->
<!--        native_language_names: true,-->
<!--        detect_browser_language: true,-->
<!--        languages: ["bn", "en"],-->
<!--        wrapper_selector: ".gtranslate_wrapper"-->
<!--    };-->

<!--    window.onload = function () {-->
<!--        if (window.__gtranslateInitialized) return;-->
<!--        window.__gtranslateInitialized = true;-->

<!--        var userLanguage = navigator.language || navigator.userLanguage;-->
<!--        userLanguage = userLanguage.split("-")[0];-->

<!--        if (userLanguage === "bn") {-->
<!--            var gtranslateElement = document.querySelector(".gtranslate_wrapper select");-->
<!--            if (gtranslateElement) {-->
<!--                gtranslateElement.value = "bn";-->
<!--                gtranslateElement.dispatchEvent(new Event("change"));-->
<!--            }-->
<!--        }-->
<!--    };-->
<!--</script>-->
<!--<script src="https://cdn.gtranslate.net/widgets/latest/dropdown.js" defer></script>-->
<!--@endonce-->


<!--<script>-->
<!--  $(document).ready(function(){-->
<!--    $('.plus-button').click(function(){-->
<!--        var url = $(this).data('url');-->
<!--      $('#pdfFrame').attr('src', url);-->
<!--      $('#pdfModal').fadeIn();-->
<!--    });-->

<!--    $('.close-btn, .modal').click(function(e){-->
<!--      if (e.target !== this) return;-->
<!--      $('#pdfModal').fadeOut();-->
<!--      $('#pdfFrame').attr('src', '');-->
<!--    });-->
<!--  });-->
<!--</script>-->



<!-- Count-up on view -->
<script>
  (function () {
    const counters = document.querySelectorAll('.count');
    const speed = 500; // lower = faster

    function animate(el) {
      const target = +el.getAttribute('data-target');
      const start = 0;
      const duration = 1200; // ms
      const startTime = performance.now();

      function tick(now) {
        const progress = Math.min((now - startTime) / duration, 1);
        const value = Math.floor(progress * (target - start) + start);
        el.textContent = value.toLocaleString();
        if (progress < 1) requestAnimationFrame(tick);
      }
      requestAnimationFrame(tick);
    }

    // Trigger animation when visible
    const io = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.dataset.played) {
          animate(entry.target);
          entry.target.dataset.played = "true";
        }
      });
    }, { threshold: 0.35 });

    counters.forEach(c => io.observe(c));
  })();
</script>


<script>
    // slider sweper 
var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
</script>

<script>
    
    $(window).on('scroll', function () {
        let scrollTop = $(this).scrollTop();
        
        console.log(scrollTop);

        // Show image after 100px scroll
        if (scrollTop >= 100) {
            $('.homeBannerBrid .img2').addClass('visible');
            $('.homeBannerBrid .img1').addClass('visible');
            $('.topScrollImg img').addClass('visible');
        } else {
            $('.homeBannerBrid .img2').removeClass('visible');
            $('.homeBannerBrid .img1').removeClass('visible');
            $('.topScrollImg img').removeClass('visible');
           
        }
        // Show image after 100px scroll
        if (scrollTop >= 2000) {
            $('.homeBannerBrid .img3').addClass('visible');
        } else {
            // $('.homeBannerBrid .img3').removeClass('visible');
            $('.homeBannerBrid .img3').addClass('visible');
           
        }

        // Horizontal movement
        let move = scrollTop - 100;
        let moveX = move * 9.0;
        
        //  moveX +=200;

        // Rotation logic: swing left and right
          let rotateDeg = Math.sin((scrollTop + 50) / 100) * 15; // Adjust 100 and 15 for frequency and tilt
          
        console.log('moveX:', moveX);

        // Apply transform: move and rotate
        $('.homeBannerBrid .img2').css('transform', `translateX(${moveX}px) rotate(${rotateDeg}deg)`);
        $('.homeBannerBrid .img3').css('transform', `translateX(${-moveX}px) rotate(${-rotateDeg}deg)`);
    });
</script>


  <script>
  $(document).ready(function(){
    $('.certificate-sldier').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 2500,
      infinite: true,
      speed: 300,
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>


        <script>
              Fancybox.bind('[data-fancybox="gallery"]', {
              }); 
        </script>
        
        <script>
            $('.accordion-header').click(function() {
                const icon = $(this).find('i');
                $('.accordion-header').not(this).removeClass('active').find('i').attr('class', 'fas fa-plus');
                $('.accordion-content').not($(this).next()).slideUp();
        
                $(this).toggleClass('active');
                $(this).next('.accordion-content').slideToggle();
                icon.toggleClass('fa-plus fa-minus');
            });
        </script>
        
        <script>
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 200) {
                        $('#scrollTopBtn').fadeIn();
                    } else {
                        $('#scrollTopBtn').fadeOut();
                    }
                });
        
                $('#scrollTopBtn').click(function () {
                    $('html, body').animate({scrollTop: 0}, 600);
                    return false;
                });
            });
        </script>
        
        <script>
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 50) {
                        $('.main-header').addClass('sticky-active');
                    } else {
                        $('.main-header').removeClass('sticky-active');
                    }
                });
            });
        </script>

        <script>
            (function ($) {
                "use strict";

                // call our plugin
                var Nav = new hcOffcanvasNav("#main-nav", {
                    disableAt: false,
                    customToggle: ".toggle",
                    levelSpacing: 40,
                    navTitle: "Main Menu",
                    levelTitles: true,
                    levelTitleAsBack: true,
                    pushContent: false,
                    labelClose: false,
                });

                // add new items to original nav
                $("#main-nav")
                    .find("li.add")
                    .children("a")
                    .on("click", function () {
                        var $this = $(this);
                        var $li = $this.parent();
                        var items = eval("(" + $this.attr("data-add") + ")");

                        $li.before('<li class="new"><a href="#">' + items[0] + "</a></li>");

                        items.shift();

                        if (!items.length) {
                            $li.remove();
                        } else {
                            $this.attr("data-add", JSON.stringify(items));
                        }

                        Nav.update(true); // update DOM
                    });

                // demo settings update

                const update = function (settings) {
                    if (Nav.isOpen()) {
                        Nav.on("close.once", function () {
                            Nav.update(settings);
                            Nav.open();
                        });

                        Nav.close();
                    } else {
                        Nav.update(settings);
                    }
                };

                $(".actions")
                    .find("a")
                    .on("click", function (e) {
                        e.preventDefault();

                        var $this = $(this).addClass("active");
                        var $siblings = $this.parent().siblings().children("a").removeClass("active");
                        var settings = eval("(" + $this.data("demo") + ")");

                        if ("theme" in settings) {
                            $("body")
                                .removeClass()
                                .addClass("theme-" + settings["theme"]);
                        } else {
                            update(settings);
                        }
                    });

                $(".actions")
                    .find("input")
                    .on("change", function () {
                        var $this = $(this);
                        var settings = eval("(" + $this.data("demo") + ")");

                        if ($this.is(":checked")) {
                            update(settings);
                        } else {
                            var removeData = {};
                            $.each(settings, function (index, value) {
                                removeData[index] = false;
                            });

                            update(removeData);
                        }
                    });
            })(jQuery);
        </script>

        <script>
            $(document).ready(function(){

           
            $("#division").on("change", function(){
                var id = $(this).val();
                  if(id==''){
                   $('#district').empty().append('<option value="">No District</option>');
                   $('#city').empty().append('<option value="">No City</option>');
                  }
                  var url ='{{url('geo/filter')}}' + '/'+id;
                  $.get(url,function(data){
                    $('#district').empty().append(data.geoData);
                    $('#city').empty().append('<option value="">No City</option>');
                  });   
            });

            $("#district").on("change", function(){
                var id = $(this).val();
                  if(id==''){
                   $('#city').empty().append('<option value="">No City</option>');
                  }
                  var url ='{{url('geo/filter')}}' + '/'+id;
                  $.get(url,function(data){
                    $('#city').empty().append(data.geoData);  
                  });   
            });
            
        });
        </script>
        
        <script>
            $(document).on('click','.subsriberbtm',function(e){
              e.preventDefault();
               var url = $('#subscirbeForm').data('url');
               var subscribeEmail =$('#subscribeEmail').val();
                    $.ajax({
                      url: url,
                      type: 'POST',
                      dataType: 'json',
                       data: {email : subscribeEmail},
                      cache: false,
        
                    })
                    .done(function(data) {
                        if(data.success)
                          {
                            $("#subscribeemailMsg").html("<p style='color: #f6f6f6;background: #009688;margin: 5px 0;padding: 4px 5px;border-radius: 4px;font-weight: bold;line-height: 14px;font-size: 12px;'>"+ data.message +"</p>");
                            $("#subscribeEmail").css("border","");
                            $("#subscirbeForm")[0].reset();
                          }else{
                            $("#subscribeemailMsg").html("<p style='color: #f6f6f6;background: #ff9800;margin: 5px 0;padding: 4px 5px;border-radius: 4px;font-weight: bold;line-height: 14px;font-size: 12px;'>"+ data.message +"</p>");
                          }
                    })
                    .fail(function() {
                      // alert("error");
                    });
        
            });
        
            $("#subscribeEmail").keyup(function(){
                  if(validateEmail()){
                      $("#subscribeEmail").css("border","2px solid green");
                      $("#subscribeemailMsg").html("<p style='color: #f6f6f6;background: #009688;margin: 5px 0;padding: 4px 5px;border-radius: 4px;font-weight: bold;line-height: 14px;font-size: 12px;'>Validated Email</p>");
                  }else{
                        var subscribeEmail=$("#subscribeEmail").val();
                       if(subscribeEmail==''||subscribeEmail==null || subscribeEmail=='undefined'){
                            $("#subscribeemailMsg").html("<p style='color: white;background: red;margin: 5px 0;padding: 4px 5px;border-radius: 4px;font-weight: bold;line-height: 14px;font-size: 12px;'>Please Get a Verified Email</p>");
                        }else{
                          $("#subscribeEmail").css("border","2px solid red");
                          $("#subscribeemailMsg").html("");
                        }
                  }
              });
        
            function validateEmail(){
                  var subscribeEmail=$("#subscribeEmail").val();
        
                   var reg =/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                   if(reg.test(subscribeEmail)){
                      return true;
                   }else{
                      return false;
              }
        
            }
        </script>
        

        
        <script>
            function openSearch() {
              document.getElementById("myOverlay").style.display = "block";
            }
            
            function closeSearch() {
              document.getElementById("myOverlay").style.display = "none";
            }
        </script>
        
        <script>
            (function ($) {
                "use strict";

                // call our plugin
                var Nav = new hcOffcanvasNav("#main-nav", {
                    disableAt: false,
                    customToggle: ".toggle",
                    levelSpacing: 40,
                    navTitle: "Main Menu",
                    levelTitles: true,
                    levelTitleAsBack: true,
                    pushContent: false,
                    labelClose: false,
                });

                // add new items to original nav
                $("#main-nav")
                    .find("li.add")
                    .children("a")
                    .on("click", function () {
                        var $this = $(this);
                        var $li = $this.parent();
                        var items = eval("(" + $this.attr("data-add") + ")");

                        $li.before('<li class="new"><a href="#">' + items[0] + "</a></li>");

                        items.shift();

                        if (!items.length) {
                            $li.remove();
                        } else {
                            $this.attr("data-add", JSON.stringify(items));
                        }

                        Nav.update(true); // update DOM
                    });

                // demo settings update

                const update = function (settings) {
                    if (Nav.isOpen()) {
                        Nav.on("close.once", function () {
                            Nav.update(settings);
                            Nav.open();
                        });

                        Nav.close();
                    } else {
                        Nav.update(settings);
                    }
                };

                $(".actions")
                    .find("a")
                    .on("click", function (e) {
                        e.preventDefault();

                        var $this = $(this).addClass("active");
                        var $siblings = $this.parent().siblings().children("a").removeClass("active");
                        var settings = eval("(" + $this.data("demo") + ")");

                        if ("theme" in settings) {
                            $("body")
                                .removeClass()
                                .addClass("theme-" + settings["theme"]);
                        } else {
                            update(settings);
                        }
                    });

                $(".actions")
                    .find("input")
                    .on("change", function () {
                        var $this = $(this);
                        var settings = eval("(" + $this.data("demo") + ")");

                        if ($this.is(":checked")) {
                            update(settings);
                        } else {
                            var removeData = {};
                            $.each(settings, function (index, value) {
                                removeData[index] = false;
                            });

                            update(removeData);
                        }
                    });
            })(jQuery);
        </script>
        
        @stack('js')
        
        
    </body>
</html>
