<header>
    <div class="header-top sticky bg-white d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <!-- header top navigation start -->
                    <div class="header-top-navigation">
                        <nav>
                            <ul>
                                <li class="active"><a href="{{url('/')}}">home</a></li>
                                <li class="active"><a href="{{url('/PagePost')}}">Post</a></li>
                                <li class="active"><a href="{{url('/E-home')}}">Ecommerce</a></li>
                                {{-- <li class="msg-trigger"><a class="msg-trigger-btn" href="#a">message</a>
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
                                </li> --}}
                                {{-- <li class="notification-trigger"><a class="msg-trigger-btn" href="#b">notification</a>
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
                                </li> --}}
                            </ul>
                        </nav>
                    </div>
                    <!-- header top navigation start -->
                </div>

                <div class="col-md-2">
                    <!-- brand logo start -->
                    <div class="brand-logo text-center">
                        <a href="#">
                            <img src="{{ asset('Website/images/logo/logo.jpg') }}" alt="brand logo">
                        </a>
                    </div>
                    <!-- brand logo end -->
                </div>

                <div class="col-md-5">
                    <div class="header-top-right d-flex align-items-center justify-content-end">
                        <!-- header top search start -->
                        {{-- <div class="header-top-search">
                            <form class="top-search-box">
                                <input type="text" placeholder="Search" class="top-search-field">
                                <button class="top-search-btn"><i class="flaticon-search"></i></button>
                            </form>
                        </div> --}}
                        <!-- header top search end -->

                        @if(Auth::check())                        
                        @php
                            $user_id = Auth::user()->id; 
                            $logged_user = DB::table('users')->leftjoin('user_profile', 'user_profile.user_id', '=', 'users.id')->where('users.id', $user_id)->first();
                        @endphp
                        
                        <!-- profile picture start -->
                        <div class="profile-setting-box">
                            <div class="profile-thumb-small">
                                <a href="javascript:void(0)" class="profile-triger">
                                    <figure>
                                        <img src="@if($logged_user->profile_photo){{asset($logged_user->profile_photo)}} @else {{ asset('Website/images/profile/default-s-profile.jpeg') }} @endif" alt="profile picture">
                                    </figure>
                                </a>
                                <div class="profile-dropdown">
                                    <div class="profile-head">
                                        <h5 class="name">  {{ $logged_user->name }} </h5>
                                        <h6>{{ $logged_user->email }}</h6>
                                    </div>
                                    <div class="profile-body">
                                        <ul>
                                            <li><a href="{{url('My-profile')}}"><i class="flaticon-user"></i>Profile</a></li>
                                            @if($logged_user->vendor_approval == 1)
                                            <li><a href="{{url('VendorDashboard')}}"><i class="flaticon-user"></i>Vendor Dashboard</a></li>  
                                            @endif    
                                             <li><a href="{{url('My-address')}}"><i class="flaticon-user"></i>My Address</a></li>
                                             <li><a href="{{url('/mycart')}}"><i class="flaticon-user"></i>My Cart</a></li>                                                                           
                                             <li><a href="{{url('/checkout')}}"><i class="flaticon-user"></i>Checkout</a></li>  
                                             <li><a href="{{url('My-order')}}"><i class="flaticon-user"></i>My Order</a></li>                                                                           
                                        </ul>
                                        <ul>                                           
                                            <li><a href="{{url('logout')}}"><i class="flaticon-unlock"></i>Sign out</a></li>
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
                                        <img src="{{ asset('Website/images/profile/login.png') }}" alt="profile picture">
                                    </figure>
                                </a>
                                <div class="profile-dropdown">                                   
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
                <a href="{{url('/')}}">
                    <img src="{{ asset('Website/images/logo/logo-white.png') }}" alt="logo">
                </a>
            </div>
            <div class="mobile-menu w-100">
                {{-- <ul>
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
                </ul> --}}
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

                        @if(Auth::check())
                        
                        @php
                            $user_id = Auth::user()->id; 
                            $logged_user = DB::table('users')->leftjoin('user_profile', 'user_profile.user_id', '=', 'users.id')->where('users.id', $user_id)->first();
                        @endphp
                        <div class="profile-head">
                            <h5 class="name"><a href="#"> {{ $logged_user->name }}</a></h5>
                            <a class="mail" href="#">{{ $logged_user->email }} </a>
                        </div>
                        <div class="profile-body">
                            <ul>
                                <li><a href="{{url('My-profile')}}"><i class="flaticon-user"></i>Profile</a></li>
                                
                                <li><a href="{{url('VendorDashboard')}}"><i class="flaticon-user"></i>Vendor Dashboard</a></li>

                                <li><a href="{{url('/mycart')}}"><i class="flaticon-user"></i>My Cart</a></li>

                            </ul>
                            <ul>                                           
                                <li><a href="{{url('logout')}}"><i class="flaticon-unlock"></i>Sign out</a></li>
                            </ul>
                        </div>
                        @else
                        <div class="profile-body">                                        
                            <ul>                                            
                                <li><a href="{{url('Web-login')}}"><i class="flaticon-unlock"></i>Login</a></li>
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- profile picture end -->
            </div>
        </div>
    </div>
</header>
<!-- header area end -->