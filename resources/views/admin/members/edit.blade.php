@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.edit_member'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="<i class='fe fe-smile fe-32 mr-3'></i>{{ __('keywords.edit_member') }}">
                    <x-slot:actions>
                    </x-slot:actions>
                </x-page-navigation-header>

                {{-- form card --}}
                <div class="">
                    <div class="">
                        <form action="{{ route('admin.members.update', ['member' => $member]) }}" method="post"
                            enctype="multipart/form-data" class="mt-3" id="main-form">

                            {{-- HTTP PUT METHOD --}}
                            @method('PUT')
                            {{-- cross site request forgery --}}
                            @csrf

                            {{-- Top row: left (name/position) + right (image/preview) --}}
                            <div class="row mt-3">
                                {{-- Name / Position --}}
                                <div class="col-lg-6">
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-body">
                                            {{-- Name --}}
                                            <div class="mb-3">
                                                <x-form-label field="name"></x-form-label>
                                                <input type="text" id="name" name="name"
                                                    value="{{ old('name') ?? $member->name }}" class="form-control"
                                                    autofocus>
                                                <x-validation-error field="name"></x-validation-error>
                                            </div>
                                            {{-- Position --}}
                                            <div class="mb-0">
                                                <x-form-label field="position"></x-form-label>
                                                <input type="text" id="position" name="position"
                                                    value="{{ old('position') ?? $member->position }}" class="form-control">
                                                <x-validation-error field="position"></x-validation-error>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Image / Preview --}}
                                <div class="col-lg-6">
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-body">
                                            {{-- Image Live preview --}}
                                            <div class="border-1 mb-3 rounded p-1">
                                                <x-form-label field="image"></x-form-label>
                                                <img class="d-lg-block rounded border-0" name="image" id="preview"
                                                    style="width:120px;height:120px;object-fit:cover;"
                                                    src="{{ old('image') ? asset('assets-front/img/' . old('image')) : asset('assets-front/img/' . $member->image) }}"
                                                    alt="">
                                            </div>
                                            {{-- Image Input --}}
                                            <div class="mb-3">
                                                <input type="file" id="imageInput" name="image" class="form-control"
                                                    accept="image/*">
                                                <x-validation-error field="image"></x-validation-error>
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
                                                <x-form-label field="facebook"></x-form-label>
                                                <input type="text" id="facebook" name="facebook"
                                                    value="{{ old('facebook') ?? $member->facebook }}" class="form-control">
                                                <x-validation-error field="facebook"></x-validation-error>
                                            </div>
                                            {{-- twitter --}}
                                            <div class="mb-3">
                                                <x-form-label field="twitter"></x-form-label>
                                                <input type="text" id="twitter" name="twitter"
                                                    value="{{ old('twitter') ?? $member->twitter }}" class="form-control">
                                                <x-validation-error field="twitter"></x-validation-error>
                                            </div>
                                            {{-- linkedin --}}
                                            <div class="mb-0">
                                                <x-form-label field="linkedin"></x-form-label>
                                                <input type="text" id="linkedin" name="linkedin"
                                                    value="{{ old('linkedin') ?? $member->linkedin }}" class="form-control">
                                                <x-validation-error field="linkedin"></x-validation-error>
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
                        {{-- update button --}}
                        <x-button.update></x-button.update>
                        {{-- back button --}}
                        <x-button.back></x-button.back>
                    </x-slot:actions>
                </x-page-navigation-footer>

            </div>
        </div>
    </div>
@endsection
