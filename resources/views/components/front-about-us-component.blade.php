<!-- About Start -->

@if (count($services) > 0)
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('assets-front') }}/img/about.png">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill text-primary mb-3 border px-4">About Us</div>
                    <h2 class="mb-4">Award Wining Consultancy Agency For Your Business</h2>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet
                        diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita
                        duo justo et tempor eirmod</p>
                    <div class="row g-3 mb-4">
                        @foreach ($services as $service)
                        <div class="col-12 d-flex">
                            <div class="btn-lg-square rounded-circle bg-primary flex-shrink-0">
                                <i class="fa {{ $service->icon }} text-white"></i>
                            </div>
                            <div class="ms-4">
                                <h6>{{ $service->title }}</h6>
                                <span>{{ $service->description }}</span>
                            </div>
                        </div>                        
                        @endforeach


                    </div>
                    <a class="btn btn-primary rounded-pill mt-2 px-5 py-3" href="{{ route('front.about') }}">Read More</a>
                </div>
            </div>
        </div>
    </div>
@endif
