@extends('front.master')

{{-- update title section --}}
@section('title', 'Main Page')

{{-- make index page active --}}
@section('home-active', 'active')

{{-- hero section --}}
@section('hero-section')
<x-front-hero-section-component></x-front-hero-section-component>
@endsection

{{-- content section --}}
@section('content')
    <!-- About Start -->
    <x-front-about-us-component></x-front-about-us-component>
    <!-- About End -->

    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary wow fadeInUp my-6" data-wow-delay="0.1s">
        <div class="px-lg-5 container">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">Ready to get started</h3>
                    <small class="text-white">Diam elitr est dolore at sanctus nonumy.</small>
                    <form action="{{ route('front.subscriber.store') }}" method="post">
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control rounded-pill w-100 border-0 pe-5 ps-4" type="email" name="email"
                                placeholder="Enter Your Email" style="height: 48px;">

                            @csrf
                            <button type="submit" class="btn position-absolute end-0 top-0 me-2 mt-1 shadow-none"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                        <x-validation-error field="email" />
                        @session('subscribtion_success')
                            <div class="alert text-light py-1">
                                {{ session('subscribtion_success') }}
                            </div>
                        @endsession
                    </form>
                </div>
                <div class="col-md-6 mb-n5 d-none d-md-block text-center">
                    <img class="img-fluid mt-5" style="max-height: 250px;"
                        src="{{ asset('assets-front') }}/img/newsletter.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Service Start -->
    <x-front-services-component></x-front-services-component>
    <!-- Service End -->

    <!-- Features Start -->
    <x-front-features-component></x-front-features-component>
    <!-- Features End -->

    <!-- Client/Company Start -->
    <x-front-clients-component></x-front-clients-component>
    <!-- Client/Company End -->

    <!-- Testimonial Start -->
    <x-front-testimonials-component></x-front-testimonials-component>
    <!-- Testimonial End -->

    <!-- Team/Members Start -->
    <x-front-members-component></x-front-members-component>
    <!-- Team End -->
@endsection
