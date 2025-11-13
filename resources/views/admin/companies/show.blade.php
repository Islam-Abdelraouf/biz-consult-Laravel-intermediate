@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.show_company'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="{{ __('keywords.show_company') }}">
                    <x-slot:actions>
                    </x-slot:actions>
                </x-page-navigation-header>

                <!-- main card -->
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">

                            <div class="form-group col-md-6 mb-2 pb-3">
                            </div>
                            {{-- image --}}
                            <div class="form-group col-md-4 mb-2 pb-3">
                                <x-form-label field="image"></x-form-label>
                                <div>
                                    <img img class="rounded p-0" name="image"
                                        style="width:120px;height:120px;object-fit:cover;"
                                        src="{{ asset('assets-front/img/' . $company->image) }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-2 pb-3">

                                {{-- created at --}}
                                <label for="name">{{ __('keywords.name') }}</label>
                                <p class="form-control">{{ $company->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- page navigation foot --}}
                <x-page-navigation-footer>
                    <x-slot:actions>
                        {{-- edit button --}}
                        <x-button.edit myHref="{{ route('admin.companies.edit', ['company' => $company]) }}">
                        </x-button.edit>
                        {{-- back button --}}
                        <x-button.back></x-button.back>
                    </x-slot:actions>
                </x-page-navigation-footer>

            </div>
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
