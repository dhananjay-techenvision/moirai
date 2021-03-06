
    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <header class="header-style-five">
        <div class="header-top-wrap">
            <div class="container custom-container-two">
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-6">
                        <div class="header-top-link">
                            <ul>
                                <li><a href="#">About US</a></li>
                                <li><a href="#">FAQS</a></li>
                                <li><a href="tel:123456789">PH +9876 543210</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        {{-- <div class="header-top-right">
                            <div class="lang">
                                <select name="select">
                                    <option value="">English</option>
                                    <option value="">Spanish</option>
                                    <option value="">Turkish</option>
                                    <option value="">Russian</option>
                                    <option value="">Chinese</option>
                                </select>
                            </div>
                            <div class="currency">
                                <form action="#">
                                    <select name="select">
                                        <option value="">USD</option>
                                        <option value="">AUE</option>
                                        <option value="">SAR</option>
                                        <option value="">INR</option>
                                        <option value="">BDT</option>
                                    </select>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header menu-area">
            <div class="container custom-container-two">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav show">
                                <div class="logo d-block d-lg-none">
                                    <a href="index.html"><img class="footer-logo" src="{{ asset('Website/images/logo/logo.jpg')}}" alt="Logo"></a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation left">                                        
                                        {{-- <li class="has--mega--menu"><a href="#">Shop</a>
                                            <ul class="mega-menu">
                                                <li class="mega-menu-wrap">
                                                    <ul class="mega-menu-col">
                                                        <li class="mega-title"><a href="shop.html">SHOP PAGES</a></li>
                                                        <li><a href="shop-sidebar.html">Right Sidebar</a></li>
                                                        <li><a href="shop-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="shop.html">Hidden sidebar</a></li>
                                                        <li><a href="shop.html">Filters area</a></li>
                                                        <li><a href="shop-details.html">Shop Details</a></li>
                                                        <li><a href="cart.html">Cart Page</a></li>
                                                        <li><a href="checkout.html">Checkout Page</a></li>
                                                    </ul>                                                    
                                                </li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="{{url('/about-us')}}">About Us</a></li>
                                                                               
                                    </ul>
                                    <div class="logo">
                                        <a href="{{url('/')}}" ><img class="footer-logo" src="{{ asset('Website/images/logo/logo.jpg')}}" alt="Logo"></a>
                                    </div>
                                    <ul class="navigation right">
                                        {{-- <li class="menu-item-has-children"><a href="#">blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <ul>
                                        <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="flaticon-search"></i></a></li>
                                        @if(Auth::check())
                                            <li class="header-profile"><a href="{{url('My-profile')}}"><i class="flaticon-user"></i></a></li>
                                        @else
                                        <li class="header-profile"><a href="{{url('/Web-login')}}"><i class="flaticon-user"></i></a></li>
                                         @endif

                                        {{-- <li class="header-wishlist"><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li> --}}

                                         @if(Auth::check())
                                            @php
                                                $cart_count = DB::table('carts')->where('user_id',Auth::id())->count();
                                            @endphp
                    
                                        <li class="header-shop-cart"><a href="{{url('/mycart')}}"><i class="flaticon-shopping-bag"></i><span>{{$cart_count}}</span></a>
                                          @else
                                              @php
                                                $session = Session::getId();
                                                $cart_count = DB::table('temp_carts')->where('session_id',$session)->count();
                                            @endphp
                                        <li class="header-shop-cart"><a href="{{url('/mycart')}}"><i class="flaticon-shopping-bag"></i><span>{{$cart_count}}</span></a>
                                          @endif
                                        </li>
                                        {{-- <li class="sidebar-toggle-btn"><a href="#" class="navSidebar-button"><i class="flaticon-menu-button-of-three-horizontal-lines"></i></a></li> --}}

                                        <li class="header-shop-cart"><a href="javascript:void(0)"><i class="flaticon-menu-button-of-three-horizontal-lines"></i></a> 
                                            @if(Auth::check())
                                                <ul class="minicart">
                                                    <li class="d-flex align-items-center">                                                   
                                                            <h6><a href="{{url('My-profile')}}">My Profile</a></h6>                                                        
                                                    </li>
                                                    <li class="d-flex align-items-center">                                                   
                                                            <h6><a href="{{url('My-address')}}">My Address</a></h6>                                                       
                                                    </li>
                                                    <li class="d-flex align-items-center">                                                   
                                                            <h6><a href="{{url('/mycart')}}">My Cart</a></h6>                                                       
                                                    </li>                                                   
                                                    <li class="d-flex align-items-center">                                                   
                                                            <h6><a href="{{url('/checkout')}}">Checkout</a></h6>                                                       
                                                    </li>
                                                    <li class="d-flex align-items-center">                                                   
                                                            <h6><a href="{{url('My-order')}}">My Order</a></h6>                                                       
                                                    </li>                                                    
                                                    <li class="d-flex align-items-center">                                                   
                                                            <h6><a href="{{url('logout')}}">Logout</a></h6>                                                       
                                                    </li>
                                                </ul>
                                                @else
                                                <ul class="minicart">
                                                    <li class="d-flex align-items-center">                                                   
                                                            <h6><a href="{{url('/Web-login')}}">Login</a></h6>                                                       
                                                    </li>
                                                    
                                                </ul>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                            <nav class="menu-box">
                                <div class="nav-logo"><a href="index.html"><img src="{{ asset('Ecommerce/img/logo/logo.png')}}" alt="" title=""></a>
                                </div>
                                <div class="menu-outer">
                                    <ul class="navigation">
                                        <li class="active menu-item-has-children"><a href="#">Home</a>
                                            <ul class="submenu">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li><a href="index-3.html">Home Three</a></li>
                                                <li><a href="index-4.html">Home Four</a></li>
                                                <li><a href="index-5.html">Home Five</a></li>
                                                <li class="active"><a href="index-6.html">Home Six</a></li>
                                                <li><a href="index-7.html">Home Seven</a></li>
                                                <li><a href="index-8.html">Home Eight</a></li>
                                                <li><a href="index-9.html">Home Nine</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Shop</a>
                                            <ul class="submenu">
                                                <li><a href="shop.html">Shop Page</a></li>
                                                <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                <li><a href="shop-details.html">Shop Details</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="cart.html">Checkout Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li class="menu-item-has-children"><a href="#">blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Search -->
        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <input type="text" placeholder="Search here...">
                        <button><i class="flaticon-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal Search-end -->

        <!-- off-canvas-start -->
        <div class="sidebar-off-canvas info-group">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-widget scroll">
                <div class="sidebar-widget-container">
                    <div class="off-canvas-heading">
                        <a href="#" class="close-side-widget">
                            <span class="flaticon-targeting-cross"></span>
                        </a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo mb-30">
                                    <a href="{{url('/')}}"><img class="footer-logo" src="{{ asset('Website/images/logo/logo.jpg')}}" alt=""></a>
                                </div>
                                <div class="content-box">
                                    <p>Moirai</p>
                                </div>
                                <div class="contact-info">
                                    <h4 class="title">CONTACT US</h4>
                                    {{-- <ul>
                                        <li><span class="flaticon-phone-call"></span><a href="tel:123456789">+9 325 444 0000</a></li>
                                        <li><span class="flaticon-email"></span><a
                                                href="mailto:adara@info.com">adara@info.com</a></li>
                                        <li><span class="flaticon-place"></span>71 Park Lan Street 2355 NY</li>
                                    </ul> --}}
                                </div>
                                {{-- <div class="oc-newsletter">
                                    <h4 class="title">NEWSLETTER</h4>
                                    <p>Fill your email below to subscribe to my newsletter</p>
                                    <form action="#">
                                        <input type="email" placeholder="Email...">
                                        <button class="btn">Subscribe</button>
                                    </form>
                                </div> --}}
                                <div class="oc-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- off-canvas-end -->

    </header>