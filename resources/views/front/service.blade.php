@extends('front.master')

{{-- update title section --}}
@section('title', 'Sevices')

{{-- make sevice page active --}}
@section('service-active', 'active')

{{-- hero section --}}
@section('hero-section')
    <x-front-hero-section-secondary-component primaryTitle="Service" secondaryTitle="Service">
    </x-front-hero-section-secondary-component>
@endsection

{{-- content section --}}
@section('content')
    <!-- Service Start -->
<x-front-services-component></x-front-services-component>
    <!-- Service End -->


    <!-- Testimonial Start -->
<x-front-testimonials-component></x-front-testimonials-component>
    <!-- Testimonial End -->
@endsection
