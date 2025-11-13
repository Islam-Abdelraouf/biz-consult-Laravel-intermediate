@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.create_service'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="<i class='fe fe-codesandbox fe-32 mr-3'></i>{{ __('keywords.create_service') }}">
                    <x-slot:actions>
                    </x-slot:actions>
                </x-page-navigation-header>

                <!-- form card -->
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.services.store') }}" method="post" id="main-form">
                            @csrf
                            {{-- title --}}
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <x-form-label field="title"></x-form-label>
                                    <input type="text" id="title" name="title" class="form-control" autofocus>
                                    <x-validation-error field="title"></x-validation-error>
                                </div>
                                {{-- icon --}}
                                <div class="form-group col-md-6 mb-3">
                                    <x-form-label field="icon"></x-form-label>
                                    <input type="text" id="icon" name="icon" class="form-control">
                                    <x-validation-error field="icon"></x-validation-error>
                                </div>
                                {{-- description --}}
                                <div class="form-group col-md-12 mb-3">
                                    <x-form-label field="description"></x-form-label>
                                    <textarea id="description" name="description" class="form-control"></textarea>
                                    <x-validation-error field="description"></x-validation-error>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- page navigation foot --}}
                <x-page-navigation-footer>
                    <x-slot:actions>
                        {{-- save button --}}
                        <x-button.save></x-button.save>
                        {{-- back button --}}
                        <x-button.back></x-button.back>
                    </x-slot:actions>
                </x-page-navigation-footer>

            </div>
        </div>
    </div> <!-- .container-fluid -->
@endsection
