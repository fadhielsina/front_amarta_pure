        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">

            <!-- site-header-menu -->
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--site-navigation -->
                                <div class="site-navigation d-flex align-items-center justify-content-between">
                                    <!-- site-branding -->
                                    <div class="site-branding ">
                                        <a class="home-link" href="index.html" title="Amarta Pure Water" rel="home">
                                            <img id="logo-img" style="width: 120px; height:70px;" class="img-fluid auto_size" src="{{ url('landing_page') }}/images/logo/logo_amarta_pure.png" alt="logo-img">
                                        </a>
                                    </div><!-- site-branding end -->
                                    <div class="border-box-block">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                                <span class="menubar-box">
                                                    <span class="menubar-inner"></span>
                                                </span>
                                            </div>
                                            <!-- menu -->
                                            <nav class="main-menu menu-mobile" id="menu">
                                                <ul class="menu">
                                                    <li class="mega-menu-item {{ request()->is('/') ? 'active' : '' }}">
                                                        <a href="/">Home</a>
                                                    </li>
                                                    <li class="mega-menu-item {{ request()->is('about-us') ? 'active' : '' }}">
                                                        <a href="/about-us">About Us</a>
                                                    </li>
                                                    <li class="mega-menu-item {{ request()->is('waralaba') ? 'active' : '' }}">
                                                        <a href="/waralaba">Waralaba</a>
                                                    </li>
                                                    <li class="mega-menu-item {{ request()->is('contact-us') ? 'active' : '' }}">
                                                        <a href="/contact-us">Contact us</a>
                                                    </li>
                                                </ul>
                                            </nav><!-- menu end -->
                                        </div>
                                    </div>
                                    <a href="https://wa.me/08118877225">
                                        <i class="fa fa-whatsapp" style="font-size: 50px;"></i>
                                    </a>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- site-header-menu end-->
        </header><!--header end-->