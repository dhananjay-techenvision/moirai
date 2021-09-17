@extends('layouts.website')

@include('layouts.website_head')

<body>

    @include('layouts.website_nav')

    <main>

        <div class="main-wrapper">
            <div class="profile-banner-large bg-img" data-bg="{{ asset('Website/images/banner/profile-banner.jpg') }}">
            </div>
            <div class="profile-menu-area bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="profile-picture-box">
                                <figure class="profile-picture">
                                    <a href="#">
                                        <img src="@if(isset($user_profile->profile_photo)){{asset($user_profile->profile_photo)}} @else {{ asset('Website/images/profile/profile-1.jpg') }} @endif" alt="profile picture">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 offset-lg-1">
                            <div class="profile-menu-wrapper">
                                <div class="main-menu-inner header-top-navigation">
                                    <nav>
                                        <ul class="main-menu">
                                            <li class="active"><a href="#">timeline</a></li>
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="photos.html">photos</a></li>
                                            <li><a href="friends.html">friends</a></li>
                                            <li><a href="about.html">more</a></li>
                                            <!-- <li class="d-inline-block d-md-none"><a href="profile.html">edit profile</a></li> -->
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 d-none d-md-block">
                            <div class="profile-edit-panel">
                                <button class="edit-btn">edit profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <aside class="widget-area profile-sidebar">
                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Erik Jhonson</h4>
                                <div class="widget-body">
                                    <div class="about-author">
                                        <p>I Don’t know how? But i believe that it is possible one day if i stay with my dream all time</p>
                                        <ul class="author-into-list">
                                            <li><a href="#"><i class="bi bi-office-bag"></i>Web Developer</a></li>
                                            <li><a href="#"><i class="bi bi-home"></i>Melbourne, Australia</a></li>
                                            <li><a href="#"><i class="bi bi-location-pointer"></i>Pulshar, Melbourne</a></li>
                                            <li><a href="#"><i class="bi bi-heart-beat"></i>Travel, Swimming</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Sweets Memories</h4>
                                <div class="widget-body">
                                    <div class="sweet-galley img-gallery">
                                        <div class="row row-5">
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="{{ asset('Website/images/gallery/gallery-1.jpg') }}">
                                                            <img src="{{ asset('Website/images/gallery/gallery-1.jpg') }}" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="{{ asset('Website/images/gallery/gallery-2.jpg') }}">
                                                            <img src="{{ asset('Website/images/gallery/gallery-2.jpg') }}" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="{{ asset('Website/images/gallery/gallery-3.jpg') }}">
                                                            <img src="{{ asset('Website/images/gallery/gallery-3.jpg') }}" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="{{ asset('Website/images/gallery/gallery-4.jpg') }}">
                                                            <img src="{{ asset('Website/images/gallery/gallery-4.jpg') }}" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="{{ asset('Website/images/gallery/gallery-5.jpg') }}">
                                                            <img src="{{ asset('Website/images/gallery/gallery-5.jpg') }}" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="{{ asset('Website/images/gallery/gallery-6.jpg') }}">
                                                            <img src="{{ asset('Website/images/gallery/gallery-6.jpg') }}" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="{{ asset('Website/images/gallery/gallery-7.jpg') }}">
                                                            <img src="{{ asset('Website/images/gallery/gallery-7.jpg') }}" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="{{ asset('Website/images/gallery/gallery-8.jpg') }}">
                                                            <img src="{{ asset('Website/images/gallery/gallery-8.jpg') }}" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="gallery-tem">
                                                    <figure class="post-thumb">
                                                        <a class="gallery-selector" href="{{ asset('Website/images/gallery/gallery-9.jpg') }}">
                                                            <img src="{{ asset('Website/images/gallery/gallery-9.jpg') }}" alt="sweet memory">
                                                        </a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">page you may like</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-1.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Travel The World</a></h3>
                                                <p class="list-subtitle"><a href="#">adventure</a></p>
                                            </div>
                                            <button class="like-button active">
                                                <img class="heart" src="{{ asset('Website/images/icons/heart.png') }}" alt="">
                                                <img class="heart-color" src="{{ asset('Website/images/icons/heart-color.png') }}" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-11.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Foodcort Nirala</a></h3>
                                                <p class="list-subtitle"><a href="#">food</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="{{ asset('Website/images/icons/heart.png') }}" alt="">
                                                <img class="heart-color" src="{{ asset('Website/images/icons/heart-color.png') }}" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-15.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                                                <p class="list-subtitle"><a href="#">drama</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="{{ asset('Website/images/icons/heart.png') }}" alt="">
                                                <img class="heart-color" src="{{ asset('Website/images/icons/heart-color.png') }}" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-18.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Active Mind</a></h3>
                                                <p class="list-subtitle"><a href="#">fitness</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="{{ asset('Website/images/icons/heart.png') }}" alt="">
                                                <img class="heart-color" src="{{ asset('Website/images/icons/heart-color.png') }}" alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget single item end -->
                        </aside>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="signup-form-wrapper">
                            
                            <div class="signup-inner text-center">
                                <h3 class="title">Edit Profile</h3>
                                <form class="signup-inner--form" name="editProfile" method="post"
                                    action="{{ url('Profile-submit') }}"  enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="text" name="name" class="single-field"
                                                placeholder="Enter Name" value="{{$user->name}}">
                                        </div>
                                        <div class="col-12">
                                            <input type="email" name="email" class="single-field"
                                                placeholder="Email" value="{{$user->email}}">
                                        </div>
                                        <div class="col-12">
                                            <input type="number" name="phone" class="single-field"
                                                placeholder="Phone" value="{{$user->phone}}">
                                        </div>   
                                    
                                        <div class="col-12">
                                            <label for="profile_pic_new"> Profile Picture </label>
                                            <input type="file" name="profile_pic_new" id="profile_pic_new">
                                            <small>Select images of size 270*270 pixel</small>
                                        </div> 
                                       
                                        <div class="col-12">
                                            <button class="submit-btn">Update</button>
                                        </div>
                                    </div>
                                  
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 order-3">
                        <aside class="widget-area">
                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Recent Notifications</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-9.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">5 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-8.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">10 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-7.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">18 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-6.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">25 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-5.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">39 min ago</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Advertizement</h4>
                                <div class="widget-body">
                                    <div class="add-thumb">
                                        <a href="#">
                                            <img src="{{ asset('Website/images/banner/advertise.jpg') }}" alt="advertisement">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- widget single item end -->

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">Friends Zone</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-1.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">arfim bolt</a></h3>
                                                <p class="list-subtitle"><a href="#">10 mutual</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="{{ asset('Website/images/icons/heart.png') }}" alt="">
                                                <img class="heart-color" src="{{ asset('Website/images/icons/heart-color.png') }}" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-2.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">marry wither</a></h3>
                                                <p class="list-subtitle"><a href="#">02 mutual</a></p>
                                            </div>
                                            <button class="like-button active">
                                                <img class="heart" src="{{ asset('Website/images/icons/heart.png') }}" alt="">
                                                <img class="heart-color" src="{{ asset('Website/images/icons/heart-color.png') }}" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-3.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                                                <p class="list-subtitle"><a href="#">drama</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="{{ asset('Website/images/icons/heart.png') }}" alt="">
                                                <img class="heart-color" src="{{ asset('Website/images/icons/heart-color.png') }}" alt="">
                                            </button>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{{ asset('Website/images/profile/profile-35x35-4.jpg') }}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Active Mind</a></h3>
                                                <p class="list-subtitle"><a href="#">fitness</a></p>
                                            </div>
                                            <button class="like-button">
                                                <img class="heart" src="{{ asset('Website/images/icons/heart.png') }}" alt="">
                                                <img class="heart-color" src="{{ asset('Website/images/icons/heart-color.png') }}" alt="">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- widget single item end -->
                        </aside>
                    </div>
                </div>
            </div>
        </div>

    </main>

    
    @include('layouts.website_footer_sticky')


</body>