@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.features'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="{{ __('keywords.features') }}">
                    <x-slot:actions>
                        {{-- create button --}}
                        <x-button.create myHref="{{ route('admin.features.create') }}"
                            myCaption="{{ __('keywords.create_feature') }}">
                        </x-button.create>
                    </x-slot:actions>
                </x-page-navigation-header>

                <!-- main card -->
                <div class="card shadow">
                    <div class="card-body">

                        {{-- success message alert --}}
                        <x-success-alert></x-success-alert>

                        <!-- table card -->
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.title') }}</th>
                                    <th width="10%">{{ __('keywords.icon') }}</th>
                                    <th width="25%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($features) > 0)
                                    @foreach ($features as $feature)
                                        <tr>
                                            <td>{{ $features->firstItem() + $loop->index }}</td>
                                            <td>{{ $feature->title }}</td>
                                            <td><i class="fe {{ $feature->icon }} fe-2x"></i></td>
                                            <td>
                                                <div class="d-inline">
                                                    {{-- show button --}}
                                                    <x-button.action type="show"
                                                        href="{{ route('admin.features.show', ['feature' => $feature]) }}">
                                                    </x-button.action>
                                                    {{-- edit button --}}
                                                    <x-button.action type="edit"
                                                        href="{{ route('admin.features.edit', ['feature' => $feature]) }}">
                                                    </x-button.action>
                                                    {{-- delete button --}}
                                                    <x-button.action type="delete"
                                                        href="{{ route('admin.features.destroy', ['feature' => $feature]) }}"
                                                        formId="{{ $feature->id }}">
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
                        {{ $features->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .container-fluid -->
@endsection
