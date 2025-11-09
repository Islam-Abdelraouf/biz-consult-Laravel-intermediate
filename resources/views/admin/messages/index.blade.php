@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.messages'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header 
                    headerTitle="{{ __('keywords.messages') }}"
                    {{-- btnCaption="{{ __('keywords.add_new_message') }}" btnColor="primary"
                    btnHref="{{ route('admin.messages.create') }}" --}}
                    >
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
                                    <th>{{ __('keywords.name') }}</th>
                                    <th width="15%">{{ __('keywords.email') }}</th>
                                    <th width="25%">{{ __('keywords.subject') }}</th>
                                    <th width="20%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($messages) > 0)
                                    @foreach ($messages as $message)
                                        <tr>
                                            <td>{{ $messages->firstItem() + $loop->index }}</td>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->email }}</td>
                                            <td>{{ $message->subject }}</td>
                                            <td>

                                                {{-- edit button --}}
                                                {{-- <x-action-button type="edit"
                                                    href="{{ route('admin.messages.edit', ['message' => $message]) }}">
                                                </x-action-button> --}}

                                                {{-- show button --}}
                                                <x-action-button type="show"
                                                    href="{{ route('admin.messages.show', ['message' => $message]) }}">
                                                </x-action-button>

                                                {{-- delete button --}}
                                                <x-action-button type="delete"
                                                    href="{{ route('admin.messages.destroy', ['message' => $message]) }}"
                                                    scriptId="{{ $message->id }}">
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
                        {{ $messages->links() }}
                        {{-- {{ $messages->render('pagination::bootstrap-4') }} --}}
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->




    @endsection
