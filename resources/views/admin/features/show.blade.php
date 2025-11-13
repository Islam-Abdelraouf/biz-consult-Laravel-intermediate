@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.show_feature'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="<i class='fe fe-bookmark fe-32 mr-3'></i>{{ __('keywords.show_feature') }}">
                    <x-slot:actions>
                    </x-slot:actions>
                </x-page-navigation-header>

                <!-- main card -->
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
                                    <p class="my-0 ml-2 py-0">{{ $feature->icon }}</p>
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

                {{-- page navigation foot --}}
                <x-page-navigation-footer>
                    <x-slot:actions>
                        {{-- edit button --}}
                        <x-button.edit
                            myHref="{{ route('admin.features.edit', ['feature' => $feature]) }}">
                        </x-button.edit>
                        {{-- back button --}}
                        <x-button.back></x-button.back>
                    </x-slot:actions>
                </x-page-navigation-footer>

            </div>
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
