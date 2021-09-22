@extends('layouts.website')

@include('layouts.website_head')

<body>
    @include('layouts.website_nav')
    <main>
        <div class="main-wrapper pb-0 mb-0 pad-top-log">
            <div class="timeline-wrapper">
                <div class="timeline-header">
                    <div class="container-fluid p-0">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-12">
                                <div class="timeline-logo-area d-flex align-items-center">
                                    <div class="timeline-logo">
                                        <a href="index.html">
                                            <img src="{{ asset('Website/images/logo/logo.jpg') }}"
                                                alt="timeline logo" style="width: 140px;
                                                height: 41px;">
                                        </a>
                                    </div>
                                    <div class="timeline-tagline">
                                        <h6 class="tagline">It’s helps you to connect and share with the people in
                                            your life</h6>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-6">
                                <div class="login-area">
                                    <form name="loginForm" id='login_form' class="" method="POST"
                                        action="{{ url('Login-submit') }}">
                                        @csrf
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm">
                                                <input type="email" name="email" placeholder="Email"
                                                    class="single-field" required>
                                            </div>
                                            <div class="col-12 col-sm">
                                                <input type="password" name="password" placeholder="Password" class="single-field" required>
                                            </div>
                                            <div class="col-12 col-sm-auto">
                                                <button class="login-btn" type="submit">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="timeline-page-wrapper">
                    <div class="container-fluid p-0">
                        <div class="row g-0">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="timeline-bg-content bg-img"
                                    data-bg="{{ asset('Website/images/timeline/adda-timeline.jpg') }} ">
                                    <h3 class="timeline-bg-title">Let’s see what’s happening to you and your world.
                                        Welcome in MOIRAH.</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-center">
                                <div class="signup-form-wrapper">
                                    <h1 class="create-acc text-center">Login</h1>
                                    <div class="signup-inner text-center">
                                        <h3 class="title">Welcome to MOIRAH</h3>
                                        <form name="loginForm" id='login_form' class="signup-inner--form" method="POST"
                                        action="{{ url('Login-submit') }}">
                                        @csrf                                        
                                            <div class="row">                                                
                                                <div class="col-12">
                                                    <input type="email" name="email" class="single-field"
                                                        placeholder="Email">
                                                </div>
                                                <div class="col-12">
                                                    <input type="password" name="password" class="single-field"
                                                        placeholder="Password">
                                                </div>                                                                                             
                                                <div class="col-12">
                                                    <button class="submit-btn">Login</button>
                                                </div>
                                            </div>
                                            <h6 class="terms-condition">Don't have an account ?  <a href="{{url('/Web-register')}}">Signup now</a></h6>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
