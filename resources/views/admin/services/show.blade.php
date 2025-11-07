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
                            <h2 class="h5">{{ __('keywords.show_service') }}</h2>
                            {{-- back button --}}
                            <div>
                                <a class="btn btn btn-outline-warning" href="{{ route('admin.services.index') }}">{{ __('keywords.back') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">

                            {{-- title --}}
                            <div class="form-group col-md-6 mb-3">
                                <label for="title">{{ __('keywords.title') }}</label>
                                <p class="form-control">{{ $service->title }}</p>
                            </div>
                            {{-- icon --}}
                            <div class="form-group col-md-6 mb-3">
                                <label for="icon">{{ __('keywords.icon') }}</label>
                                <div>
                                    <i class="{{ $service->icon }}"></i>
                                </div>
                            </div>
                            {{-- description --}}
                            <div class="form-group col-md-12 mb-3">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <p class="form-control">{{ $service->description }}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection
