@extends('layouts.website')

@include('layouts.website_head')

<body>
    @include('layouts.website_nav')
<main>

    <div class="main-wrapper pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="widget-area">
                        <!-- widget single item start 
                        <div class="card card-profile widget-item p-0">
                            <div class="profile-banner">
                                <figure class="profile-banner-small">
                                    <a href="profile.html">
                                        <img src="{{ asset('Website/images/banner/banner-small.jpg') }}" alt="">
                                    </a>
                                    <a href="profile.html" class="profile-thumb-2">
                                        <img src="{{ asset('Website/images/profile/profile-midle-1.jpg') }}" alt="">
                                    </a>
                                </figure>
                                <div class="profile-desc text-center">
                                    <h6 class="author"><a href="profile.html">Erik Jhonson</a></h6>
                                    <p>Any one can join with but Social network us if you want Any one can join with us if you want</p>
                                </div>
                            </div>
                        </div>
                        widget single item start -->

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">page you may like</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    @foreach ($tabs as $item)
                                    <li class="unorder-list">                                       
                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="{{url('PagePost/'.$item->slug)}}">{{ $item->tab_name }}</a></h3>
                                            {{-- <p class="list-subtitle"><a href="#">adventure</a></p> --}}
                                        </div>
                                        <button class="like-button active">
                                            <img class="heart" src="{{ asset('Website/images/icons/heart.png') }}" alt="">
                                            <img class="heart-color" src="{{ asset('Website/images/icons/heart-color.png') }}" alt="">
                                        </button>
                                    </li>  
                                    @endforeach                                  
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">latest top news</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-20.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">2 min ago</p>
                                        </div>
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
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">20 min ago</p>
                                        </div>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-13.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">30 min ago</p>
                                        </div>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-17.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">40 min ago</p>
                                        </div>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-10.jpg') }}" alt="profile picture">
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
                    </aside>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">

                    @if(Auth::check())
                    <!-- share box start -->
                    <div class="card card-small">
                        <div class="share-box-inner">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="#">
                                    <figure class="profile-thumb-middle">
                                        <img src="{{ asset('Website/images/profile/profile-small-37.jpg') }}" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <!-- share content box start -->
                            <div class="share-content-box w-100">
                                <form class="share-text-box">
                                    <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="upload Post" data-bs-toggle="modal" data-bs-target="#textbox" id="email"></textarea>
                                    {{-- <button class="btn-share" type="submit">share</button> --}}
                                </form>
                            </div>
                            <!-- share content box end -->
                            <!-- Modal start -->
                            <div class="modal fade" id="textbox" aria-labelledby="textbox">
                                <div class="modal-dialog">
                                    <form class="signup-inner--form" name="creat_post" method="post"
                                    action="{{ url('post-submit') }}"  enctype="multipart/form-data">
                                @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Upload a Post</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        
                                        <div class="modal-body custom-scroll">
                                            <div class="row">
                                                <div class="col-md-12 p-1">
                                                    <input type="text" name="title" class="form-control"
                                                        placeholder="Enter title" />
                                                </div>
                                                <div class="col-md-12 p-1">
                                                    <textarea  class="form-control" rows="3" name="description" placeholder="Enter Description"></textarea>
                                                </div>
                                                <div class="col-md-12 p-1">
                                                   <input type="file" name="post_content" class="form-control">
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="post-share-btn" data-bs-dismiss="modal">cancel</button>
                                            <button type="submit" class="post-share-btn">post</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <!-- Modal end -->
                        </div>
                    </div>
                    <!-- share box end -->
                    @endif

                    <div class="card"  aria-labelledby="textbox">
                        <div class="edit-post-form" >
                            <form class="update-post" name="update_post" method="post"
                            action="{{ url('post-submit') }}"  enctype="multipart/form-data">
                        @csrf

                            <input type="hidden" name="post_id" value="{{$post_content->id}}">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="">Edit Post</h5>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 py-1">
                                            <label class="col-sm-12 col-form-label">Title <small class="text-danger">*</small></label>
                                        </div>
                                        <div class="col-md-12 py-1">
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter title" value="{{$post_content->title}}" />
                                        </div>

                                        <div class="col-md-12 py-1">
                                            <label class="col-sm-12 col-form-label">Description <small class="text-danger">*</small></label>
                                        </div>

                                       

                                        <div class="col-md-12 py-3">
                                            <textarea  class="form-control" rows="3" name="description" placeholder="Enter Description">{{$post_content->description}} </textarea>
                                        </div>

                                        <div class="col-md-12 py-1">
                                            <label class="col-sm-12 col-form-label">Category <small class="text-danger">*</small></label>
                                        </div>

                                        <div class="col-md-12 p-1">
                                            <select class="form-control w-100" name="category_id">
                                                <option value="">Select Category</option>
                                                @foreach($category as $r) 
                                                    <option value="{{$r->id}}" @if($r->id == $post_content->category_id)selected @endif>{{$r->category_name}}</option> 
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-12 py-1">
                                            <label class="col-sm-12 col-form-label">upload Image or video <small class="text-danger">*</small></label>
                                        </div>

                                        <div class="col-md-12 py-3">
                                            <input type="file" name="post_content_new" class="form-control">
                                         </div>
 
                                         <div class="col-md-12 py-3">
                                             {{-- <button type="reset" class="post-share-btn" data-bs-dismiss="modal">cancel</button> --}}
                                             <button type="submit" class="post-share-btn">Update</button>
                                         </div>

                                        
                                         <div class="col-md-12 py-1">
                                            <label class="col-sm-12 col-form-label">uploaded Image or video <small class="text-danger">*</small></label>
                                        </div>

                                        @if($post_content->post_image)
                                        <div class="col-md-12 ">
                                            <div class="post-thumb-gallery ">
                                                <figure class="post-thumb img-popup">
                                                    <a href="assets/images/post/post-1.jpg">
                                                        <img src="{{asset($post_content->post_image)}}" alt="post image">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        @elseif($post_content->post_video)
                                        <div class="col-md-12 ">
                                            <div class="plyr__video-embed plyr-video ">
                                                <video width="100%" height="auto" controls>
                                                    <source src="{{asset($post_content->post_video)}}" type="video/mp4">                                     
                                                </video>
                                            </div>
                                        </div>
                                        @endif                                    
                                    
                                </div>
                              
                            </div>
                        </form>
                        </div>
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
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-4.jpg') }}" alt="profile picture">
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
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-15.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Ammeya Jakson</a></h3>
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
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-18.jpg') }}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Jashon Muri</a></h3>
                                            <p class="list-subtitle"><a href="#">2 mutual</a></p>
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
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-14.jpg') }}" alt="profile picture">
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
                                                    <img src="{{ asset('Website/images/profile/profile-35x35-20.jpg') }}" alt="profile picture">
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
