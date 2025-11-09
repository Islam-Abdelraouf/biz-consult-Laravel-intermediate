@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.subscribers'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header headerTitle="{{ __('keywords.subscribers') }}" {{-- btnCaption="{{ __('keywords.add_new_subscriber') }}" btnColor="primary"
                    btnHref="{{ route('admin.subscribers.create') }}" --}}>
                </x-page-navigation-header>

                <!-- simple table -->
                <div class="card shadow">
                    <div class="card-body">

                        {{-- success subscriber alert --}}
                        <x-success-alert />

                        {{-- services table --}}
                        <table class="table-hover table">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.email') }}</th>
                                    <th width="20%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($subscribers) > 0)
                                    @foreach ($subscribers as $subscriber)
                                        <tr>
                                            <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                                            <td>{{ $subscriber->email }}</td>
                                            <td>

                                                {{-- edit button --}}
                                                {{-- <x-action-button type="edit"
                                                    href="{{ route('admin.subscribers.edit', ['subscriber' => $subscriber]) }}">
                                                </x-action-button> --}}

                                                {{-- show button --}}
                                                {{-- <x-action-button type="show"
                                                    href="{{ route('admin.subscribers.show', ['subscriber' => $subscriber]) }}">
                                                </x-action-button> --}}

                                                {{-- delete button --}}
                                                <x-action-button type="delete"
                                                    href="{{ route('admin.subscribers.destroy', ['subscriber' => $subscriber]) }}"
                                                    scriptId="{{ $subscriber->id }}">
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
                        {{ $subscribers->links() }}
                        {{-- {{ $subscribers->render('pagination::bootstrap-4') }} --}}
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->




    @endsection
