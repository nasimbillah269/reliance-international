<header class="sticky-header">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-right-header">
                        <ul>
                            <!--<li> <a href="tel:+8801813129551">-->
                            <!--    <i class="fa-brands fa-whatsapp"></i>-->
                            <!--    <i class="fa-solid fa-plus"></i>-->
                            <!--        <i class="fa fa-phone"></i>  01813129551-->
                            <!--    </a></li>-->
                            <li><a href="">Telephone: {{general()->mobile}}</a></li>
                            <li><a href="mailto:{{general()->email}}"><i class="fa fa-envelope-o"></i> {{general()->email}}</a></li>
                            <!--<li><a href="#"><i class="fa fa-clock-o"></i> Mon – Fri: 8.00 – 18.00</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-left-header">
                        <ul>
                            <li><a href="javascript:void();">Follow on</a></li>
                            @if(general()->facebook_link)
                            <li><a href="{{general()->facebook_link}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            @endif
                            @if(general()->twitter_link)
                            <li><a href="{{general()->twitter_link}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            @endif
                            <!--@if(general()->instagram_link)-->
                            <!--<li><a href="{{general()->instagram_link}}"><i class="fa fa-instagram"></i></a></li>-->
                            <!--@endif-->
                            @if(general()->linkedin_link)
                            <li><a href="{{general()->linkedin_link}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            @endif
                            @if(general()->youtube_link)
                            <li><a href="{{general()->youtube_link}}"><i class="fa fa-youtube-play"></i></a></li>
                            @endif
                            <!--@if(general()->pinterest_link)-->
                            <!--<li><a href="{{general()->pinterest_link}}"><i class="fa fa-pinterest-p"></i></a></li>-->
                            <!--@endif-->
                        </ul>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4  col-6">
                    <div class="logo">
                        <a href="{{route('index')}}"><img src="{{asset(general()->logo())}}" alt="{{general()->title}}"></a>
                        <!--<span>Ocidental peninsula grupo</span>-->
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <div class="languagePart mobileLa">
                        <div class="gtranslate_wrapper"></div>
                    </div>
                    <div class="header-menu">
                      
                        @if($menu = menu('Header Menus'))
                        <ul class="menu">
                            @foreach($menu->subMenus as $menu)
                            <li class="menu-item">
                                <a href="{{ asset($menu->menuLink()) }}">{{ $menu->menuName() }}</a>
                                @if($menu->subMenus->count())
                                <ul class="submenu">
                                    @foreach($menu->subMenus as $submenu)
                                    <li>
                                        <a style="padding: 10px !important; " href="{{ asset($submenu->menuLink()) }}">{{ $submenu->menuName() }}</a>
                                        
                                         @if($submenu->subMenus->count())
                                          <ul class="submenu lastSubmenu">
                                            @foreach($submenu->subMenus as $submenu)
                                            <li>
                                                <a style="padding: 10px !important; " href="{{ asset($submenu->menuLink()) }}">{{ $submenu->menuName() }}</a>
                                            </li>
                                             @endforeach
                                        </ul>
                                         @endif
                                    
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                            <!--  <li class="menu-item">-->
                            <!--    <a href="{{asset(assetLink().'/images/asmara/profile.pdf')}}" target="_blank">Company Profile</a>-->

                            <!--</li>-->
                        </ul>
                        @endif
                    </div>
                </div>
                   <div class="col-md-2">
                     <div class="languagePart ">
                        <div class="gtranslate_wrapper"></div>
                    </div>
                </div>
             
            </div>
        </div>
        <!--<div class="headerNav">-->
        <!--    <div class="container">-->
        <!--    <div class="row">-->
        <!--        <div class="col-md-12 header-menu-section">-->
                    
        <!--        </div>-->
        <!--    </div>-->
                
        <!--    </div>-->
            
        <!--</div>-->
    </div>
</header>


