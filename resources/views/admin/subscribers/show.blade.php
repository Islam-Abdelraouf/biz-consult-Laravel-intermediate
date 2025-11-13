@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.show_subscriber'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="{{ __('keywords.show_subscriber') }}">
                    <x-slot:actions>
                    </x-slot:actions>
                </x-page-navigation-header>

                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                {{-- email --}}
                                <div class="form-group col-md-12 mb-3">
                                    <label for="email">{{ __('keywords.email') }}</label>
                                    <p class="form-control">{{ $subscriber->email }}</p>
                                </div>
                            </div>
                            <div class="col-6">
                                {{-- email --}}
                                <div class="form-group col-md-12 mb-3">
                                    <label for="email">{{ __('keywords.subscribed_at') }}</label>
                                    <p class="form-control">{{ $subscriber->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- page navigation foot --}}                
                <x-page-navigation-footer>
                    <x-slot:actions>
                        {{-- back button --}}
                        <x-button.back></x-button.back>
                    </x-slot:actions>
                </x-page-navigation-footer>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection
