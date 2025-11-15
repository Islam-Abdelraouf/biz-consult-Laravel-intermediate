@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.edit_company'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="{{ __('keywords.edit_company') }}">
                    <x-slot:actions>
                    </x-slot:actions>
                </x-page-navigation-header>

                {{-- form card --}}
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.companies.update', ['company' => $company]) }}" method="post"
                            id="main-form" enctype="multipart/form-data">

                            {{-- HTTP PUT METHOD --}}
                            @method('PUT')
                            {{-- cross site request forgery --}}
                            @csrf

                            <div class="row">
                                {{-- Image / Preview --}}
                                <div class="form-group col-lg-6">
                                    {{-- Image Live preview --}}
                                    <div class="border-1 mb-1 mt-3 rounded p-1">
                                        <x-form-label field="image" />
                                        <img class="d-lg-block rounded border-0" name="image" id="preview"
                                            style="width:120px;height:120px;object-fit:cover;"
                                            src="{{ old('image') ? asset('assets-front/img/' . old('image')) : asset('assets-front/img/' . $company->image) }}"
                                            alt="">
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
                        {{-- update button --}}
                        <x-button.update></x-button.update>
                        {{-- back button --}}
                        <x-button.back></x-button.back>
                    </x-slot:actions>
                </x-page-navigation-footer>

            </div>

        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
