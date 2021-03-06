@extends('layouts.Ecommerce.ecommerce')

<body>
   
    <!-- common-header-->
    @include('Website.Ecommerce.Common.top_nav')
   <!-- common-header-->
    <main>

        <!-- breadcrumb-area -->
        <div class="breadcrumb-area breadcrumb-style-two" data-background="{{ asset('Ecommerce/img/bg/s_breadcrumb_bg01.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block">
                        {{-- <div class="previous-product">
                            <a href="shop-details.html"><i class="fas fa-angle-left"></i> previous product</a>
                        </div> --}}
                    </div>
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/E-home')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Product Details</a></li>                                   
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 d-none d-lg-block">
                        {{-- <div class="next-product">
                            <a href="shop-details.html">Next product <i class="fas fa-angle-right"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        @php
            $product_image = DB::table('product_images')->where('products_id',$product->products_id)->orderBy('product_images.product_images_id', 'asc')->get();
        @endphp

        <!-- shop-details-area -->
        <section class="shop-details-area pt-100 pb-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="shop-details-flex-wrap">
                            <div class="shop-details-nav-wrap">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    @foreach ($product_image as $item)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link " id="item-{{$item->product_images_id}}-tab" data-toggle="tab" href="#item-{{$item->product_images_id}}" role="tab" aria-controls="item-one" aria-selected="true"><img src="{{url($item->product_image)}}" alt=""></a>
                                    </li>
                                    @endforeach
                                    {{-- <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="item-two-tab" data-toggle="tab" href="#item-two" role="tab" aria-controls="item-two" aria-selected="false"><img src="{{ asset('Ecommerce/img/product/sd_nav_img02.jpg')}}" alt=""></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="item-three-tab" data-toggle="tab" href="#item-three" role="tab" aria-controls="item-three" aria-selected="false"><img src="{{ asset('Ecommerce/img/product/sd_nav_img03.jpg')}}" alt=""></a>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="shop-details-img-wrap">
                                <div class="tab-content" id="myTabContent">
                                    @foreach ($product_image as $item)
                                    <div class="tab-pane fade show" id="item-{{$item->product_images_id}}" role="tabpanel" aria-labelledby="item-{{$item->product_images_id}}-tab">
                                        <div class="shop-details-img">
                                            <img src="{{url($item->product_image)}}" alt="">
                                        </div>
                                    </div>
                                    @endforeach
                                    {{-- <div class="tab-pane fade" id="item-two" role="tabpanel" aria-labelledby="item-two-tab">
                                        <div class="shop-details-img">
                                            <img src="{{ asset('Ecommerce/img/product/shop_details_img02.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="item-three" role="tabpanel" aria-labelledby="item-three-tab">
                                        <div class="shop-details-img">
                                            <img src="{{ asset('Ecommerce/img/product/shop_details_img03.jpg')}}" alt="">
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="shop-details-content">
                            {{-- <a href="#" class="product-cat">Tracker Jacket</a> --}}
                            <h3 class="title">{{$product->product_name}}</h3>
                            {{-- <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div> --}}
                            @php
                                $category_name = DB::table('category')->where('id',$product->category_id)->pluck('category_name')->first();
                                $product_attribute = DB::table('product_attributes')->where('products_id',$product->products_id)->get();
                            @endphp

                            
                            <p class="style-name">Category Name : {{$category_name}}</p>
                            <div class="price">Price : <span id="product_price_attribute"> {{$product->price}} </span></div>
                            <div class="product-details-info">
                                {{-- <span>Size </span> --}}
                                <div class="sidebar-product-size mb-30">
                                    <h4 class="widget-title">Product Size</h4>
                                    <div class="shop-size-list">
                                        <ul>    
                                            @foreach ($product_attribute as $item)
                                            @isset($item->product_size)
                                            <li><a href="javascript:void(0)"  onclick="fetch_attributes('{{$item->id}}')" >{{$item->product_size}}</a></li>
                                            @endisset                    
                                            @endforeach                                                                         
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-product-color">
                                    <h4 class="widget-title">Color</h4>
                                    <div class="shop-size-list">
                                        <ul>
                                            @foreach ($product_attribute as $item)
                                            @isset($item->product_color)
                                            <li><a href="javascript:void(0)">{{$item->product_color}}</a></li> 
                                            @endisset
                                            @endforeach                                          
                                        </ul>
                                    </div>
                                </div>

                                @if($product->expected_delivery != null)
                                <div class="sidebar-product-color">
                                    <h6 class="widget-title text-success mt-3"> Delivery in  {{$product->expected_delivery}} working days </h6>                                    
                                </div>
                                @endif

                            </div>
                          
                            <div class="perched-info">
                                <div class="cart-plus-minus">
                                    <form action="{{url('/add-to-cart')}}" method="post" class="num-block">
                                        @csrf
                                        <input type="text" name="quantity" class="in-num" value="1" readonly="">
                                        <div class="qtybutton-box">
                                            <span class="plus"><img src="{{ asset('Ecommerce/img/icon/plus.png')}}" alt=""></span>
                                            <span class="minus dis"><img src="{{ asset('Ecommerce/img/icon/minus.png')}}" alt=""></span>
                                        </div>                                    
                                </div>

                                <input type="hidden" name="products_id" id="product_id_detail_page" value="{{$product->products_id}}">
                                <input type="hidden" name="attribute_id" id="attribute_id_detail_page" value="{{$product->id}}">
                                <button class="btn" type="submit">add to cart</button>
                            </form>
                                <div class="wishlist-compare">
                                    <ul>
                                        {{-- <li><a href="#"><i class="far fa-heart"></i> Add to Wishlist</a></li> --}}
                                        {{-- <li><a href="#"><i class="fas fa-retweet"></i> Add to Compare List</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="product-details-share">
                                <ul>
                                    <li>Share :</li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-desc-wrap">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description"
                                        aria-selected="true">Description Guide</a>
                                </li>
                               
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                        aria-selected="false">Reviews</a>
                                </li>
                               
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <div class="product-desc-title mb-30">
                                        <h4 class="title">Description</h4>
                                    </div>
                                    <p>{{  $product->long_description }}</p>                                    
                                </div>

                                @php
                                    $review = $review = DB::table('reviews')->join('users','users.id','=','reviews.user_id')->where('product_id',$product->products_id)->orderBy('reviews.created_at','asc')->get(); 
                                    // dd($review);
                                @endphp
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <div class="product-desc-title mb-30">
                                        <h4 class="title">Reviews ({{$review->count()}}) :</h4>
                                    </div>
                                                                  
                                    @foreach ($review as $item)
                                    <div class="review-rating">
                                        <span>{{ $item->name }} </span>
                                        <div class="rating">
                                            @for ($i = 0; $i < $item->rating; $i++)
                                            <i class="fas fa-star"></i>
                                            @endfor
                                        </div>
                                    </div>
                                    <p class="mb-3">{{$item->comment}}</p>
                                    @endforeach

                                @auth
                                    <form action="{{url('product-review-submit')}}" class="comment-form review-form" method="POST">
                                    @csrf    
                                        <input type="hidden" name="product_id" value="{{$product->products_id}}">                                   
                                        <div class="form-group col-md-6">
                                        <label for="review-stars">Review Stars</label>
                                        <select id="review-stars" class="form-control" name="rating" >
                                            <option value="5">5 Stars Rating</option>
                                            <option value="4">4 Stars Rating</option>
                                            <option value="3">3 Stars Rating</option>
                                            <option value="2">2 Stars Rating</option>
                                            <option value="1">1 Stars Rating</option>
                                        </select>
                                        </div>
                                        <span>Your review *</span>
                                        <textarea name="comment" id="comment-message" placeholder="Your Comment"></textarea>
                                        <button class="btn">Submit</button>
                                    </form>
                                @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- shop-details-area-end -->

    </main>
    <!-- main-area-end -->

    @include('Website.Ecommerce.Common.footer')