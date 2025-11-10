@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.feature_create'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="{{ __('keywords.add_new_feature') }}"

                    btnCaption="{{ __('keywords.back') }}"
                    btnColor="outline-danger"
                    btnHref="{{ route('admin.features.index') }}">
                </x-page-navigation-header>


                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.features.store') }}" method="post">
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
                            {{-- button --}}
                            <div>
                                <button class="btn btn-primary" type="submit">{{ __('keywords.save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection
