@extends('layouts.website')

@include('layouts.website_head')

<body>

    @include('layouts.website_nav')

    <main>

        <div class="main-wrapper">
            <div class="profile-banner-large bg-img" data-bg="@if(isset($user_profile->timeline_picture)){{asset($user_profile->timeline_picture)}} @else {{ asset('Website/images/profile/profile-1.jpg') }} @endif">
            </div>
            <div class="profile-menu-area bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="profile-picture-box">
                                <figure class="profile-picture">
                                    <a href="#">
                                        <img class="cprofile-picture"src="@if(isset($user_profile->profile_photo)){{asset($user_profile->profile_photo)}} @else {{ asset('Website/images/profile/profile-1.jpg') }} @endif" alt="profile picture">
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 offset-lg-1">
                            <div class="profile-menu-wrapper">
                                <div class="main-menu-inner header-top-navigation">
                                    <nav>
                                        <ul class="main-menu">
                                            <li class="active"><a href="{{url('My-profile')}}">My Profile</a></li>
                                            {{-- <li><a href="about.html">about</a></li>
                                            <li><a href="photos.html">photos</a></li>
                                            <li><a href="friends.html">friends</a></li>
                                            <li><a href="about.html">more</a></li> --}}
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
                        
                    </div>

                    <div class="col-lg-9 order-1 order-lg-2">
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
                                                placeholder="Email" value="{{$user->email}}" readonly>
                                        </div>
                                        <div class="col-12">
                                            <input type="number" name="phone" class="single-field"
                                                placeholder="Phone" value="{{$user->phone}}">
                                        </div> 

                                        <div class="col-12">
                                            <label for="profile_pic_new"> Profile Picture </label>                                           
                                        </div> 
                                        
                                    
                                        <div class="col-12 mb-2">                                            
                                            <input type="file" name="profile_pic_new" class="custom-file-input" id="profile_pic_new">                                           
                                        </div> 

                                        <div class="col-12 mb-3">
                                            <small class="text-danger">Select images of size 270*270 pixel</small>
                                        </div>


                                        <div class="col-12 mt-2">
                                            <label for="timeline_picture_new"> Timeline Picture </label>                                           
                                        </div> 
                                        <div class="col-12 mt-3 mb-2">                                           
                                            <input type="file" name="timeline_picture_new" id="timeline_picture_new">      
                                        </div> 
                                    
                                        <div class="col-12 mb-3">
                                            <small class="text-danger">Select images of size 1920*370 pixel</small>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <input type="text" name="city" class="single-field"
                                                placeholder="Enter City name" value="@if($user_profile){{$user_profile->city}} @endif">
                                        </div>

                                        <div class="col-12 mt-2 mb-3">
                                            <select class="nice-select" name="state" placeholder="Select State">
                                                <option value="">Select State</option>
                                                @foreach($state_list as $r) 
                                                    @if($user_profile)
                                                    <option value="{{$r->id}}" @if($r->id == $user_profile->state)selected @endif>{{$r->state}}</option> 
                                                    @else 
                                                    <option value="{{$r->id}}">{{$r->state}}</option> 
                                                    @endif                                                    
                                                @endforeach                                     
                                            </select>
                                        </div>
                                       
                                        <div class="col-12">
                                            <button class="submit-btn">Update</button>
                                        </div>
                                    </div>
                                  
                                </form>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>

    </main>

    
    @include('layouts.website_footer_sticky')


</body>