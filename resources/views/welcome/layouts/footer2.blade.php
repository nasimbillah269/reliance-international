<footer>
    <div class="footerWidgetArea" >
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-widget">
                        <h4>Ocidental Peninsula Grupo</h4>
                        <!--<p><b>Address:</b> {!!general()->address_one!!}</p>-->
                        <!--<p><b>Email:</b> {!!general()->email!!}</p>-->
                        <!--<p><b>Phone:</b> {!!general()->mobile!!}</p>-->
                        <p>
                            {!!general()->address_one!!}
                        </p>
                        <p><b>Telephone:</b> {{general()->mobile}}‬</p>
                        <p><b>Email:</b> {!!general()->email!!}</p>
                    </div>
                </div>
              
                <div class="col-md-2">
                    @if($menu = menu('Footer Three'))
                    <div class="footer-widget">
                        <h4>Quick Link</h4>
                        <ul class="footer-menu">
                            @foreach($menu->subMenus as $menu)
                            <li><a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a></li>
                            @endforeach
                        </ul>
                        <!--<ul class="">-->
                        <!--    <li >-->
                        <!--        <a href="#">home</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#worldwide">worldwide</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#">service</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#">people & design</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#">sustainability</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#">production</a>-->
                        <!--    </li>-->
                        <!--    <li >-->
                        <!--        <a href="#">products & customers</a>-->
                        <!--    </li>-->
                            
                        <!--</ul>-->
                    </div>
                    @endif
                </div>
                <div class="col-md-3">
                    @if($menu = menu('Footer Two'))
                    <div class="footer-widget">
                        <h4>Our Company</h4>
                        <ul class="footer-menu">
                            @foreach($menu->subMenus as $menu)
                            <li><a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a></li>
                            @endforeach
                        </ul>
                    
                      
                    </div>
                    @endif
                </div>
                
                  <div class="col-md-3">
                    <div class="footer-widget">
                        <h4>Social Link</h4>
                        
                      
                         <ul class="footerSoiclaLink">
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
                       
                        
                        
                        
                        <!--  @if($menu = menu('Footer Two'))-->
                        <!--   <ul class="footer-menu">-->
                        <!--    @foreach($menu->subMenus as $menu)-->
                        <!--    <li><a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a></li>-->
                        <!--    @endforeach-->
                        <!--</ul>-->
                        <!--@endif-->
                    </div>
                </div>
                <!--<div class="col-md-3">-->
                <!--    <div class="footer-widget">-->
                <!--        <h4>CONTACT US</h4>-->
                <!--        <p><b>Email:</b> {!!general()->email!!}</p>-->
                <!--        <p><b>Hotline:</b> {!!general()->mobile!!} </p>-->
                <!--        <p><b>Hotline:</b> 01948-800600 </p>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-4">-->
                <!--    <div class="footer-widget">-->
                <!--         <h4>SOCIAL LINK</h4>-->
                <!--       <div class="socialMenu">-->
                <!--        <ul>-->
                <!--            @if(general()->facebook_link)-->
                <!--            <li><a href="{{general()->facebook_link}}"><i class="fa fa-facebook"></i></a></li>-->
                <!--            @endif-->
                <!--            @if(general()->twitter_link)-->
                <!--            <li><a href="{{general()->twitter_link}}"><i class="fa fa-twitter"></i></a></li>-->
                <!--            @endif-->
                            <!--@if(general()->instagram_link)-->
                            <!--<li><a href="{{general()->instagram_link}}"><i class="fa fa-instagram"></i></a></li>-->
                            <!--@endif-->
                <!--            @if(general()->linkedin_link)-->
                <!--            <li><a href="{{general()->linkedin_link}}"><i class="fa fa-linkedin"></i></a></li>-->
                <!--            @endif-->
                            <!--@if(general()->youtube_link)-->
                            <!--<li><a href="{{general()->youtube_link}}"><i class="fa fa-youtube-play"></i></a></li>-->
                            <!--@endif-->
                            <!--@if(general()->pinterest_link)-->
                            <!--<li><a href="{{general()->pinterest_link}}"><i class="fa fa-pinterest-p"></i></a></li>-->
                            <!--@endif-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-5">-->
                <!--    <div class="row">-->
                <!--        <div class="col-md-6">-->
                <!--            <div class="footer-widget">-->
                <!--                <h4>FACTORY OFFICE</h4>-->
                <!--                <p><b>Address:</b> {!!general()->address_one!!}</p>-->
                <!--                <p><b>Email:</b> {!!general()->email!!}</p>-->
                <!--                <p><b>Hotline:</b> {!!general()->mobile!!}</p>-->
                                
                <!--            </div>-->
                <!--            @if($menu = menu('Footer Two'))-->
                <!--            <div class="footer-widget">-->
                <!--                <h4>{{$menu->name}}</h4>-->
                <!--                <ul class="footer-menu">-->
                <!--                    @foreach($menu->subMenus as $menu)-->
                <!--                    <li><a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a></li>-->
                <!--                    @endforeach-->
                <!--                </ul>-->
                <!--            </div>-->
                <!--            @endif-->
                <!--        </div>-->
                <!--        <div class="col-md-6">-->
                <!--            @if($menu = menu('Footer Three'))-->
                <!--            <div class="footer-widget">-->
                <!--                <h4>{{$menu->name}}</h4>-->
                <!--                <ul class="footer-menu">-->
                <!--                    @foreach($menu->subMenus as $menu)-->
                <!--                    <li><a href="{{asset($menu->menuLink())}}">{{$menu->menuName()}}</a></li>-->
                <!--                    @endforeach-->
                <!--                </ul>-->
                <!--            </div>-->
                <!--            @endif-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-md-3">-->
                <!--    <div class="footer-widget">-->
                <!--        <h4>Office Location</h4>-->
                <!--        <p><b>Address:</b> {!!general()->address_one!!}</p>-->
                <!--        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29186.920218312618!2d90.35768829914689!3d23.876671472604375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d05e7074dd%3A0xd1c58803049f00c7!2sUttara%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1700193399770!5m2!1sen!2sbd" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
            <!--<div class="row">-->
            <!--    <div class="col-md-12">-->
            <!--        <div class="socialMenu">-->
            <!--            <ul>-->
            <!--                @if(general()->facebook_link)-->
            <!--                <li><a href="{{general()->facebook_link}}"><i class="fa fa-facebook"></i></a></li>-->
            <!--                @endif-->
            <!--                @if(general()->twitter_link)-->
            <!--                <li><a href="{{general()->twitter_link}}"><i class="fa fa-twitter"></i></a></li>-->
            <!--                @endif-->
                            <!--@if(general()->instagram_link)-->
                            <!--<li><a href="{{general()->instagram_link}}"><i class="fa fa-instagram"></i></a></li>-->
                            <!--@endif-->
            <!--                @if(general()->linkedin_link)-->
            <!--                <li><a href="{{general()->linkedin_link}}"><i class="fa fa-linkedin"></i></a></li>-->
            <!--                @endif-->
                            <!--@if(general()->youtube_link)-->
                            <!--<li><a href="{{general()->youtube_link}}"><i class="fa fa-youtube-play"></i></a></li>-->
                            <!--@endif-->
                            <!--@if(general()->pinterest_link)-->
                            <!--<li><a href="{{general()->pinterest_link}}"><i class="fa fa-pinterest-p"></i></a></li>-->
                            <!--@endif-->
            <!--            </ul>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
        <div class="container">
      <div class="row">
          <div class="col-md-2"></div>
       
        <div class="col-md-8">
               <div class="cory-right-section">
                <span class="copyright">© 2004 <a href="{{route('index')}}">{{general()->title}}</a> | All Rights Reserved. </span>
                <!--<span class="copyright">© 2004 - {{date('Y')}} <a href="{{route('index')}}">{{general()->title}}</a> | All Rights Reserved. </span>-->
            </div>
        </div>
           <div class="col-md-2"></div>
        <!--<div class="col-md-3">-->
        <!--     <ul class="footerSoiclaLink">-->
        <!--                    @if(general()->facebook_link)-->
        <!--                    <li><a href="{{general()->facebook_link}}" target="_blank"><i class="fa fa-facebook"></i></a></li>-->
        <!--                    @endif-->
        <!--                    @if(general()->twitter_link)-->
        <!--                    <li><a href="{{general()->twitter_link}}" target="_blank"><i class="fa fa-twitter"></i></a></li>-->
        <!--                    @endif-->
                            <!--@if(general()->instagram_link)-->
                            <!--<li><a href="{{general()->instagram_link}}"><i class="fa fa-instagram"></i></a></li>-->
                            <!--@endif-->
        <!--                    @if(general()->linkedin_link)-->
        <!--                    <li><a href="{{general()->linkedin_link}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>-->
        <!--                    @endif-->
        <!--                    @if(general()->youtube_link)-->
        <!--                    <li><a href="{{general()->youtube_link}}"><i class="fa fa-youtube-play"></i></a></li>-->
        <!--                    @endif-->
                            <!--@if(general()->pinterest_link)-->
                            <!--<li><a href="{{general()->pinterest_link}}"><i class="fa fa-pinterest-p"></i></a></li>-->
                            <!--@endif-->
        <!--                </ul>-->
        <!--</div>-->
 
    </div>
    </div>
</footer>
