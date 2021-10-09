
@extends('layouts.Ecommerce.ecommerce')

<body>
    
    <!-- common-header-->
    @include('Website.Ecommerce.Common.top_nav')
   <!-- common-header-->
    <!-- main-area -->

         <!-- main-area -->
         <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('Ecommerce/img/bg/breadcrumb_bg01.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>Cart Page</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/E-home')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- cart-area -->
            <div class="cart-area pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="cart-wrapper">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail"></th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-quantity">QUANTITY</th>
                                                <th class="product-subtotal">SUBTOTAL</th>
                                                <th class="product-delete"></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @php                                                 
                                                $total=0; 
                                            @endphp


                                            @foreach ($result as $item)
                                                
                                           @php
                                               $total += ($item->price) * ($item->quantity);
                                               $subtotal = ($item->price) * ($item->quantity);
                                           @endphp 
                                            
                                            <tr>
                                                <td class="product-thumbnail"><a href="{{url('product-details/'.$item->products_id)}}"><img src="{{ asset('Ecommerce/img/product/cart_img01.jpg')}}" alt=""></a></td>
                                                <td class="product-name">
                                                    <h4><a href="{{url('product-details/'.$item->products_id)}}">{{$item->product_name}}</a></h4>
                                                </td>
                                                <td class="product-price"><i class="fas fa-rupee-sign mt-1 mx-2"></i> {{$item->price}}</td>
                                                <td class="product-quantity">
                                                    <div class="cart-plus-minus">
                                                        <form action="#" class="num-block">
                                                            <input type="text" class="in-num" value="{{$item->quantity}}" readonly="">
                                                            <div class="qtybutton-box">
                                                                <span class="plus"><img src="{{ asset('Ecommerce/img/icon/plus.png')}}" alt=""></span>
                                                                <span class="minus dis"><img src="{{ asset('Ecommerce/img/icon/minus.png')}}" alt=""></span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span><i class="fas fa-rupee-sign mt-1 mx-2"></i> {{$subtotal}}</span></td>
                                                <td class="product-delete"><a href="#"><i class="flaticon-trash"></i></a></td>
                                            </tr>

                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                                {{-- <div class="shop-cart-bottom mt-20">
                                    <div class="cart-coupon">
                                        <form action="#">
                                            <input type="text" placeholder="Enter Coupon Code...">
                                            <button class="btn">Apply Coupon</button>
                                        </form>
                                    </div>
                                    <div class="continue-shopping">
                                        <a href="shop.html" class="btn">update shopping</a>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="cart-total pt-95">
                                <h3 class="title">CART TOTALS</h3>
                                <div class="shop-cart-widget">
                                    <form action="#">
                                        <ul>
                                            <li class="sub-total"><span>SUBTOTAL</span>  <i class="fas fa-rupee-sign mt-1 mx-2"></i> {{$total}}</span></li>
                                            {{-- <li>
                                                <span>SHIPPING</span>
                                                <div class="shop-check-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">FLAT RATE: $15</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2">FREE SHIPPING</label>
                                                    </div>
                                                    <a href="#" class="calculate">Calculate shipping</a>
                                                </div>
                                            </li> --}}
                                            <li class="cart-total-amount"><span>TOTAL</span> <span class="amount"><i class="fas fa-rupee-sign mt-1 mx-2"></i> {{$total}}</span></li>
                                        </ul>
                                        <a href="checkout.html" class="btn">PROCEED TO CHECKOUT</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart-area-end -->

        </main>
        <!-- main-area-end -->

    @include('Website.Ecommerce.Common.footer')
