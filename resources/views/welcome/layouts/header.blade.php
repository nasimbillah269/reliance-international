   <header class="vs-header header-layout1">
     <div class="container">
       <div class="header-top">
         <div class="row justify-content-between align-items-center">
           <div class="col d-none d-lg-block">
             <ul class="header-contact">
               
               <li><i class="fas fa-phone-alt"></i>  <a href="#"> {{general()->mobile}} </a></li>
               <li><i class="fas fa-envelope"></i>  <a href="#"> {{general()->email}} </a>
               </li>
             </ul>
           </div>
           <div class="col-auto">
             <div class="header-social">
                 
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
           <div class="col-auto d-flex ">
             <div class="header-dropdown">
               <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false">English </a>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                 <li>
                   <a href="#">Bangla </a>
                   <a href="#">English </a>
                
                 </li>
               </ul>
             </div>
             <!--<a class="user-btn" href="sign-up.html"><i class="far fa-user-circle"></i></a>-->
           </div>
         </div>
       </div>
     </div>
     <div class="sticky-wrapper">
       <div class="sticky-active">
         <div class="container position-relative z-index-common">
           <div class="row align-items-center justify-content-between">
             <div class="col-auto">
               <div class="vs-logo">
                 <a href="{{route('index')}}"><img src="{{asset(general()->logo())}}" alt="{{general()->title}}" /></a>
               </div>
             </div>
             <div class="col text-end text-xl-center">
                 
               <nav class="main-menu  menu-style1 d-none d-lg-block">
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
                 
               </nav>
               
               <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
             </div>
             <!--<div class="col-auto d-none d-xl-block">-->
             <!--  <div class="header-btns">-->
             <!--    <button class="searchBoxTggler"><i class="fal fa-search"></i></button>-->
             <!--    <button class="sideCartToggler"><i class="fal fa-shopping-bag"></i><span class="button-badge">2 </span></button>-->
             <!--    <button class="sideMenuToggler"><i class="fal fa-bars"></i></button>-->
             <!--  </div>-->
             <!--</div>-->
           </div>
         </div>
       </div>
     </div>
   </header>