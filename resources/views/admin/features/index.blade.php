@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.features'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header headerTitle="{{ __('keywords.features') }}"
                    btnCaption="{{ __('keywords.add_new_feature') }}" btnColor="primary"
                    btnHref="{{ route('admin.features.create') }}">
                </x-page-navigation-header>

                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">

                        {{-- success message alert --}}
                        <x-success-alert />

                        {{-- services table --}}
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
                                @if (count($features) > 0)
                                    @foreach ($features as $feature)
                                        <tr>
                                            <td>{{ $features->firstItem() + $loop->index }}</td>
                                            <td>{{ $feature->title }}</td>
                                            <td><i class="fe {{ $feature->icon }} fe-2x"></i></td>
                                            <td>

                                                {{-- edit button --}}
                                                <x-action-button type="edit"
                                                    href="{{ route('admin.features.edit', ['feature' => $feature]) }}">
                                                </x-action-button>

                                                {{-- show button --}}
                                                <x-action-button type="show"
                                                    href="{{ route('admin.features.show', ['feature' => $feature]) }}">
                                                </x-action-button>

                                                {{-- delete button --}}
                                                <x-action-button type="delete"
                                                    href="{{ route('admin.features.destroy', ['feature' => $feature]) }}"
                                                    scriptId="{{ $feature->id }}">
                                                </x-action-button>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <x-empty-alert />
                                @endif

                            </tbody>
                        </table>

                        {{-- pagination links --}}
                        {{ $features->links() }}
                        {{-- {{ $features->render('pagination::bootstrap-4') }} --}}
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->




    @endsection
