<header class="eltdf-page-header">
    <div class="eltdf-menu-area eltdf-menu-center">
        <div class="eltdf-vertical-align-containers">
            <div class="eltdf-position-left">
                <div class="eltdf-position-left-inner">
                    <div class="eltdf-logo-wrapper eltdf-svg-logo">
                        <a itemprop="url" href="{{asset('front')}}/index.html">
                            <span class="eltdf-logo-svg-path">
                                <img id="logo-img" style="height:50px;" class="img-center" src="{{ asset('landing_page') }}/images/logo/logo_amarta_pure.png" alt="logo-img">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="eltdf-position-center">
                <div class="eltdf-position-center-inner">

                    <nav class="eltdf-main-menu eltdf-drop-down eltdf-default-nav">
                        <ul id="menu-main-menu" class="clearfix">
                            <li id="nav-menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom {{ request()->is('/') ? 'eltdf-active-item' : '' }}">
                                <a href="{{url('/')}}" class=" current "><span class="item_outer"><span class="item_text">Home</span></span></a>
                            </li>
                            <li id="nav-menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom {{ request()->is('about-us') ? 'eltdf-active-item' : '' }}">
                                <a href="{{url('about-us')}}" class=""><span class="item_outer"><span class="item_text">About Us</span></span></a>
                            </li>
                            <li id="nav-menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom {{ request()->is('waralaba') ? 'eltdf-active-item' : '' }}">
                                <a href="{{url('waralaba')}}" class=""><span class="item_outer"><span class="item_text">Waralaba</span></span></a>
                            </li>
                            <li id="nav-menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom {{ request()->is('blog') ? 'eltdf-active-item' : '' }}">
                                <a href="{{url('blog')}}" class=""><span class="item_outer"><span class="item_text">Blog</span></span></a>
                            </li>
                            <li id="nav-menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom {{ request()->is('pakar') ? 'eltdf-active-item' : '' }}">
                                <a href="{{url('pakar')}}" class=""><span class="item_outer"><span class="item_text">Pakar</span></span></a>
                            </li>
                            <li id="nav-menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom {{ request()->is('contact-us') ? 'eltdf-active-item' : '' }}">
                                <a href="{{url('contact-us')}}" class=""><span class="item_outer"><span class="item_text">Contact</span></span></a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
            <!-- Side Menu -->
            <div class="eltdf-position-right">
                <div class="eltdf-position-right-inner">
                    <a class="eltdf-side-menu-button-opener eltdf-icon-has-hover eltdf-side-menu-button-opener-predefined" href="javascript:void(0)">
                        <span class="eltdf-side-menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 25.2" class="eltdf-menu-opener">
                                <line y1="7.6" x2="24" y2="7.6" />
                                <line x1="4.1" y1="0.5" x2="28.1" y2="0.5" />
                                <line x1="10.1" y1="24.6" x2="34.1" y2="24.6" />
                                <line x1="13" y1="17.6" x2="37" y2="17.6" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Mobilee -->
<header class="eltdf-mobile-header">
    <div class="eltdf-mobile-header-inner">
        <div class="eltdf-mobile-header-holder">
            <div class="eltdf-grid">
                <div class="eltdf-vertical-align-containers">
                    <div class="eltdf-position-left">
                        <div class="eltdf-position-left-inner">
                            <div class="eltdf-mobile-logo-wrapper">
                                <a itemprop="url" href="{{asset('front')}}/index.html">
                                    <span class="eltdf-logo-svg-path">
                                        <img id="logo-img" style="width: 75%; height:50px;" class="img-center" src="{{ asset('landing_page') }}/images/logo/logo_amarta_pure.png" alt="logo-img">
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="eltdf-position-right">
                        <div class="eltdf-position-right-inner">
                            <div class="eltdf-mobile-menu-opener eltdf-mobile-menu-opener-predefined">
                                <a href="javascript:void(0)">
                                    <span class="eltdf-mobile-menu-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 25.2" class="eltdf-menu-opener">
                                            <line y1="7.6" x2="24" y2="7.6" />
                                            <line x1="4.1" y1="0.5" x2="28.1" y2="0.5" />
                                            <line x1="10.1" y1="24.6" x2="34.1" y2="24.6" />
                                            <line x1="13" y1="17.6" x2="37" y2="17.6" />
                                        </svg> </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="eltdf-mobile-nav" role="navigation" aria-label="Mobile Menu">
            <div class="eltdf-grid">
                <ul id="menu-main-menu-1" class="">
                    <li id="mobile-menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom {{ request()->is('/') ? 'current-menu-ancestor' : '' }}">
                        <a href="{{url('/')}}" class="eltdf-mobile-no-link"><span>Home</span></a>
                    </li>
                    <li id="mobile-menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom {{ request()->is('about-us') ? 'current-menu-ancestor' : '' }}">
                        <a href="{{url('about-us')}}" class="eltdf-mobile-no-link"><span>About Us</span></a>
                    </li>
                    <li id="mobile-menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom {{ request()->is('waralaba') ? 'current-menu-ancestor' : '' }}">
                        <a href="{{url('waralaba')}}" class=" eltdf-mobile-no-link"><span>Waralaba</span></a>
                    </li>
                    <li id="mobile-menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom {{ request()->is('blog') ? 'current-menu-ancestor' : '' }}">
                        <a href="{{url('blog')}}" class=" eltdf-mobile-no-link"><span>Blog</span></a>
                    </li>
                    <li id="mobile-menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom {{ request()->is('pakar') ? 'current-menu-ancestor' : '' }}">
                        <a href="{{url('pakar')}}" class=" eltdf-mobile-no-link"><span>Pakar</span></a>
                    </li>
                    <li id="mobile-menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom {{ request()->is('contact-us') ? 'current-menu-ancestor' : '' }}">
                        <a href="{{url('contact-us')}}" class=" eltdf-mobile-no-link"><span>Contact</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>