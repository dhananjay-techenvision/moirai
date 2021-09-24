@extends('layouts.website')

@include('layouts.website_head')

<body>
    @include('layouts.website_nav')

<main>

    <div class="main-wrapper">
        <!-- profile banner area start -->
        <div id="carouselExampleIndicators " class="carousel slide" data-interval="10000" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach( $banners as $banner )
              <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
              @endforeach             
            </ol>
            <div class="carousel-inner">
                @foreach( $banners as $banner )
              <div class="carousel-item carousel-item {{ $loop->first ? 'active' : '' }}">
                <img class="d-block w-100 profile-banner-large bg-img" src="{{ $banner->banner_image }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block ">
                    <h3 class="animate__animated animate__bounce ">{{ $banner->banner_title }}</h3>
                    <p class="animate__animated animate__rubberBand ">{{ $banner->description }}</p>
                 </div>
              </div>
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              {{-- <span class="sr-only">Previous</span> --}}
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              {{-- <span class="sr-only">Next</span> --}}
            </a>
          </div>
        {{-- <div class="profile-banner-large bg-img" data-bg="{{ asset('Website/images/banner/profile-banner.jpg') }}">
        </div> --}}
        <!-- profile banner area end -->

        <!-- about author details start -->
        <div class="about-author-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card widget-item">
                            <div class="about-me">
                                <ul class="nav flex-column about-author-menu">
                                    @foreach ($main_section as $item)
                                    <li><a href="#home{{ $item->id }}" data-bs-toggle="tab" class="{{ $item->id == 1 ? 'active' : '' }} tab_title">{{ $item->main_section }}</a></li>                                    
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="about-description">
                            <div class="tab-content">
                                @foreach ($sub_section as $item)
                                <div class="tab-pane fade  show tab-pane {{ $item->main_section_id == 1 ? 'active' : '' }}" id="home{{ $item->main_section_id }}" class="active">
                                    
                                    <div class="work-zone">
                                        <div class="author-desc-title d-flex">
                                            <h6 class="author  "><a href="profile.html" class="sub_section_title">{{ $item->title}}</a></h6>                                            
                                        </div>                                       
                                        {{ $item->description}}
                                    </div>                                  
                                </div>
                                @endforeach
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
                                <h5 class="content-title">What Is Moirai</h5>
                                <div class="content-body">
                                    <div class="row mt--30">
                                    @foreach ($what_is_section as $item)
                                        <div class="col-sm-6 col-md-4">
                                            <div class="photo-group">
                                                <div class="gallery-toggle">
                                                    <div class="d-none product-thumb-large-view">
                                                        @foreach ($what_is_section as $item1)
                                                        <img src="{{ $item1->image }}" alt="Photo Gallery">                                            
                                                        @endforeach 
                                                    </div>
                                                    
                                                    <div class="gallery-overlay">                                                                                    
                                                        <img src="{{ $item->image }}" alt="Photo Gallery">
                                                        <div class="view-icon"></div>                                              
                                                    </div>                                        
                                                    <div class="photo-gallery-caption">
                                                        <h3 class="photos-caption">{{ $item->title }}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                 
                                        @endforeach 
                                        <div class="col-12">
                                            <div class="load-more text-center">
                                                {{-- <button class="load-more-btn">load more</button> --}}
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

              <!-- profile banner area start -->
            <div class="profile-banner-large bg-img mb-4 mobile-banner-large" id="footer_banner" data-bg="{{ asset( $footer_banner->footer_banner_image )}}">
                <div class="overlay"> <h2 class="banner-title" data-aos="fade-down"  data-aos-duration="3000">{{ $footer_banner->footer_banner_title }}</h2>
                 <div class="banner-description" data-aos="fade-up" data-aos-duration="3000" > <p>{{ $footer_banner->description }}</p> </div>
                </div>
            </div>
            <!-- profile banner area end -->

        <!-- favorite book section start -->
            <div class="faborite-books footer-faborite">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="content-box">
                                <h5 class="content-title">favorite sports</h5>
                                <div class="content-body">
                                    <div class="row favorite-item-carousel">
                                        @foreach ($footer_slider as $item)
                                        <div class="col">
                                            <figure class="favorite-item">
                                                <a href="#">
                                                    <img src="{{ asset($item->image)}}" alt="">
                                                </a>
                                            </figure>
                                        </div> 
                                        @endforeach                                                                              
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="load-more text-center">
                                                {{-- <button class="load-more-btn">load more</button> --}}
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


@include('layouts.website_footer_sticky')

</body>
