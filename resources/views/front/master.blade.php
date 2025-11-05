<!DOCTYPE html>
<html lang="en">

    <!-- head Start -->
    @include('front.partials.head')

    <body>
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            @include('front.partials.spinner')

            <!-- Navbar & Hero Start -->
            <div class="container-xxl position-relative p-0">
                <!-- Navbar Start -->
                @include('front.partials.navbar')

                <!-- Hero section Start -->
                {{-- @include('front.partials.hero-main') --}}
                @yield('hero-section')
            </div>
            <!-- Navbar & Hero End -->

            <!-- Content Start -->
            @yield('content')
            <!-- Content End -->

            <!-- Footer Start -->
            @include('front.partials.footer')


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        @include('front.partials.scripts')
    </body>

</html>
