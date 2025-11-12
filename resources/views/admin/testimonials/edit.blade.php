@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.edit_testimonial'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="<i class='fe fe-thumbs-up fe-32 mr-3'></i>{{ __('keywords.edit_testimonial') }}">
                    <x-slot:actions>
                    </x-slot:actions>
                </x-page-navigation-header>

                {{-- form card --}}
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.testimonials.update', ['testimonial' => $testimonial]) }}"
                            method="post" id="main-form" enctype="multipart/form-data">

                            {{-- HTTP PUT METHOD --}}
                            @method('PUT')
                            {{-- cross site request forgery --}}
                            @csrf

                            <div class="row">
                                {{-- name --}}
                                <div class="form-group col-md-6 mb-3">
                                    <x-form-label field="name"></x-form-label>
                                    <input type="text" id="name" name="name"
                                        value="{{ old('name') ?? $testimonial->name }}" class="form-control" autofocus>
                                    <x-validation-error field="name"></x-validation-error>
                                </div>
                                {{-- position --}}
                                <div class="form-group col-md-6 mb-3">
                                    <x-form-label field="position"></x-form-label>
                                    <input type="text" id="position" name="position"
                                        value="{{ old('position') ?? $testimonial->position }}" class="form-control">
                                    <x-validation-error field="position"></x-validation-error>
                                </div>
                                {{-- Image / Preview --}}
                                <div class="form-group col-lg-6">
                                    {{-- Image Live preview --}}
                                    <div class="border-1 mb-1 mt-3 rounded p-1">
                                        <x-form-label field="image" />
                                        <img class="d-lg-block rounded border-0" name="image" id="preview"
                                            style="width:120px;height:120px;object-fit:cover;"
                                            src="{{ old('image') ? asset('assets-front/img/' . old('image')) : asset('assets-front/img/' . $testimonial->image) }}"
                                            alt="">
                                    </div>
                                    {{-- Image Input --}}
                                    <div class="mb-3">
                                        <input type="file" id="imageInput" name="image" class="form-control"
                                            accept="image/*">
                                        <x-validation-error field="image" />
                                    </div>
                                </div>
                                {{-- description --}}
                                <div class="form-group col-md-12 mb-3">
                                    <x-form-label field="description"></x-form-label>
                                    <textarea id="description" name="description" class="form-control">{{ old('description') ?? $testimonial->description }}</textarea>
                                    <x-validation-error field="description"></x-validation-error>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- page navigation foot --}}
                <x-page-navigation-footer>
                    <x-slot:actions>
                        {{-- update button --}}
                        <x-button.update></x-button.update>
                        {{-- back button --}}
                        <x-button.back></x-button.back>
                    </x-slot:actions>
                </x-page-navigation-footer>

            </div>

        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
