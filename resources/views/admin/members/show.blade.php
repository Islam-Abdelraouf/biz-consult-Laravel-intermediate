@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.show_member'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="<i class='fe fe-smile fe-32 mr-3'></i>{{ __('keywords.show_member') }}">
                    <x-slot:actions>
                    </x-slot:actions>
                </x-page-navigation-header>

                {{-- main card --}}
                <div>
                    <div>
                        {{-- Top Row (2 Cards) --}}
                        <div class="row g-3">
                            {{-- Left Card --}}
                            <div class="col-lg-6">
                                <div class="card h-100 shadow-sm">
                                    <div class="card-body">
                                        <div>
                                            {{-- name --}}
                                            <label for="name">{{ __('keywords.name') }}</label>
                                            <p class="form-control">{{ $member->name }}</p>
                                        </div>
                                        <div>
                                            {{-- position --}}
                                            <label for="position">{{ __('keywords.position') }}</label>
                                            <p class="form-control">{{ $member->position }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Right Card --}}
                            <div class="col-lg-6">
                                <div class="card h-100 shadow-sm">
                                    <div class="card-body">
                                        <x-form-label field="image"></x-form-label>
                                        <div>
                                            <img img class="rounded p-0" name="image"
                                                style="width:120px;height:120px;object-fit:cover;"
                                                src="{{ asset('assets-front/img/' . $member->image) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Full-Width Card --}}
                        <div class="row g-3 mt-3">
                            <div class="col-12">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="form-group col-md-6 mb-2">
                                            {{-- facebook --}}
                                            <label for="facebook">{{ __('keywords.facebook') }}</label>
                                            <p class="form-control">{{ $member->facebook }}</p>
                                        </div>
                                        <div class="form-group col-md-6 mb-2">
                                            {{-- twitter --}}
                                            <label for="twitter">{{ __('keywords.twitter') }}</label>
                                            <p class="form-control">{{ $member->twitter }}</p>
                                        </div>
                                        <div class="form-group col-md-6 mb-2">
                                            {{-- linkedin --}}
                                            <label for="linkedin">{{ __('keywords.linkedin') }}</label>
                                            <p class="form-control">{{ $member->linkedin }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- page navigation foot --}}
                <x-page-navigation-footer>
                    <x-slot:actions>
                        {{-- edit button --}}
                        <x-button.edit
                            myHref="{{ route('admin.members.edit', ['member' => $member]) }}">
                        </x-button.edit>
                        {{-- back button --}}
                        <x-button.back></x-button.back>
                    </x-slot:actions>
                </x-page-navigation-footer>

            </div>
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
