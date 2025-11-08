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
                                    <label for="title">{{ __('keywords.title') }}</label>
                                    <input type="text" id="title" name="title" class="form-control" autofocus>
                                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                </div>
                                {{-- icon --}}
                                <div class="form-group col-md-6 mb-3">
                                    <label for="icon">{{ __('keywords.icon') }}</label>
                                    <input type="text" id="icon" name="icon" class="form-control">
                                    <x-input-error :messages="$errors->get('icon')" class="mt-2" />
                                </div>
                                {{-- description --}}
                                <div class="form-group col-md-12 mb-3">
                                    <label for="description">{{ __('keywords.description') }}</label>
                                    <textarea id="description" name="description" class="form-control"></textarea>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
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
