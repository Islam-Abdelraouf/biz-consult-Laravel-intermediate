@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.settings'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header headerTitle="{{ __('keywords.settings') }}">
                    <x-slot:actions>
                    </x-slot:actions>
                </x-page-navigation-header>

                {{-- form card --}}
                <div class="">
                    <div class="">

                        {{-- success message alert --}}
                        <x-success-alert></x-success-alert>

                        <form action="{{ route('admin.settings.update', ['setting' => $setting]) }}" method="POST"
                            enctype="multipart/form-data" class="mt-3" id="main-form">
                            @csrf
                            @method('PUT')

                            {{-- Top row: left (name/position) + right (image/preview) --}}
                            <div class="row mt-3">
                                {{-- Name / Position --}}
                                <div class="col-lg-6">
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-body">
                                            {{-- phone --}}
                                            <div class="mb-2">
                                                <x-form-label field="phone" />
                                                <input type="text" id="phone" name="phone" class="form-control"
                                                    placeholder="{{ __('keywords.phone') }}" autofocus
                                                    value="{{ old('phone') ?? $setting->phone }}">
                                                <x-validation-error field="phone" />
                                            </div>
                                            {{-- email --}}
                                            <div class="mb-2">
                                                <x-form-label field="email" />
                                                <input type="email" id="email" name="email" class="form-control"
                                                    placeholder="{{ __('keywords.email') }}"
                                                    value="{{ old('email') ?? $setting->email }}">
                                                <x-validation-error field="email" />
                                            </div>
                                            {{-- address --}}
                                            <div class="mb-2">
                                                <x-form-label field="address" />
                                                <textarea id="address" name="address" cols="10" class="form-control" placeholder="{{ __('keywords.address') }}">{{ old('address') ?? $setting->address }}</textarea>
                                                <x-validation-error field="address" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-body">
                                            {{-- facebook --}}
                                            <div class="mb-2">
                                                <x-form-label field="facebook" />
                                                <input type="text" id="facebook" name="facebook" class="form-control"
                                                    placeholder="{{ __('keywords.facebook') }}"
                                                    value="{{ old('facebook') ?? $setting->facebook }}">
                                                <x-validation-error field="facebook" />
                                            </div>
                                            {{-- twitter --}}
                                            <div class="mb-2">
                                                <x-form-label field="twitter" />
                                                <input type="text" id="twitter" name="twitter" class="form-control"
                                                    placeholder="{{ __('keywords.twitter') }}"
                                                    value="{{ old('twitter') ?? $setting->twitter }}">
                                                <x-validation-error field="twitter" />
                                            </div>
                                            {{-- youtube --}}
                                            <div class="mb-2">
                                                <x-form-label field="youtube" />
                                                <input type="text" id="youtube" name="youtube" class="form-control"
                                                    placeholder="{{ __('keywords.youtube') }}"
                                                    value="{{ old('youtube') ?? $setting->youtube }}">
                                                <x-validation-error field="youtube" />
                                            </div>
                                            {{-- linkedin --}}
                                            <div class="mb-2">
                                                <x-form-label field="linkedin" />
                                                <input type="text" id="linkedin" name="linkedin" class="form-control"
                                                    placeholder="{{ __('keywords.linkedin') }}"
                                                    value="{{ old('linkedin') ?? $setting->linkedin }}">
                                                <x-validation-error field="linkedin" />
                                            </div>
                                            {{-- instagram --}}
                                            <div class="mb-2">
                                                <x-form-label field="instagram" />
                                                <input type="text" id="instagram" name="instagram" class="form-control"
                                                    placeholder="{{ __('keywords.instagram') }}"
                                                    value="{{ old('instagram') ?? $setting->instagram }}">
                                                <x-validation-error field="instagram" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- page navigation foot --}}
                <x-page-navigation-footer>
                    <x-slot:actions>
                        {{-- save button --}}
                        <x-button.save></x-button.save>
                        {{-- back button --}}
                        <x-button.back></x-button.back>
                    </x-slot:actions>
                </x-page-navigation-footer>

            </div>
        </div>
    </div>
@endsection
