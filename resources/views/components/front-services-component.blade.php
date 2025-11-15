<!-- Service Start -->

@if (count($services) > 0)
    <div class="container-xxl py-6">
        <div class="container">
            <div class="wow fadeInUp mx-auto text-center" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block rounded-pill text-primary mb-3 border px-4">Our Services</div>
                <h2 class="mb-5">We Provide Solutions On Your Business</h2>
            </div>
            <div class="row g-4">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item h-100 rounded">
                            <div class="d-flex justify-content-between">
                                <div class="service-icon">
                                    <i class="fa {{ $service->icon }} fa-2x"></i>
                                </div>
                                <a class="service-btn" href="">
                                    <i class="fa fa-link fa-2x"></i>
                                </a>
                            </div>
                            <div class="p-5">
                                <h5 class="mb-3">{{ $service->title }}</h5>
                                <span>{{ $service->description }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
