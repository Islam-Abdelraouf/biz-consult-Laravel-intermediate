<!-- Testimonial Start -->

@if (count($testimonials) > 0)
    <div class="container-xxl py-6">
        <div class="container">
            <div class="wow fadeInUp mx-auto text-center" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block rounded-pill text-primary mb-3 border px-4">Testimonial</div>
                <h2 class="mb-5">What Our Clients Say!</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($testimonials as $testimonial)
                    <div class="testimonial-item rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>{{ $testimonial->description }}</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle flex-shrink-0"
                                src="{{ asset('assets-front') }}/img/{{ $testimonial->image }}">
                            <div class="ps-3">
                                <h6 class="mb-1">{{ $testimonial->name }}</h6>
                                <small>{{ $testimonial->position }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
