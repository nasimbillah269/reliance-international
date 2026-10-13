<header class="main-header main-header--three sticky-header sticky-header--normal">
    <div class="container">
        <div class="main-header__inner">
            <div class="main-header__logo logo-retina">
                <a href="{{route('index')}}">
                    <img src="{{asset(general()->logo())}}" alt="{{general()->title}}" width="230" />
                </a>
            </div><!-- /.main-header__logo -->
            <div class="main-header__right">
                <nav class="main-header__nav main-menu">
                    @if($headerMenu = menu('Header Menus'))
                    <ul class="main-menu__list">
                        @foreach($headerMenu->subMenus as $item)
                        @php($itemUrl = asset($item->menuLink()))
                        <li class="{{$item->subMenus->count() ? 'dropdown' : ''}} {{url()->current() == $itemUrl ? 'current' : ''}}">
                            <a href="{{$itemUrl}}">{{$item->menuName()}}</a>
                            @if($item->subMenus->count())
                            <ul>
                                @foreach($item->subMenus as $subItem)
                                <li><a href="{{asset($subItem->menuLink())}}">{{$subItem->menuName()}}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </nav><!-- /.main-header__nav -->
                <div class="main-header__right__right">
                    <div class="main-header__extra d-none d-xl-flex">
                        @include(welcomeTheme().'layouts.social')
                        @if(general()->mobile)
                        @php($headerPhone = trim(explode(',', general()->mobile)[0]))
                        <a href="tel:{{str_replace(' ', '', $headerPhone)}}" class="main-header__phone">
                            <span class="main-header__phone__icon"><i class="icon-phone-call"></i></span>
                            <span class="main-header__phone__text">
                                <small>Call Us Now</small>
                                {{$headerPhone}}
                            </span>
                        </a>
                        @endif
                    </div><!-- /.main-header__extra -->
                    <div class="mobile-nav__btn mobile-nav__toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- /.mobile-nav__toggler -->
                </div><!-- /.main-header__right__right -->
            </div><!-- /.main-header__right -->
        </div><!-- /.main-header__inner -->
    </div><!-- /.container -->
</header><!-- /.main-header -->
