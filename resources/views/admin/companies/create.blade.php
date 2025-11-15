@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.create_company'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header headerTitle="{{ __('keywords.create_company') }}">
                    <x-slot:actions>
                    </x-slot:actions>
                </x-page-navigation-header>

                <!-- form card -->
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.companies.store') }}" method="post" enctype="multipart/form-data"
                            id="main-form">
                            @csrf
                            {{-- name --}}
                            <div class="row">
                                {{-- Image / Preview --}}
                                <div class="col-lg-6 form-group">
                                    {{-- Image Live preview --}}
                                    <div class="border-1 mb-1 mt-3 rounded p-1">
                                        <x-form-label field="image" />
                                        <img class="d-lg-block rounded border-0" name="image" id="preview"
                                            style="width:120px;height:120px;object-fit:cover;">
                                    </div>
                                    {{-- Image Input --}}
                                    <div class="mb-3">
                                        <input type="file" id="imageInput" name="image" class="form-control"
                                            accept=".png">
                                        <x-validation-error field="image" />
                                    </div>
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
