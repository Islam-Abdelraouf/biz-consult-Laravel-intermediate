@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.companies'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="{{ __('keywords.companies') }}">
                    <x-slot:actions>
                        {{-- create button --}}
                        <x-button.create myHref="{{ route('admin.companies.create') }}"
                            myCaption="{{ __('keywords.create_company') }}">
                        </x-button.create>
                    </x-slot:actions>
                </x-page-navigation-header>

                <!-- {{-- main card --}} -->
                <div class="card shadow">
                    <div class="card-body">

                        {{-- success message alert --}}
                        <x-success-alert></x-success-alert>

                        {{-- table card --}}
                        <table class="table-hover table">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.image') }}</th>
                                    <th width="25%">{{ __('keywords.created_at') }}</th>
                                    <th width="25%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($companies) > 0)
                                    @foreach ($companies as $company)
                                        <tr>
                                            <td>{{ $companies->firstItem() + $loop->index }}</td>
                                            <td>
                                                <img style="width:100px;height:100px;object-fit:cover;"
                                                    src="{{ asset('assets-front/img/' . $company->image) }}"
                                                    alt="{{ $company->image }}">
                                            </td>
                                            <td>{{ $company->created_at }}</td>
                                            <td>
                                                <div class="d-inline">
                                                    {{-- show button --}}
                                                    <x-button.action type="show"
                                                        href="{{ route('admin.companies.show', ['company' => $company]) }}">
                                                    </x-button.action>
                                                    {{-- edit button --}}
                                                    <x-button.action type="edit"
                                                        href="{{ route('admin.companies.edit', ['company' => $company]) }}">
                                                    </x-button.action>
                                                    {{-- delete button --}}
                                                    <x-button.action type="delete"
                                                        href="{{ route('admin.companies.destroy', ['company' => $company]) }}"
                                                        formId="{{ $company->id }}">
                                                    </x-button.action>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    {{-- zero record alert --}}
                                    <x-empty-alert></x-empty-alert>
                                @endif
                            </tbody>
                        </table>

                        {{-- pagination links --}}
                        {{ $companies->links() }}
                        {{-- {{ $companies->render('pagination::bootstrap-4') }} --}}
                    </div>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
