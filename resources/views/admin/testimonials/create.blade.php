@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.create_testimonial'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="<i class='fe fe-thumbs-up fe-32 mr-3'></i>{{ __('keywords.create_testimonial') }}">
                    <x-slot:actions>
                    </x-slot:actions>
                </x-page-navigation-header>

                <!-- form card -->
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.testimonials.store') }}" method="post" enctype="multipart/form-data"
                            id="main-form">
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

                                {{-- Image / Preview --}}
                                <div class="col-lg-6 form-group">
                                    {{-- Image Live preview --}}
                                    <div class="border-1 mb-1 mt-3 rounded p-1">
                                        <x-form-label field="image" />
                                        <img class="d-lg-block rounded border-0" name="image" id="preview"
                                            style="width:120px;height:120px;object-fit:cover;">
                                    </div>
                                    {{-- Image Input --}}
                                    <div class="mb-3">
                                        <input type="file" id="imageInput" name="image" class="form-control"
                                            accept="image/*">
                                        <x-validation-error field="image" />
                                    </div>
                                </div>

                                {{-- description --}}
                                <div class="form-group col-md-12 mt-3">
                                    <x-form-label field="description"></x-form-label>
                                    <textarea id="description" name="description" class="form-control" placeholder="{{ __('keywords.description') }}"></textarea>
                                    <x-validation-error field="description"></x-validation-error>
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
    </div> <!-- .container-fluid -->
@endsection
