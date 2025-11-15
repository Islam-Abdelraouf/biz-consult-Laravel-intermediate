<!-- Features Start -->
@if (count($features)>0)
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-inline-block rounded-pill text-primary mb-3 border px-4">Features</div>
                <h2 class="mb-4">Why People Choose Us? We Are Trusted & Award Wining Agency</h2>
                <p>Clita nonumy sanctus nonumy et clita tempor, et sea amet ut et sadipscing rebum amet
                    takimata amet, sed accusam eos eos dolores dolore et. Et ea ea dolor rebum invidunt
                    clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd</p>
                <p>Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum
                    kasd</p>
                <a class="btn btn-primary rounded-pill mt-2 px-5 py-3" href="">Read More</a>
            </div>
            <div class="col-lg-7">
                <div class="row g-5">
                    @foreach ($features as $feature)
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="btn-square bg-primary rounded-circle me-3 flex-shrink-0">
                                    <i class="fa {{ $feature->icon }} text-white"></i>
                                </div>
                                <h6 class="mb-0">{{ $feature->title }}</h6>
                            </div>
                            <span>{{ $feature->description }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif

