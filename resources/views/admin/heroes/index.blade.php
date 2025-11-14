@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.hero'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header headerTitle="{{ __('keywords.hero_section') }}">
                    <x-slot:actions>
                    </x-slot:actions>
                </x-page-navigation-header>

                {{-- form card --}}
                <div class="">
                    <div class="">

                        {{-- success message alert --}}
                        <x-success-alert></x-success-alert>

                        <form action="{{ route('admin.heroes.update', ['hero' => $hero]) }}" method="POST"
                            enctype="multipart/form-data" class="mt-3" id="main-form">
                            @csrf
                            @method('PUT')

                            <div class="row mt-3">

                                <div class="col-lg-6">
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-body">
                                            {{-- main title --}}
                                            <div class="mb-2">
                                                <x-form-label field="main_title" />
                                                <input type="text" id="main_title" name="main_title" class="form-control"
                                                    placeholder="{{ __('keywords.main_title') }}" autofocus
                                                    value="{{ old('main_title') ?? $hero->main_title }}">
                                                <x-validation-error field="main_title" />
                                            </div>
                                            {{-- button title --}}
                                            <div class="mb-2">
                                                <x-form-label field="btn_title" />
                                                <input type="text" id="btn_title" name="btn_title" class="form-control"
                                                    placeholder="{{ __('keywords.btn_title') }}" autofocus
                                                    value="{{ old('btn_title') ?? $hero->btn_title }}">
                                                <x-validation-error field="btn_title" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-body">
                                            {{-- Image Live preview --}}
                                            <div class="border-1 mb-3 rounded p-1">
                                                <x-form-label field="image"></x-form-label>
                                                <img class="d-lg-block rounded border-0" name="image" id="preview"
                                                    style="width:120px;height:120px;object-fit:cover;"
                                                    src="{{ old('image') ? asset('assets-front/img/' . old('image')) : asset('assets-front/img/' . $hero->image) }}"
                                                    alt="">
                                            </div>
                                            {{-- Image Input --}}
                                            <div class="mb-3">
                                                <input type="file" id="imageInput" name="image" class="form-control"
                                                    accept="accept=".jpg,.jpeg,.png">
                                                <x-validation-error field="image"></x-validation-error>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 mt-3">
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-body">
                                            {{-- description --}}
                                            <div class="mb-2">
                                                <x-form-label field="description" />
                                                <textarea id="description" name="description" cols="10" class="form-control"
                                                    placeholder="{{ __('keywords.description') }}">{{ old('description') ?? $hero->description }}</textarea>
                                                <x-validation-error field="description" />
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
