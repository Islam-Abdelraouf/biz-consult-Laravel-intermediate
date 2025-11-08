@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.feature_create'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header headerTitle="{{ __('keywords.show_feature') }}"
                    btnCaption="{{ __('keywords.back') }}" btnColor="outline-danger"
                    btnHref="{{ route('admin.features.index') }}">
                </x-page-navigation-header>


                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">

                            {{-- title --}}
                            <div class="form-group col-md-6 mb-3">
                                <label for="title">{{ __('keywords.title') }}</label>
                                <p class="form-control">{{ $feature->title }}</p>
                            </div>
                            {{-- icon --}}
                            <div class="form-group col-md-6 mb-3">
                                <label for="icon">{{ __('keywords.icon') }}</label>
                                <div class="d-flex justify-content-start align-items-center">
                                    <i class="fe {{ $feature->icon }} fe-2x"></i>
                                    <p class="ml-2 my-0 py-0">{{ $feature->icon }}</p>
                                </div>
                            </div>
                            {{-- description --}}
                            <div class="form-group col-md-12 mb-3">
                                <label for="description">{{ __('keywords.description') }}</label>
                                <p class="form-control">{{ $feature->description }}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection
