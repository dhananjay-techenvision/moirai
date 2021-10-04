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
                                        <li class="active"><a href="{{url('My-profile')}}">My Profile</a></li>
                                        @php
                                            $vendor_info =  DB::table('vendors')->where('user_id',$user->id)->get();
                                            // dd($vendor_info->count() > 0 );
                                        @endphp

                                        @if($vendor_info->count() > 0 )
                                            <li class="active"><a href="{{url('vendor-info')}}">Vendor</a></li>
                                        @else
                                            <li class="active"><a href="{{url('approve-vendor')}}">Apply To Vendor</a></li>
                                        @endif
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
                          <a href="{{url('Edit-profile')}}/<?php  echo Auth::user()->id;?>"> <button class="edit-btn">edit profile</button></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">                    
                </div>

                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="card card-small">
                        <div class="share-box-inner">
                            

                        <!-- share content box start -->
                        <div class="share-content-box w-100">                               
                            <div class="row col-12">
                                <form class="custom-form" name="creat_post" method="post"
                                    action="{{ url('vendor-submit') }}"  enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12 p-1">
                                                    <select class="form-control w-100" name="category_id" required>
                                                        <option value="" class="w-100">Select Category</option>
                                                        @foreach($category as $r) 
                                                            <option value="{{$r->id}}" class="w-100">{{$r->category_name}}</option> 
                                                        @endforeach
                                                    </select>
                                                </div>
                                                
                                                <div class="col-md-12 p-1">
                                                    <textarea  class="form-control" rows="3" name="address" placeholder="Enter Address"></textarea>
                                                </div>

                                                <div class="col-md-12 p-1">
                                                    <input type="text" name="city" class="form-control"
                                                        placeholder="Enter City" />
                                                </div>

                                                <div class="col-12 py-1 w-100">
                                                    <select class="nice-select w-100" name="state" placeholder="Select State">
                                                        <option value="">Select State</option>
                                                        @foreach($state_list as $r)  
                                                            <option value="{{$r->id}}">{{$r->state}}</option>                                                     
                                                        @endforeach                                     
                                                    </select>
                                                </div>

                                                <div class="col-md-12 p-1">
                                                    <input type="text" name="pin_code" class="form-control"
                                                        placeholder="Enter Pin Code" />
                                                </div>

                                                <div class="col-md-12 p-1">
                                                    <textarea  class="form-control" rows="3" name="description" placeholder="Enter Description"></textarea>
                                                </div>
                                                                                            
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="post-share-btn" data-bs-dismiss="modal">cancel</button>
                                            <button type="submit" class="post-share-btn">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>      
                    </div>
                </div> 
            </div>

                <div class="col-lg-3 order-3">
                    
                </div>
            </div>
        </div>
    </div>

</main>