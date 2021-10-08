
@extends('layouts.Ecommerce.ecommerce')

<body>
    
    <!-- common-header-->
    @include('Website.Ecommerce.Common.top_nav')
   <!-- common-header-->
    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('Ecommerce/img/bg/breadcrumb_bg01.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2>{{$current_category->category_name}}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/E-home')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$current_category->category_name}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- shop-area -->
        <section class="shop-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="shop-top-meta mb-35">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="shop-top-left">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-menu"></i> FILTER</a></li>
                                            <li>Showing {{($product->currentpage()-1)*$product->perpage()+1}} - {{$product->currentpage()*$product->perpage()}} of {{$product->total()}} results</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    {{-- <div class="shop-top-right">
                                        <form action="#">
                                            <select name="select">
                                                <option value="">Sort by newness</option>
                                                <option>Free Shipping</option>
                                                <option>Best Match</option>
                                                <option>Newest Item</option>
                                                <option>Size A - Z</option>
                                            </select>
                                        </form>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($product as $row)
                            <div class="col-xl-4 col-sm-6">
                                <div class="new-arrival-item text-center mb-50">
                                    <div class="thumb mb-25">
                                        <a  href="{{url('product-details/'.$row->products_id)}}"><img class="text-center" src="{{url($row->product_image)}}" alt=""></a>
                                        <div class="product-overlay-action">
                                            <ul>
                                                {{-- <li><a href="cart.html"><i class="far fa-heart"></i></a></li> --}}
                                                <li><a href="{{url('product-details/'.$row->products_id)}}"><i class="far fa-eye lh-27"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5><a href="{{url('product-details/'.$row->products_id)}}">{{$row->product_name}}</a></h5>
                                        <span class="price">{{$row->price}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        {{-- <div class="pagination-wrap">
                            <ul>
                                <li class="prev"><a href="#">Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li class="next"><a href="#">Next</a></li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <aside class="shop-sidebar">
                            <div class="widget side-search-bar">
                                <form action="#">
                                    <input type="text">
                                    <button><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Product Categories</h4>
                                <div class="shop-cat-list">
                                    <ul>
                                        @foreach($category as $row)
                                        <li><a href="{{url('product-listing/'.$row->id)}}">{{$row->category_name}}</a><span></span></li>  
                                        @endforeach                                   
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Price Filter</h4>
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <span>Price :</span>
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="widget has-border">
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-area-end -->

    </main>
    <!-- main-area-end -->

    @include('Website.Ecommerce.Common.footer')
