<!-- Hero section Start -->

{{-- @dd($hero) --}}
<div class="container-xxl bg-primary hero-header">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 text-lg-start text-center">
                <h1 class="animated zoomIn mb-4 text-white">{{ $hero->main_title }}</h1>
                <p class="animated zoomIn pb-3 text-white">{{ $hero->description }}</p>
                <a href="{{ route('front.service') }}"
                    class="btn btn-outline-light rounded-pill animated slideInRight border-2 px-5 py-3">{{ $hero->btn_title }}</a>
            </div>
            <div class="col-lg-6 text-lg-start text-center">
                <img class="img-fluid animated zoomIn" src="{{ asset('assets-front') }}/img/{{$hero->image}}" alt="">
            </div>
        </div>
    </div>
</div>