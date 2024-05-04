<!--header start-->
<header id="masthead" class="header ttm-header-style-01">
    <!-- site-header-menu -->
    <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
        <div class="site-header-menu-inner ttm-stickable-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--site-navigation -->
                        <div class="site-navigation d-flex flex-row align-items-center justify-content-between">
                            <!-- site-branding -->
                            <div class="site-branding ">
                                <a class="home-link" href="/" title="Business" rel="home">
                                    <img id="logo-img" style="width: 120px; height:70px;" class="img-center" src="{{ url('landing_page') }}/images/logo/logo_amarta_pure.png" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                            <div class="d-flex flex-row">
                                <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                    <span class="menubar-box">
                                        <span class="menubar-inner"></span>
                                    </span>
                                </div>
                                <!-- menu -->
                                <nav class="main-menu menu-mobile" id="menu">
                                    <ul class="menu">
                                        <li class="mega-menu-item {{ request()->is('/') ? 'active' : '' }}">
                                            <a href="/" class="mega-menu-link">Home</a>
                                        </li>
                                        <li class="mega-menu-item megamenu-fw {{ request()->is('about-us') ? 'active' : '' }}">
                                            <a href="/about-us" class="mega-menu-link">About Us</a>
                                        </li>
                                        <li class="mega-menu-item megamenu-fw {{ request()->is('waralaba') ? 'active' : '' }}">
                                            <a href="/waralaba" class="mega-menu-link">Waralaba</a>
                                        </li>
                                        <li class="mega-menu-item {{ request()->is('blog') ? 'active' : '' }}">
                                            <a href="/blog" class="mega-menu-link">Blog</a>
                                        </li>
                                        <li class="mega-menu-item megamenu-fw {{ request()->is('pakar') ? 'active' : '' }}">
                                            <a href="/pakar" class="mega-menu-link">Pakar</a>
                                        </li>
                                        <li class="mega-menu-item {{ request()->is('contact-us') ? 'active' : '' }}">
                                            <a href="/contact-us" class="mega-menu-link">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                    <div class="header_search">
                                        <a href="#" class="btn-default search_btn"><i class="ti ti-search"></i></a>
                                        <div class="header_search_content">
                                            <form id="searchbox" method="get" action="#">
                                                <input class="search_query" type="text" id="search_query_top" name="s" placeholder="Enter Keyword" value="">
                                                <button type="submit" class="btn close-search"><i class="fa fa-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- site-header-menu end-->
</header><!--header end-->