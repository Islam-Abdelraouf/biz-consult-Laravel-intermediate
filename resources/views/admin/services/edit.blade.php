@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.service_create'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                {{-- head container --}}
                <div class="card mb-3 shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center rounded bg-white">
                            {{-- page title --}}
                            <h2 class="h5">{{ __('keywords.edit_service') }}</h2>
                            {{-- back button --}}
                            <div>
                                <a class="btn btn btn-outline-warning"
                                    href="{{ route('admin.services.index') }}">{{ __('keywords.back') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.services.update', ['service' => $service]) }}" method="post">

                            {{-- HTTP PUT METHOD --}}
                            @method('PUT')
                            {{-- cross site request forgery --}}
                            @csrf

                            <div class="row">
                                {{-- title --}}
                                <div class="form-group col-md-6 mb-3">
                                    <label for="title">{{ __('keywords.title') }}</label>
                                    <input type="text" id="title" name="title"
                                        value="{{ old('title') ?? $service->title }}" class="form-control" autofocus>
                                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                </div>
                                {{-- icon --}}
                                <div class="form-group col-md-6 mb-3">
                                    <label for="icon">{{ __('keywords.icon') }}</label>
                                    <input type="text" id="icon" name="icon"
                                        value="{{ old('icon') ?? $service->icon }}" class="form-control">
                                    <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                                </div>
                                {{-- description --}}
                                <div class="form-group col-md-12 mb-3">
                                    <label for="description">{{ __('keywords.description') }}</label>
                                    <textarea id="description" name="description" class="form-control">{{ old('description') ?? $service->description }}</textarea>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>
                            </div>
                            {{-- update button --}}
                            <div>
                                <button class="btn btn-primary self" type="submit">{{ __('keywords.update') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection
