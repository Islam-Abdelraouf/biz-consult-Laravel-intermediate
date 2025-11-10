@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.testimonial_create'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header headerTitle="{{ __('keywords.add_new_testimonial') }}"
                    btnCaption="{{ __('keywords.back') }}" btnColor="outline-danger"
                    btnHref="{{ route('admin.testimonials.index') }}">
                </x-page-navigation-header>


                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.testimonials.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{-- name --}}
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <x-form-label field="name"></x-form-label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="{{ __('keywords.name') }}" autofocus>
                                    <x-validation-error field="name"></x-validation-error>
                                </div>
                                {{-- position --}}
                                <div class="form-group col-md-6 mb-3">
                                    <x-form-label field="position"></x-form-label>
                                    <input type="text" id="position" name="position" class="form-control"
                                        placeholder="{{ __('keywords.position') }}">
                                    <x-validation-error field="position"></x-validation-error>
                                </div>

                                {{-- image --}}
                                <div class="form-group col-md-12 mb-3">
                                    <x-form-label field="image"></x-form-label>
                                    <input type="file" id="imageInput" name="image" class="form-control"
                                        accept="image/*">
                                    <img img class="mt-3 rounded" name="image" id="preview" width="120px"
                                        height="120px">
                                    <x-validation-error field="image"></x-validation-error>
                                </div>

                                {{-- description --}}
                                <div class="form-group col-md-12 mb-3">
                                    <x-form-label field="description"></x-form-label>
                                    <textarea id="description" name="description" class="form-control" placeholder="{{ __('keywords.description') }}"></textarea>
                                    <x-validation-error field="description"></x-validation-error>
                                </div>
                            </div>
                            {{-- button --}}
                            <div>
                                <button class="btn btn-primary" type="submit">{{ __('keywords.save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection
