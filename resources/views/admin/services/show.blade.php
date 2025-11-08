@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.service_create'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header 
                    headerTitle="{{ __('keywords.show_service') }}"

                    btnCaption="{{ __('keywords.back') }}" 
                    btnColor="outline-danger"
                    btnHref="{{ route('admin.services.index') }}">
                </x-page-navigation-header>


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
                                    <i class="fe {{ $service->icon }} fe-2x"></i>
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
