
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
                                <h2>Address Page</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/E-home')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">My Address</li>
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
                        <div class="col-md-12 mb-4">                          
                            <div id="demo" class="">
                                   <br>
                               <div class="contact-page1">
                                  <form class="address-form" action="{{url('user-address-submit')}}" method="post" name="add_address" enctype="multipart/form" >
                                  @csrf 
                                  <input type="hidden" name="url" value="{{url()->previous()}}">
                                  <input type="hidden" name="address_id" value="{{$useraddress->id}}">
                                     <div class="form-row">
                                        <div class="col-md-6">
                                           <input type="text" class="form-control" id="name" placeholder="Enter Your name" name="name" value="{{$useraddress->name}}" required>
                                        </div>
                                        <div class="col-md-6">
                                           <input type="text" class="form-control notext" maxlength="10"  placeholder="Enter your number" name="phone" id="phone" value="{{$useraddress->phone}}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control"  placeholder="Email" id="checkout-email" value="{{$useraddress->email}}" name="email" required>
                                         </div>

                                        <div class="col-md-6">
                                           <input type="text" class="form-control"  placeholder="Locality" name="locality" value="{{$useraddress->locality}}" required="">
                                        </div>
                                        <div class="col-md-12">
                                           <textarea class="form-control" placeholder="Address (Area and Street)" id="exampleFormControlTextarea1" name="address" required rows="4">{{$useraddress->address}}</textarea>
                                        </div>

                                        <div class="col-sm-6">                                                                                        
                                                <select class="form-control" name="state">    
                                                    <option value="">Select State</option>                                                
                                                    @foreach($state_list as $r)                                                                                                      
                                                    <option value="{{$r->state}}" @if($r->state == $useraddress->state)selected @endif>{{$r->state}}</option>                                                                                                      
                                                @endforeach                                                          
                                                </select>                                            
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" class="form-control"  placeholder="City/District/Town" name="country" value="India" readonly>
                                         </div>
                                    
                                        <div class="col-md-6">
                                           <input type="text" class="form-control"  placeholder="City/District/Town" name="city" value="{{$useraddress->city}}" required>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <input type="number" class="form-control"  placeholder="Pincode" min="100000" max="999999" name="pin_code" value="{{$useraddress->pin_code}}" required>
                                         </div>
                                        
                                        <div class="col-md-6 ">
                                           <input type="text" class="form-control"  placeholder="landmark(optional)" value="{{$useraddress->landmark}}" name="landmark" >
                                        </div>
                                        <div class="col-md-6 ">
                                           <input type="text" class="form-control"  placeholder="Alternate phone number(optional)" value="{{$useraddress->phone_alt}}" name="phone_alt" >
                                        </div>
                                       
                                        <div class="col-md-12">
                                           <p>Address Type</p>
                                           <div class="form-check-inline">
                                              <label class="form-check-label" for="radio1">
                                              <input type="radio" class="form-check-input" id="radio1" name="address_type" value="Home" @if($useraddress->address_type == 'Home') checked @endif>Home
                                              </label>
                                           </div>
                                           <div class="form-check-inline">
                                              <label class="form-check-label" for="radio2">
                                              <input type="radio" class="form-check-input" id="radio2" name="address_type" value="Work" @if($useraddress->address_type == 'Work') checked  @endif>Work
                                              </label>
                                           </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                           <button class="btn btn-solid" id="add_address" type="submit">Update</button>
                                        </div>
                                     </div>
                                  </form>
                               </div>
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
