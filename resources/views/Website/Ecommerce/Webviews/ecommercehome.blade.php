
@extends('layouts.Ecommerce.ecommerce')

<body>
    <!-- header-area-start -->
    @include('Website.Ecommerce.Common.top_nav')
    <!-- header-area-end -->
    <!-- main-area -->
    <main>

    
        <!-- best-selling-area -->
        <section class="best-selling-area  pb-50">
            <div class="container custom-container-two">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6">
                        <div class="section-title title-style-two text-center mb-50">
                            <h3 class="title">Best selling product</h3>
                        </div>
                    </div>
                </div>
                <div class="row best-selling-active">
                    @foreach($product as $row)
                    <div class="col">
                        <div class="new-arrival-item text-center mb-50">
                            <div class="thumb mb-25">
                                <a href="{{url('product-details/'.$row->products_id)}}"><img class="ctext-center" src="{{url($row->product_image)}}" alt=""></a>
                                <div class="product-overlay-action">
                                    <ul>
                                        {{-- <li><a href="cart.html"><i class="far fa-heart"></i></a></li> --}}
                                        <li><a href="{{url('product-details/'.$row->products_id)}}"><i class="far fa-eye lh-27"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="{{url('product-details/'.$row->id)}}">{{$row->product_name}}</a></h5>
                                <span class="price">{{$row->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="best-belling-btn text-center mt-10">
                            <a href="#" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- best-selling-area-end -->

        <!-- category-area -->
        <div class="category-area">
            <div class="container custom-container-two">
                <div class="row justify-content-center">
                    {{-- @foreach($category_big as $row)
                    <div class="col-lg-6 col-sm-8">
                        <div class="h5-category-item mb-30">
                            <a href="shop-sidebar.html">
                                <img src="{{url($row->category_image)}}" alt="">
                                <span class="btn">Shop now</span>
                            </a>
                        </div>
                    </div>
                    @endforeach --}}

                    @foreach($category as $row)
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="h5-category-item mb-30">
                            <a href="{{url('product-listing/'.$row->id)}}">
                                <img src="{{url($row->category_image)}}" alt="">
                                <span class="btn">{{$row->category_name}}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach                    
                </div>
            </div>
        </div>
        <!-- category-area-end -->

        

        <!-- discount-area -->
        {{-- <section class="discount-area discount-bg jarallax parallax-img" data-background="{{ asset('Ecommerce/img/bg/discount_bg.jpg')}}">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-start">
                    <div class="col-lg-6 col-md-10">
                        <div class="discount-content text-center">
                            <div class="icon mb-15"><img src="{{ asset('Ecommerce/img/icon/discount_icon.png')}}" alt=""></div>
                            <span>STOCK IS LIMITED</span>
                            <h2>Winter Collection End of Season Sale upto 30%</h2>
                            <a href="shop-sidebar.html" class="btn">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- discount-area-end -->

        

        <!-- promo-services -->
        <section class="promo-services gray-bg pt-70 pb-25">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="promo-services-item mb-40">
                            <div class="icon"><img src="{{ asset('Ecommerce/img/icon/promo_icon01.png')}}" alt=""></div>
                            <div class="content">
                                <h6>payment & delivery</h6>
                                <p>Delivered, when you receive arrives</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="promo-services-item mb-40">
                            <div class="icon"><img src="{{ asset('Ecommerce/img/icon/promo_icon02.png')}}" alt=""></div>
                            <div class="content">
                                <h6>Return Product</h6>
                                <p>Retail, a Product Return Process</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="promo-services-item mb-40">
                            <div class="icon"><img src="{{ asset('Ecommerce/img/icon/promo_icon03.png')}}" alt=""></div>
                            <div class="content">
                                <h6>money back guarantee</h6>
                                <p>Options Including 24/7</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="promo-services-item mb-40">
                            <div class="icon"><img src="{{ asset('Ecommerce/img/icon/promo_icon04.png')}}" alt=""></div>
                            <div class="content">
                                <h6>Quality support</h6>
                                <p>Support Options Including 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- promo-services-end -->

    </main>
    <!-- main-area-end -->

    @include('Website.Ecommerce.Common.footer')