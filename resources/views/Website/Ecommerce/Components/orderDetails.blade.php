
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
                                <h2>Order Details Page</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/E-home')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">My Order</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

             @if(($order->count() > 0 ))
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
                                                <th class="product-name">Order Id</th>
                                                <th class="product-price">Product</th>
                                                <th class="product-quantity">Details</th>
                                                <th class="product-subtotal">Price</th>
                                                <th class="product-delete">Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order as $item)

                                                    @php
                                                        $product = DB::table('products')->where('products_id' , $item->prod_id)->first();
                                                        $price = DB::table('product_attributes')->where('products_id' , $item->prod_id)->pluck('price')->first();
                                                        // dd($product_name);
                                                    @endphp
                                            <tr>
                                               <td>{{$item->order_id}}</td>
                                               <td>{{$product->product_name}}</td>
                                               <td>{{$product->long_description}}</td>
                                               <td>{{$price}}</td>
                                               <td>{{$item->quantity}}</td>                                                                                              
                                            </tr>
                                            @endforeach                                            
                                        </tbody>
                                    </table>
                                </div>
                               
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart-area-end -->

            @else
                <div class="cart-area pt-100 pb-100">
                    <div class="container">
                        <div class="row cart-buttons">
                            <div class="col-12 text-center mb-5"><a href="{{url('/')}}" class="btn btn-solid">Please place order </a></div>
                        </div>  
                    </div>
                </div>
            @endif 

        </main>
        <!-- main-area-end -->

    @include('Website.Ecommerce.Common.footer')
