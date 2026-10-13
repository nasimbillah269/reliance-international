  <footer class="footer-wrapper footer-layout1" data-bg-src="{{asset(assetLink().'/assets/img/bg/footer-bg.jpg')}}">
     <div class="footer-top">
       <div class="shadow-color"></div>
       <div class="container">
         <div class="cta-style1">
           <div class="row g-5 align-items-center justify-content-between">
             <div class="col-lg-6">
               <div class="cta-content">
                 <h2 class="cta-title">Ready to get started? </h2>
                 <p class="cta-text">It only takes a few minutes to Contact </p>
                 <a href="https://smkhaninternational.com/contact-us" class="vs-btn style2">Contact Us</a>
               </div>
             </div>
             <div class="col-md-5 col-sm-6">
               <div class="cta-image d-lg-block d-none">
                 <img src="{{asset(assetLink().'/assets/img/newsletter.png')}}" alt="CTA Image" />
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="widget-area">
       <div class="container">
         <div class="row g-5 justify-content-between">
           <div class="col-md-6 col-xl-3">
             <div class="widget footer-widget">
               <div class="vs-widget-about">
                 <div class="footer-logo">
                   <a href="{{route('index')}}l"><img src="{{asset(general()->logo())}}" alt="{{general()->title}}" class="logo" /></a>
                 </div>
                 <p class="footer-text">
                     SM KHAN INTERNATIONAL is a premier travel agency offering personalized travel experiences, tour packages, and reliable travel services worldwide
                      </p>
                
               </div>
             </div>
           </div>
           <div class="col-md-6 col-xl-2">
             <div class="widget widget_nav_menu footer-widget">
               <h3 class="widget_title">Useful Links </h3>
                @if($menu = menu('Footer Two'))
               <div class="menu-all-pages-container">
                 <ul class="menu">
                     @foreach($menu->subMenus as $menu)
                     <li><a href="{{asset($menu->menuLink())}}"><i class="far fa-angle-right"></i> {{$menu->menuName()}} </a></li>
                    @endforeach
                 </ul>
               </div>
               @endif
             </div>
           </div>
           <div class="col-md-6 col-xl-3">
             <div class="widget footer-widget">
               <h4 class="widget_title">Our Gallery </h4>
               <div class="sidebar-gallery">
                 <a href="{{asset(assetLink().'/assets/img/footer/insta1.jpg')}}" class="popup-image"><img src="{{asset(assetLink().'/assets/img/footer/insta1.jpg')}}" alt="Gallery Image" class="w-100" />
                 </a>
                 <a href="{{asset(assetLink().'/assets/img/footer/insta2.jpg')}}" class="popup-image"><img src="{{asset(assetLink().'/assets/img/footer/insta2.jpg')}}" alt="Gallery Image" class="w-100" />
                 </a>
                 <a href="{{asset(assetLink().'/assets/img/footer/insta3.jpg')}}" class="popup-image"><img src="{{asset(assetLink().'/assets/img/footer/insta3.jpg')}}" alt="Gallery Image" class="w-100" />
                 </a>
                 <a href="{{asset(assetLink().'/assets/img/footer/insta4.jpg')}}" class="popup-image"><img src="{{asset(assetLink().'/assets/img/footer/insta4.jpg')}}" alt="Gallery Image" class="w-100" />
                 </a>
                 <a href="{{asset(assetLink().'/assets/img/footer/insta5.jpg')}}" class="popup-image"><img src="{{asset(assetLink().'/assets/img/footer/insta5.jpg')}}" alt="Gallery Image" class="w-100" />
                 </a>
                 <a href="{{asset(assetLink().'/assets/img/footer/insta5.jpg')}}" class="popup-image"><img src="{{asset(assetLink().'/assets/img/footer/insta5.jpg')}}" alt="Gallery Image" class="w-100" />
                 </a>
                 
               </div>
             </div>
           </div>
           <div class="col-md-6 col-xl-3">
             <div class="widget footer-widget">
               <h4 class="widget_title">Contact Us </h4>
                <div class="footerContactInof">
                    <p>
                        <b>Corporate Head Office:</b> <br>
                         {{general()->address_one}}
                    </p>
                   
                </div>
                <div class="footerContactInof">
                     <p class="mt-2">
                        <b>West Bengal Branch:</b> <br>
                         {{general()->address_two}}
                    </p>
                   
                </div>
                <div class="footerContactInof mt-2">
                      <p> <b>GST: </b>  29NMHPK5181E1ZK</p>
               
                   
                </div>
                <div class="footerContactInof mt-2">
                       <p><b>Registration No: </b> -0917P180024135496</p>
               
                   
                </div>
                
                
                <div class="footerContactInof mt-2">
                    <h6>Phone:</h6>
                    <p>
                         {{general()->mobile}}
                    </p>
                </div>
                <div class="footerContactInof">
                    <h6>Email: </h6>
                     <p>
                        {{general()->email}}
                    </p>
                </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="container">
       <div class="copyright-wrap">
         <div class="row justify-content-between align-items-center">
           <div class="col-lg-auto">
             <p class="copyright-text">Copyright  <i class="fal fa-copyright"></i>
               <a href="#">
              {{general()->title}} </a>All Rights Reserved.
             </p>
           </div>
           <div class="col-auto d-none d-lg-block">
             <div class="copyright-menu">
               <div class="social-style1">
                    @if(general()->facebook_link)
               <a href="{{general()->facebook_link}}"><i class="fab fa-facebook-f"></i></a>
                @endif
                
                @if(general()->instagram_link)
               <a href="{{general()->instagram_link}}"><i class="fab fa-instagram"></i></a>
                @endif
               
               @if(general()->pinterest_link)
               <a href="{{general()->pinterest_link}}"><i class="fab fa-pinterest-p"></i></a>
               @endif
               
                @if(general()->twitter_link)
               <a href="{{general()->twitter_link}}"><i class="fab fa-twitter"></i></a>
                @endif
                 </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </footer>