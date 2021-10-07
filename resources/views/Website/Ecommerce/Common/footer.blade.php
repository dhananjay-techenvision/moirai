 <!-- footer-area -->
 <footer class="dark-bg pt-55 pb-80">
    <div class="container">
        <div class="footer-top-wrap">
            <div class="row">
                <div class="col-12">
                    <div class="footer-logo">
                        <a href="{{url('/')}}"><img class="footer-logo" src="{{ asset('Website/images/logo/logo.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle-wrap">
            <div class="row">
                <div class="col-12">
                    <div class="footer-link-wrap">
                        <nav class="menu-links">
                            <ul>
                                <li><a href="{{url('/about-us')}}">About us</a></li>                               
                                <li><a href="{{url('/contact-us')}}">Contact</a></li>
                                {{-- <li><a href="contact.html">Support</a></li> --}}
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Faqs</a></li>
                            </ul>
                        </nav>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="copyright-text">
                        <p>&copy; 2021 <a href="{{url('/')}}">Moirai</a>. All Rights Reserved </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pay-method-img">
                        <img src="{{ asset('Ecommerce/img/images/payment_method_img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->