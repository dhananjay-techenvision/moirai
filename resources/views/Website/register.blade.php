@extends('layouts.website')

@include('layouts.website_head')

<body>

    <div class="app dk" id="app">

        <!-- ############ LAYOUT START-->

        <div class="padding">
            <div class="navbar">
                <div class="pull-center">
                    <!-- brand -->
                    <a href="{{ url('/') }}" class="navbar-brand md">


                        <img src="{{ asset('Website/images/moirai.png') }}" alt="." class="___class_+?5___">
                        {{-- <span class="hidden-folded inline">pulse</span> --}}
                    </a>
                    <!-- / brand -->
                </div>
            </div>
        </div>
        <div class="b-t">
            <div class="center-block w-xxl w-auto-xs p-y-md text-center">
                <div class="p-a-md">
                    {{-- <div>
                        <a href="#" class="btn btn-block indigo text-white m-b-sm">
                            <i class="fa fa-facebook pull-left"></i>
                            Sign in with Facebook
                        </a>
                        <a href="#" class="btn btn-block red text-white">
                            <i class="fa fa-google-plus pull-left"></i>
                            Sign in with Google+
                        </a>
                    </div>
                    <div class="m-y text-sm">
                        OR
                    </div> --}}
                    <form name="registerForm" class="form-border" method="post" action="{{url('Register-submit')}}">
                        @csrf
                        <input type="hidden" name="user_type" value="3">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="phone" name="phone" class="form-control" placeholder="Phone" required>
                          </div>

                        <div class="form-group">
                          <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="m-b-md text-sm">
                          <span class="text-muted">By clicking Sign Up, I agree to the</span> 
                          <a href="#">Terms of service</a> 
                          <span class="text-muted">and</span> 
                          <a href="#">Policy Privacy.</a>
                        </div>
                        <button type="submit" class="btn btn-lg black p-x-lg">Sign Up</button>
                      </form>
                      <div class="p-y-lg text-center">
                        <div>Already have an account? <a href="{{url('Web-login')}}" class="text-primary _600">Sign in</a></div>
                      </div>
                </div>
            </div>
        </div>

        <!-- ############ LAYOUT END-->
    </div>
</body>
