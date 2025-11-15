<!-- Team Start -->
@if (count($members) > 0)
    <div class="container-xxl py-6">
        <div class="container">
            <div class="wow fadeInUp mx-auto text-center" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block rounded-pill text-primary mb-3 border px-4">Our Team</div>
                <h2 class="mb-5">Meet Our Team Members</h2>
            </div>
            <div class="row g-4">
                @foreach ($members as $member)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <h5>{{ $member->name }}</h5>
                            <p class="mb-4">{{ $member->position }}</p>
                            <img class="img-fluid rounded-circle w-100 mb-4"
                                src="{{ asset('assets-front') }}/img/{{ $member->image }}" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-primary m-1 bg-white" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary m-1 bg-white" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary m-1 bg-white" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
