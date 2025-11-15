<!-- Client/Company Start -->
@if (count($companies) > 0)
    <div class="container-xxl bg-primary wow fadeInUp my-6 py-5" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel client-carousel">
                @foreach ($companies as $company)
                    <a href="#"><img class="img-fluid"
                            src="{{ asset('assets-front') . '/img/' }}{{ $company->image }}" alt=""></a>
                @endforeach
            </div>
        </div>
    </div>
@endif
