 @extends('layouts.website')

 @include('layouts.website_head')

 <style>
    .dt-buttons
  {
      display:none!important;
  }
         
   #social-links {
              margin: 0 auto;
              max-width: 500px;
          }
         #social-links ul li {
              display: inline-block;
          }          
           #social-links ul li a {
              padding: 15px;
              border: 1px solid #ccc;
              margin: 1px;
              font-size: 30px;
          }
           #social-links{
              display: inline-table;
          }
           #social-links ul li{
              display: inline;
          }
           #social-links ul li a{
              padding: 5px;
              border: 1px solid #ccc;
              margin: 1px;
              font-size: 15px;
              background: #e3e3ea;
          }
</style>
 <body>
     <div class="app dk" id="app">

         <!-- ############ LAYOUT START-->

         <!-- content -->
         <div id="content" class="app-content white bg" role="main">
             <div class="app-header white lt box-shadow-z1">
                 <div class="navbar" data-pjax>
                     <a data-toggle="collapse" data-target="#navbar"
                         class="navbar-item pull-right hidden-md-up m-r-0 m-l">
                         <i class="material-icons">menu</i>
                     </a>
                     <!-- brand -->
                     {{-- <a href="index.html" class="navbar-brand md">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32">
                             <circle cx="24" cy="24" r="24" fill="rgba(255,255,255,0.2)" />
                             <circle cx="24" cy="24" r="22" fill="#1c202b" class="brand-color" />
                             <circle cx="24" cy="24" r="10" fill="#ffffff" />
                             <circle cx="13" cy="13" r="2" fill="#ffffff" class="brand-animate" />
                             <path d="M 14 24 L 24 24 L 14 44 Z" fill="#FFFFFF" />
                             <circle cx="24" cy="24" r="3" fill="#000000" />
                         </svg> --}}

                         {{-- <img src="{{ asset('Website/images/logo.png') }}" alt="." class="hide"> --}}
                         <img src="{{ asset('Website/images/moirai.png') }}" alt="." class="">

                         {{-- <span class="hidden-folded inline">MOIRAI</span> --}}
                     </a>
                     <!-- / brand -->

                     <!-- nabar right -->
                     {{-- <ul class="nav navbar-nav pull-right padding-nav">
                         <li class="nav-item">
                             <a class="nav-link" data-toggle="modal" data-target="#search-modal">
                                 <i class="material-icons">search</i>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="">
                                 <span class="hidden-xs-down btn btn-sm rounded primary _600">
                                     Upload
                                 </span>
                                 <span class="hidden-sm-up btn btn-sm btn-icon rounded primary">
                                     <i class="material-icons">file_upload</i>
                                 </span>
                             </a>
                         </li>
                         <li class="nav-item dropdown">
                             <a href="#" class="nav-link clear" data-toggle="dropdown">
                                 <span class="avatar w-32">
                                     <img src="{{ asset('Website/images/a3.jpg') }}" alt="...">
                                 </span>
                             </a>
                             <div class="dropdown-menu w dropdown-menu-scale pull-right">
                                 <a class="dropdown-item" href="profile.html#profile">
                                     <span>Profile</span>
                                 </a>
                                 <a class="dropdown-item" href="profile.html#tracks">
                                     <span>Tracks</span>
                                 </a>
                                 <a class="dropdown-item" href="profile.html#playlists">
                                     <span>Playlists</span>
                                 </a>
                                 <a class="dropdown-item" href="profile.html#likes">
                                     <span>Likes</span>
                                 </a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="docs.html">
                                     Need help?
                                 </a>
                                 <a class="dropdown-item" href="signin.html">Sign out</a>
                             </div>
                         </li>
                     </ul> --}}
                     @if(Auth::check()) 
                           
                            <!-- nabar right -->
                     <ul class="nav navbar-nav pull-right padding-nav">
                         <li class="nav-item dropdown mt-5">
                             <a href="#" class="nav-link clear" data-toggle="dropdown">
                                <?php  echo Auth::user()->name;?>
                             </a>
                             <div class="dropdown-menu w dropdown-menu-scale pull-right">
                                 <a class="dropdown-item" href="profile.html#profile">
                                     <span>Profile</span>
                                 </a>                                
                                 <div class="dropdown-divider"></div>                                 
                                 <a class="dropdown-item" href="{{url('logout')}}">Sign out</a>
                             </div>
                         </li>
                     </ul>
                     @else
                     <ul class="nav navbar-nav pull-right">
                        <li class="nav-item">
                          <a href="{{url('Web-register')}}" class="nav-link">
                            Signup
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{url('Web-login')}}" class="nav-link">
                          
                              Signin
                           
                          </a>
                        </li>
                      </ul>
                      @endif
                     <!-- / navbar right -->

                     <!-- navbar collapse -->
                     <div class="collapse navbar-toggleable-sm nav-md l-h-0 text-center" id="navbar">
                         <!-- link and dropdown -->
                         <ul class="nav navbar-nav  inline text-primary-hover" data-ui-nav>
                             <li class="nav-item">
                                 <a href="home.html" class="nav-link">
                                     <span class="nav-text">Discover</span>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="browse.html" class="nav-link">
                                     <span class="nav-text">Browse</span>
                                 </a>
                             </li>
                             <li class="nav-item dropdown pos-stc">
                                 <a href="chart.html" class="nav-link">
                                     <span class="nav-text">Charts</span>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="artist.html" class="nav-link">
                                     <span class="nav-text">Artists</span>
                                 </a>
                             </li>
                         </ul>
                         <!-- / link and dropdown -->
                     </div>
                     <!-- / navbar collapse -->
                 </div>
             </div>
             <div class="app-footer app-player grey bg">
                 <div class="playlist" style="width:100%"></div>
             </div>
             <div class="app-body" id="view">

                 <!-- ############ PAGE START-->

                 <div class="page-content">

                     <div class="black dk">
                         <div class="row no-gutter item-info-overlay">
                             <div class="col-sm-6 text-white">
                                 <div class="owl-carousel owl-theme owl-dots-sm owl-dots-bottom-left "
                                     data-ui-jp="owlCarousel" data-ui-options="{
                       items: 1
                      ,loop: true
                      ,autoplay: true
                      ,nav: true
                      
                    }">
                                     <div class="item r" data-id="item-115"
                                         data-src="http://api.soundcloud.com/tracks/239793212/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                         <div class="item-media primary">
                                             <a href="track.detail.html" class="item-media-content"
                                                 style="background-image: url('Website/images/c1.jpg');"></a>
                                             <div class="item-overlay center">
                                                 <button class="btn-playpause">Play</button>
                                             </div>
                                         </div>
                                         <div class="item-info">
                                             <div class="item-overlay bottom text-right">
                                                 <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
                                                 <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                         class="fa fa-ellipsis-h"></i></a>
                                                 <div class="dropdown-menu pull-right black lt"></div>
                                             </div>
                                             <div class="item-title text-ellipsis">
                                                 <a href="track.detail.html">New Album from Nouvelle</a>
                                             </div>
                                             <div class="item-author text-sm text-ellipsis">
                                                 <a href="artist.detail.html" class="text-muted">Nouvelle</a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="item r" data-id="item-116"
                                         data-src="http://api.soundcloud.com/tracks/260682299/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                         <div class="item-media info">
                                             <a href="track.detail.html" class="item-media-content"
                                                 style="background-image: url('Website/images/c2.jpg');"></a>
                                             <div class="item-overlay center">
                                                 <button class="btn-playpause">Play</button>
                                             </div>
                                         </div>
                                         <div class="item-info">
                                             <div class="item-overlay bottom text-right">
                                                 <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
                                                 <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                         class="fa fa-ellipsis-h"></i></a>
                                                 <div class="dropdown-menu pull-right black lt"></div>
                                             </div>
                                             <div class="item-title text-ellipsis">
                                                 <a href="track.detail.html">Blind Me</a>
                                             </div>
                                             <div class="item-author text-sm text-ellipsis">
                                                 <a href="artist.detail.html" class="text-muted">Fifty</a>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="item r" data-id="item-117"
                                         data-src="http://api.soundcloud.com/tracks/232886537/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                         <div class="item-media accent">
                                             <a href="track.detail.html" class="item-media-content"
                                                 style="background-image: url('Website/images/c3.jpg');"></a>
                                             <div class="item-overlay center">
                                                 <button class="btn-playpause">Play</button>
                                             </div>
                                         </div>
                                         <div class="item-info">
                                             <div class="item-overlay bottom text-right">
                                                 <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
                                                 <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                         class="fa fa-ellipsis-h"></i></a>
                                                 <div class="dropdown-menu pull-right black lt"></div>
                                             </div>
                                             <div class="item-title text-ellipsis">
                                                 <a href="track.detail.html">New Track from Pablo Nouvelle</a>
                                             </div>
                                             <div class="item-author text-sm text-ellipsis">
                                                 <a href="artist.detail.html" class="text-muted">Pablo Nouvelle</a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-3 col-xs-6">
                                 <div class="item r" data-id="item-1"
                                     data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                     <div class="item-media ">
                                         <a href="track.detail.html" class="item-media-content"
                                             style="background-image: url('Website/images/b0.jpg');"></a>
                                         <div class="item-overlay center">
                                             <button class="btn-playpause">Play</button>
                                         </div>
                                     </div>
                                     <div class="item-info">
                                         <div class="item-overlay bottom text-right">
                                             <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
                                             <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                     class="fa fa-ellipsis-h"></i></a>
                                             <div class="dropdown-menu pull-right black lt"></div>
                                         </div>
                                         <div class="item-title text-ellipsis">
                                             <a href="track.detail.html">Pull Up</a>
                                         </div>
                                         <div class="item-author text-sm text-ellipsis ">
                                             <a href="artist.detail.html" class="text-muted">Summerella</a>
                                         </div>


                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-3 col-xs-6">
                                 <div class="item r" data-id="item-2"
                                     data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                     <div class="item-media ">
                                         <a href="track.detail.html" class="item-media-content"
                                             style="background-image: url('Website/images/b1.jpg');"></a>
                                         <div class="item-overlay center">
                                             <button class="btn-playpause">Play</button>
                                         </div>
                                     </div>
                                     <div class="item-info">
                                         <div class="item-overlay bottom text-right">
                                             <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
                                             <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                     class="fa fa-ellipsis-h"></i></a>
                                             <div class="dropdown-menu pull-right black lt"></div>
                                         </div>
                                         <div class="item-title text-ellipsis">
                                             <a href="track.detail.html">Fireworks</a>
                                         </div>
                                         <div class="item-author text-sm text-ellipsis ">
                                             <a href="artist.detail.html" class="text-muted">Kygo</a>
                                         </div>


                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-3 col-xs-6">
                                 <div class="item r" data-id="item-3"
                                     data-src="http://api.soundcloud.com/tracks/79031167/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                     <div class="item-media ">
                                         <a href="track.detail.html" class="item-media-content"
                                             style="background-image: url('Website/images/b2.jpg');"></a>
                                         <div class="item-overlay center">
                                             <button class="btn-playpause">Play</button>
                                         </div>
                                     </div>
                                     <div class="item-info">
                                         <div class="item-overlay bottom text-right">
                                             <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
                                             <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                     class="fa fa-ellipsis-h"></i></a>
                                             <div class="dropdown-menu pull-right black lt"></div>
                                         </div>
                                         <div class="item-title text-ellipsis">
                                             <a href="track.detail.html">I Wanna Be In the Cavalry</a>
                                         </div>
                                         <div class="item-author text-sm text-ellipsis ">
                                             <a href="artist.detail.html" class="text-muted">Jeremy Scott</a>
                                         </div>


                                     </div>
                                 </div>
                             </div>
                             <div class="col-sm-3 col-xs-6">
                                 <div class="item r" data-id="item-4"
                                     data-src="http://api.soundcloud.com/tracks/230791292/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                     <div class="item-media ">
                                         <a href="track.detail.html" class="item-media-content"
                                             style="background-image: url('Website/images/b3.jpg');"></a>
                                         <div class="item-overlay center">
                                             <button class="btn-playpause">Play</button>
                                         </div>
                                     </div>
                                     <div class="item-info">
                                         <div class="item-overlay bottom text-right">
                                             <a href="#" class="btn-favorite"><i class="fa fa-heart-o"></i></a>
                                             <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                     class="fa fa-ellipsis-h"></i></a>
                                             <div class="dropdown-menu pull-right black lt"></div>
                                         </div>
                                         <div class="item-title text-ellipsis">
                                             <a href="track.detail.html">What A Time To Be Alive</a>
                                         </div>
                                         <div class="item-author text-sm text-ellipsis ">
                                             <a href="artist.detail.html" class="text-muted">Judith Garcia</a>
                                         </div>


                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="row-col">
                         <div class="col-lg-9 b-r no-border-md">
                             <div class="padding">
                                 <h2 class="widget-title h4 m-b">Treading</h2>
                                 <div class="owl-carousel owl-theme owl-dots-center" data-ui-jp="owlCarousel"
                                     data-ui-options="{
            margin: 20,
            responsiveClass:true,
            responsive:{
              0:{
                items: 2
              },
                543:{
                    items: 3
                }
            }
          }">
                                     <div class="___class_+?167___">
                                         <div class="item r" data-id="item-3"
                                             data-src="http://api.soundcloud.com/tracks/79031167/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media item-media-4by3">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b2.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">I Wanna Be In the Cavalry</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Jeremy
                                                         Scott</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="___class_+?183___">
                                         <div class="item r" data-id="item-6"
                                             data-src="http://api.soundcloud.com/tracks/236107824/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media item-media-4by3">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b5.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Body on me</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Rita Ora</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="___class_+?199___">
                                         <div class="item r" data-id="item-4"
                                             data-src="http://api.soundcloud.com/tracks/230791292/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media item-media-4by3">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b3.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">What A Time To Be Alive</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Judith
                                                         Garcia</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="___class_+?215___">
                                         <div class="item r" data-id="item-10"
                                             data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media item-media-4by3">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b9.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">The Open Road</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html"
                                                         class="text-muted">Postiljonen</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="___class_+?231___">
                                         <div class="item r" data-id="item-9"
                                             data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media item-media-4by3">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b8.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">All I Need</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Pablo
                                                         Nouvelle</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="___class_+?247___">
                                         <div class="item r" data-id="item-2"
                                             data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media item-media-4by3">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b1.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Fireworks</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Kygo</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="___class_+?263___">
                                         <div class="item r" data-id="item-12"
                                             data-src="http://api.soundcloud.com/tracks/174495152/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media item-media-4by3">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b11.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Happy ending</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html"
                                                         class="text-muted">Postiljonen</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="___class_+?279___">
                                         <div class="item r" data-id="item-1"
                                             data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media item-media-4by3">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b0.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Pull Up</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Summerella</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <h2 class="widget-title h4 m-b">New</h2>
                                 <div class="row">
                                     <div class="col-xs-4 col-sm-4 col-md-3">
                                         <div class="item r" data-id="item-6"
                                             data-src="http://api.soundcloud.com/tracks/236107824/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b5.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Body on me</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Rita Ora</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-xs-4 col-sm-4 col-md-3">
                                         <div class="item r" data-id="item-2"
                                             data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b1.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Fireworks</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Kygo</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-xs-4 col-sm-4 col-md-3">
                                         <div class="item r" data-id="item-8"
                                             data-src="http://api.soundcloud.com/tracks/236288744/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b7.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Simple Place To Be</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">RYD</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-xs-4 col-sm-4 col-md-3">
                                         <div class="item r" data-id="item-10"
                                             data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b9.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">The Open Road</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html"
                                                         class="text-muted">Postiljonen</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-xs-4 col-sm-4 col-md-3">
                                         <div class="item r" data-id="item-12"
                                             data-src="http://api.soundcloud.com/tracks/174495152/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b11.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Happy ending</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html"
                                                         class="text-muted">Postiljonen</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-xs-4 col-sm-4 col-md-3">
                                         <div class="item r" data-id="item-11"
                                             data-src="http://api.soundcloud.com/tracks/218060449/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b10.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Spring</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Pablo
                                                         Nouvelle</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-xs-4 col-sm-4 col-md-3">
                                         <div class="item r" data-id="item-7"
                                             data-src="http://api.soundcloud.com/tracks/245566366/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b6.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Reflection (Deluxe)</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Fifth
                                                         Harmony</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-xs-4 col-sm-4 col-md-3">
                                         <div class="item r" data-id="item-5"
                                             data-src="http://streaming.radionomy.com/JamendoLounge">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b4.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Live Radio</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Radionomy</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <h2 class="widget-title h4 m-b">Recommand for you</h2>
                                 <div class="row item-list item-list-md m-b">
                                     <div class="col-sm-6">
                                         <div class="item r" data-id="item-4"
                                             data-src="http://api.soundcloud.com/tracks/230791292/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b3.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">What A Time To Be Alive</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Judith
                                                         Garcia</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-sm-6">
                                         <div class="item r" data-id="item-8"
                                             data-src="http://api.soundcloud.com/tracks/236288744/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b7.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Simple Place To Be</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">RYD</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-sm-6">
                                         <div class="item r" data-id="item-6"
                                             data-src="http://api.soundcloud.com/tracks/236107824/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b5.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Body on me</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Rita Ora</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-sm-6">
                                         <div class="item r" data-id="item-9"
                                             data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b8.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">All I Need</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Pablo
                                                         Nouvelle</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-sm-6">
                                         <div class="item r" data-id="item-3"
                                             data-src="http://api.soundcloud.com/tracks/79031167/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b2.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">I Wanna Be In the Cavalry</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Jeremy
                                                         Scott</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-sm-6">
                                         <div class="item r" data-id="item-2"
                                             data-src="http://api.soundcloud.com/tracks/259445397/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b1.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Fireworks</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Kygo</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-sm-6">
                                         <div class="item r" data-id="item-5"
                                             data-src="http://streaming.radionomy.com/JamendoLounge">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b4.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Live Radio</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Radionomy</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-sm-6">
                                         <div class="item r" data-id="item-10"
                                             data-src="http://api.soundcloud.com/tracks/237514750/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b9.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">The Open Road</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html"
                                                         class="text-muted">Postiljonen</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-sm-6">
                                         <div class="item r" data-id="item-11"
                                             data-src="http://api.soundcloud.com/tracks/218060449/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b10.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Spring</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Pablo
                                                         Nouvelle</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-sm-6">
                                         <div class="item r" data-id="item-7"
                                             data-src="http://api.soundcloud.com/tracks/245566366/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b6.jpg');"></a>
                                                 <div class="item-overlay center">
                                                     <button class="btn-playpause">Play</button>
                                                 </div>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-overlay bottom text-right">
                                                     <a href="#" class="btn-favorite"><i
                                                             class="fa fa-heart-o"></i></a>
                                                     <a href="#" class="btn-more" data-toggle="dropdown"><i
                                                             class="fa fa-ellipsis-h"></i></a>
                                                     <div class="dropdown-menu pull-right black lt"></div>
                                                 </div>
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Reflection (Deluxe)</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Fifth
                                                         Harmony</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-3 w-xxl w-auto-md">
                             <div class="padding" style="bottom: 60px;" data-ui-jp="stick_in_parent">
                                 <h6 class="text text-muted">5 Likes</h6>
                                 <div class="row item-list item-list-sm m-b">
                                     <div class="col-xs-12">
                                         <div class="item r" data-id="item-8"
                                             data-src="http://api.soundcloud.com/tracks/236288744/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b7.jpg');"></a>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Simple Place To Be</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">RYD</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-xs-12">
                                         <div class="item r" data-id="item-7"
                                             data-src="http://api.soundcloud.com/tracks/245566366/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b6.jpg');"></a>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">Reflection (Deluxe)</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Fifth
                                                         Harmony</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-xs-12">
                                         <div class="item r" data-id="item-4"
                                             data-src="http://api.soundcloud.com/tracks/230791292/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b3.jpg');"></a>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">What A Time To Be Alive</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Judith
                                                         Garcia</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-xs-12">
                                         <div class="item r" data-id="item-9"
                                             data-src="http://api.soundcloud.com/tracks/264094434/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b8.jpg');"></a>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">All I Need</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Pablo
                                                         Nouvelle</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-xs-12">
                                         <div class="item r" data-id="item-3"
                                             data-src="http://api.soundcloud.com/tracks/79031167/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                             <div class="item-media ">
                                                 <a href="track.detail.html" class="item-media-content"
                                                     style="background-image: url('Website/images/b2.jpg');"></a>
                                             </div>
                                             <div class="item-info">
                                                 <div class="item-title text-ellipsis">
                                                     <a href="track.detail.html">I Wanna Be In the Cavalry</a>
                                                 </div>
                                                 <div class="item-author text-sm text-ellipsis ">
                                                     <a href="artist.detail.html" class="text-muted">Jeremy
                                                         Scott</a>
                                                 </div>


                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 {{-- <h6 class="text text-muted">Go mobile</h6>
                                 <div class="btn-groups">
                                     <a href="" class="btn btn-sm dark lt m-r-xs" style="width: 135px">
                                         <span class="pull-left m-r-sm">
                                             <i class="fa fa-apple fa-2x"></i>
                                         </span>
                                         <span class="clear text-left l-h-1x">
                                             <span class="text-muted text-xxs">Download on the</span>
                                             <b class="block m-b-xs">App Store</b>
                                         </span>
                                     </a>
                                     <a href="" class="btn btn-sm dark lt" style="width: 133px">
                                         <span class="pull-left m-r-sm">
                                             <i class="fa fa-play fa-2x"></i>
                                         </span>
                                         <span class="clear text-left l-h-1x">
                                             <span class="text-muted text-xxs">Get it on</span>
                                             <b class="block m-b-xs m-r-xs">Google Play</b>
                                         </span>
                                     </a>
                                 </div> --}}
                                 <div class="b-b m-y"></div>
                                 <div class="nav text-sm _600">
                                     <a href="#" class="nav-link text-muted m-r-xs">About</a>
                                     <a href="#" class="nav-link text-muted m-r-xs">Contact</a>
                                     <a href="#" class="nav-link text-muted m-r-xs">Legal</a>
                                     <a href="#" class="nav-link text-muted m-r-xs">Policy</a>
                                 </div>
                                 <p class="text-muted text-xs p-b-lg">&copy; Copyright 2021</p>
                              
                                  
                                {!! Share::page(url('/view-tab/2'))->twitter()
                            ->linkedin()
                            ->facebook()
                            ->whatsapp()        
                            ->reddit(); !!}                               
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- ############ PAGE END-->

             </div>
         </div>
         <!-- / -->

         <!-- ############ SWITHCHER START-->
         {{-- <div id="switcher">
             <div class="switcher white" id="sw-theme">
                 <a href="#" data-ui-toggle-class="active" data-ui-target="#sw-theme" class="white sw-btn">
                     <i class="fa fa-gear text-muted"></i>
                 </a>
                 <div class="box-header">
                     <strong>Theme Switcher</strong>
                 </div>
                 <div class="box-divider"></div>
                 <div class="box-body">
                     <p id="settingLayout" class="hidden-md-down">
                         <label class="md-check m-y-xs" data-target="container">
                             <input type="checkbox">
                             <i class="green"></i>
                             <span>Boxed Layout</span>
                         </label>
                         <label class="m-y-xs pointer" data-ui-fullscreen data-target="fullscreen">
                             <span class="fa fa-expand fa-fw m-r-xs"></span>
                             <span>Fullscreen Mode</span>
                         </label>
                     </p>
                     <p>Colors:</p>
                     <p data-target="color">
                         <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                             <input type="radio" name="color" value="primary">
                             <i class="primary"></i>
                         </label>
                         <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                             <input type="radio" name="color" value="accent">
                             <i class="accent"></i>
                         </label>
                         <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                             <input type="radio" name="color" value="warn">
                             <i class="warn"></i>
                         </label>
                         <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                             <input type="radio" name="color" value="success">
                             <i class="success"></i>
                         </label>
                         <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                             <input type="radio" name="color" value="info">
                             <i class="info"></i>
                         </label>
                         <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                             <input type="radio" name="color" value="blue">
                             <i class="blue"></i>
                         </label>
                         <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                             <input type="radio" name="color" value="warning">
                             <i class="warning"></i>
                         </label>
                         <label class="radio radio-inline m-a-0 ui-check ui-check-color ui-check-md">
                             <input type="radio" name="color" value="danger">
                             <i class="danger"></i>
                         </label>
                     </p>
                     <p>Themes:</p>
                     <div data-target="bg" class="text-u-c text-center _600 clearfix">
                         <label class="p-a col-xs-3 light pointer m-a-0">
                             <input type="radio" name="theme" value="" hidden>
                             <i class="active-checked fa fa-check"></i>
                         </label>
                         <label class="p-a col-xs-3 grey pointer m-a-0">
                             <input type="radio" name="theme" value="grey" hidden>
                             <i class="active-checked fa fa-check"></i>
                         </label>
                         <label class="p-a col-xs-3 dark pointer m-a-0">
                             <input type="radio" name="theme" value="dark" hidden>
                             <i class="active-checked fa fa-check"></i>
                         </label>
                         <label class="p-a col-xs-3 black pointer m-a-0">
                             <input type="radio" name="theme" value="black" hidden>
                             <i class="active-checked fa fa-check"></i>
                         </label>
                     </div>
                 </div>
             </div>
         </div> --}}
         <!-- ############ SWITHCHER END-->

         <!-- ############ SEARCH START -->
         <div class="modal white lt fade" id="search-modal" data-backdrop="false">
             <a data-dismiss="modal" class="text-muted text-lg p-x modal-close-btn">&times;</a>
             <div class="row-col">
                 <div class="p-a-lg h-v row-cell v-m">
                     <div class="row">
                         <div class="col-md-8 offset-md-2">
                             <form action="search.html" class="m-b-md">
                                 <div class="input-group input-group-lg">
                                     <input type="text" class="form-control" placeholder="Type keyword"
                                         data-ui-toggle-class="hide" data-ui-target="#search-result">
                                     <span class="input-group-btn">
                                         <button class="btn b-a no-shadow white" type="submit">Search</button>
                                     </span>
                                 </div>
                             </form>
                             <div id="search-result" class="animated fadeIn">
                                 <p class="m-b-md"><strong>23</strong> <span class="text-muted">Results
                                         found for: </span><strong>Keyword</strong></p>
                                 <div class="row">
                                     <div class="col-sm-6">
                                         <div class="row item-list item-list-sm item-list-by m-b">
                                             <div class="col-xs-12">
                                                 <div class="item r" data-id="item-7"
                                                     data-src="http://api.soundcloud.com/tracks/245566366/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                     <div class="item-media ">
                                                         <a href="track.detail.html" class="item-media-content"
                                                             style="background-image: url('Website/images/b6.jpg');"></a>
                                                     </div>
                                                     <div class="item-info">
                                                         <div class="item-title text-ellipsis">
                                                             <a href="track.detail.html">Reflection (Deluxe)</a>
                                                         </div>
                                                         <div class="item-author text-sm text-ellipsis ">
                                                             <a href="artist.detail.html" class="text-muted">Fifth
                                                                 Harmony</a>
                                                         </div>
                                                         <div class="item-meta text-sm text-muted">
                                                         </div>


                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-xs-12">
                                                 <div class="item r" data-id="item-3"
                                                     data-src="http://api.soundcloud.com/tracks/79031167/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                     <div class="item-media ">
                                                         <a href="track.detail.html" class="item-media-content"
                                                             style="background-image: url('Website/images/b2.jpg');"></a>
                                                     </div>
                                                     <div class="item-info">
                                                         <div class="item-title text-ellipsis">
                                                             <a href="track.detail.html">I Wanna Be In the Cavalry</a>
                                                         </div>
                                                         <div class="item-author text-sm text-ellipsis ">
                                                             <a href="artist.detail.html" class="text-muted">Jeremy
                                                                 Scott</a>
                                                         </div>
                                                         <div class="item-meta text-sm text-muted">
                                                         </div>


                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-xs-12">
                                                 <div class="item r" data-id="item-5"
                                                     data-src="http://streaming.radionomy.com/JamendoLounge">
                                                     <div class="item-media ">
                                                         <a href="track.detail.html" class="item-media-content"
                                                             style="background-image: url('Website/images/b4.jpg');"></a>
                                                     </div>
                                                     <div class="item-info">
                                                         <div class="item-title text-ellipsis">
                                                             <a href="track.detail.html">Live Radio</a>
                                                         </div>
                                                         <div class="item-author text-sm text-ellipsis ">
                                                             <a href="artist.detail.html"
                                                                 class="text-muted">Radionomy</a>
                                                         </div>
                                                         <div class="item-meta text-sm text-muted">
                                                         </div>


                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-xs-12">
                                                 <div class="item r" data-id="item-1"
                                                     data-src="http://api.soundcloud.com/tracks/269944843/stream?client_id=a10d44d431ad52868f1bce6d36f5234c">
                                                     <div class="item-media ">
                                                         <a href="track.detail.html" class="item-media-content"
                                                             style="background-image: url('Website/images/b0.jpg');"></a>
                                                     </div>
                                                     <div class="item-info">
                                                         <div class="item-title text-ellipsis">
                                                             <a href="track.detail.html">Pull Up</a>
                                                         </div>
                                                         <div class="item-author text-sm text-ellipsis ">
                                                             <a href="artist.detail.html"
                                                                 class="text-muted">Summerella</a>
                                                         </div>
                                                         <div class="item-meta text-sm text-muted">
                                                         </div>


                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-sm-6">
                                         <div class="row item-list item-list-sm item-list-by m-b">
                                             <div class="col-xs-12">
                                                 <div class="item">
                                                     <div class="item-media rounded ">
                                                         <a href="artist.detail.html" class="item-media-content"
                                                             style="background-image: url('Website/images/a7.jpg');"></a>
                                                     </div>
                                                     <div class="item-info ">
                                                         <div class="item-title text-ellipsis">
                                                             <a href="artist.detail.html">Richard Carr</a>
                                                             <div class="text-sm text-muted">6 songs</div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-xs-12">
                                                 <div class="item">
                                                     <div class="item-media rounded ">
                                                         <a href="artist.detail.html" class="item-media-content"
                                                             style="background-image: url('Website/images/a8.jpg');"></a>
                                                     </div>
                                                     <div class="item-info ">
                                                         <div class="item-title text-ellipsis">
                                                             <a href="artist.detail.html">Sara King</a>
                                                             <div class="text-sm text-muted">14 songs</div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-xs-12">
                                                 <div class="item">
                                                     <div class="item-media rounded ">
                                                         <a href="artist.detail.html" class="item-media-content"
                                                             style="background-image: url('Website/images/b1.jpg');"></a>
                                                     </div>
                                                     <div class="item-info ">
                                                         <div class="item-title text-ellipsis">
                                                             <a href="artist.detail.html">Melissa Garza</a>
                                                             <div class="text-sm text-muted">20 songs</div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-xs-12">
                                                 <div class="item">
                                                     <div class="item-media rounded ">
                                                         <a href="artist.detail.html" class="item-media-content"
                                                             style="background-image: url('Website/images/a1.jpg');"></a>
                                                     </div>
                                                     <div class="item-info ">
                                                         <div class="item-title text-ellipsis">
                                                             <a href="artist.detail.html">James Garcia</a>
                                                             <div class="text-sm text-muted">9 songs</div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div id="top-search" class="btn-groups">
                                 <strong class="text-muted">Top searches: </strong>
                                 <a href="#" class="btn btn-xs white">Happy</a>
                                 <a href="#" class="btn btn-xs white">Music</a>
                                 <a href="#" class="btn btn-xs white">Weekend</a>
                                 <a href="#" class="btn btn-xs white">Summer</a>
                                 <a href="#" class="btn btn-xs white">Holiday</a>
                                 <a href="#" class="btn btn-xs white">Blue</a>
                                 <a href="#" class="btn btn-xs white">Soul</a>
                                 <a href="#" class="btn btn-xs white">Calm</a>
                                 <a href="#" class="btn btn-xs white">Nice</a>
                                 <a href="#" class="btn btn-xs white">Home</a>
                                 <a href="#" class="btn btn-xs white">SLeep</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- ############ SEARCH END -->
         <!-- ############ SHARE START -->
         <div id="share-modal" class="modal fade animate">
             <div class="modal-dialog">
                 <div class="modal-content fade-down">
                     <div class="modal-header">

                         <h5 class="modal-title">Share</h5>
                     </div>
                     <div class="modal-body p-lg">
                         <div id="share-list" class="m-b">
                             <a href="" class="btn btn-icon btn-social rounded btn-social-colored indigo"
                                 title="Facebook">
                                 <i class="fa fa-facebook"></i>
                                 <i class="fa fa-facebook"></i>
                             </a>

                             <a href="" class="btn btn-icon btn-social rounded btn-social-colored light-blue"
                                 title="Twitter">
                                 <i class="fa fa-twitter"></i>
                                 <i class="fa fa-twitter"></i>
                             </a>

                             <a href="" class="btn btn-icon btn-social rounded btn-social-colored red-600"
                                 title="Google+">
                                 <i class="fa fa-google-plus"></i>
                                 <i class="fa fa-google-plus"></i>
                             </a>

                             <a href="" class="btn btn-icon btn-social rounded btn-social-colored blue-grey-600"
                                 title="Trumblr">
                                 <i class="fa fa-tumblr"></i>
                                 <i class="fa fa-tumblr"></i>
                             </a>

                             <a href="" class="btn btn-icon btn-social rounded btn-social-colored red-700"
                                 title="Pinterst">
                                 <i class="fa fa-pinterest"></i>
                                 <i class="fa fa-pinterest"></i>
                             </a>
                         </div>
                         <div>
                             <input class="form-control" value="http://plamusic.com/slug" />
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- ############ SHARE END -->

         <!-- ############ LAYOUT END-->
     </div>

 </body>
