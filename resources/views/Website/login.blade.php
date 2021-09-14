@extends('layouts.website')

@include('layouts.website_head')

<body>

    <main>
        <div class="main-wrapper pb-0 mb-0">
            <div class="timeline-wrapper">
                <div class="timeline-header">
                    <div class="container-fluid p-0">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-6">
                                <div class="timeline-logo-area d-flex align-items-center">
                                    <div class="timeline-logo">
                                        <a href="index.html">
                                            <img src="{{ asset('Website/images/logo/logo.png') }}"
                                                alt="timeline logo">
                                        </a>
                                    </div>
                                    <div class="timeline-tagline">
                                        <h6 class="tagline">It’s helps you to connect and share with the people in
                                            your life</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
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
                            </div>
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
                                        Welcome in Adda.</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-center">
                                <div class="signup-form-wrapper">
                                    <h1 class="create-acc text-center">Create An Account</h1>
                                    <div class="signup-inner text-center">
                                        <h3 class="title">Wellcome to Adda</h3>
                                        <form class="signup-inner--form" name="registerForm" method="post"
                                            action="{{ url('Register-submit') }}">
                                        @csrf
                                        <input type="hidden" name="user_type" value="2">
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="text" name="name" class="single-field"
                                                        placeholder="Enter Name">
                                                </div>
                                                <div class="col-12">
                                                    <input type="email" name="email" class="single-field"
                                                        placeholder="Email">
                                                </div>
                                                <div class="col-12">
                                                    <input type="number" name="phone" class="single-field"
                                                        placeholder="Phone">
                                                </div>
                                                <div class="col-12">
                                                    <input type="password" name="password" class="single-field"
                                                        placeholder="Password">
                                                </div>
                                                {{-- <div class="col-md-6">
                                                    <select class="nice-select" name="sortby">
                                                        <option value="trending">Gender</option>
                                                        <option value="sales">Male</option>
                                                        <option value="sales">Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="nice-select" name="sortby">
                                                        <option value="trending">Age</option>
                                                        <option value="sales">18+</option>
                                                        <option value="sales">18-</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <select class="nice-select" name="sortby">
                                                        <option value="trending">Country</option>
                                                        <option value="sales">Bangladesh</option>
                                                        <option value="sales">Noakhali</option>
                                                        <option value="sales">Australia</option>
                                                        <option value="sales">China</option>
                                                    </select>
                                                </div> --}}
                                                <div class="col-12">
                                                    <button class="submit-btn">Create Account</button>
                                                </div>
                                            </div>
                                            <h6 class="terms-condition">I have read & accepted the <a href="#">terms of
                                                    use</a></h6>
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
