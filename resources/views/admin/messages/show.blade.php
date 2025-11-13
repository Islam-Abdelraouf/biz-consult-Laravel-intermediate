@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.show_message'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="<i class='fe fe-mail fe-32 mr-3'></i>{{ __('keywords.show_message') }}">
                    <x-slot:actions>
                    </x-slot:actions>
                </x-page-navigation-header>

                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">

                            {{-- name --}}
                            <div class="form-group col-md-6 mb-3">
                                <label for="name">{{ __('keywords.name') }}</label>
                                <p class="form-control">{{ $message->name }}</p>
                            </div>
                            {{-- email --}}
                            <div class="form-group col-md-6 mb-3">
                                <label for="email">{{ __('keywords.email') }}</label>
                                <p class="form-control">{{ $message->email }}</p>
                            </div>
                            {{-- subject --}}
                            <div class="form-group col-md-12 mb-3">
                                <label for="icon">{{ __('keywords.subject') }}</label>
                                <p class="form-control">{{ $message->subject }}</p>
                            </div>
                            {{-- message --}}
                            <div class="form-group col-md-12 mb-3">
                                <label for="description">{{ __('keywords.message') }}</label>
                                <div>
                                    <textarea class="form-control bg-white" rows="6" disabled>{{ $message->message }}</textarea>
                                </div>
                                {{-- <p class="form-control">{{ $message->message }}</p> --}}
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
            </div>
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
