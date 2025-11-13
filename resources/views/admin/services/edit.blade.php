@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.edit_service'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header headerTitle="<i class='fe fe-codesandbox fe-32 mr-3'></i>{{ __('keywords.edit_service') }}">
                    <x-slot:actions>
                    </x-slot:actions>
                </x-page-navigation-header>

                {{-- form card --}}
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.services.update', ['service' => $service]) }}" method="post"
                            id="main-form">

                            {{-- HTTP PUT METHOD --}}
                            @method('PUT')
                            {{-- cross site request forgery --}}
                            @csrf

                            <div class="row">
                                {{-- title --}}
                                <div class="form-group col-md-6 mb-3">
                                    <x-form-label field="title"></x-form-label>
                                    <input type="text" id="title" name="title"
                                        value="{{ old('title') ?? $service->title }}" class="form-control" autofocus>
                                    <x-validation-error field="title"></x-validation-error>
                                </div>
                                {{-- icon --}}
                                <div class="form-group col-md-6 mb-3">
                                    <x-form-label field="icon"></x-form-label>
                                    <input type="text" id="icon" name="icon"
                                        value="{{ old('icon') ?? $service->icon }}" class="form-control">
                                    <x-validation-error field="icon"></x-validation-error>
                                </div>
                                {{-- description --}}
                                <div class="form-group col-md-12 mb-3">
                                    <x-form-label field="description"></x-form-label>
                                    <textarea id="description" name="description" class="form-control">{{ old('description') ?? $service->description }}</textarea>
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
            </div>
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
