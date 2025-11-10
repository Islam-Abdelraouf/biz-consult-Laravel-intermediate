@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.member_create'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                {{-- Page header --}}
                <x-page-navigation-header headerTitle="{{ __('keywords.add_new_member') }}"
                    btnCaption="{{ __('keywords.back') }}" btnColor="outline-danger"
                    btnHref="{{ route('admin.members.index') }}" />

                <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data" class="mt-3" id="main-form">
                    @csrf

                    {{-- Top row: left (name/position) + right (image/preview) --}}
                    <div class="row mt-3">
                        {{-- Name / Position --}}
                        <div class="col-lg-6">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">

                                    {{-- Name --}}
                                    <div class="mb-3">
                                        <x-form-label field="name" />
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="{{ __('keywords.name') }}" autofocus value="{{ old('name') }}">
                                        <x-validation-error field="name" />
                                    </div>

                                    {{-- Position --}}
                                    <div class="mb-0">
                                        <x-form-label field="position" />
                                        <input type="text" id="position" name="position" class="form-control"
                                            placeholder="{{ __('keywords.position') }}" value="{{ old('position') }}">
                                        <x-validation-error field="position" />
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        {{-- Image / Preview --}}
                        <div class="col-lg-6">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">

                                    {{-- Image Live preview --}}
                                    <div class="rounded border-1 p-1 mb-3">
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
                            </div>
                        </div>
                    </div>

                    {{-- Socials --}}
                    <div class="row g-3 mt-3">
                        <div class="col-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    {{-- facebook --}}
                                    <div class="mb-3">
                                        <x-form-label field="facebook" />
                                        <input type="text" id="facebook" name="facebook" class="form-control"
                                            placeholder="{{ __('keywords.facebook') }}" value="{{ old('facebook') }}">
                                        <x-validation-error field="facebook" />
                                    </div>
                                    {{-- twitter --}}
                                    <div class="mb-3">
                                        <x-form-label field="twitter" />
                                        <input type="text" id="twitter" name="twitter" class="form-control"
                                            placeholder="{{ __('keywords.twitter') }}" value="{{ old('twitter') }}">
                                        <x-validation-error field="twitter" />
                                    </div>
                                    {{-- linkedin --}}
                                    <div class="mb-0">
                                        <x-form-label field="linkedin" />
                                        <input type="text" id="linkedin" name="linkedin" class="form-control"
                                            placeholder="{{ __('keywords.linkedin') }}" value="{{ old('linkedin') }}">
                                        <x-validation-error field="linkedin" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

                <div class="mt-3">
                    <button class="btn btn-primary me-2" type="submit" form="main-form">
                        <i class="fe fe-save mr-2"></i>{{ __('keywords.save') }}
                        {{-- <i class="fe fe-edit mr-2"></i>{{ __('keywords.save') }} --}}
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
