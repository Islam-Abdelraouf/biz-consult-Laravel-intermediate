@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.services'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="{{ __('keywords.services') }}">
                    <x-slot:actions>
                        {{-- create button --}}
                        <x-button.create myHref="{{ route('admin.services.create') }}"
                            myCaption="{{ __('keywords.create_service') }}">
                        </x-button.create>
                    </x-slot:actions>
                </x-page-navigation-header>

                <!-- main card -->
                <div class="card shadow">
                    <div class="card-body">

                        {{-- success message alert --}}
                        <x-success-alert></x-success-alert>

                        {{-- table card --}}
                        <table class="table-hover table">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.title') }}</th>
                                    <th width="10%">{{ __('keywords.icon') }}</th>
                                    <th width="25%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($services) > 0)
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>{{ $services->firstItem() + $loop->index }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td><i class="fa {{ $service->icon }} fa-2x"></i></td>
                                            <td>
                                                <div class="d-inline">
                                                    {{-- show button --}}
                                                    <x-button.action type="show"
                                                        href="{{ route('admin.services.show', ['service' => $service]) }}">
                                                    </x-button.action>

                                                    {{-- edit button --}}
                                                    <x-button.action type="edit"
                                                        href="{{ route('admin.services.edit', ['service' => $service]) }}">
                                                    </x-button.action>


                                                    {{-- delete button --}}
                                                    <x-button.action type="delete"
                                                        href="{{ route('admin.services.destroy', ['service' => $service]) }}"
                                                        formId="{{ $service->id }}">
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
                        {{ $services->links() }}
                        {{-- {{ $services->render('pagination::bootstrap-4') }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .container-fluid -->
@endsection
