

@extends('layouts.Ecommerce.ecommerce')

<body>
    
    <!-- common-header-->
    @include('Website.Ecommerce.Common.top_nav')
   <!-- common-header-->
    <!-- main-area -->
<!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('Ecommerce/img/bg/breadcrumb_bg03.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>Checkout Page</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/E-home')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            @if(is_array($result))
            <!-- checkout-area -->
            <section class="checkout-area pt-95 pb-95">
                <form action="{{url('checkout-submit')}}" method="POST">
                    @csrf
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="checkout-wrap">
                                <div class="checkout-top">
                                    <h5 class="title">Billing details</h5>
                                    {{-- <a href="cart.html" class="back"><i class="fas fa-angle-left"></i></a> --}}
                                </div>
            
                
                                <?php  
                                $addr = 0;
                                $user = DB::table('user_addresses')->where('user_id' , Auth::user()->id)->orderby('id','desc')->get();  
                            ?>  
                    @if($user->count()>0)
                    @php 
                                    $addr=$user->count(); 
                                    $count=1; 
                                    $i = 0;
                                @endphp
                    <div class="col-lg-6 col-sm-12 col-xs-12"> 
                    <div class="checkout-title">
                            {{-- <h3>Billing Details</h3> --}}
                    </div>
                        <div class="row check-out">  
                    @php $count=1; @endphp
                          @foreach($user as $r) 
                          @php $defaultadd = $r->selected=="1"?'checked="checked"':'';@endphp
                             <div class="col-sm-6 mb-2 ">
                                <h6>{{$r->address_type}}</h6>
                                <address><input type="radio" class="form-check-input" name="address_id" data-city='{{$r->city}}' value="{{$r->id}}"  {{$defaultadd}} ><b>{{$r->name}}</b><br> {{$r->address}} <br>  {{$r->city}}
                                      <br>{{$r->state}},{{$r->country}} , {{$r->pin_code}}
                                   <br><a href="{{url('user-address-edit/'.$r->id)}}">Edit</a>&nbsp;&nbsp;<a href="{{url('user-address-delete/'.$r->id)}}">Delete </a>
                                </address>
                             </div>
                             <?php $count++ ?>
                          @endforeach 
                        </div>
                    </div>


                    @endif
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8">
                            <aside class="checkout-sidebar">
                                <h6 class="title">Cart Totals</h6>
                                <div class="shop-cart-widget ">
                                   <div class="checkout-form">

                                   
                                        @php                                                 
                                            $total=0; 
                                            $total_amount=0;
                                            $shipping_charges = 0;
                                            $copoun_amount = 0;
                                        @endphp
                                        @foreach ($result as $item)
                                                
                                            @php
                                                $total += ($item->price) * ($item->quantity);
                                                $subtotal = ($item->price) * ($item->quantity);
                                            @endphp 

                                        @endforeach
                                        
                                        <ul>
                                            <li class="sub-total"><span>SUBTOTAL</span><i class="fas fa-rupee-sign mt-1 mx-2"></i> {{$total}}</li>
                                            @if($total > 500 )

                                            @php
                                                $total_amount = $total;
                                            @endphp
                                            <li>
                                                <span>SHIPPING</span>
                                                <div class="shop-check-wrap">                                                    
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2" checked>
                                                        <label class="custom-control-label" for="customCheck2">FREE SHIPPING</label>
                                                    </div>                                                    
                                                </div>
                                            </li>

                                            @else

                                            @php
                                                $total_amount = $total + 50;
                                            @endphp
                                            <li>
                                                <span>SHIPPING</span>
                                                <div class="shop-check-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                        <label class="custom-control-label" for="customCheck1">FLAT RATE: <i class="fas fa-rupee-sign mt-1 mx-2"></i> 50 </label>
                                                    </div>  
                                                    <small class="text-success"> above 500 shipping will be free </small>                                                                                                  
                                                </div>
                                            </li>
                                            @endif
                                            <li class="cart-total-amount"><span>TOTAL</span> <i class="fas fa-rupee-sign mt-1 mx-2"></i> {{$total_amount}}</li></li>
                                        </ul>
                                   
                                <div class="payment-method-info">

                                        @php                                            	
                                            $coupon = Session::get('couponData')?Session::get('couponData')['amount']:0;
                                            $type = Session::get('couponData')?Session::get('couponData')['type']:0;   

                                            // dd($coupon);
                                        @endphp

                                            @if($coupon != null)
                                            <li class="text-center mt-3">Coupon<span class="count">
                                                @if($type =='0')
                                                    <i class="fas fa-rupee-sign"></i> {{ $coupon }}
                                                    @elseif($type =='1')
                                                    {{ $coupon }}<b> % Off</b>
                                                @endif</span> 
                                            </li>
                                            <li> <span class="count"><button class="btn" id="remove_coupon" title="Remove Coupon" type="button"><i class="fa fa-trash"></i></button> </span>
                                            </li>
                                            @endif

                                            @if($coupon != null)
                                                @if($type =='0')
                                                    @php
                                                        $total_amount+= $total - $coupon;	
                                                        $copoun_amount = 	$coupon;	                                
                                                    @endphp 
                                                    <li class="text-center mt-2">Coupon Amount  <span class="count" ><i class="fa fa-inr" aria-hidden="true"></i> {{ $coupon }}</span></li>
                                                
                                                @elseif($type =='1')
                                                    @php	
                                                        	                       	    
                                                        $total_amount = $total_amount - ($total * $coupon / 100);  
                                                        $copoun_amount =  ($total * $coupon / 100);	  
                                                        // dd($copoun_amount);                         
                                                    @endphp 
                                                    
                                                    <li class="text-center mt-2">Coupon Amount  <span class="count" ><i class="fa fa-inr" aria-hidden="true"></i> {{$copoun_amount}}</span></li>
                                                @endif
                                            @endif
                                    <div class="paypal-method-flex">

                                        @if($copoun_amount == null) 
                                            <div class="alert alert-danger alert-dismissible" id="coupon_error" style="display:none">
                                                <label for="">Enter Valid Coupon  </label>	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            </div>
                                       
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="text" class="form-control" placeholder="Enter Coupon Code" id="coupon-id">                                                   
                                                </div>
                                                <div class="col-6">
                                                <button class="btn btn-solid myCuppon mt-0" type="button" >Apply Coupon</button>
                                                </div>
                                            </div>
                                         @endif                                      

                                        </div>
                                    </div>
                                    <input type="hidden" name="total_amount"  value="{{$total_amount}}">
                                    <input type="hidden" name="payment_mode" value="1">
                                        <div class="payment-method-info">                        
                                            <div class="paypal-method-flex">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6" value="" checked>
                                                    <label class="custom-control-label" for="customCheck6">Payments on Card</label>
                                                </div>
                                                <div class="paypal-logo"><img src="{{ asset('Ecommerce/img/images/card.png')}}" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="payment-terms">                                            
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7" required>
                                                <label class="custom-control-label" for="customCheck7">I have read and agree to the website terms and conditions</label>
                                            </div>
                                        </div>
                                        <button class="btn" type="submit">Place order</button>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    
                    </div>               
                </div>
            </form>
            </section>
            <!-- checkout-area-end -->

            @else
            <div class="cart-area pt-100 pb-100">
                <div class="container">
                    <div class="row cart-buttons">
                        <div class="col-12 text-center mb-5"><a href="{{url('/')}}" class="btn btn-solid">continue shopping</a></div>
                    </div>  
                </div>
            </div>
        @endif 

        </main>
        <!-- main-area-end -->

        @include('Website.Ecommerce.Common.footer')