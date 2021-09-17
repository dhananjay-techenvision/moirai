@extends('layouts.website')

@include('layouts.website_head')

<body>
    <header>
        <div class="header-top sticky bg-white d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <!-- header top navigation start -->
                        <div class="header-top-navigation">
                            <nav>
                                <ul>
                                    <li class="active"><a href="index.html">home</a></li>
                                    <li class="msg-trigger"><a class="msg-trigger-btn" href="#a">message</a>
                                        <div class="message-dropdown" id="a">
                                            <div class="dropdown-title">
                                                <p class="recent-msg">recent message</p>
                                                <div class="message-btn-group">
                                                    <button>New group</button>
                                                    <button>New Message</button>
                                                </div>
                                            </div>
                                            <ul class="dropdown-msg-list">
                                                <li class="msg-list-item d-flex justify-content-between">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="{{ asset('Website/images/profile/profile-small-3.jpg') }}" alt="profile picture">
                                                        </figure>
                                                    </div>
                                                    <!-- profile picture end -->
    
                                                    <!-- message content start -->
                                                    <div class="msg-content">
                                                        <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default</p>
                                                    </div>
                                                    <!-- message content end -->
    
                                                    <!-- message time start -->
                                                    <div class="msg-time">
                                                        <p>25 Apr 2019</p>
                                                    </div>
                                                    <!-- message time end -->
                                                </li>
                                                <li class="msg-list-item d-flex justify-content-between">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="{{ asset('Website/images/profile/profile-small-4.jpg') }}" alt="profile picture">
                                                        </figure>
                                                    </div>
                                                    <!-- profile picture end -->
    
                                                    <!-- message content start -->
                                                    <div class="msg-content">
                                                        <h6 class="author"><a href="profile.html">Jhon Doe</a></h6>
                                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default</p>
                                                    </div>
                                                    <!-- message content end -->
    
                                                    <!-- message time start -->
                                                    <div class="msg-time">
                                                        <p>15 May 2019</p>
                                                    </div>
                                                    <!-- message time end -->
                                                </li>
                                                <li class="msg-list-item d-flex justify-content-between">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="{{ asset('Website/images/profile/profile-small-5.jpg') }}" alt="profile picture">
                                                        </figure>
                                                    </div>
                                                    <!-- profile picture end -->
    
                                                    <!-- message content start -->
                                                    <div class="msg-content">
                                                        <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default</p>
                                                    </div>
                                                    <!-- message content end -->
    
                                                    <!-- message time start -->
                                                    <div class="msg-time">
                                                        <p>20 Jun 2019</p>
                                                    </div>
                                                    <!-- message time end -->
                                                </li>
                                            </ul>
                                            <div class="msg-dropdown-footer">
                                                <button>See all in messenger</button>
                                                <button>Mark All as Read</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification-trigger"><a class="msg-trigger-btn" href="#b">notification</a>
                                        <div class="message-dropdown" id="b">
                                            <div class="dropdown-title">
                                                <p class="recent-msg">Notification</p>
                                                <button>
                                                    <i class="flaticon-settings"></i>
                                                </button>
                                            </div>
                                            <ul class="dropdown-msg-list">
                                                <li class="msg-list-item d-flex justify-content-between">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="{{ asset('Website/images/profile/profile-small-3.jpg') }}" alt="profile picture">
                                                        </figure>
                                                    </div>
                                                    <!-- profile picture end -->
    
                                                    <!-- message content start -->
                                                    <div class="msg-content notification-content">
                                                        <a href="profile.html">Robert Faul</a>,
                                                        <a href="profile.html">william jhon</a>
                                                        <p>and 35 other people reacted to your photo</p>
                                                    </div>
                                                    <!-- message content end -->
    
                                                    <!-- message time start -->
                                                    <div class="msg-time">
                                                        <p>25 Apr 2019</p>
                                                    </div>
                                                    <!-- message time end -->
                                                </li>
                                                <li class="msg-list-item d-flex justify-content-between">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="{{ asset('Website/images/profile/profile-small-4.jpg') }}" alt="profile picture">
                                                        </figure>
                                                    </div>
                                                    <!-- profile picture end -->
    
                                                    <!-- message content start -->
                                                    <div class="msg-content notification-content">
                                                        <a href="profile.html">Robert mushkil</a>,
                                                        <a href="profile.html">Terry jhon</a>
                                                        <p>and 20 other people reacted to your photo</p>
                                                    </div>
                                                    <!-- message content end -->
    
                                                    <!-- message time start -->
                                                    <div class="msg-time">
                                                        <p>20 May 2019</p>
                                                    </div>
                                                    <!-- message time end -->
                                                </li>
                                                <li class="msg-list-item d-flex justify-content-between">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="{{ asset('Website/images/profile/profile-small-6.jpg') }}" alt="profile picture">
                                                        </figure>
                                                    </div>
                                                    <!-- profile picture end -->
    
                                                    <!-- message content start -->
                                                    <div class="msg-content notification-content">
                                                        <a href="profile.html">Horijon Mbala</a>,
                                                        <a href="profile.html">Bashu jhon</a>
                                                        <p>and 55 other people reacted to your post</p>
                                                    </div>
                                                    <!-- message content end -->
    
                                                    <!-- message time start -->
                                                    <div class="msg-time">
                                                        <p>15 Jan 2019</p>
                                                    </div>
                                                    <!-- message time end -->
                                                </li>
                                            </ul>
                                            <div class="msg-dropdown-footer">
                                                <button>See all in messenger</button>
                                                <button>Mark All as Read</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- header top navigation start -->
                    </div>
    
                    <div class="col-md-2">
                        <!-- brand logo start -->
                        <div class="brand-logo text-center">
                            <a href="index.html">
                                <img src="{{ asset('Website/images/logo/logo.png') }}" alt="brand logo">
                            </a>
                        </div>
                        <!-- brand logo end -->
                    </div>
    
                    <div class="col-md-5">
                        <div class="header-top-right d-flex align-items-center justify-content-end">
                            <!-- header top search start -->
                            <div class="header-top-search">
                                <form class="top-search-box">
                                    <input type="text" placeholder="Search" class="top-search-field">
                                    <button class="top-search-btn"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                            <!-- header top search end -->
    
                            @if(Auth::check())
                            <!-- profile picture start -->
                            <div class="profile-setting-box">
                                <div class="profile-thumb-small">
                                    <a href="javascript:void(0)" class="profile-triger">
                                        <figure>
                                            <img src="{{ asset('Website/images/profile/profile-35x35-1.jpg') }}" alt="profile picture">
                                        </figure>
                                    </a>
                                    <div class="profile-dropdown">
                                        <div class="profile-head">
                                            <h5 class="name"><a href="#">  <?php  echo Auth::user()->name;?> </a></h5>
                                            <a class="mail" href="#"> @php  echo Auth::user()->email;  @endphp </a>
                                        </div>
                                        <div class="profile-body">
                                            <ul>
                                                <li><a href="{{url('profile')}}"><i class="flaticon-user"></i>Profile</a></li>                                         
                                            </ul>
                                            <ul>                                           
                                                <li><a href="{{url('logout')}}"><i class="flaticon-unlock"></i>Sing out</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            @else
    
                            <div class="profile-setting-box">
                                <div class="profile-thumb-small">
                                    <a href="javascript:void(0)" class="profile-triger">
                                        <figure>
                                            <img src="{{ asset('Website/images/profile/profile-35x35-1.jpg') }}" alt="profile picture">
                                        </figure>
                                    </a>
                                    <div class="profile-dropdown">
                                        <div class="profile-head">                                        
                                        </div>
                                        <div class="profile-body">
                                            
                                            <ul>                                            
                                                <li><a href="{{url('Web-login')}}"><i class="flaticon-unlock"></i>Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif 
                            <!-- profile picture end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <!-- header area start -->
    <header>
        <div class="mobile-header-wrapper sticky d-block d-lg-none">
            <div class="mobile-header position-relative ">
                <div class="mobile-logo">
                    <a href="index.html">
                        <img src="{{ asset('Website/images/logo/logo-white.png') }}" alt="logo">
                    </a>
                </div>
                <div class="mobile-menu w-100">
                    <ul>
                        <li>
                            <button class="notification request-trigger"><i class="flaticon-users"></i>
                                <span>03</span>
                            </button>
                            <ul class="frnd-request-list">
                                <li>
                                    <div class="frnd-request-member">
                                        <figure class="request-thumb">
                                            <a href="profile.html">
                                                <img src="{{ asset('Website/images/profile/profile-midle-1.jpg') }}" alt="proflie author">
                                            </a>
                                        </figure>
                                        <div class="frnd-content">
                                            <h6 class="author"><a href="profile.html">merry watson</a></h6>
                                            <p class="author-subtitle">Works at HasTech</p>
                                            <div class="request-btn-inner">
                                                <button class="frnd-btn">confirm</button>
                                                <button class="frnd-btn delete">delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="frnd-request-member">
                                        <figure class="request-thumb">
                                            <a href="profile.html">
                                                <img src="{{ asset('Website/images/profile/profile-midle-2.jpg') }}" alt="proflie author">
                                            </a>
                                        </figure>
                                        <div class="frnd-content">
                                            <h6 class="author"><a href="profile.html">merry watson</a></h6>
                                            <p class="author-subtitle">Works at HasTech</p>
                                            <div class="request-btn-inner">
                                                <button class="frnd-btn">confirm</button>
                                                <button class="frnd-btn delete">delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="frnd-request-member">
                                        <figure class="request-thumb">
                                            <a href="profile.html">
                                                <img src="{{ asset('Website/images/profile/profile-midle-3.jpg') }}" alt="proflie author">
                                            </a>
                                        </figure>
                                        <div class="frnd-content">
                                            <h6 class="author"><a href="profile.html">merry watson</a></h6>
                                            <p class="author-subtitle">Works at HasTech</p>
                                            <div class="request-btn-inner">
                                                <button class="frnd-btn">confirm</button>
                                                <button class="frnd-btn delete">delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <button class="notification"><i class="flaticon-notification"></i>
                                <span>03</span>
                            </button>
                        </li>
                        <li>
                            <button class="chat-trigger notification"><i class="flaticon-chats"></i>
                                <span>04</span>
                            </button>
                            <div class="mobile-chat-box">
                                <div class="live-chat-title">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="profile.html">
                                            <figure class="profile-thumb-small profile-active">
                                                <img src="{{ asset('Website/images/profile/profile-35x35-13.jpg') }}" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->
                                    <div class="posted-author">
                                        <h6 class="author"><a href="profile.html">Robart Marloyan</a></h6>
                                        <span class="active-pro">active now</span>
                                    </div>
                                    <div class="live-chat-settings ml-auto">
                                        <button class="chat-settings"><img src="{{ asset('Website/images/icons/settings.png') }}" alt=""></button>
                                        <button class="close-btn"><img src="{{ asset('Website/images/icons/close.png') }}" alt=""></button>
                                    </div>
                                </div>
                                <div class="message-list-inner">
                                    <ul class="message-list custom-scroll">
                                        <li class="text-friends">
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                            <div class="message-time">10 minute ago</div>
                                        </li>
                                        <li class="text-author">
                                            <p>Many desktop publishing packages and web page editors</p>
                                            <div class="message-time">5 minute ago</div>
                                        </li>
                                        <li class="text-friends">
                                            <p>packages and web page editors </p>
                                            <div class="message-time">2 minute ago</div>
                                        </li>
                                        <li class="text-friends">
                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                            <div class="message-time">10 minute ago</div>
                                        </li>
                                        <li class="text-author">
                                            <p>Many desktop publishing packages and web page editors</p>
                                            <div class="message-time">5 minute ago</div>
                                        </li>
                                        <li class="text-friends">
                                            <p>packages and web page editors </p>
                                            <div class="message-time">2 minute ago</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-text-field mob-text-box">
                                    <textarea class="live-chat-field custom-scroll" placeholder="Text Message"></textarea>
                                    <button class="chat-message-send" type="submit" value="submit">
                                        <img src="{{ asset('Website/images/icons/plane.png') }}" alt="">
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <button class="search-trigger">
                                <i class="search-icon flaticon-search"></i>
                                <i class="close-icon flaticon-cross-out"></i>
                            </button>
                            <div class="mob-search-box">
                                <form class="mob-search-inner">
                                    <input type="text" placeholder="Search Here" class="mob-search-field">
                                    <button class="mob-search-btn"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mobile-header-profile">
                    <!-- profile picture end -->
                    <div class="profile-thumb profile-setting-box">
                        <a href="javascript:void(0)" class="profile-triger">
                            <figure class="profile-thumb-middle">
                                <img src="{{ asset('Website/images/profile/profile-small-1.jpg') }}" alt="profile picture">
                            </figure>
                        </a>
                        <div class="profile-dropdown text-left">
                            <div class="profile-head">
                                <h5 class="name"><a href="#">Madison Howard</a></h5>
                                <a class="mail" href="#">mailnam@mail.com</a>
                            </div>
                            <div class="profile-body">
                                <ul>
                                    <li><a href="profile.html"><i class="flaticon-user"></i>Profile</a></li>
                                    <li><a href="#"><i class="flaticon-message"></i>Inbox</a></li>
                                    <li><a href="#"><i class="flaticon-document"></i>Activity</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#"><i class="flaticon-settings"></i>Setting</a></li>
                                    <li><a href="signup.html"><i class="flaticon-unlock"></i>Sing out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- profile picture end -->
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

<main>

    <div class="main-wrapper">
        <!-- profile banner area start -->
        <div class="profile-banner-large bg-img" data-bg="{{ asset('Website/images/banner/profile-banner.jpg') }}">
        </div>
        <!-- profile banner area end -->

        <!-- about author details start -->
        <div class="about-author-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card widget-item">
                            <div class="about-me">
                                <ul class="nav flex-column about-author-menu">
                                    <li><a href="#one" data-bs-toggle="tab" class="active">Something About Me</a></li>
                                    <li><a href="#two" data-bs-toggle="tab">Working Zone</a></li>
                                    <li><a href="#three" data-bs-toggle="tab">Educational Qualification</a></li>
                                    <li><a href="#four" data-bs-toggle="tab">Work & Education</a></li>
                                    <li><a href="#five" data-bs-toggle="tab">Friends & Family</a></li>
                                    <li><a href="#six" data-bs-toggle="tab">Contact Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="about-description">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="one">
                                    <div class="work-zone">
                                        <div class="author-desc-title d-flex">
                                            <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                            <div class="post-settings-bar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <div class="post-settings arrow-shape">
                                                    <ul>
                                                        <li><button>copy link to adda</button></li>
                                                        <li><button>edit post</button></li>
                                                        <li><button>embed adda</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="two">
                                    <div class="work-zone">
                                        <div class="author-desc-title d-flex">
                                            <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                            <div class="post-settings-bar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <div class="post-settings arrow-shape">
                                                    <ul>
                                                        <li><button>copy link to adda</button></li>
                                                        <li><button>edit post</button></li>
                                                        <li><button>embed adda</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="three">
                                    <div class="work-zone">
                                        <div class="author-desc-title d-flex">
                                            <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                            <div class="post-settings-bar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <div class="post-settings arrow-shape">
                                                    <ul>
                                                        <li><button>copy link to adda</button></li>
                                                        <li><button>edit post</button></li>
                                                        <li><button>embed adda</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="four">
                                    <div class="work-zone">
                                        <div class="author-desc-title d-flex">
                                            <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                            <div class="post-settings-bar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <div class="post-settings arrow-shape">
                                                    <ul>
                                                        <li><button>copy link to adda</button></li>
                                                        <li><button>edit post</button></li>
                                                        <li><button>embed adda</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="five">
                                    <div class="work-zone">
                                        <div class="author-desc-title d-flex">
                                            <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                            <div class="post-settings-bar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <div class="post-settings arrow-shape">
                                                    <ul>
                                                        <li><button>copy link to adda</button></li>
                                                        <li><button>edit post</button></li>
                                                        <li><button>embed adda</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="six">
                                    <div class="work-zone">
                                        <div class="author-desc-title d-flex">
                                            <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                            <div class="post-settings-bar">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <div class="post-settings arrow-shape">
                                                    <ul>
                                                        <li><button>copy link to adda</button></li>
                                                        <li><button>edit post</button></li>
                                                        <li><button>embed adda</button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about author details start -->

        <!-- photo section start -->
<div class="photo-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content-box">
                    <h5 class="content-title">photos</h5>
                    <div class="content-body">
                        <div class="row mt--30">
                            <div class="col-sm-6 col-md-4">
                                <div class="photo-group">
                                    <div class="gallery-toggle">
                                        <div class="d-none product-thumb-large-view">
                                            <img src="{{ asset('Website/images/photos/photo-1.jpg') }}" alt="Photo Gallery">
                                            <img src="{{ asset('Website/images/photos/photo-2.jpg') }}" alt="Photo Gallery">
                                            <img src="{{ asset('Website/images/photos/photo-3.jpg') }}" alt="Photo Gallery">
                                        </div>
                                        <div class="gallery-overlay">
                                            <img src="{{ asset('Website/images/photos/photo-1.jpg') }}" alt="Photo Gallery">
                                            <div class="view-icon"></div>
                                        </div>
                                        <div class="photo-gallery-caption">
                                            <h3 class="photos-caption">office hangout (06)</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="photo-group">
                                    <div class="gallery-toggle">
                                        <div class="d-none product-thumb-large-view">
                                            <img src="{{ asset('Website/images/photos/photo-2.jpg') }}" alt="Photo Gallery">
                                            <img src="{{ asset('Website/images/photos/photo-5.jpg') }}" alt="Photo Gallery">
                                            <img src="{{ asset('Website/images/photos/photo-6.jpg') }}" alt="Photo Gallery">
                                        </div>
                                        <div class="gallery-overlay">
                                            <img src="{{ asset('Website/images/photos/photo-2.jpg') }}" alt="Photo Gallery">
                                            <div class="view-icon"></div>
                                        </div>
                                        <div class="photo-gallery-caption">
                                            <h3 class="photos-caption">dream land (12)</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="photo-group">
                                    <div class="gallery-toggle">
                                        <div class="d-none product-thumb-large-view">
                                            <img src="{{ asset('Website/images/photos/photo-3.jpg') }}" alt="Photo Gallery">
                                            <img src="{{ asset('Website/images/photos/photo-6.jpg') }}" alt="Photo Gallery">
                                            <img src="{{ asset('Website/images/photos/photo-2.jpg') }}" alt="Photo Gallery">
                                        </div>
                                        <div class="gallery-overlay">
                                            <img src="{{ asset('Website/images/photos/photo-3.jpg') }}" alt="Photo Gallery">
                                            <div class="view-icon"></div>
                                        </div>
                                        <div class="photo-gallery-caption">
                                            <h3 class="photos-caption">travel zone (34)</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>                           
                            
                            <div class="col-12">
                                <div class="load-more text-center">
                                    <button class="load-more-btn">load more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- photo section end -->

        <!-- favorite book section start -->
        <div class="faborite-books">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-box">
                            <h5 class="content-title">favorite books</h5>
                            <div class="content-body">
                                <div class="row favorite-item-carousel">
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="{{ asset('Website/images/books/book-1.jpg')}}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="{{ asset('Website/images/books/book-2.jpg') }}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="{{ asset('Website/images/books/book-3.jpg') }}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="{{ asset('Website/images/books/book-4.jpg') }}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="{{ asset('Website/images/books/book-5.jpg') }}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="{{ asset('Website/images/books/book-6.jpg') }}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="load-more text-center">
                                            <button class="load-more-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- favorite book section end -->

        <!-- favorite book section start -->
        <div class="faborite-books">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-box">
                            <h5 class="content-title">favorite sports</h5>
                            <div class="content-body">
                                <div class="row favorite-item-carousel">
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="{{ asset('Website/images/sports/sport-1.jpg')}}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="{{ asset('Website/images/sports/sport-2.jpg')}}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="{{ asset('Website/images/sports/sport-3.jpg')}}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="{{ asset('Website/images/sports/sport-4.jpg')}}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="{{ asset('Website/images/sports/sport-5.jpg')}}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col">
                                        <figure class="favorite-item">
                                            <a href="#">
                                                <img src="{{ asset('Website/images/sports/sport-6.jpg')}}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="load-more text-center">
                                            <button class="load-more-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- favorite book section end -->
    </div>

</main>

<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="bi bi-finger-index"></i>
</div>
<!-- Scroll to Top End -->


<!-- footer area start -->
<footer class="d-none d-lg-block">
    <div class="footer-area reveal-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="footer-wrapper">
                        <div class="footer-card position-relative">
                            <div class="friends-search">
                                <form class="search-box">
                                    <input type="text" placeholder="Search Your Friends" class="search-field">
                                    <button class="search-btn"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                            <div class="friend-search-list">
                                <div class="frnd-search-title">
                                    <button class="frnd-search-icon"><i class="flaticon-settings"></i></button>
                                    <p>search friends</p>
                                    <button class="close-btn" data-close="friend-search-list"><i class="flaticon-cross-out"></i></button>
                                </div>
                                <div class="frnd-search-inner custom-scroll">
                                    <ul>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-1.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author">Jon Wilime</h6>
                                                <p>Many desktop publishing</p>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-2.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Jon Wileyam</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-3.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-4.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Jon Wilime</a></h6>
                                                <button class="add-frnd">10 mutual friends</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-6.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Robart faul</a></h6>
                                                <button class="add-frnd">12 mutual friends</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-7.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Mili Raoulin</a></h6>
                                                <button class="add-frnd">add friend</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-8.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Jon Wilime</a></h6>
                                                <button class="add-frnd">10 mutual friends</button>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center profile-active">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb active">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-9.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author"><a href="profile.html">Robart faul</a></h6>
                                                <button class="add-frnd">12 mutual friends</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card card-small mb-0 active-profile-wrapper">
                            <div class="active-profiles-wrapper">
                                <div class="active-profile-carousel slick-row-20 slick-arrow-style">
                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-1.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-2.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-3.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-4.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-5.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-6.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-7.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-8.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-9.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-10.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-11.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-12.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-13.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->
                                </div>
                            </div>
                        </div>
                        <div class="footer-card position-relative">
                            <div class="live-chat-inner">
                                <div class="chat-text-field">
                                    <textarea class="live-chat-field custom-scroll" placeholder="Text Message"></textarea>
                                    <button class="chat-message-send" type="submit" value="submit">
                                        <img src="{{ asset('Website/images/icons/plane.png') }}" alt="">
                                    </button>
                                </div>
                                <div class="chat-output-box">
                                    <div class="live-chat-title">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb active">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-13.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->
                                        <div class="posted-author">
                                            <h6 class="author"><a href="profile.html">Robart Marloyan</a></h6>
                                            <span class="active-pro">active now</span>
                                        </div>
                                        <div class="live-chat-settings ms-auto">
                                            <button class="chat-settings"><i class="flaticon-settings"></i></button>
                                            <button class="close-btn" data-close="chat-output-box"><i class="flaticon-cross-out"></i></button>
                                        </div>
                                    </div>
                                    <div class="message-list-inner">
                                        <ul class="message-list custom-scroll">
                                            <li class="text-friends">
                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                                <div class="message-time">10 minute ago</div>
                                            </li>
                                            <li class="text-author">
                                                <p>Many desktop publishing packages and web page editors</p>
                                                <div class="message-time">5 minute ago</div>
                                            </li>
                                            <li class="text-friends">
                                                <p>packages and web page editors </p>
                                                <div class="message-time">2 minute ago</div>
                                            </li>
                                            <li class="text-friends">
                                                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                                                <div class="message-time">10 minute ago</div>
                                            </li>
                                            <li class="text-author">
                                                <p>Many desktop publishing packages and web page editors</p>
                                                <div class="message-time">5 minute ago</div>
                                            </li>
                                            <li class="text-friends">
                                                <p>packages and web page editors </p>
                                                <div class="message-time">2 minute ago</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
<!-- footer area start -->
<footer class="d-block d-lg-none">
    <div class="footer-area reveal-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-footer-inner d-flex">
                        <div class="mobile-frnd-search">
                            <button class="search-toggle-btn"><i class="flaticon-search"></i></button>
                        </div>
                        <div class="mob-frnd-search-inner">
                            <form class="mob-frnd-search-box d-flex">
                                <input type="text" placeholder="Search Your Friends" class="mob-frnd-search-field">
                            </form>
                        </div>
                        <div class="card card-small mb-0 active-profile-mob-wrapper">
                            <div class="active-profiles-mob-wrapper slick-row-10">
                                <div class="active-profile-mobile">
                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="#">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="{{ asset('Website/images/profile/profile-small-1.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="{{ asset('Website/images/profile/profile-small-8.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="{{ asset('Website/images/profile/profile-small-2.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="{{ asset('Website/images/profile/profile-small-3.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="{{ asset('Website/images/profile/profile-small-4.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="{{ asset('Website/images/profile/profile-small-5.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->

                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb active profile-active">
                                            <a href="javascript:void(0)">
                                                <figure class="profile-thumb-small profile-active">
                                                    <img src="{{ asset('Website/images/profile/profile-small-9.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
