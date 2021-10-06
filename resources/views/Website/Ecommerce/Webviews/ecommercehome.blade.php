
@extends('layouts.Ecommerce.ecommerce')

<body>
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
                                <li><a href="about-us.html">About US</a></li>
                                <li><a href="#">FAQS</a></li>
                                <li><a href="tel:123456789">PH +1 325 362 3521</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="header-top-right">
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
                        </div>
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
                                    <a href="index.html"><img src="{{ asset('Ecommerce/img/logo/logo.png')}}" alt="Logo"></a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation left">
                                        <li class="active menu-item-has-children has--mega--menu"><a href="#">Home</a>
                                            <ul class="mega--menu--wrap scroll">
                                                <li>
                                                    <a href="index.html">
                                                        <span class="img"><img src="{{ asset('Ecommerce/img/home-demo/home_01.jpg')}}" alt=""></span>
                                                        <span class="text">Home style One</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-2.html">
                                                        <span class="img"><img src="{{ asset('Ecommerce/img/home-demo/home_02.jpg')}}" alt=""></span>
                                                        <span class="text">Home style Two</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-3.html">
                                                        <span class="img"><img src="{{ asset('Ecommerce/img/home-demo/home_03.jpg')}}" alt=""></span>
                                                        <span class="text">Home style Three</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-4.html">
                                                        <span class="img"><img src="{{ asset('Ecommerce/img/home-demo/home_04.jpg')}}" alt=""></span>
                                                        <span class="text">Home style four</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-5.html">
                                                        <span class="img"><img src="{{ asset('Ecommerce/img/home-demo/home_05.jpg')}}" alt=""></span>
                                                        <span class="text">Home style five</span>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="index-6.html">
                                                        <span class="img"><img src="{{ asset('Ecommerce/img/home-demo/home_06.jpg')}}" alt=""></span>
                                                        <span class="text">Home style six</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-7.html">
                                                        <span class="img"><img src="{{ asset('Ecommerce/img/home-demo/home_07.jpg')}}" alt=""></span>
                                                        <span class="text">Home style seven</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-8.html">
                                                        <span class="img"><img src="{{ asset('Ecommerce/img/home-demo/home_08.jpg')}}" alt=""></span>
                                                        <span class="text">Home style eight</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="index-9.html">
                                                        <span class="img"><img src="{{ asset('Ecommerce/img/home-demo/home_09.jpg')}}" alt=""></span>
                                                        <span class="text">Home style nine</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has--mega--menu"><a href="#">Shop</a>
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
                                                    <ul class="mega-menu-col">
                                                        <li class="mega-title"><a href="#">FEATURES</a></li>
                                                        <li><a href="shop-sidebar.html">Variable Product</a></li>
                                                        <li><a href="shop-sidebar.html">External Product</a></li>
                                                        <li><a href="shop-sidebar.html">Other Shop Pages</a></li>
                                                        <li><a href="shop-sidebar.html">Categories</a></li>
                                                        <li><a href="shop-sidebar.html">Collection</a></li>
                                                        <li><a href="shop-sidebar.html">LookBook</a></li>
                                                        <li><a href="cart.html">Shopping Cart</a></li>
                                                    </ul>
                                                    <ul class="mega-menu-col sub-cat-post">
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <img src="{{ asset('Ecommerce/img/product/sub_menu_img01.jpg')}}" alt="">
                                                                <span class="btn">Man Shop</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <ul class="mega-menu-col sub-cat-post">
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <img src="{{ asset('Ecommerce/img/product/sub_menu_img02.jpg')}}" alt="">
                                                                <span class="btn">Women’s Shop</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">Sale</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                    </ul>
                                    <div class="logo">
                                        <a href="index.html"><img src="{{ asset('Ecommerce/img/logo/logo.png')}}" alt="Logo"></a>
                                    </div>
                                    <ul class="navigation right">
                                        <li class="menu-item-has-children"><a href="#">blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Our Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                    <ul>
                                        <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="flaticon-search"></i></a></li>
                                        <li class="header-profile"><a href="#"><i class="flaticon-user"></i></a></li>
                                        <li class="header-wishlist"><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                        <li class="header-shop-cart"><a href="#"><i class="flaticon-shopping-bag"></i><span>0</span></a>
                                            <ul class="minicart">
                                                <li class="d-flex align-items-start">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="{{ asset('Ecommerce/img/product/cart_p01.jpg')}}" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h4><a href="#">Exclusive Winter Jackets</a></h4>
                                                        <div class="cart-price">
                                                            <span class="new">$229.9</span>
                                                            <span><del>$229.9</del></span>
                                                        </div>
                                                    </div>
                                                    <div class="del-icon">
                                                        <a href="#"><i class="far fa-trash-alt"></i></a>
                                                    </div>
                                                </li>
                                                <li class="d-flex align-items-start">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="{{ asset('Ecommerce/img/product/cart_p02.jpg')}}" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h4><a href="#">Winter Jackets For Women</a></h4>
                                                        <div class="cart-price">
                                                            <span class="new">$229.9</span>
                                                            <span><del>$229.9</del></span>
                                                        </div>
                                                    </div>
                                                    <div class="del-icon">
                                                        <a href="#"><i class="far fa-trash-alt"></i></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="total-price">
                                                        <span class="f-left">Total:</span>
                                                        <span class="f-right">$239.9</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkout-link">
                                                        <a href="#">Shopping Cart</a>
                                                        <a class="black-color" href="#">Checkout</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-toggle-btn"><a href="#" class="navSidebar-button"><i class="flaticon-menu-button-of-three-horizontal-lines"></i></a></li>
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
                                    <a href="index.html"><img src="{{ asset('Ecommerce/img/logo/logo.png')}}" alt=""></a>
                                </div>
                                <div class="content-box">
                                    <p>WooCommerce and WordPress are both free, open source software reasons many ...</p>
                                </div>
                                <div class="contact-info">
                                    <h4 class="title">CONTACT US</h4>
                                    <ul>
                                        <li><span class="flaticon-phone-call"></span><a href="tel:123456789">+9 325 444 0000</a></li>
                                        <li><span class="flaticon-email"></span><a
                                                href="mailto:adara@info.com">adara@info.com</a></li>
                                        <li><span class="flaticon-place"></span>71 Park Lan Street 2355 NY</li>
                                    </ul>
                                </div>
                                <div class="oc-newsletter">
                                    <h4 class="title">NEWSLETTER</h4>
                                    <p>Fill your email below to subscribe to my newsletter</p>
                                    <form action="#">
                                        <input type="email" placeholder="Email...">
                                        <button class="btn">Subscribe</button>
                                    </form>
                                </div>
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
                                <div class="oc-bottom">
                                    <div class="currency">
                                        <form action="#">
                                            <label>Currency</label>
                                            <select name="select">
                                                <option value="">USD</option>
                                                <option value="">AUE</option>
                                                <option value="">SAR</option>
                                                <option value="">INR</option>
                                                <option value="">BDT</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="language">
                                        <form action="#">
                                            <label>Language</label>
                                            <select name="select">
                                                <option value="">English</option>
                                                <option value="">Spanish</option>
                                                <option value="">Turkish</option>
                                                <option value="">Russian</option>
                                                <option value="">Chinese</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- off-canvas-end -->

    </header>
    <!-- header-area-end -->

    <!-- main-area -->
    <main>

        <!-- slider-area -->
        <section class="home-five-banner">
            <div class="container custom-container-two">
                <div class="banner-five-wrap" data-background="{{ asset('Ecommerce/img/slider/h6_banner_bg.jpg')}}">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-content">
                                <h3 class="sub-title wow fadeInUp" data-wow-delay=".2s">top <span>deal !</span></h3>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s">New Season pro</h2>
                                <p class="wow fadeInUp" data-wow-delay=".6s">Get up to 50% off Today Only</p>
                                <a href="shop-sidebar.html" class="btn wow fadeInUp" data-wow-delay=".8s">Shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-five-img">
                        <img src="{{ asset('Ecommerce/img/slider/h5_banner_img.png')}}" alt="" class="main-img">
                        <img src="{{ asset('Ecommerce/img/slider/h5_banner_shape.png')}}" alt="" class="img-shape">
                    </div>
                </div>
            </div>
        </section>
        <!-- slider-area-end -->

        <!-- brand-area -->
        <div class="brand-area pt-50 pb-50">
            <div class="container custom-container-two">
                <div class="row brand-active">
                    
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- category-area -->
        <div class="category-area">
            <div class="container custom-container-two">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-8">
                        <div class="h5-category-item mb-30">
                            <a href="shop-sidebar.html">
                                <img src="{{ asset('Ecommerce/img/images/h5_cat_img01.jpg')}}" alt="">
                                <span class="btn">Shop now</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="h5-category-item mb-30">
                            <a href="shop-sidebar.html">
                                <img src="{{ asset('Ecommerce/img/images/h5_cat_img02.jpg')}}" alt="">
                                <span class="btn">women bag</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="h5-category-item mb-30">
                            <a href="shop-sidebar.html">
                                <img src="{{ asset('Ecommerce/img/images/h5_cat_img03.jpg')}}" alt="">
                                <span class="btn">clothes</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- category-area-end -->

        <!-- new-arrival-area -->
        <section class="new-arrival-area home7-new-arrival pt-95 pb-50">
            <div class="container custom-container-two">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="section-title text-center text-lg-left mb-45">
                            <h3 class="title">New Arrival Collection</h3>
                        </div>
                        <div class="discount-end-time-wrap mb-50">
                            <img src="{{ asset('Ecommerce/img/images/discount_end_img02.jpg')}}" alt="">
                            <div class="content">
                                <div class="icon">
                                    <img src="{{ asset('Ecommerce/img/icon/sidebar_toggle_icon.png')}}" alt="">
                                </div>
                                <h2>Cyber Monday</h2>
                                <span>Super Offer TO 50% OFF</span>
                                <div class="coming-time" data-countdown="2021/9/21"></div>
                                <a href="shop-sidebar.html" class="btn">shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <div class="new-arrival-nav mb-35">
                                    <button class="active" data-filter="*">Best Sellers</button>
                                    <button class="" data-filter=".cat-one">New Products</button>
                                    <button class="" data-filter=".cat-two">Sales Products</button>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 d-none d-md-block">
                                <div class="new-arrival-all">
                                    <a href="shop.html"><i class="fas fa-arrows-alt"></i> view all</a>
                                </div>
                            </div>
                        </div>
                        <div class="row new-arrival-active">
                            <div class="col-xl-4 col-sm-6 grid-item grid-sizer cat-two">
                                <div class="new-arrival-item text-center mb-50">
                                    <div class="thumb mb-25">
                                        <a href="shop-details.html"><img src="{{ asset('Ecommerce/img/product/n_arrival_product01.jpg')}}" alt=""></a>
                                        <div class="product-overlay-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5><a href="shop-details.html">Bomber in Cotton</a></h5>
                                        <span class="price">$37.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 grid-item grid-sizer cat-one">
                                <div class="new-arrival-item text-center mb-50">
                                    <div class="thumb mb-25">
                                        <div class="discount-tag">- 20%</div>
                                        <a href="shop-details.html"><img src="{{ asset('Ecommerce/img/product/n_arrival_product02.jpg')}}" alt=""></a>
                                        <div class="product-overlay-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5><a href="shop-details.html">Travelling Bags</a></h5>
                                        <span class="price">$25.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 grid-item grid-sizer cat-two cat-one">
                                <div class="new-arrival-item text-center mb-50">
                                    <div class="thumb mb-25">
                                        <a href="shop-details.html"><img src="{{ asset('Ecommerce/img/product/n_arrival_product03.jpg')}}" alt=""></a>
                                        <div class="product-overlay-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5><a href="shop-details.html">Exclusive Handbags</a></h5>
                                        <span class="price">$19.50</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 grid-item grid-sizer cat-two">
                                <div class="new-arrival-item text-center mb-50">
                                    <div class="thumb mb-25">
                                        <div class="discount-tag new">New</div>
                                        <a href="shop-details.html"><img src="{{ asset('Ecommerce/img/product/n_arrival_product04.jpg')}}" alt=""></a>
                                        <div class="product-overlay-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5><a href="shop-details.html">Women Shoes</a></h5>
                                        <span class="price">$12.90</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 grid-item grid-sizer cat-one">
                                <div class="new-arrival-item text-center mb-50">
                                    <div class="thumb mb-25">
                                        <div class="discount-tag">- 20%</div>
                                        <a href="shop-details.html"><img src="{{ asset('Ecommerce/img/product/n_arrival_product05.jpg')}}" alt=""></a>
                                        <div class="product-overlay-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5><a href="shop-details.html">Winter Jackets</a></h5>
                                        <span class="price">$49.90</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 grid-item grid-sizer cat-two cat-one">
                                <div class="new-arrival-item text-center mb-50">
                                    <div class="thumb mb-25">
                                        <div class="discount-tag new">New</div>
                                        <a href="shop-details.html"><img src="{{ asset('Ecommerce/img/product/n_arrival_product06.jpg')}}" alt=""></a>
                                        <div class="product-overlay-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5><a href="shop-details.html">Fashion Shoes</a></h5>
                                        <span class="price">$31.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- new-arrival-area-end -->

        <!-- discount-area -->
        <section class="discount-area discount-bg jarallax parallax-img" data-background="{{ asset('Ecommerce/img/bg/discount_bg.jpg')}}">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-start">
                    <div class="col-lg-6 col-md-10">
                        <div class="discount-content text-center">
                            <div class="icon mb-15"><img src="{{ asset('Ecommerce/img/icon/discount_icon.png')}}" alt=""></div>
                            <span>STOCK IS LIMITED</span>
                            <h2>Winter Collection End of Season Sale upto 30%</h2>
                            <a href="shop-sidebar.html" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- discount-area-end -->

        <!-- best-selling-area -->
        <section class="best-selling-area pt-95 pb-100">
            <div class="container custom-container-two">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6">
                        <div class="section-title title-style-two text-center mb-50">
                            <h3 class="title">Best selling product</h3>
                        </div>
                    </div>
                </div>
                <div class="row best-selling-active">
                    <div class="col">
                        <div class="new-arrival-item text-center mb-50">
                            <div class="thumb mb-25">
                                <a href="shop-details.html"><img src="{{ asset('Ecommerce/img/product/n_arrival_product01.jpg')}}" alt=""></a>
                                <div class="product-overlay-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                        <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="shop-details.html">Bomber in Cotton</a></h5>
                                <span class="price">$37.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="new-arrival-item text-center mb-50">
                            <div class="thumb mb-25">
                                <a href="shop-details.html"><img src="{{ asset('Ecommerce/img/product/n_arrival_product02.jpg')}}" alt=""></a>
                                <div class="product-overlay-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                        <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="shop-details.html">Travelling Bags</a></h5>
                                <span class="price">$29.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="new-arrival-item text-center mb-50">
                            <div class="thumb mb-25">
                                <a href="shop-details.html"><img src="{{ asset('Ecommerce/img/product/n_arrival_product03.jpg')}}" alt=""></a>
                                <div class="product-overlay-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                        <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="shop-details.html">Travelling Bags</a></h5>
                                <span class="price">$29.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="new-arrival-item text-center mb-50">
                            <div class="thumb mb-25">
                                <a href="shop-details.html"><img src="{{ asset('Ecommerce/img/product/n_arrival_product04.jpg')}}" alt=""></a>
                                <div class="product-overlay-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                        <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="shop-details.html">Travelling Bags</a></h5>
                                <span class="price">$29.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="new-arrival-item text-center mb-50">
                            <div class="thumb mb-25">
                                <a href="shop-details.html"><img src="{{ asset('Ecommerce/img/product/n_arrival_product05.jpg')}}" alt=""></a>
                                <div class="product-overlay-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                        <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="shop-details.html">Travelling Bags</a></h5>
                                <span class="price">$29.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="new-arrival-item text-center mb-50">
                            <div class="thumb mb-25">
                                <a href="shop-details.html"><img src="{{ asset('Ecommerce/img/product/n_arrival_product06.jpg')}}" alt=""></a>
                                <div class="product-overlay-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                        <li><a href="shop-sidebar.html"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="shop-details.html">Travelling Bags</a></h5>
                                <span class="price">$29.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="best-belling-btn text-center mt-10">
                            <a href="shop-sidebar.html" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- best-selling-area-end -->

        <!-- promo-services -->
        <section class="promo-services gray-bg pt-70 pb-25">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="promo-services-item mb-40">
                            <div class="icon"><img src="{{ asset('Ecommerce/img/icon/promo_icon01.png')}}" alt=""></div>
                            <div class="content">
                                <h6>payment & delivery</h6>
                                <p>Delivered, when you receive arrives</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="promo-services-item mb-40">
                            <div class="icon"><img src="{{ asset('Ecommerce/img/icon/promo_icon02.png')}}" alt=""></div>
                            <div class="content">
                                <h6>Return Product</h6>
                                <p>Retail, a Product Return Process</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="promo-services-item mb-40">
                            <div class="icon"><img src="{{ asset('Ecommerce/img/icon/promo_icon03.png')}}" alt=""></div>
                            <div class="content">
                                <h6>money back guarantee</h6>
                                <p>Options Including 24/7</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="promo-services-item mb-40">
                            <div class="icon"><img src="{{ asset('Ecommerce/img/icon/promo_icon04.png')}}" alt=""></div>
                            <div class="content">
                                <h6>Quality support</h6>
                                <p>Support Options Including 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- promo-services-end -->

    </main>
    <!-- main-area-end -->
