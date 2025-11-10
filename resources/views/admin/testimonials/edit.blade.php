@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.testimonial_create'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header headerTitle="{{ __('keywords.edit_testimonial') }}"
                    btnCaption="{{ __('keywords.back') }}" btnColor="outline-danger"
                    btnHref="{{ route('admin.testimonials.index') }}">
                </x-page-navigation-header>


                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.testimonials.update', ['testimonial' => $testimonial]) }}"
                            method="post" enctype="multipart/form-data">

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

                            {{-- update button --}}

                            <div class="mt-3">
                                <button class="btn btn-primary me-2" type="submit">
                                    <i class="fe fe-save mr-2"></i>{{ __('keywords.save') }}
                                    {{-- <i class="fe fe-edit mr-2"></i>{{ __('keywords.save') }} --}}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection
