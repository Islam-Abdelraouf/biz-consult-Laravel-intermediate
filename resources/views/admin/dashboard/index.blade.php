@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.index'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                <div class="row">
                    <div class="col-md-12 d-flex flex-column bd-highlight align-items-center justify-content-center mb-4">
                        <img class="d-lg-block" style="width: 40%; "
                            src="{{ asset('assets-admin/assets/images/dashboard.png') }}" alt="">
                        <h1 class="display-2">Biz Consults</h1>
                    </div>
                </div>


                <div class="row">
                    {{-- Subscribers --}}
                    <div class="col-md-4 mb-4">
                        <div class="card shadow" style="background: rgb(230, 248, 203);">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span class="h2 mb-0">{{ $subscribers }}</span>
                                        <p class="small text-dark mb-0">Subscribers</p>
                                    </div>
                                    <div class="col-auto">
                                        <span class="fe fe-32 {{ config('icons.subscribersIcon') }} text-dark mb-0"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Messages --}}
                    <div class="col-md-4 mb-4">
                        <div class="card shadow" style="background: rgb(211, 248, 255);">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span class="h2 mb-0">{{ $messages }}</span>
                                        <p class="small text-dark mb-0">Messages</p>
                                    </div>
                                    <div class="col-auto">
                                        <span class="fe fe-32 {{ config('icons.messagesIcon') }} text-dark mb-0"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Testimonials --}}
                    <div class="col-md-4 mb-4">
                        <div class="card shadow" style="background: rgb(254, 227, 255);">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span class="h2 mb-0">{{ $testimonials }}</span>
                                        <p class="small text-dark mb-0">Testimonials</p>
                                    </div>
                                    <div class="col-auto">
                                        <span
                                            class="fe fe-32 {{ config('icons.testimonialsIcon') }} text-dark mb-0"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    {{-- Members --}}
                    <div class="col-md-4 mb-4">
                        <div class="card shadow" style="background: #D4D4F7;">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span class="h2 mb-0">{{ $members }}</span>
                                        <p class="small text-dark mb-0">Members</p>
                                    </div>
                                    <div class="col-auto">
                                        <span class="fe fe-32 {{ config('icons.membersIcon') }} text-dark mb-0"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Clients --}}
                    <div class="col-md-4 mb-4">
                        <div class="card shadow" style="background: #F7F0D4;">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span class="h2 mb-0">{{ $clients }}</span>
                                        <p class="small text-dark mb-0">Clients</p>
                                    </div>
                                    <div class="col-auto">
                                        <span class="fe fe-32 {{ config('icons.membersIcon') }} text-dark mb-0"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Services --}}
                    <div class="col-md-4 mb-4">
                        <div class="card shadow" style="background: #FFE4DB;">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <span class="h2 mb-0">{{ $services }}</span>
                                        <p class="small text-dark mb-0">Services</p>
                                    </div>
                                    <div class="col-auto">
                                        <span class="fe {{ config('icons.servicesIcon') }} text-dark mb-0"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
