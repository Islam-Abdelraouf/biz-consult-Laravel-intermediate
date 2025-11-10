@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.testimonial_create'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header headerTitle="{{ __('keywords.show_testimonial') }}"
                    btnCaption="{{ __('keywords.back') }}" btnColor="outline-danger"
                    btnHref="{{ route('admin.testimonials.index') }}">
                </x-page-navigation-header>


                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">

                            <div class="form-group col-md-6 mb-2">
                                <div>
                                    {{-- name --}}
                                    <label for="name">{{ __('keywords.name') }}</label>
                                    <p class="form-control">{{ $testimonial->name }}</p>
                                </div>
                                <div>
                                    {{-- position --}}
                                    <label for="position">{{ __('keywords.position') }}</label>
                                    <p class="form-control">{{ $testimonial->position }}</p>
                                </div>
                            </div>
                            <div class="form-group col-md-2 mb-2 pb-3">

                            </div>
                            {{-- image --}}
                            <div class="form-group col-md-4 mb-2 pb-3">
                                <x-form-label field="image"></x-form-label>
                                <div>
                                    <img img class="rounded p-0" name="image" width="150px" height="150px"
                                        src="{{ asset('assets-front/img/' . $testimonial->image) }}">
                                </div>
                            </div>
                            {{-- description --}}
                            <div class="form-group col-md-12 mb-3">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <div>
                                    <textarea class="form-control bg-white" rows="6" disabled>{{ $testimonial->description }}</textarea>
                                </div>
                            </div>
                            {{-- button --}}
                            <div class="form-group col-md-12 mb-3">
                                <x-action-button type="action" color="{{ 'primary' }}"
                                    href="{{ route('admin.testimonials.edit', ['testimonial' => $testimonial]) }}"
                                    caption="{{ __('keywords.edit') }}">
                                </x-action-button>
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection
