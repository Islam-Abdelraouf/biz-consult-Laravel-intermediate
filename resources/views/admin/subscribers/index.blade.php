@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.subscribers'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header
                    headerTitle="{{ __('keywords.subscribers') }}">
                    <x-slot:actions>
                    </x-slot:actions>
                </x-page-navigation-header>

                {{-- main card --}}
                <div class="card shadow">
                    <div class="card-body">

                        {{-- success message alert --}}
                        <x-success-alert></x-success-alert>

                        {{-- table card --}}
                        <table class="table-hover table">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.email') }}</th>
                                    <th>{{ __('keywords.subscribed_at') }}</th>
                                    <th width="20%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($subscribers) > 0)
                                    @foreach ($subscribers as $subscriber)
                                        <tr>
                                            <td>{{ $subscribers->firstItem() + $loop->index }}</td>
                                            <td>{{ $subscriber->email }}</td>
                                            <td>{{ $subscriber->created_at }}</td>
                                            <td>
                                                <div class="d-inline">
                                                    {{-- show button --}}
                                                    <x-button.action type="show"
                                                        href="{{ route('admin.subscribers.show', ['subscriber' => $subscriber]) }}">
                                                    </x-button.action>
                                                    {{-- delete button --}}
                                                    <x-button.action type="delete"
                                                        href="{{ route('admin.subscribers.destroy', ['subscriber' => $subscriber]) }}"
                                                        formId="{{ $subscriber->id }}">
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
                        {{ $subscribers->links() }}
                        {{-- {{ $subscribers->render('pagination::bootstrap-4') }} --}}
                    </div>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
