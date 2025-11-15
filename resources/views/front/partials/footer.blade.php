<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer wow fadeIn pt-5" data-wow-delay="0.1s" style="margin-top: 6rem;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4">
                <h5 class="mb-4 text-white">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>{{ $settings->address }}</p>
                <p><i class="fa fa-phone-alt me-3"></i>{{ $settings->phone }}</p>
                <p><i class="fa fa-envelope me-3"></i>{{ $settings->email }}</p>
                <div class="d-flex pt-2">
                    @if ($settings->twitter)
                        <a class="btn btn-outline-light btn-social" href="{{ $settings->twitter }}"><i
                                class="fab fa-twitter"></i></a>
                    @endif
                    @if ($settings->facebook)
                        <a class="btn btn-outline-light btn-social" href="{{ $settings->facebook }}"><i
                                class="fab fa-facebook-f"></i></a>
                    @endif
                    @if ($settings->youtube)
                        <a class="btn btn-outline-light btn-social" href="{{ $settings->youtube }}"><i
                                class="fab fa-youtube"></i></a>
                    @endif
                    @if ($settings->instagram)
                        <a class="btn btn-outline-light btn-social" href="{{ $settings->instagram }}"><i
                                class="fab fa-instagram"></i></a>
                    @endif
                    @if ($settings->linkedin)
                        <a class="btn btn-outline-light btn-social" href="{{ $settings->linkedin }}"><i
                                class="fab fa-linkedin-in"></i></a>
                    @endif
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <h5 class="mb-4 text-white">Quick Link</h5>
                <a class="btn btn-link" href="{{ route('front.about') }}">About Us</a>
                <a class="btn btn-link" href="{{ route('front.contact') }}">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Career</a>
            </div>
            <div class="col-md-6 col-lg-4">
                <h5 class="mb-4 text-white">Popular Link</h5>
                <a class="btn btn-link" href="{{ route('front.about') }}">About Us</a>
                <a class="btn btn-link" href="{{ route('front.contact') }}">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Career</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-md-start mb-md-0 mb-3 text-center">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    <br>Distributed By: <a class="border-bottom" href="https://themewagon.com"
                        target="_blank">ThemeWagon</a>
                </div>
                <div class="col-md-6 text-md-end text-center">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
