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



                    @foreach ($post_content as $item)
                    <!-- post status start -->
                    <div class="card">
                        <!-- post title start -->
                        <div class="post-title d-flex align-items-center">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="#">
                                    <figure class="profile-thumb-middle">
                                        <img src="{{ asset('Website/images/profile/profile-small-1.jpg') }}" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="posted-author">
                                <h6 class="author"><a href="#">{{$item->name}}</a></h6>
                                <span class="post-time">{{ $item->post_created_at }}</span>
                            </div>

                            {{-- <div class="post-settings-bar">
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
                            </div> --}}
                        </div>
                        <!-- post title start -->
                        <div class="post-content">
                           <a href="{{url('viewpost/'.$item->id)}}"> 
                                <p class="post-desc text-black" >
                                    {{ $item->description }}
                                </p>
                            </a>
                            @if($item->post_image)
                            <div class="post-thumb-gallery">
                                <figure class="post-thumb img-popup">
                                    <a href="assets/images/post/post-1.jpg">
                                        <img src="{{asset($item->post_image)}}" alt="post image">
                                    </a>
                                </figure>
                            </div>
                            @elseif($item->post_video)
                            <div class="plyr__video-embed plyr-video">
                                <video width="100%" height="auto" controls>
                                    <source src="{{asset($item->post_video)}}" type="video/mp4">                                     
                              </video>
                            </div>
                            @endif

                            @php
                                $rating = DB::table('rating_info')->join('post_content', 'post_content.id', '=', 'rating_info.post_id')->where('post_content.id', $item->id)->get();
                                $comments = DB::table('comments')->join('post_content', 'post_content.id', '=', 'comments.post_id')->join('user_profile', 'user_profile.user_id', '=', 'comments.user_id')->select('comments.*','user_profile.profile_photo')->where('post_content.id', $item->id)->get();
                                // dd($comments);                                
                            @endphp
                            <div class="post-meta">
                                @if(Auth::check())
                                @php
                                    $user_id = Auth::user()->id;
                                @endphp
                                <input type="hidden" name="logged_user" id="logged_user" value="{{$user_id}}">
                                <button class="post-meta-like likepost" id="likes_btn_{{$item->id}}" value="{{$item->id}}">
                                    <i class="bi bi-heart-beat"></i>                                   
                                     <span class="likes_count_{{$item->id}}"> {{$rating->count() }} </span> <span>  people like this</span>
                                    <strong>201</strong>
                                </button>
                                @else
                                <button class="post-meta-like" >
                                    <i class="bi bi-heart-beat"></i>                                   
                                    <span>{{$rating->count() }}  people like this</span>
                                    <strong>201</strong>
                                </button>
                                @endif
                                <ul class="comment-share-meta">
                                    <li>
                                        <a href="{{url('viewpost/'.$item->id)}}"> 
                                        <button class="post-comment">
                                            <i class="bi bi-chat-bubble"></i>
                                            <span>{{$comments->count() }}</span>
                                        </button>
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <button class="post-share">
                                            <i class="bi bi-share"></i>
                                            <span>07</span>
                                        </button>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- post status end -->

                     {{-- Comment start  --}}
                    <!-- widget single item start -->
                    <div class="card widget-item">
                        <h4 class="widget-title">Comments</h4>
                        <div class="widget-body">
                            {{-- if your is login then only he add comment  --}}
                            @if(Auth::check())
                            <form class="" name="comment_submit" method="post"
                            action="{{ url('comment-submit')}}"  enctype="multipart/form-data">
                           @csrf
                                <input type="hidden" name="post_id" value="{{$item->id}}">
                                <div class="col-md-12 p-1 emoji-picker-container">
                                    <textarea class="form-control" rows="3" name="comment" placeholder="Write a comment..." ></textarea>
                                </div>
                                
                                <div class="col-md-12 p-1 mx-auto">
                                    <button type="submit" class="post-share-btn">post</button>
                                </div>
                            </form>
                            @endif
                            <ul class="like-page-list-wrapper">
                                @foreach($comments as $r)
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="@if($r->profile_photo){{asset($r->profile_photo)}} @else {{ asset('Website/images/profile/default-s-profile.jpeg') }} @endif" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info" id="comment_id">
                                            <h3 class="list-title"><a href="#"> {{$r->comment}}</a></h3>
                                            <p class="list-subtitle">{{ date('M j, Y', strtotime($r->created_at)) }}</p>
                                        </div>
                                    </li>                                
                                @endforeach 
                            </ul>
                        </div>
                    </div>
                    <!-- widget single item end -->

                   

                      
                    @endforeach
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
