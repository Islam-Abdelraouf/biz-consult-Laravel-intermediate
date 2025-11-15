@extends('front.master')

{{-- update title section --}}
@section('title', 'About us')

{{-- make about page active --}}
@section('about-active', 'active')

{{-- hero section --}}
@section('hero-section')
    <x-front-hero-section-secondary-component primaryTitle="About Us" secondaryTitle="About">
    </x-front-hero-section-secondary-component>
@endsection

{{-- content section --}}
@section('content')
    <!-- About Start -->
    <x-front-about-us-component></x-front-about-us-component>
    <!-- About End -->


    <!-- Features Start -->
    <x-front-features-component></x-front-features-component>
    <!-- Features End -->


    <!-- Team Start -->
    <x-front-members-component></x-front-members-component>
    <!-- Team End -->
@endsection
