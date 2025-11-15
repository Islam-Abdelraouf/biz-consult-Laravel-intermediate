@extends('front.master')

{{-- update title section --}}
@section('title', 'Contact us')

{{-- make contact page active --}}
@section('contact-active', 'active')

{{-- hero section --}}
@section('hero-section')
    <x-front-hero-section-secondary-component prim
        primaryTitle="Contact us" 
        secondaryTitle="Contact">
    </x-front-hero-section-secondary-component>
@endsection

{{-- content section --}}
@section('content')
    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="wow fadeInUp mx-auto text-center" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block rounded-pill text-primary mb-3 border px-4">Contact Us</div>
                <h2 class="mb-5">If You Have Any Query, Please Feel Free Contact Us</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="mb-4 text-center">The contact form is currently inactive. Get a functional and working contact
                        form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're
                        done. {{-- <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> --}}

                        {{-- success message --}}
                        <x-success-alert></x-success-alert>

                        {{-- contact us form --}}
                    <form action="{{ route('front.message.store') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Your Name" value="{{ old('name') ?? '' }}">
                                    <label for="name">Your Name</label>
                                </div>
                                <x-validation-error field="name"></x-validation-error>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Your Email" value="{{ old('email') ?? '' }}">
                                    <label for="email">Your Email</label>
                                </div>
                                <x-validation-error field="email"></x-validation-error>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Subject" value="{{ old('subject') ?? '' }}">
                                    <label for="subject">subject</label>
                                </div>
                                <x-validation-error field="subject"></x-validation-error>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" value="{{ old('message') ?? '' }}" id="message"
                                        name="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                                <x-validation-error field="message"></x-validation-error>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
