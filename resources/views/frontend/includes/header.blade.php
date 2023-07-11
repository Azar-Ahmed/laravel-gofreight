<header id="ft-header" class="ft-header-section header-style-two">
    <div class="ft-header-top">
        <div class="container">
            <div class="ft-header-top-content d-flex justify-content-between align-items-center">
                <div class="ft-header-top-cta ul-li">
                    <ul>
                        <li><i class="fal fa-envelope"></i>info@gofreight.in</li>
                        <li><i class="fal fa-map-marker-alt"></i>72/1, 1st main, shabarinagar, Bytrayanapura P.O, Bangalore- 560092</li>
                    </ul>
                </div>
                <div class="ft-header-cta-info d-flex">
                    <div class="ft-header-cta-icon d-flex justify-content-center align-items-center">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="ft-header-cta-text headline pera-content">
                        <p>Get In Touch</p>
                        <h3>+91 78297 73773</h3>
                    </div>
                </div>
            </div>
            <!-- <div>
                <marquee behavior="scroll" direction="left" scrollamount="10" onmouseover="this.stop();" onmouseout="this.start();">
                    <h6 class="marq">Declaration: Please declare if the shipment consists of Lithium ion battery & Lithium metal battery</h6>
                </marquee>
            </div> -->
        </div>
    </div>
    <div class="ft-header-main-menu-wrapper">
        <div class="container-fluid">
            <div class="ft-header-main-menu-area position-relative">
                <div class="ft-header-main-menu d-flex align-items-center justify-content-between position-relative">
                    <div class="ft-site-logo-area">
                        <div class="ft-site-logo position-relative">
                            <a href="{{url('/')}}"><img src="{{asset('frontend_assets/img/logo/gofright.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="ft-main-navigation-area">
                        <nav class="ft-main-navigation clearfix ul-li">
                            <ul id="ft-main-nav" class="nav navbar-nav clearfix">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/about')}}">About</a></li>
                                <li class="dropdown">
                                    <a href="{{url('/services')}}">Service</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a href="{{url('/freight-forwarding')}}">Freight Forwording Services </a>
                                            <ul class="dropdown-menu clearfix">
                                                <li><a href="{{url('/air-fright-services')}}">Air Freight Service</a></li>
                                                <li><a href="{{url('/road-freight-services')}}">Road Freight Service</a></li>
                                                <li><a href="{{url('/train-freight-services')}}">Train Freight Service</a></li>
                                                <li><a href="{{url('/ecommerce-services')}}">Ecommerce Service</a></li>
                                                <li><a href="{{url('/warehouse-packaging')}}">Warehose & Packaging</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/custom-clearance')}}">Custom Clearence Services</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Resources</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a href="{{url('airline')}}">Airline Terminology</a></li>
                                        <li><a href="{{url('restricted')}}">Resticted & Banned Items</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Join Us</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a href="{{url('career')}}">Career </a></li>
                                        <li><a href="{{url('franchise')}}">Franchise</a></li>
                                        <li><a href="{{url('drive-together')}}">Drive Togather</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                                @if(session()->has('UserLogin')) 
                                    <li><a href="{{url('profile')}}">Profile</a></li>
                                @else
                                    <li><a href="{{url('login')}}">Login</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                    <div class="ft-header-cta-btn">
                        <a class="d-flex justify-content-center align-items-center" href="{{url('quotation')}}">Request a Quote</a>
                    </div>
                </div>
                <div class="mobile_menu position-relative">
                    <div class="mobile_menu_button open_mobile_menu">
                        <i class="fal fa-bars"></i>
                    </div>
                    <div class="mobile_menu_wrap">
                        <div class="mobile_menu_overlay open_mobile_menu"></div>
                        <div class="mobile_menu_content">
                            <div class="mobile_menu_close open_mobile_menu">
                                <i class="fal fa-times"></i>
                            </div>
                            <div class="m-brand-logo">
                                <a href="{{url('/')}}"><img src="{{asset('frontend_assets/img/logo/gofright.png')}}" alt=""></a>
                            </div>
                            <nav class="mobile-main-navigation  clearfix ul-li">
                                <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('about')}}">About</a></li>
                                    <li class="dropdown">
                                        <a href="#">Service</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li><a href="#">Freight Forwording Services </a></li>
                                        <li><a href="#">Custom Clearence Services</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Resources</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li><a href="{{url('airline')}}">Airline Terminology</a></li>
                                        <li><a href="#">Resticted & Banned Items</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Join Us</a>
                                        <ul class="dropdown-menu clearfix">
                                            <li><a href="{{url('career')}}">Career </a></li>
                                        <li><a href="{{url('franchise')}}">Franchise</a></li>
                                        <li><a href="#">Drive Togather</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                    @if(session()->has('UserLogin')) 
                                        <li><a href="{{url('profile')}}">Profile</a></li>
                                    @else
                                        <li><a href="{{url('login')}}">Login</a></li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- /Mobile-Menu -->
                </div>
            </div>
        </div>
    </div>
</header>