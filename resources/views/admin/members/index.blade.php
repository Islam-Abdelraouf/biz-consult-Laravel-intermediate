@extends('admin.master')

{{-- update title --}}
@section('title', __('keywords.members'))

{{-- content --}}
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">

                {{-- page navigation head --}}
                <x-page-navigation-header headerTitle="{{ __('keywords.members') }}">
                    <x-slot:actions>
                        {{-- create button --}}
                        <x-button.create myHref="{{ route('admin.members.create') }}"
                            myCaption="{{ __('keywords.create_member') }}">
                        </x-button.create>
                    </x-slot:actions>
                </x-page-navigation-header>

                <!-- main card -->
                <div class="card shadow">
                    <div class="card-body">

                        {{-- success alert --}}
                        <x-success-alert></x-success-alert>

                        {{-- table card --}}
                        <table class="table-hover table">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="5%">#</th>
                                    <th>{{ __('keywords.name') }}</th>
                                    <th width="15%">{{ __('keywords.position') }}</th>
                                    <th width="25%">{{ __('keywords.image') }}</th>
                                    <th width="20%">{{ __('keywords.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($members) > 0)
                                    @foreach ($members as $member)
                                        <tr>
                                            <td>{{ $members->firstItem() + $loop->index }}</td>
                                            <td>{{ $member->name }}</td>
                                            <td>{{ $member->position }}</td>
                                            <td>
                                                <img style="width:100px;height:100px;object-fit:cover;"
                                                    src="{{ asset('assets-front/img/' . $member->image) }}"
                                                    alt="{{ $member->image }}">
                                            </td>
                                            <td>
                                                <div class="d-inline">
                                                    {{-- show button --}}
                                                    <x-button.action type="show"
                                                        href="{{ route('admin.members.show', ['member' => $member]) }}">
                                                    </x-button.action>
                                                    {{-- edit button --}}
                                                    <x-button.action type="edit"
                                                        href="{{ route('admin.members.edit', ['member' => $member]) }}">
                                                    </x-button.action>
                                                    {{-- delete button --}}
                                                    <x-button.action type="delete"
                                                        href="{{ route('admin.members.destroy', ['member' => $member]) }}"
                                                        formId="{{ $member->id }}">
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
                        {{ $members->links() }}
                    </div>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
