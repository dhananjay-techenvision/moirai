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
                                    <img class="cprofile-picture" src="@if(isset($user_profile->profile_photo)){{asset($user_profile->profile_photo)}} @else {{ asset('Website/images/profile/profile-1.jpg') }} @endif" alt="profile picture">
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
                                    <input type="hidden" name="vendor_id" value="{{$vendor->id}}">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12 p-1">
                                                    <label for="">Basic Information <span class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 p-1">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter Name" value="{{$user->name}}" title="Enter Name" readonly/>
                                        </div>

                                        <div class="col-md-12 p-1">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter Email" value="{{$user->email}}" title="Enter Email" readonly/>
                                        </div>

                                        <div class="col-md-12 p-1">
                                            <input type="text" name="phone" class="form-control"
                                                placeholder="Enter Phone" value="{{$user->phone}}" title="Enter Phone" readonly/>
                                        </div>

                                        <div class="col-md-12 p-1">
                                            <input type="text" name="aadhar_card" class="form-control"
                                                placeholder="Enter Aadhar Number" value="{{$vendor->aadhar_card}}" title="Enter Aadhar Number"  maxlength="12" />
                                        </div>

                                        <div class="col-md-12 p-1">
                                            <input type="text" name="pan_number" class="form-control"
                                                placeholder="Enter PAN Number" value="{{$vendor->pan_number}}" title="Enter PAN Number" />
                                        </div>

                                        <div class="col-md-12 p-1 mb-5">
                                            <select class="form-control w-100" name="category_id" required>
                                                <option value="" class="w-100">Select Category</option>
                                                @foreach($category as $r) 
                                                    <option value="{{$r->id}}" class="w-100" @if($r->id == $vendor->category_id)selected @endif>{{$r->category_name}}</option> 
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-12 py-4 mt-5">
                                            <label for="">Business Details <span class="text-danger">*</span></label>
                                        </div>

                                        <div class="col-md-12 p-1">
                                            <input type="text" name="business_name" class="form-control"
                                                placeholder="Enter Business Name" value="{{$vendor->business_name}}" title="Enter Business Name" required/>
                                        </div>

                                        <div class="col-md-12 p-1">
                                            <input type="text" name="gst_number" class="form-control"
                                                placeholder="Enter GST Number" value="{{$vendor->gst_number}}" title="Enter GST Number" required/>
                                        </div>
                                       
                                        <div class="col-md-12 py-4">
                                            <label for="">Bank Details <span class="text-danger">*</span></label>
                                        </div>

                                        <div class="col-md-12 p-1">
                                            <input type="text" name="bank_name" class="form-control"
                                                placeholder="Enter Bank Name" value="{{$vendor->bank_name}}"  title="Enter Bank Name" required/>
                                        </div>

                                        <div class="col-md-12 p-1">
                                            <input type="text" name="account_name" class="form-control"
                                                placeholder="Enter Account Holder Name" value="{{$vendor->account_name}}" title="Enter Account Holder Name" required/>
                                        </div>

                                        <div class="col-md-12 p-1">
                                            <input type="text" name="account_number" class="form-control"
                                                placeholder="Enter Account Number" value="{{$vendor->account_number}}" title="Enter Account Number" required/>
                                        </div>

                                        <div class="col-md-12 p-1">
                                            <input type="text" name="ifsc_number" class="form-control"
                                                placeholder="Enter IFSC Code"  value="{{$vendor->ifsc_number}}" title="Enter IFSC Code" required/>
                                        </div>

                                        <div class="col-md-12 p-1">
                                            <input type="text" name="upi_id" class="form-control"
                                                placeholder="Enter UPI Id" value="{{$vendor->upi_id}}" title="Enter UPI Id" required/>
                                        </div>                                      

                                        <div class="col-md-12 py-4">
                                            <label for="">Address Details <span class="text-danger">*</span></label>
                                        </div>
                                                
                                        <div class="col-md-12 p-1">
                                            <textarea  class="form-control" rows="3" name="address" placeholder="Enter Address"> {{$vendor->address}}</textarea>
                                        </div>

                                        <div class="col-md-12 p-1">
                                            <input type="text" name="city" class="form-control"
                                                placeholder="Enter City" value="{{$vendor->city}}" value="{{$vendor->city}}" title="Enter City" required/>
                                        </div>

                                        <div class="col-md-12 py-2 w-100">
                                            <select class="nice-select w-100" name="state" placeholder="Select State" required>
                                                <option value="">Select State</option>
                                                @foreach($state_list as $r)  
                                                    <option value="{{$r->id}}" @if($r->id == $vendor->state)selected @endif>{{$r->state}}</option>                                                     
                                                @endforeach                                     
                                            </select>
                                        </div>

                                                <div class="col-md-12 p-1 mt-5">
                                                    <input type="text" name="pin_code" class="form-control"
                                                        placeholder="Enter Pin Code"  value="{{$vendor->pin_code}}" title="Enter Pin Code" required/>
                                                </div>

                                                <div class="col-md-12 p-1">
                                                    <textarea  class="form-control" rows="3" name="description" placeholder="Enter Description">{{$vendor->description}}</textarea>
                                                </div>
                                                                                            
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            {{-- <button type="reset" class="post-share-btn" data-bs-dismiss="modal">cancel</button> --}}
                                            <button type="submit" class="post-share-btn">Update</button>
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